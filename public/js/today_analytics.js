
var todayAnalytics = {};
todayAnalytics.salesTrendChart = null;
todayAnalytics.pumpSalesChart = null;
todayAnalytics.xhr = null;
todayAnalytics.requestInFlight = false;

function getTodayAnalytics(authorization, stationId)
{
    var selector = "#today";

    todayAnalytics.xhr = $.ajax({

        method: 'GET',
        headers: {
            'Authorization': authorization,
            'Content-Type': "application/json",
        },
        url: analytics.baseUrl+'sales/today/' + stationId,
        beforeSend: function() {

            // Abort previous request in flight if any
            if (todayAnalytics.requestInFlight == true)
            {
                // Abort previous request assigned to this variable(todayAnalytics.xhr)
                todayAnalytics.xhr.abort();
            }

            // Destroy previous drawn charts if any

            if (todayAnalytics.pumpSalesChart != null)
            {
                helpersDestroyChart(todayAnalytics.pumpSalesChart);
            }

            if (todayAnalytics.salesTrendChart != null)
            {
                helpersDestroyChart(todayAnalytics.salesTrendChart);
            }

            todayAnalytics.requestInFlight = true;

            resetAutomationText();

            // Show loading text
            helpersShowLoading(selector);
        }
    }).done(function(result) {

        todayAnalytics.requestInFlight = false;

        helpersDoneLoading(selector);


        var numPMSTransactions = 0;
        var numAGOTransactions = 0;
        var numDPKTransactions = 0;
        var pmsRevenue = 0.00;
        var agoRevenue = 0.00;
        var dpkRevenue = 0.00;
        var agoVolumeSold = 0.00;
        var dpkVolumeSold = 0.00;
        var pmsVolumeSold = 0.00;
        var avgVolumePerCustomer = 0.00;
        var avgRevenuePerCustomer = 0.00;
        var totalPumps = 0;
        var totalActivePumps = 0;
        var pumpSales = [];
        var salesByHour = [];

        // Parse result
        if (result.hasOwnProperty("data"))
        {
            var data = result.data;

            if (data.hasOwnProperty("PMS"))
            {
                numPMSTransactions = helpersToThousandsLocaleString(data.PMS.numTransactions);
                pmsRevenue = helpersToLocaleString(data.PMS.revenue);
                pmsVolumeSold = helpersToLocaleString(data.PMS.volume);
            }

            if (data.hasOwnProperty("AGO"))
            {
                numAGOTransactions = helpersToThousandsLocaleString(data.AGO.numTransactions);
                agoRevenue = helpersToLocaleString(data.AGO.revenue);
                agoVolumeSold = helpersToLocaleString(data.AGO.volume);
            }

            if (data.hasOwnProperty("DPK"))
            {
                numDPKTransactions = helpersToThousandsLocaleString(data.DPK.numTransactions);
                dpkRevenue = helpersToLocaleString(data.DPK.revenue);
                dpkVolumeSold = helpersToLocaleString(data.DPK.volume);
            }


            // Set station automation status
            var automationStatus = data.hasAutomation;
            setAutomationStatus(automationStatus);

            avgVolumePerCustomer = data.hasOwnProperty("volumePerCustomer") ?
                helpersToLocaleString(data.volumePerCustomer): avgVolumePerCustomer;

            avgRevenuePerCustomer = data.hasOwnProperty("revenuePerCustomer") ?
                helpersToLocaleString(data.revenuePerCustomer): avgRevenuePerCustomer;

            totalPumps = data.hasOwnProperty("totalPumps") ?
                data.totalPumps: totalPumps;

            totalActivePumps = data.hasOwnProperty("activePumps") ?
                data.activePumps: totalActivePumps;

            pumpSales = data.hasOwnProperty("activePumpsSale") ?
                data.activePumpsSale : pumpSales;

            salesByHour = data.hasOwnProperty("salesByHour") ?
                data.salesByHour : salesByHour;



        }

        // Update UI with values
        $("#today #pms_transactions").html(numPMSTransactions);
        $("#today #ago_transactions").html(numAGOTransactions);
        $("#today #dpk_transactions").html(numDPKTransactions);
        $("#today #pms_revenue").html(pmsRevenue);
        $("#today #ago_revenue").html(agoRevenue);
        $("#today #dpk_revenue").html(dpkRevenue);
        $("#today #pms_volume").html(pmsVolumeSold);
        $("#today #ago_volume").html(agoVolumeSold);
        $("#today #dpk_volume").html(dpkVolumeSold);
        //$("#today #first_transaction_time").html(result.data.firstTransactionTime);
        $("#today #avg_vol").html(avgVolumePerCustomer);
        $("#today #avg_val").html(avgRevenuePerCustomer)
        $("#today #num_pumps").html(totalPumps);
        $("#today #sell_pumps").html(totalActivePumps);


        // Draw charts
        var pumpSalesData = result.data.activePumpsSale;
        var pumpSalesArray = parseData(pumpSalesData);
        todayAnalytics.pumpSalesChart = drawPumpSaleChart(pumpSalesArray);


        var salesByHourData = result.data.salesByHour;
        var salesByHourArray = parseData(salesByHourData);
        todayAnalytics.salesTrendChart = drawSalesByHourChart(salesByHourArray);
    });
}

//draw pumpsales chart
function drawPumpSaleChart(pumpSalesArray)
{ 	

	var pumps = pumpSalesArray[0];
	var sales = pumpSalesArray[1];

	var canvas = $('#pump_saleChart').get(0).getContext('2d');
	//var pumpObj = result.data.activePumpsSale;
	//var res = 
	var data = {
        labels: pumps,
        datasets: [
	        {
	            label: 'Total Volume',
	            backgroundColor: '#3746AA',
	            data: sales,
	        },
        ]
    };
    
    var options = {
    	scales: {
    		yAxes: [{
    			display: true,
    			ticks: {}
    		}],
    		xAxes: [{
    			display:false,
    		}]
    	},
    	maintainAspectRatio: false
    }

    return new Chart(canvas, {
	    type: 'horizontalBar',
	    data: data,
	    options: options
	});


}

function parseData(data)
{ 

	var labels = [];
	var values = [];

	for (key in data)
	{
		if (data.hasOwnProperty(key))
		{
			labels.push(key);
			values.push(data[key]);
		}
	}
	
	return [labels, values];
}

function drawSalesByHourChart(salesByHourArray)
{	
	var labels = salesByHourArray[0];
	var values = salesByHourArray[1];

	//sales trend by hour chart
	var salesTrendChart = $('#sales_trendChart').get(0).getContext('2d');

	var data = {
        labels: labels,
        datasets: [
	        {
	            label: 'Hourly Sales',
	            data: values,
	            fill: true,
	            lineTension: 0.1,
	            backgroundColor:'#01B8AA',
	            borderColor:'rgba(75,192,192,1)',
	            borderCapstyle: 'butt',
	            borderDash: [],
	            borderDashOffset: 0.0,
	            borderJoinStyle: 'miter',
	            pointBorderColor: "rgba(75,192,192,1)",
	            pointBackgroundColor: "#ffffff",
	            pointBorderWidth: 1,
	            pointHoverRadius: 5,
	            pointHoverBackgroundColor: "rgba(75,192,192,1)",
	            pointBorderColor: 2,
	            pointRadius: 1,
	            pointHitRadius: 10,
	        },
        ]
    };

    var options = {
    	scales: {
    		yAxes: [{
    			display: true,
    			ticks: {}
    		}],
    		xAxes: [{
    			gridLines: {
			        display: false,
			        color: "black"
			    },
    		}]
    	},
    	maintainAspectRatio: false
    }

    return new Chart(salesTrendChart, {
	    type: 'line',
	    data: data,
	    options: options
	});

}

function setAutomationStatus(automationStatus)
{
    var automationText = "";

    if (automationStatus == 1)
    {
        automationText = "(STATION IS AUTOMATED)";
    }
    else
    {
        automationText = "(NO AUTOMATION AT THIS STATION)";
        $("#replenishment.collapse").collapse();
    }

    $("#automation-status").html(automationText);
}

function resetAutomationText()
{
    $("#automation-status").html("");
}






