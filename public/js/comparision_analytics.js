var salesComparisionAnalytics = {};
salesComparisionAnalytics.toleranceChart = null;
salesComparisionAnalytics.currentMonthSalesChart = null;
salesComparisionAnalytics.xhr = null;
salesComparisionAnalytics.requestInFlight = false;

var stationsRevenueAnalytics = {};
stationsRevenueAnalytics.stationRevenueChart = null;
stationsRevenueAnalytics.nigeriaSationsChart = null;
stationsRevenueAnalytics.xhr = null;
stationsRevenueAnalytics.requestInFlight = false;

function getMonthlyComparisionAnalytics(stationId, authorization)
{
    getSalesComparisionAnalytics(stationId, authorization);
    //getStationsRevenueAnalytics(stationId, authorization);
}

function getSalesComparisionAnalytics(stationId, authorization)
{
    var selector = "#monthly-comparision";

    salesComparisionAnalytics.xhr = $.ajax({

        method: 'GET',
        headers: {
            'Authorization': authorization,
            'Content-Type': "application/json"
        },
        url: analytics.baseUrl+'sales/month/' + stationId,
        beforeSend: function() {

            // Abort previous request in flight if any
            if (salesComparisionAnalytics.requestInFlight == true)
            {
                // Abort previous request assigned to this variable(salesComparisionAnalytics.xhr)
                salesComparisionAnalytics.xhr.abort();
            }

            // Destroy previous drawn charts if any
            if (salesComparisionAnalytics.toleranceChart != null)
            {
                helpersDestroyChart(salesComparisionAnalytics.toleranceChart);
            }

            if (salesComparisionAnalytics.currentMonthSalesChart != null)
            {
                helpersDestroyChart(salesComparisionAnalytics.currentMonthSalesChart);
            }

            salesComparisionAnalytics.requestInFlight = true;

            //resetAutomationText();
            helpersResetTolerance("#monthly-comparision .tolerance-status", "#monthly-comparision .tolerance-value");

            resetComparisionValues(selector);

            // Show loading text
            helpersShowLoading(selector);
        }
    }).done(function(result) {

        salesComparisionAnalytics.requestInFlightt = false;

        helpersDoneLoading(selector);

        var salesThisMonth = 0.00;
        var salesPercentMargin = 0.00;
        var revenueThisMonth = 0.00;
        var revenuePercentMargin = 0.00;
        var agoTolerance = 0.00;
        var pmsTolerance = 0.00;
        var dpkTolerance = 0.00;
        var monthlyTarget = 0.00;
        var pumpSalesPerMonth = {};
        var tankSalesPerMonth = {};


        // Parse result
        if (result.hasOwnProperty("data"))
        {
            var data = result.data;

            if (data.hasOwnProperty("salesByMonth"))
            {
                var salesByMonth = data.salesByMonth;

                if (salesByMonth.hasOwnProperty("tolerance"))
                {
                    var tolerance = salesByMonth.tolerance;

                    pmsTolerance = (tolerance.hasOwnProperty("PMS")) ? tolerance.PMS : pmsTolerance;
                    agoTolerance = (tolerance.hasOwnProperty("AGO")) ? tolerance.AGO : agoTolerance;
                    dpkTolerance = (tolerance.hasOwnProperty("DPK")) ? tolerance.DPK : dpkTolerance;
                }

                salesThisMonth = (salesByMonth.hasOwnProperty("salesThisMonth")) ? salesByMonth.salesThisMonth : salesThisMonth;
                salesPercentMargin = (salesByMonth.hasOwnProperty("salesPercentMargin")) ? salesByMonth.salesPercentMargin: salesPercentMargin;
                revenueThisMonth = (salesByMonth.hasOwnProperty("revenueThisMonth")) ? salesByMonth.revenueThisMonth : revenueThisMonth;
                revenuePercentMargin = (salesByMonth.hasOwnProperty("revenuePercentMargin")) ? salesByMonth.revenuePercentMargin: revenuePercentMargin;

                pumpSalesPerMonth = (salesByMonth.hasOwnProperty("pumpSalesPerMonth")) ? salesByMonth.pumpSalesPerMonth : pumpSalesPerMonth;
                tankSalesPerMonth = (salesByMonth.hasOwnProperty("tankSalesPerMonth")) ? salesByMonth.tankSalesPerMonth : tankSalesPerMonth;
                monthlyTarget = (salesByMonth.hasOwnProperty("monthlyTarget")) ? salesByMonth.monthlyTarget : monthlyTarget;
            }

        }

        // Update UI with values
        //$("#monthly-comparision #sales-comparision .done-loading").html(salesThisMonth);
        //$("#monthly-comparision #revenue_comparision .done-loading").html(revenueThisMonth);
        setComparisionValues("#monthly-comparision #sales-comparision", salesThisMonth, salesPercentMargin);
        setComparisionValues("#monthly-comparision #revenue-comparision", revenueThisMonth, revenuePercentMargin);
        helpersSetTolerance("#comp-pms-tolerance .tolerance-value", pmsTolerance, "#comp-pms-tolerance .tolerance-status");
        helpersSetTolerance("#comp-ago-tolerance .tolerance-value", agoTolerance, "#comp-ago-tolerance .tolerance-status");
        helpersSetTolerance("#comp-dpk-tolerance .tolerance-value", dpkTolerance, "#comp-dpk-tolerance .tolerance-status");


        // Draw charts
        var toleranceArray = parseToleranceData(pumpSalesPerMonth, tankSalesPerMonth);
        salesComparisionAnalytics.toleranceChart = drawToleranceChart(toleranceArray);

        //salesComparisionAnalytics.currentMonthSalesChart  = drawCurrentMonthSalesChart(salesThisMonth, monthlyTarget);
    });
}

function getStationsRevenueAnalytics(stationId, authorization)
{
    var selector = "#monthly-comparision";

    stationsRevenueAnalytics.xhr = $.ajax({

        method: 'GET',
        headers: {
            'Authorization': authorization,
            'Content-Type': "application/json"
        },
        url: analytics.baseUrl+'revenue',
        beforeSend: function() {

            // Abort previous request in flight if any
            if (stationsRevenueAnalytics.requestInFlight == true)
            {
                // Abort previous request assigned to this variable(salesComparisionAnalytics.xhr)
                stationsRevenueAnalytics.xhr.abort();
            }

            // Destroy previous drawn charts if any
            if (stationsRevenueAnalytics.stationRevenueChart != null)
            {
                helpersDestroyChart(stationsRevenueAnalytics.stationRevenueChart);
            }

            if (stationsRevenueAnalytics.nigeriaSationsChart != null)
            {
                helpersDestroyChart(stationsRevenueAnalytics.nigeriaSationsChart);
            }

            stationsRevenueAnalytics.requestInFlight = true;

            //resetAutomationText();

            // Show loading text
            helpersShowLoading(selector);
        }
    }).done(function(result) {

        stationsRevenueAnalytics.requestInFlightt = false;

        helpersDoneLoading(selector);

        var stationNameArr = [];
        var stationRevenueArr = [];
        var barColoursArr = [];

        // Parse result
        if (result.hasOwnProperty("data"))
        {
            var data = result.data;

            for (tempStationId in data)
            {
                var stationDetails = data[tempStationId];

                var stationName = (stationDetails.hasOwnProperty("name")) ? stationDetails.name : "";
                var stationRevenue = (stationDetails.hasOwnProperty("revenue")) ? stationDetails.revenue : 0.00;
                var stationLocation = (stationDetails.hasOwnProperty("location")) ? stationDetails.location : "";

                if (stationName == "") continue;

                stationNameArr.push(stationName+", "+stationLocation);
                stationRevenueArr.push(stationRevenue);

                if (tempStationId === stationId)
                {
                    barColours.push("#008187");
                }
                else
                {
                    barColours.push("#99CCCF");
                }
            }

        }

        // Draw charts
        stationsRevenueAnalytics.stationRevenueChart  = drawStationRevenueChart(stationNameArr, stationRevenueArr, barColoursArr);

        //salesComparisionAnalytics.currentMonthSalesChart  = drawCurrentMonthSalesChart(salesThisMonth, monthlyTarget);
    });
}

function parseToleranceData(pumpSalesPerMonth, tankSalesPerMonth)
{
    var pumpSalesArr = [];
    var tankSalesArr = [];
    var monthArr = [];
    var year = new Date().getFullYear();

    for (month in pumpSalesPerMonth)
    {
        pumpSalesArr.push(pumpSalesPerMonth[month]);
        monthArr.push(analytics.months[month]+" "+year);
    }

    for (month in tankSalesPerMonth)
    {
        tankSalesArr.push(tankSalesPerMonth[month]);
    }

    return [monthArr, pumpSalesArr, tankSalesArr];
}

function drawToleranceChart(toleranceArray)
{
    var canvas = $("#month-tolerance-canvas").get(0).getContext("2d");

    var data = {
        labels: toleranceArray[0],
        datasets: [
            {
                data: toleranceArray[1],
                label: "Volume Sold From Pumps",
                borderColor: "#01B8AA",
                fill: false,
                lineTension: 0.1,
                backgroundColor:'rgba(75, 192, 192, 0.4)',
                borderCapstyle: 'butt',
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
            {
                data: toleranceArray[2],
                label: "Tank Consumption",
                borderColor: "#01B8AA",
                fill: false,
                borderDash: [10,5],
                lineTension: 0.1,
                backgroundColor:'rgba(75, 192, 192, 0.4)',
                borderCapstyle: 'butt',
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
            }
        ]
    };

    var options = {
        maintainAspectRatio: false
    };

    return new Chart(canvas,{
            type: "line",
            data: data,
            options:options
        }
    );
}

function drawCurrentMonthSalesChart(salesThisMonth, monthlyTarget)
{
    Chart.pluginService.register({
        beforeDraw: function (chart) {
            if (chart.config.options.elements.center) {
                //Get ctx from string
                var ctx = chart.chart.ctx;

                //Get options from the center object in options
                var centerConfig = chart.config.options.elements.center;
                var fontStyle = centerConfig.fontStyle || 'Arial';
                var txt = centerConfig.text;
                var color = centerConfig.color || '#000';
                var sidePadding = centerConfig.sidePadding || 20;
                var sidePaddingCalculated = (sidePadding/100) * (chart.innerRadius * 2)
                //Start with a base font of 30px
                ctx.font = "30px " + fontStyle;

                //Get the width of the string and also the width of the element minus 10 to give it 5px side padding
                var stringWidth = ctx.measureText(txt).width;
                var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

                // Find out how much the font can grow in width.
                var widthRatio = elementWidth / stringWidth;
                var newFontSize = Math.floor(30 * widthRatio);
                var elementHeight = (chart.innerRadius * 2);

                // Pick a new font size so it will not be larger than the height of label.
                var fontSizeToUse = Math.min(newFontSize, elementHeight);

                //Set font settings to draw it correctly.
                ctx.textAlign = 'center';
                ctx.textBaseline = 'middle';
                var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
                var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
                ctx.font = fontSizeToUse+"px " + fontStyle;
                ctx.fillStyle = color;

                //Draw text in center
                ctx.fillText(txt, centerX, centerY);
            }
        }
    });

    var canvas = $("#comparision-doughnut-canvas").get(0).getContext('2d');

    var data = {
        datasets: [
            {
                data: [salesThisMonth, monthlyTarget],
                backgroundColor: ["#FF7806", "#FFE4CD"]
            }
        ],
        labels: [
            'Sales this month',
            'Monthly target'
        ]
    };

    var options = {
        cutoutPercentage: 70,
        elements: {
            center: {
                text: "Sales this month litres: "+helpersRoundOffToK(salesThisMonth),
                color: "#FF7806", //Default black
                fontStyle: 'Helvetica', //Default Arial
                sidePadding: 15 //Default 20 (as a percentage)
            }
        }
    };

    return new Chart(canvas, {
        type: 'doughnut',
        data: data,
        options: options
    });

}


function drawStationRevenueChart(labels, values, barColours)
{
    var canvas = $("#station-revenue-canvas").get(0).getContext("2d");

    var data = {
        labels: labels,
        datasets: [
            {
                backgroundColor: barColours,
                data: values
            }
        ]
    };

    var options = {
        legend: { display: false },
        scales: {
            yAxes: [{
                display: true,
                ticks: {},
                gridLines: {
                    display: false
                }
            }],
            xAxes: [{
                display:false

            }]
        },
        maintainAspectRatio: false
    };

    return new Chart(canvas,{
            type: "horizontalBar",
            data: data,
            options:options
        }
    );
}

function setComparisionValues(parentSelector, value, percentMargin)
{
    $(parentSelector+ " .done-loading").html(helpersToLocaleString(value));
    $(parentSelector+ " .percent-margin").html(helpersToLocaleString(percentMargin)+"%").removeClass("hide");

    if (percentMargin < 0)
    {
        $(parentSelector+ " .done-loading").addClass("red");
        $(parentSelector+ " .percent-margin").addClass("red");
        $(parentSelector+ " .direction-icon").html('<i class="fa fa-arrow-down" aria-hidden="true"></i>').removeClass("hide");
    }
    if (percentMargin > 0)
    {
        $(parentSelector+ " .done-loading").addClass("green");
        $(parentSelector+ " .percent-margin").addClass("green");
        $(parentSelector+ " .direction-icon").html('<i class="fa fa-arrow-up" aria-hidden="true"></i>').removeClass("hide");
    }
    else
    {
        $(parentSelector+ " .done-loading").addClass("green");
        $(parentSelector+ " .percent-margin").addClass("green");
    }
}

function resetComparisionValues(parentSelector)
{
    $(parentSelector+ " .percent-margin").addClass("hide").removeClass("red").removeClass("green").html("");
    $(parentSelector+ " .done-loading").removeClass("red").removeClass("green");
    $(parentSelector+ " .direction-icon").html("").removeClass("hide");
}
