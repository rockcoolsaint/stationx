var chartObject = {};
chartObject.reconcileChart = null;

var bankObject = {};
bankObject.xhr = null;
bankObject,requestInFlight = false;

function getBankOverviewAnalytics(stationId, authorization){
    getReconciliationData(stationId, authorization);
}

function getReconciliationData(stationId, authorization) {

    var selector = "#bank";

    bankObject.xhr = $.ajax({
        method: 'GET',
        headers: {
            'Authorization': authorization,
            'Content-Type': "application/json",
        },
            //analytics.baseUrl+,
        url: analytics.baseUrl+'cash/' + stationId,
        beforeSend: function() {
            //loading icon

            //outstanding payments and incomplete bank deposits
            //$('#bank span.loading-text').removeClass('hide');

            //loading on mobile view
            helpersShowBankLoading("#mbank");

            //loading on web view
            helpersShowBankLoading(selector);

            //Remove already existing chart
            if(chartObject.reconcileChart !== null) {
                helpersDestroyChart(chartObject.reconcileChart);
            }

            //Check if there is a previous request in flight
            if(bankObject.requestInFlight == true) {
                // Abort previous request assigned to this variable(bankObject.xhr)
                bankObject.xhr.abort();
            }

            bankObject.requestInFlight = true;
        },
    }).done(function(result) {
        console.log(result);
        //change status of bankObject.requestInFlight to false
        bankObject.requestInFlight = false;

        //remove loading
        //mobile view
        helpersRemoveBankLoading("#mbank");
        //web view
        helpersRemoveBankLoading(selector);

        // load data dynamically

        //outstanding bank payments
        //mobile view
        helpersLoadBankData("div#mOutPay", "purple", result.data.numOutstandingPayment);
        //web view
        helpersLoadBankData("div#OutPay", "purple-bg", result.data.numOutstandingPayment);

        //incomplete bank deposits
        //$('div#BankDep').find('span.orange-bg').remove();
        //mobile view
        helpersLoadBankData("div#mBankDep", "orange", result.data.numIncompleteDeposit);
        //web view
        helpersLoadBankData("div#BankDep", "orange-bg", result.data.numIncompleteDeposit);

        //draw charts
        //mobile view
        drawXsReconciliationBarChart(result);

        //web view
        drawReconciliationBarChart(result);
    });
}

function getCurrentYear() {
    var date = new Date();
    var year = date.getFullYear();

    return year;
    //return ["Jan " + year, "Feb " + year, "March " + year, "April " + year, "May " + year, "Jun " + year, "Jul " + year, "Aug " + year, "Sep " + year, "Oct " + year, "Nov " + year, "Dec " + year];
}

function getCurrentMonthYear() {
    var date = new Date();
    var year = date.getFullYear();

    return ["Jan " + year, "Feb " + year, "March " + year, "April " + year, "May " + year, "Jun " + year, "Jul " + year, "Aug " + year, "Sep " + year, "Oct " + year, "Nov " + year, "Dec " + year];
}

function getmonths(monthObject) {
    var months = [];
    var calMonths = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    var monthNames = [];

    for (key in monthObject) {
        if (monthObject.hasOwnProperty(key) && monthObject[key] !== 0) {
            months.push(key);
        }
    }
    //console.log(months);
    /*
    months.forEach(function(num, index) {
        for(var i = 0; i < calMonths.length; i++) {
            if(num == i++) {
                console.log(calMonths[i]);
                monthNames.push(calMonths[i])
            }
        }
    });
    */
    return months;
    //return months;
}

function getValidMonths(monthObject) {
    var calMonths = {
        '1': "Jan",
        '2': "Feb",
        '3': "Mar",
        '4': "Apr",
        '5': "May",
        '6': "Jun",
        '7': "Jul",
        '8': "Aug",
        '9': "Sep",
        '10': "Oct",
        '11': "Nov",
        '12': "Dec",
    }

    var months = [];
    var monthNames = [];
    var mobileMonthNames = [];
    var reverseMobileMonthNames = [];

    for (key in monthObject) {
        if (monthObject.hasOwnProperty(key) && monthObject[key] !== 0) {
            months.push(key);
        }
    }

    months.forEach(function(num){
        for(key in calMonths) {
            if(num == key) {
                monthNames.push(calMonths[key] + " " + getCurrentYear());
            }
        }
    });

    mobileMonths= monthNames.slice(-2);
    for(var i = 1; i >= 0; i--){
        reverseMobileMonthNames.push(mobileMonths[i]);
    }

    //return monthNames;
    return [monthNames, reverseMobileMonthNames];
}

function reconData(monthObject,dataObject) {
    //console.log(dataObject);
    var dataArray = [];
    var mobileData = [];
    var reverseMobileData = [];
    var keyArray = getmonths(monthObject);
    var localeArray = [];

    keyArray.forEach(function(num) {
        //console.log(dataObject);
        if(dataObject.hasOwnProperty(num)) {
            dataArray.push(dataObject[num]);
        }
    });

    mobileData = dataArray.slice(-2);
    for(var i = 1; i >= 0; i--) {
        reverseMobileData.push(mobileData[i]);
    }

    return [dataArray, reverseMobileData];
}

function drawReconciliationBarChart(result) {
    //reconciliation bar chart
    var recon = $('#reconcile').get(0).getContext('2d');
    //console.log(Chart.defaults.global);
    console.log(result);
    console.log(result.data.amountExpected);
    //var labels = getmonths(result.data.amountExpected)[1];
    var labels = getValidMonths(result.data.amountExpected)[0];
    var expected = reconData(result.data.amountExpected, result.data.amountExpected)[0];
    var deposited = reconData(result.data.amountExpected, result.data.cashDeposited)[0];

    // calculate variance
    var variance = expected.map(function(item, index) {
        // In this case item correspond to currentValue of array a,
        // using index to get value from array b
        return item - deposited[index];
    })

    var data = {
        labels: labels,
        //labels: getCurrentMonthYear(),
        datasets: [
            {
                label: 'Variance',
                //backgroundColor: '#660099',
                backgroundColor: '#cc3300',
                borderColor: '#cc3300',
                borderWidth: 1,
                borderDash: [5],
                data: variance,
                type: 'line',
                fill: false,
                lineTension: 0,
                //stack: 2
            },
            {
                label: 'Amount expected',
                backgroundColor: '#008080',
                data: expected,
                //stack: 1
            },
            {
                label: 'Cash deposited',
                backgroundColor: '#4bc0c0',
                data: deposited,
                //stack: 2
            },
        ]
    };

    var options = {
        scales: {
            yAxes: [{
                display: true,
                ticks: {
                    beginAtZero: true,
                },
            }],
            xAxes: [{
                gridLines: {
                    display: false,
                    color: "black"
                },
                ticks: {

                },
                barPercentage: 0.8,
                categoryPercentage: 0.5
            }],
        },
        maintainAspectRatio: false,
        tooltips: {
            callbacks: {
                label: function(tooltipItem, data) {
                    //return "₦" + Number(tooltipItem.yLabel).toLocaleString();
                    return "₦" + helpersNumberToLocaleString(Number(tooltipItem.yLabel));
                }
            }
        },
    }

    chartObject.reconcileChart = new Chart(recon, {
        type: 'bar',
        data: data,
        options: options
    });
}

function drawXsReconciliationBarChart(result) {
    //xs horizontal bar chart
    var xs_reconcile = $('#xs_reconcileChart').get(0).getContext('2d');
    var labels = getValidMonths(result.data.amountExpected)[1];
    var xs_expected = reconData(result.data.amountExpected, result.data.amountExpected)[1];
    var xs_deposited = reconData(result.data.amountExpected, result.data.cashDeposited)[1];

    var xs_variance = xs_expected.map(function(item, index) {
        // In this case item correspond to currentValue of array a,
        // using index to get value from array b
        return item - xs_deposited[index];
    })
    console.log(xs_variance);

    var data = {
        //labels: ["This month", "Last month"],
        labels: labels,
        datasets: [
            {
                label: 'Variance',
                //backgroundColor: '#660099',
                backgroundColor: '#cc3300',
                borderColor: '#cc3300',
                //borderWidth: 1,
                //borderDash: [5],
                data: xs_variance,
                type: 'line',
                fill: false,
                lineTension: 0,
                //stack: 2
            },
            {
                label: 'Amount expected',
                backgroundColor: '#4bc0c0',
                data: xs_expected,
                //stack: 1
            },

            {
                label: 'Cash deposited',
                backgroundColor: '#7bd1d1',
                data: xs_deposited,
                //stack: 2
            },
        ]
    };

    var options = {
        scales: {
            yAxes: [{
                display: true,
                ticks: {},
                barPercentage: 0.8,
                categoryPercentage: 0.5
            }],
            xAxes: [{
                display:true,
                ticks: {},
                barPercentage: 0.8,
                categoryPercentage: 0.5
            }]
        },
        tooltips: {
            callbacks: {
                label: function(tooltipItem, data) {
                    //return "₦" + Number(tooltipItem.xLabel).toLocaleString();
                    return "₦" + helpersNumberToLocaleString(Number(tooltipItem.xLabel));
                }
            }
        },
    }

    var reconcile = new Chart(xs_reconcile, {
        type: 'horizontalBar',
        data: data,
        options: options
    });
}