
var tankReplenishmentAnalytics = {};
tankReplenishmentAnalytics.pmsChart = null;
tankReplenishmentAnalytics.agoChart = null;
tankReplenishmentAnalytics.dpkChart = null;
tankReplenishmentAnalytics.chartsArr = [
    tankReplenishmentAnalytics.pmsChart,
    tankReplenishmentAnalytics.agoChart,
    tankReplenishmentAnalytics.dpkChart
];
tankReplenishmentAnalytics.xhr = null;
tankReplenishmentAnalytics.requestInFlight = false;

var daysReplenishmentAnalytics = {};
daysReplenishmentAnalytics.xhr = null;
daysReplenishmentAnalytics.requestInFlight = false;


function getReplenishmentAnalytics(authorization, stationId)
{
    getTankReplenishmentAnalytics(authorization, stationId);
    getDaysReplenishmentAnalytics(authorization, stationId);
}

function getTankReplenishmentAnalytics(authorization, stationId)
{

    tankReplenishmentAnalytics.xhr  = $.ajax({

        method: 'GET',
        headers: {
            'Authorization': authorization,
            'Content-Type': "application/json"
        },

        url: analytics.baseUrl+"products/replenishment/tank/"+stationId,
        beforeSend: function() {

            // Remove already existing chart
            tankReplenishmentAnalytics.chartsArr.forEach(function(chart){
                if (chart != null)
                {
                    helpersDestroyChart(chart);
                }
            });

            if (tankReplenishmentAnalytics.requestInFlight == true)
            {
                // Abort previous request assigned to this variable(tankReplenishmentAnalytics.xhr)
                tankReplenishmentAnalytics.xhr.abort();
            }

            tankReplenishmentAnalytics.requestInFlight = true;

        }
    }).done(function(result){

        tankReplenishmentAnalytics.requestInFlight = false;

        var pmsVolumeLeft = 0.00;
        var agoVolumeLeft = 0.00;
        var dpkVolumeLeft = 0.00;
        var totalPMSTankCapacity = 0.00;
        var totalAGOTankCapacity = 0.00;
        var totalDPKTankCapacity = 0.00;


        var lastReadDate = "0000-00-00";

        if (result.hasOwnProperty("data"))
        {
            var data = result.data;

            if (helpersIsEmpty(data) == false)
            {
                if (data.hasOwnProperty("lastReadDate"))
                {
                    lastReadDate = data.lastReadDate;
                    if (lastReadDate == "0000-00-00") lastReadDate = "Today";
                }

                if (data.hasOwnProperty("PMS"))
                {
                    pmsVolumeLeft = data.PMS.volume;
                    totalPMSTankCapacity = data.PMS.tankCapacity;
                }

                if (data.hasOwnProperty("AGO"))
                {
                    agoVolumeLeft = data.AGO.volume;
                    totalAGOTankCapacity = data.AGO.tankCapacity;
                }

                if (data.hasOwnProperty("DPK"))
                {
                    dpkVolumeLeft = data.DPK.volume;
                    totalDPKTankCapacity = data.DPK.tankCapacity;
                }

            }

        }

        // Set replenishment header date

        $("#read-date").html("AS AT "+ lastReadDate);


        var replenishmentData = [
            [pmsVolumeLeft, totalPMSTankCapacity, "#pms-repl-doughnut", ["#c60269", "#F4CCE1"]],
            [agoVolumeLeft, totalAGOTankCapacity, "#ago-repl-doughnut", ["#FF7806", "#FFE4CD"]],
            [dpkVolumeLeft, totalDPKTankCapacity, "#dpk-repl-doughnut", ["#04A369", "#CDEDE1"]]
        ];

        drawReplenishmentChart(replenishmentData);

    });
}

function getDaysReplenishmentAnalytics(authorization, stationId)
{

    var selector = "#replenishment";

    daysReplenishmentAnalytics.xhr  = $.ajax({

        method: 'GET',
        headers: {
            'Authorization': authorization,
            'Content-Type': "application/json"
        },
        url: analytics.baseUrl+"products/replenishment/days/"+stationId,
        beforeSend: function() {

            resetDaysToReorder();

            // Display loading text
            helpersShowLoading(selector);

            if (daysReplenishmentAnalytics.requestInFlight == true)
            {
                // Abort previous request assigned to this variable(daysReplenishmentAnalytics.xhr)
                daysReplenishmentAnalytics.xhr.abort();
            }

            daysReplenishmentAnalytics.requestInFlight = true;
        }
    }).done(function(result){

        daysReplenishmentAnalytics.requestInFlight = false;

        var pmsDaysToReorder = "nil";
        var pmsDaysToDeadStock = "nil";
        var agoDaysToReorder = "nil";
        var agoDaysToDeadStock = "nil";
        var dpkDaysToReorder = "nil";
        var dpkDaysToDeadStock = "nil";
        var agoMTD = 0.00;
        var pmsMTD = 0.00;
        var dpkMTD = 0.00;
        var agoYTD = 0.00;
        var pmsYTD = 0.00;
        var dpkYTD = 0.00;

        if (result.hasOwnProperty("data"))
        {
            var data = result.data;

            if (helpersIsEmpty(data) == false)
            {
                if (data.hasOwnProperty("PMS"))
                {
                    pmsDaysToReorder = data.PMS.daysToReorder;
                    pmsDaysToDeadStock = data.PMS.daysToDeadStock;
                    pmsMTD = data.PMS.hasOwnProperty("volumeSoldMTD") ? data.PMS.volumeSoldMTD : pmsMTD;
                    pmsYTD = data.PMS.hasOwnProperty("volumeSoldYTD") ? data.PMS.volumeSoldYTD : pmsYTD;
                }

                if (data.hasOwnProperty("AGO"))
                {
                    agoDaysToReorder = data.AGO.daysToReorder;
                    agoDaysToDeadStock = data.AGO.daysToDeadStock;
                    agoMTD = data.AGO.hasOwnProperty("volumeSoldMTD") ? data.AGO.volumeSoldMTD : agoMTD;
                    agoYTD = data.AGO.hasOwnProperty("volumeSoldYTD") ? data.AGO.volumeSoldYTD : agoYTD;
                }

                if (data.hasOwnProperty("DPK"))
                {
                    dpkDaysToReorder = data.DPK.daysToReorder;
                    dpkDaysToDeadStock = data.DPK.daysToDeadStock;
                    dpkMTD = data.DPK.hasOwnProperty("volumeSoldMTD") ? data.DPK.volumeSoldMTD : dpkMTD;
                    dpkYTD = data.DPK.hasOwnProperty("volumeSoldYTD") ? data.DPK.volumeSoldYTD : dpkYTD;
                }
            }

        }

        helpersDoneLoading(selector);

        setDaysToReorder(pmsDaysToReorder, "#replenishment #pms-reorder", "#replenishment #pms-reorder-message");
        $("#replenishment #pms-deadstock").html(pmsDaysToDeadStock);
        $("#replenishment #pms-mtd").html(helpersToLocaleString(pmsMTD));
        $("#replenishment #pms-ytd").html(helpersToLocaleString(pmsYTD));

        setDaysToReorder(agoDaysToReorder, "#replenishment #ago-reorder", "#replenishment #ago-reorder-message");
        $("#replenishment #ago-deadstock").html(agoDaysToDeadStock);
        $("#replenishment #ago-mtd").html(helpersToLocaleString(agoMTD));
        $("#replenishment #ago-ytd").html(helpersToLocaleString(agoYTD));

        setDaysToReorder(dpkDaysToReorder, "#replenishment #dpk-reorder", "#replenishment #dpk-reorder-message");
        $("#replenishment #dpk-deadstock").html(dpkDaysToDeadStock);
        $("#replenishment #dpk-mtd").html(helpersToLocaleString(dpkMTD));
        $("#replenishment #dpk-ytd").html(helpersToLocaleString(dpkYTD));

    });
}

function drawReplenishmentChart(replenishmentData)
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

    for (var i=0; i<replenishmentData.length; i++)
    {
        var productData = replenishmentData[i];
        var productVolumeLeft = productData[0];
        var productTankCapacity = productData[1];
        var productCanvas = productData[2];
        var chartColours = productData[3];

        var canvas = $(productCanvas).get(0).getContext('2d');

        var data = {
            datasets: [
                {
                    data: [productVolumeLeft, productTankCapacity],
                    backgroundColor: chartColours,
                }
            ],
            labels: [
                'Volume left',
                'Tank capacity'
            ]
        };

        var options = {
            cutoutPercentage: 70,
            elements: {
                center: {
                    text: "Volume: "+helpersToThousandsLocaleString(productVolumeLeft),
                    color: chartColours[0], //Default black
                    fontStyle: 'Helvetica', //Default Arial
                    sidePadding: 15 //Default 20 (as a percentage)
                }
            }
        }

        tankReplenishmentAnalytics.chartsArr[i] = new Chart(canvas, {
            type: 'doughnut',
            data: data,
            options: options
        });
    }

}

function setDaysToReorder(daysToReorder, daysToReorderSelector, reorderMessageSelector)
{
    if ( daysToReorder <=2 )
    {
        $(daysToReorderSelector).addClass("red");
        $(reorderMessageSelector).removeClass("hide");
    }

    $(daysToReorderSelector).html(daysToReorder);
}

function resetDaysToReorder()
{
    // Remove previously displayed reorder message if it exist
    $(".reorder-message").addClass("hide");

    // Remove red color from reorder value
    $(".reorder-value").removeClass("red");
}




