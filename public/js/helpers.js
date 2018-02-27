
function helpersRoundOffToK(value) {

    var stringValue = value.toString();
    var valueArr = stringValue.split(".");

    if (valueArr[0].length > 3 && valueArr[0].length < 7) {
        var approx = (value/1000).toFixed(2);
        return approx + 'k';
    }
    return value;
}

function helpersToLocaleString(value)
{
    var options = {
      maximumFractionDigits: 2,
      minimumFractionDigits: 2
    };

    return value.toLocaleString(undefined, options);
}

function helpersNumberToLocaleString(value) {
    return value.toLocaleString();
}

function helpersToThousandsLocaleString(value)
{
    var options = {
        maximumFractionDigits: 0,
        minimumFractionDigits: 0
    };

    return value.toLocaleString(undefined, options);
}

function helpersShowLoading(selector)
{
    $(selector+" span.loading-text").removeClass("hide");
    $(selector+" span.done-loading").addClass("hide");
}

function helpersShowBankLoading(selector)
{
    $(selector+" span.loading-text").removeClass("hide");
}

function helpersRemoveBankLoading(selector)
{
    $(selector+" span.loading-text").remove();
}

function helpersLoadBankData(selector, color_bg, data)
{
    //$(selector+" span.loading-text").remove();
    $(selector).find('span.'+color_bg).remove();
    $(selector).append('<span class="col-md-5 ' + color_bg + ' text-center ajax-text">' + data + '</span>');
}

function helpersDoneLoading(selector)
{
    $(selector+" span.loading-text").addClass("hide");
    $(selector+" span.done-loading").removeClass("hide");
}

function helpersDestroyChart(chart)
{
    chart.destroy();
}

function helpersGetTodayDate()
{
    var today = new Date();
    var year = today.getFullYear();
    var month = today.getMonth() + 1;
    if (month < 10)
    {
        month = "0"+month;
    }
    var day = today.getDate();
    if (day < 10)
    {
        day = "0"+day;
    }

    return day+"-"+month+"-"+year;
}

function helpersIsEmpty(obj) {
    for(var prop in obj) {
        if(obj.hasOwnProperty(prop))
            return false;
    }

    return JSON.stringify(obj) === JSON.stringify({});
}


function helpersGreyOutValue(selector, initColourClass)
{
    $(selector).removeClass(initColourClass);
    $(selector).addClass("grey-out");
}

function helpersGreyOutHeading(selector)
{
    $(selector).addClass("grey-out");
}

function helpersReadableDateToApiDate(readableDate)
{
    res = readableDate.split("/");
    day = res[0];
    month = res[1];
    year = res[2];

    return year+"-"+month+"-"+day;
}

function helpersGetYesterdayDate(format)
{
    var today = new Date();
    var yesterday = new Date(today);
    yesterday.setDate(today.getDate() - 1);

    var year = yesterday.getFullYear();
    var month = yesterday.getMonth();
    var day = yesterday.getDate();

    if (format === analytics.dateObject)
    {// Return a date object
        return new Date(year, month, day);
    }


    /** Format date params **/

    month = month+1; // javascript  month starts from zero

    if (month < 10)
    {
        month = "0"+month;
    }

    if (day < 10)
    {
        day = "0"+day;
    }

    if (format === analytics.readableDate)
    {
        return day+"/"+month+"/"+year;
    }

    if (format === analytics.apiDate)
    {
        return year+"-"+month+"-"+day;
    }
}

function helpersSetTolerance(valueSelector, value, statusSelector)
{
    if (value == 0)
    {
        $(valueSelector).addClass("red");
    }
    else if (value < 20)
    {
        $(statusSelector).removeClass("hide");
        $(statusSelector).html("TOO LOW");
        //$(statusSelector).addClass("red");
        $(valueSelector).addClass("red");
        $(valueSelector).prepend('<i class="fa fa-arrow-down" aria-hidden="true"></i>');
        //$(valueSelector).prepend('<div>Prepend this</div>');
    }
    else if (value > 20.6 && value < 21.0)
    {
        $(statusSelector).removeClass("hide");
        $(statusSelector).html("HIGH");
        //$(statusSelector).addClass("red");
        $(valueSelector).addClass("red");
        $(valueSelector).prepend('<i class="fa fa-arrow-up" aria-hidden="true"></i>');

    }
    else if(value >=21.0)
    {
        $(statusSelector).removeClass("hide");
        $(statusSelector).html("TOO HIGH");
        //$(statusSelector).addClass("red");
        $(valueSelector).addClass("red");
        $(valueSelector).prepend('<i class="fa fa-arrow-up" aria-hidden="true"></i>');
    }
    else
    {
        $(valueSelector).addClass("green");
        $(valueSelector).append('<i class="fa fa-check" aria-hidden="true"></i>');
    }

    $(valueSelector).html(helpersToLocaleString(value));
}

function helpersResetTolerance(statusSelector, valueSelector)
{
    $(statusSelector).addClass("hide");
    $(valueSelector).removeClass("red");
    $(valueSelector).removeClass("green");

}