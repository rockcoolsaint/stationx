
var yesterdaySales = {};
yesterdaySales.chart = null;
yesterdaySales.xhr = null;
yesterdaySales.requestInFlight = false;
yesterdaySales.closingStock = null;

var yesterdayClosingStock = {};
yesterdayClosingStock.xhr = null;
yesterdayClosingStock.requestInFlight = false;

function getYesterdayAnalytics(stationId, authorization)
{

    var toDatePicker = $("#to-datepicker");
    var fromDatePicker = $("#from-datepicker");

    // Select all products option by default
    $("input:radio[name='product']").filter("[value='all']").prop("checked", true);

    // Set date to yesterday by default on date picker input
    var readableYesterdayDate = helpersGetYesterdayDate(analytics.readableDate);
    fromDatePicker.val(readableYesterdayDate);
    toDatePicker.val(readableYesterdayDate);

    // Process filters

    $("#filter-button").click(function(){

        var product = $('input[name=product]:checked').val();
        var startDate = fromDatePicker.val();
        var endDate = toDatePicker.val();

        // TODO: Validate dates

        setDateInHeading(startDate, endDate);

        var apiStartDate = helpersReadableDateToApiDate(startDate);
        var apiEndDate = helpersReadableDateToApiDate(endDate);

        getYesterdaySales(stationId, authorization, apiStartDate, apiEndDate, product);

    });

    /** Display data for yesterday by default **/

    var yesterdayDate = helpersGetYesterdayDate(analytics.apiDate);

    getYesterdaySales(stationId, authorization, yesterdayDate, yesterdayDate, "all");
    getYesterdayClosingStock(stationId, authorization);
}

function getYesterdaySales(stationId, authorization, startDate, endDate, product)
{
    var selector = ".yday-sales";

    var data = {};
    data.startDate = startDate;
    data.endDate = endDate;
    data.product = product;

    yesterdaySales.xhr = $.ajax({
        method: "POST",
        headers: {
            'Authorization': authorization,
            'Content-Type': "application/json"
        },
        data: JSON.stringify(data),
        url: analytics.baseUrl+"sales/previous/"+stationId,
        beforeSend: function() {

            // Abort previous request in flight if any
            if (yesterdaySales.requestInFlight == true)
            {
                // Abort previous request assigned to this variable(yesterdayClosingStock.xhr)
                yesterdaySales.xhr.abort();
            }

            // Remove already existing chart if any
            if (yesterdaySales.chart != null)
            {
                helpersDestroyChart(yesterdaySales.chart);
            }

            helpersResetTolerance("#yday .tolerance-status", "#yday .tolerance-value");

            helpersShowLoading(selector);


            yesterdaySales.requestInFlight = true;
        }
    }).done(function(result) {

        yesterdaySales.requestInFlight = false;

        var product = null;
        var agoTolerance = 0.00;
        var pmsTolerance = 0.00;
        var dpkTolerance = 0.00;
        var totalVolumePumps = 0.00;
        var totalVolumeTanks = 0.00;
        var totalPumpsRevenue = 0.00;
        var totalTanksRevenue = 0.00;
        var toleranceEstimate = 0.00;
        var dailyTarget = 0.00;
        var volumeTaken = 0.00;

        if (result.hasOwnProperty("data"))
        {
            var data = result.data;
            if (! helpersIsEmpty(data)) {

                var tolerance = data.tolerance;

                if (tolerance.hasOwnProperty("PMS"))
                {
                    pmsTolerance = tolerance.PMS;
                }
                else
                {

                }

                if (tolerance.hasOwnProperty("AGO"))
                {
                    agoTolerance = tolerance.AGO;
                }
                else
                {

                }

                if (tolerance.hasOwnProperty("DPK"))
                {
                    dpkTolerance = tolerance.DPK;
                }
                else
                {

                }

                // Calculate other parameters
                totalVolumePumps = (data.hasOwnProperty("totalVolumePumps")) ? data.totalVolumePumps : totalVolumePumps;
                totalVolumeTanks = (data.hasOwnProperty("totalVolumeTanks")) ? data.totalVolumeTanks : totalVolumeTanks;
                totalPumpsRevenue = (data.hasOwnProperty("totalPumpsRevenue")) ? data.totalPumpsRevenue : totalPumpsRevenue;
                totalTanksRevenue = (data.hasOwnProperty("totalTanksRevenue")) ? data.totalTanksRevenue : totalTanksRevenue;
                toleranceEstimate = (data.hasOwnProperty("toleranceEstimate") && data.toleranceEstimate != null) ? data.toleranceEstimate : toleranceEstimate;
                dailyTarget = (data.hasOwnProperty("dailyTarget")) ? data.dailyTarget : dailyTarget;
                volumeTaken = (data.hasOwnProperty("volumeTaken")) ? data.volumeTaken : volumeTaken;
            }
        }

        helpersDoneLoading(selector);

        //Populate UI with values
        $("#yday .pump-sales").html(helpersToLocaleString(totalVolumePumps));
        $("#yday .tank-consumption").html(helpersToLocaleString(totalVolumeTanks));

        helpersSetTolerance("#pms-tolerance .tolerance-value", pmsTolerance, "#pms-tolerance .tolerance-status");
        helpersSetTolerance("#ago-tolerance .tolerance-value", agoTolerance, "#ago-tolerance .tolerance-status");
        helpersSetTolerance("#dpk-tolerance .tolerance-value", dpkTolerance, "#dpk-tolerance .tolerance-status");
        $("#yday .tank-consumption-value").html(helpersToLocaleString(totalTanksRevenue));
        $("#yday .expected-revenue").html(helpersToLocaleString(totalPumpsRevenue));
        $("#yday .volume-sold").html(helpersRoundOffToK(volumeTaken));
        $("#yday .daily-target").html(helpersRoundOffToK(dailyTarget));
        $("#yday .tolerance-extra").html(helpersToLocaleString(toleranceEstimate));

        if (toleranceEstimate < 0)
        { // Make tolreance value red if its negative
            $("#yday .tolerance-extra").removeClass("green");
            $("#yday .tolerance-extra").addClass("red");
        }
        else
        {
            $("#yday .tolerance-extra").removeClass("red");
            $("#yday .tolerance-extra").addClass("green");
        }

        yesterdaySales.chart = displayVolumeTakenChart(volumeTaken, dailyTarget);
    });
}

function displayVolumeTakenChart(volumeTaken, dailyTarget)
{
    var ctx = document.getElementById('volume-taken-chart');

    return new Chart(ctx, {
        type: 'bar',
        data: {

            datasets: [

                {
                    data: [dailyTarget],
                    backgroundColor: '#04A369',
                },
                {
                    data: [volumeTaken],
                    backgroundColor: '#CDEDE1',
                }
            ]
        },
        options: {
            scales: {
                xAxes: [{ stacked: true,}],
                yAxes: [{ stacked: true, display: false }]
            },
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            tooltips: {
                enabled: false
            }
        }
    });
}

function getYesterdayClosingStock(stationId, authorization)
{
    var selector = ".yday-stock";

    yesterdayClosingStock.xhr = $.ajax({
        method: "GET",
        headers: {
            'Authorization': authorization,
            'Content-Type': "application/json",
        },
        url: analytics.baseUrl+"stock/previous/"+stationId,
        beforeSend: function() {

            // Abort previous request in flight if any
            if (yesterdayClosingStock.requestInFlight == true)
            {
                // Abort previous request assigned to this variable(yesterdayClosingStock.xhr)
                yesterdayClosingStock.xhr.abort();
            }

            helpersShowLoading(selector);

            yesterdayClosingStock.requestInFlight = true;
        }
    }).done(function(result) {

        yesterdayClosingStock.requestInFlight = false;

        var agoClosingStock = 0.00;
        var pmsClosingStock = 0.00;
        var dpkClosingStock = 0.00;

        if (result.hasOwnProperty("data"))
        {
            var data = result.data;
            if (data != null)
            {
                // Get closing stock
                agoClosingStock = (data.hasOwnProperty("AGO")) ? data.AGO.volume : agoClosingStock;
                pmsClosingStock = (data.hasOwnProperty("PMS")) ? data.PMS.volume : pmsClosingStock;
                dpkClosingStock = (data.hasOwnProperty("DPK")) ? data.DPK.volume : dpkClosingStock;

            }
        }

        helpersDoneLoading(selector);

        //Populate UI with values
        $("#yday .pms-closing-stock").html(helpersToLocaleString(pmsClosingStock));
        $("#yday .ago-closing-stock").html(helpersToLocaleString(agoClosingStock));
        $("#yday .dpk-closing-stock").html(helpersToLocaleString(dpkClosingStock));

    });
}

function setDateInHeading(startDate, endDate)
{
   var yesterdayDate = helpersGetYesterdayDate(analytics.readableDate);

   if (startDate === yesterdayDate && endDate === yesterdayDate)
   {
       date = "Yesterday";
   }
   else if (startDate === endDate)
   {
       date = startDate;
   }
   else
   {
       date = startDate +" to "+ endDate;
   }

   // Display filter date on UI
   $("#filter-date-heading").html(date);
}


/*function getYesterdayClosingStock(stationId, authorization, startDate, endDate, product)
{
    var selector = ".yday-stock";

    var data = {};
    data.startDate = startDate;
    data.endDate = endDate;
    data.product = product;

    yesterdayClosingStock.xhr = $.ajax({
        method: "POST",
        headers: {
            'Authorization': authorization,
            'Content-Type': "application/json",
        },
        data: JSON.stringify(data),
        url: analytics.baseUrl+"stock/previous/"+stationId,
        beforeSend: function() {

            // Abort previous request in flight if any
            if (yesterdayClosingStock.requestInFlight == true)
            {
                // Abort previous request assigned to this variable(yesterdayClosingStock.xhr)
                yesterdayClosingStock.xhr.abort();
            }

            helpersShowLoading(selector);

            yesterdayClosingStock.requestInFlight = true;
        }
    }).done(function(result) {

        yesterdayClosingStock.requestInFlight = false;

        var agoClosingStock = 0.00;
        var pmsClosingStock = 0.00;
        var dpkClosingStock = 0.00;

        if (result.hasOwnProperty("data"))
        {
            var data = result.data;
            if (! helpersIsEmpty(data))
            {
                // Get closing stock
                if (data.hasOwnProperty("AGO"))
                {
                    agoClosingStock = data.AGO;
                }
                else
                {
                    helpersGreyOutHeading("#ago-closing-stock-label");
                    helpersGreyOutValue(".ago-closing-stock.box-value", "purple");
                }

                if (data.hasOwnProperty("PMS"))
                {
                    pmsClosingStock = data.PMS;

                }
                else
                {
                    helpersGreyOutHeading("#pms-closing-stock-label");
                    helpersGreyOutValue(".pms-closing-stock.box-value", "purple");
                }

                if (data.hasOwnProperty("DPK"))
                {
                    dpkClosingStock = data.DPK;
                }
                else
                {
                    helpersGreyOutHeading("#dpk-closing-stock-label");
                    helpersGreyOutValue(".dpk-closing-stock.box-value", "purple");
                }

            }
        }

        helpersDoneLoading(selector);

        //Populate UI with values
        $("#yday .pms-closing-stock").html(helpersToLocaleString(pmsClosingStock));
        $("#yday .ago-closing-stock").html(helpersToLocaleString(agoClosingStock));
        $("#yday .dpk-closing-stock").html(helpersToLocaleString(dpkClosingStock));

    });
}
*/