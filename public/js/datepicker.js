$( function() {

    var minDate = new Date(2017, 0, 1);
    var maxDate = new Date();
    var options = {
        dateFormat: 'dd/mm/yy',
        minDate: minDate,
        maxDate: maxDate
    };

    $( "#to-datepicker").datepicker(options);
    $( "#from-datepicker").datepicker(options);
} );