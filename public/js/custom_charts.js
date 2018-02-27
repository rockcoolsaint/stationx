
$(document).ready(function(){

	//Read cookie
    $('[data-toggle="tooltip"]').tooltip();

    var company = JSON.parse($.cookie('company'));

	function getCompanyId() {
		$.each(company, function(id, companyObject) {
			//console.log(id);
			return id;
		});
	}

	var companyId = getCompanyId();
	//console.log(getCompanyId());

	var checkRole = function() {
		if ($.cookie('role') == "Administrator") {
			return true;
			//$(#stations).on('change', function() {

			//});
		} //else {

		//}
	}



	//function to get company name
	function getCompanyName() {
		var company = JSON.parse($.cookie('company'));

		$.each(company, function(id, companyObject) {
			//console.log(id);
			$("#companyName").append(company[id].name);
		});
	}

	//display the company name
	getCompanyName();

	//get stations from cookie stations_names
	var stationNames = function () {

		var stations = $.cookie('stations_names');
		var company = JSON.parse($.cookie('company'));

		$.each(company, function(id, companyObject) {
			var stationArray = company[id].stations;
			stationArray.forEach(function(item){
				$("#stations").append('<label class="col-lg-2 col-xs-6 col-md-2 col-sm-4"><input type="radio" name="stations" value=' + item.id + '>' + item.name + '<span class="check"></span></label>');

			});
		});
	}

	
		//append list off stations to station selection input
		stationNames();
    	$("input:radio").first().prop("checked", true);


		var firstInput = $("input:radio").first();
		var stationId = firstInput.val();


		//test purpose
		var stationName = firstInput.val();

		var content_type = "application/json";
		var authorization = "Bearer "+ $.cookie('token');

    	loadUI(stationId, authorization);
    	
		$('#stations :radio[name="stations"]').on('change', function(){
			var stationId = $( 'input[name=stations]:checked' ).val();

            loadUI(stationId, authorization);
		});

});


function loadUI(stationId, authorization)
{
    getReplenishmentAnalytics(authorization, stationId);
    getTodayAnalytics(authorization, stationId);
    getYesterdayAnalytics(stationId, authorization);
    getMonthlyComparisionAnalytics(stationId, authorization);
    getBankOverviewAnalytics(stationId, authorization);
}






 