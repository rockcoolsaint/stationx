$(function(){
	//stationNames();
	/**
	$("input:checkbox").change(function(){
        $("input:checkbox[name='"+$(this).attr("name")+"']").not(this).prop("checked",false);
    });
	*/
	
	//Read cookie
	//console.log($.cookie('role'));
	//console.log($.cookie('token'));
	//console.log($.cookie('company'));
	//console.log(JSON.parse($.cookie('company')));

	//var company = JSON.parse($.cookie('company'));
	//console.log(company["C36172EF-A9E2-490F-A83C-8DC0091EEF3B"].stations);

	/**function getCompanyId() {
		$.each(company, function(id, companyObject) {
			//console.log(id);
			return id;
		});
	}*/

	//var companyId = getCompanyId();
	//console.log(getCompanyId());

	//var checkRole = function() {
		//if ($.cookie('role') == "Administrator") {
			//return true;
			//$(#stations).on('change', function() {

			//});
		//} //else {

		//}
	//}

	//get stations from cookie stations_names
	/**var stationNames = function () {
		var stations = $.cookie('stations_names');*/
		//console.log(typeof JSON.parse(stations));
		/**var company = JSON.parse($.cookie('company'));

		$.each(company, function(id, companyObject) {
			var stationArray = company[id].stations;*/
			//console.log(stationArray);
			//stationArray.forEach(function(item){
				//console.log(value);
				//$("#stations").append('<label><input type="radio" name="question2" value=' + item.id + '>' + item.name + '</label>');
			//});
		//});

		/**
		$.each(stationArray, function(stationId, stationName) {
			//console.log(value);
			$("#stations").append('<option value=' + stationId + '>' + stationName + '</option>');
		});
		*/
	//}

	//if (checkRole) {
		//append list off stations to station selection input
		//stationNames();

		//$("select#combobox").on('change', function() {
			//console.log($(this).val());
			//console.log('true');
			//console.log($('select[name=selector]').val());
			//console.log($('select#stations').val());
			
			//set parameters
			/**var stationId = $(this).val();
			console.log(stationId);
			var content_type = "application/json";
			var authorization = "Bearer "+ $.cookie('token');*/

			//request for today's data
			/**$.ajax({

				method: 'GET',
				headers: {
			        'Authorization': authorization,
			        'Content-Type': content_type,
			    },
				url: 'http://analytics-api.energy360africa.com/api/v1/sales/today/' + stationId,
				beforeSend: function() {*/
					//loading icon

					//transactions
					//$("div#today_transactions h3").html('<strong>Loading...</strong>');

					//revenue
					/**$("div#today_revenue #pms_revenue").html('<strong>Loading...</strong>');
					$("div#today_revenue #ago_revenue").html('<strong>Loading...</strong>');
					$("div#today_revenue #dpk_revenue").html('<strong>Loading...</strong>');
					*/
					//volume
					//$("div#volume h3").html('<strong>Loading...</strong>');

					//first transaction time
					//$("div#first_transaction_time h3").html('<strong>Loading...</strong>');

					//customer average
					//$("div#cust_avg #avg_vol").html('<strong>Loading...</strong>');
					//$("div#cust_avg #avg_val").html('<strong>Loading...</strong>');

					//pump activity
					//$("div#pump_act h3 strong").html('<strong>Loading...</strong>');

					//sales by pump
					//$("div#pump_sales").html('<strong>Loading...</strong>');

				//},
				//complete: function() {
					//remove loading
					//$("div#transaction h3").find('strong').remove();
				//},
			//}).done(function(result) {
				//console.log(result);

				//Overview:Today
				//web

				//remove loading
				//revenue
				//$("div#today_revenue #pms_revenue").find('strong').remove();
				//$("div#today_revenue #ago_revenue").find('strong').remove();
				//$("div#today_revenue #dpk_revenue").find('strong').remove();

				//volume
				//$("div#volume h3").find('strong').remove();

				//transactions
				//$("div#today_transactions h3").find('strong').remove();

				//first transaction time
				//$("div#first_transaction_time h3").find('strong').remove();

				//sales by pump
				//$("div#pump_sales").find('strong').remove();

				/*
				 *load content dynamically
				 */

				//transactions
				//if (result.data.hasOwnProperty("PMS")) {
					//$("div#today_transactions #pms_transactions").html(result.data.PMS.numTransactions);
				//}
				//if (result.data.hasOwnProperty("AGO")) {
					//$("div#today_transactions #ago_transactions").html(result.data.AGO.numTransactions);
				//}
				//if (result.data.hasOwnProperty("DPK")) {
					//$("div#today_transactions #dpk_transactions").html(result.data.DPK.numTransactions);
				//}

				//revenue
				/**if (result.data.hasOwnProperty("PMS")) {
					$("div#today_revenue #pms_revenue").html(result.data.PMS.revenue);
				}
				if (result.data.hasOwnProperty("AGO")) {
					$("div#today_revenue #ago_revenue").html(result.data.AGO.revenue);
				}
				if (result.data.hasOwnProperty("DPK")) {
					$("div#today_revenue #dpk_revenue").html(result.data.DPK.revenue);
				}*/

				//volume
				/**if (result.data.hasOwnProperty("PMS")) {
					$("div#volume h3#pms_volume").html(result.data.PMS.volume);
				}
				if (result.data.hasOwnProperty("AGO")) {
					$("div#volume h3#ago_volume").html(result.data.AGO.volume);
				}
				if (result.data.hasOwnProperty("DPK")) {
					$("div#volume h3#dpk_volume").html(result.data.DPK.volume);
				}*/

				//first transaction time
				/**if (result.data.hasOwnProperty("firstTransactionTime")) {
					$("div#first_transaction_time h3").html(result.data.firstTransactionTime);
				}*/

				//customer average
				/**$("div#cust_avg #avg_vol").html(result.data.volumePerCustomer + 'L');
				$("div#cust_avg #avg_val").html(result.data.revenuePerCustomer + 'K');
				*/
				//pump activity
				/**$("div#pump_act #num_pumps").html(result.data.totalPumps);
				$("div#pump_act #sell_pumps").html(result.data.activePumps);
				*/
				//sales by pump
				//$("div#pump_sales").html('<canvas id="pump_saleChart" class="hidden-xs" width="400" height="200"></canvas>');
				//pumpsalebar chart
				
				//var pumpSaleChart = $('#pump_saleChart').get(0).getContext('2d');
				//var pumpObj = result.data.activePumpsSale;
				//var res = 
				//var data = {
			        /**labels: ["PMS 1", "AGO 10", "PMS 4", "PMS 6", "PMS 7", "PMS 8"],
			        datasets: [
				        {
				            label: 'Total Volume',
				            backgroundColor: 'rgba(75, 192, 192, 0.4)',
				            data: [12, 19, 3, 5, 2, 3],
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

				var revenueChart = new Chart(pumpSaleChart, {
				    type: 'horizontalBar',
				    data: data,
				    options: options
				});*/
		
				//end web

				//mobile

				//end mobile
				//end Overview:Today
			//});


			/**$.ajax({
				method: 'GET',
				headers: {
			        'Authorization': authorization,
			        'Content-Type': content_type,
			    },
				url: 'http://analytics-api.energy360africa.com/api/v1/products/replenishment/' + stationId,
				beforeSend: function() {*/
					//loading icon
					/**$("div.doughnut, div.inner .petrol, div.inner .diesel, div.inner .kerosene").html('<strong>Loading...</strong>');
				},
				complete: function() {*/
					//remove loading
					//$("div.doughnut, div.inner .petrol, div.inner .diesel, div.inner .kerosene").find('strong').remove();
				/**}, 
			}).done(function(result) {*/
				//console.log(data);

				//remove loading
				//$("div.doughnut, div.inner .petrol, div.inner .diesel, div.inner .kerosene").find('strong').remove();

				//Overview
				//web petrol doughnut chart
				/**$("div.doughnut").html('<canvas id="petrol" width="120" height="120"></canvas>');
				var pet = $('#petrol').get(0).getContext('2d');

				var data = {
				    datasets: [
				    	{
				        	data: [30, 10],
				        	backgroundColor: ['#C60269', '#F4CCE1'],
				    	}
				    ],*/

				    // These labels appear in the legend and in the tooltips when hovering different arcs
				    //labels: [
				        //'Red',
				        //'Yellow',
				    //]
				/**};

				var options = {
					cutoutPercentage: 70
				}

				var petrolDoughnut = new Chart(pet, {
				    type: 'doughnut',
				    data: data,
				    options: options
				});*/
				//end web petrol doughnut

				//web diesel doughnut chart

				/**$("#vol-petrol").html(result.data.PMS.volume);
				$("#pms_reorder").html(result.data.PMS.daysToReorder);
				$("#ago_reorder").html(result.data.AGO.daysToReorder);
				$("#dpk_reorder").html(result.data.DPK.daysToReorder);
			});

		});
	} else {

	}*/
	

	//sales trend by hour chart
	var salesTrendChart = $('#sales_trendChart').get(0).getContext('2d');
	salesTrendChart.height = 100;
	var data = {
        labels: ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24"],
        datasets: [
	        {
	            label: 'Monthly Comparism',
	            data: [0, 0, 0, 0, 48.26, 391.2, 414.72, 607.08, 461.35, 312.7, 282.85, 389.76, 20.29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
	            fill: true,
	            lineTension: 0.1,
	            backgroundColor:'rgba(75, 192, 192, 0.4)',
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

	var trend = new Chart(salesTrendChart, {
	    type: 'line',
	    data: data,
	    options: options
	});
	
	
	var pet = $('#petrol').get(0).getContext('2d');

	var data = {
	    datasets: [
	    	{
	        	data: [30, 10],
	        	backgroundColor: ['#C60269', '#F4CCE1'],
	        	
	    	}
	    ],

	    // These labels appear in the legend and in the tooltips when hovering different arcs
	    //labels: [
	        //'Red',
	        //'Yellow',
	    //]
	};

	var options = {
		cutoutPercentage: 70
	}

	var petrolDoughnut = new Chart(pet, {
	    type: 'doughnut',
	    data: data,
	    options: options
	});
	
	var ctx = $('#diesel').get(0).getContext('2d');

	var data = {
	    datasets: [
	    	{
	        	data: [30, 10],
	        	backgroundColor: ['#ff9900', '#ffe6cc'],
	    	}
	    ],

	    // These labels appear in the legend and in the tooltips when hovering different arcs
	    //labels: [
	        //'Red',
	        //'Yellow',
	    //]
	};

	var options = {
		cutoutPercentage: 70
	}

	var Doughnut = new Chart(ctx, {
	    type: 'doughnut',
	    data: data,
	    options: options
	});
	
	var ctx = $('#kero').get(0).getContext('2d');

	var data = {
	    datasets: [
	    	{
	        	data: [30, 10],
	        	//backgroundColor: ['#00802b', '#e6ffee'],
	        	backgroundColor: ['#04A369', '#CDEDE1']
	    	}
	    ],

	    // These labels appear in the legend and in the tooltips when hovering different arcs
	    //labels: [
	        //'Red',
	        //'Yellow',
	    //]
	};

	var options = {
		cutoutPercentage: 70
	}

	var Doughnut = new Chart(ctx, {
	    type: 'doughnut',
	    data: data,
	    options: options
	});

	var monthlyId = $('#monthly_target').get(0).getContext('2d');

	var data = {
	    datasets: [
	    	{
	        	data: [30, 10],
	        	backgroundColor: ['#ff9900', '#e6ffee'],
	    	}
	    ],

	    // These labels appear in the legend and in the tooltips when hovering different arcs
	    labels: [
	        'Red',
	        'Yellow',
	    ]
	};

	var options = {
		cutoutPercentage: 70
	}

	var Doughnut = new Chart(monthlyId, {
	    type: 'doughnut',
	    data: data,
	    options: options
	});  

	//var ctx = $('#myChart').get(0).getContext('2d');

	//line chart
	var lineChart = $('#monthlyChart').get(0).getContext('2d');

	var data = {
        labels: ["January", "February", "March", "April", "May", "June"],
        datasets: [
	        {
	            label: 'Monthly Comparism',
	            data: [12, 19, 3, 5, 2, 3],
	            fill: false,
	            lineTension: 0.1,
	            backgroundColor:'rgba(75, 192, 192, 0.4)',
	            borderColor:'rgba(75,192,192,1)',
	            borderCapstyle: 'butt',
	            borderDash: [5],
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
	            label: 'Monthly Comparism',
	            data: [10, 17, 5, 4, 6, 2],
	            fill: false,
	            lineTension: 0.1,
	            backgroundColor:'rgba(255, 99, 132, 0.2)',
	            borderColor:'rgba(75,192,192,1)',
	            borderCapstyle: 'butt',
	            borderDash: [],
	            borderDashOffset: 0.0,
	            borderJoinStyle: 'miter',
	            pointBorderColor: "rgba(75,192,192,1)",
	            pointBackgroundColor: "#ffffff",
	            pointBorderWidth: 1,
	            pointHoverRadius: 5,
	            pointHoverBackgroundColor: "rgba(220,220,220,1)",
	            pointBorderColor: 2,
	            pointRadius: 1,
	            pointHitRadius: 10,
	        }
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
    	}
    }

	var monthlyChart = new Chart(lineChart, {
	    type: 'line',
	    data: data,
	    options: options
	});


	//bar chart
	var barChart = $('#revenueChart').get(0).getContext('2d');

	var data = {
        labels: ["Station, location", "Station, location", "Station, location", "Station, location", "Station, location", "Station, location"],
        datasets: [
	        {
	            label: 'Monthly Comparism',
	            backgroundColor: 'rgba(75, 192, 192, 0.4)',
	            data: [12, 19, 3, 5, 2, 3],
	        },
	        /**
	        {
	            label: 'Monthly Comparism',
	            data: [10, 17, 5, 4, 6, 2],
	        }
	        */
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
    	}
    }

	var revenueChart = new Chart(barChart, {
	    type: 'horizontalBar',
	    data: data,
	    options: options
	});

	//bar chart
	var xs_barChart = $('#xs_revenueChart').get(0).getContext('2d');

	var data = {
        labels: ["Station, location", "Station, location", "Station, location", "Station, location", "Station, location", "Station, location"],
        datasets: [
	        {
	            label: 'Monthly Comparism',
	            backgroundColor: 'rgba(75, 192, 192, 0.4)',
	            data: [12, 19, 3, 5, 2, 3],
	        },
	        /**
	        {
	            label: 'Monthly Comparism',
	            data: [10, 17, 5, 4, 6, 2],
	        }
	        */
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
    	}
    }

	var revenueChart = new Chart(xs_barChart, {
	    type: 'horizontalBar',
	    data: data,
	    options: options
	});

	//revenue line chart
	var revenueLineChart = $('#revenue').get(0).getContext('2d');

	var data = {
        labels: ["January", "February", "March", "April", "May", "June"],
        datasets: [
	        {
	            label: 'Monthly Comparism',
	            data: [12, 19, 3, 5, 2, 3],
	            fill: false,
	            lineTension: 0.1,
	            backgroundColor:'rgba(75, 192, 192, 0.4)',
	            borderColor:'rgba(75,192,192,1)',
	            borderCapstyle: 'butt',
	            borderDash: [5],
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
	            label: 'Monthly Comparism',
	            data: [10, 17, 5, 4, 6, 2],
	            fill: false,
	            lineTension: 0.1,
	            backgroundColor:'rgba(255, 99, 132, 0.2)',
	            borderColor:'rgba(75,192,192,1)',
	            borderCapstyle: 'butt',
	            borderDash: [],
	            borderDashOffset: 0.0,
	            borderJoinStyle: 'miter',
	            pointBorderColor: "rgba(75,192,192,1)",
	            pointBackgroundColor: "#ffffff",
	            pointBorderWidth: 1,
	            pointHoverRadius: 5,
	            pointHoverBackgroundColor: "rgba(220,220,220,1)",
	            pointBorderColor: 2,
	            pointRadius: 1,
	            pointHitRadius: 10,
	        }
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
    	}
    }

	var revenue = new Chart(revenueLineChart, {
	    type: 'line',
	    data: data,
	    options: options
	});
	
	//revenue line chart
	var supplyLineChart = $('#supply').get(0).getContext('2d');

	var data = {
        labels: ["January", "February", "March", "April", "May", "June"],
        datasets: [
	        {
	            label: 'Monthly Comparism',
	            data: [12, 19, 3, 5, 2, 3],
	            fill: false,
	            lineTension: 0.1,
	            backgroundColor:'rgba(75, 192, 192, 0.4)',
	            borderColor:'rgba(75,192,192,1)',
	            borderCapstyle: 'butt',
	            borderDash: [5],
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
	            label: 'Monthly Comparism',
	            data: [10, 17, 5, 4, 6, 2],
	            fill: false,
	            lineTension: 0.1,
	            backgroundColor:'rgba(255, 99, 132, 0.2)',
	            borderColor:'rgba(75,192,192,1)',
	            borderCapstyle: 'butt',
	            borderDash: [],
	            borderDashOffset: 0.0,
	            borderJoinStyle: 'miter',
	            pointBorderColor: "rgba(75,192,192,1)",
	            pointBackgroundColor: "#ffffff",
	            pointBorderWidth: 1,
	            pointHoverRadius: 5,
	            pointHoverBackgroundColor: "rgba(220,220,220,1)",
	            pointBorderColor: 2,
	            pointRadius: 1,
	            pointHitRadius: 10,
	        }
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
    	}
    }

	var supply = new Chart(supplyLineChart, {
	    type: 'line',
	    data: data,
	    options: options
	});

	//bar chart
	var volSold = $('#volumeSold').get(0).getContext('2d');
	//console.log(Chart.defaults.global);

	var data = {
        labels: ["This month", "Last month"],
        datasets: [
	        {
	            label: 'Petrol',
	            backgroundColor: '#00802b',
	            data: [12, 19],
	        },
	        {
	            label: 'Diesel',
	            backgroundColor: '#000066',
	            data: [17, 17],
	        },
	        {
	        	label: 'Kerosene',
	        	backgroundColor: '#ff9900',
	        	data: [10, 12],
	        }
        ]
    };

    var options = {
    	scales: {
    		yAxes: [{
    			display: true,
    			ticks: {
    				
    			},
    			barPercentage: 0.8,
    		}],
    		xAxes: [{
    			display:false,
    			ticks: {
    				beginAtZero: true
    			}
    		}]
    	}
    }

	var volumeSold = new Chart(volSold, {
	    type: 'horizontalBar',
	    data: data,
	    options: options
	});

	//product overview revenue bar chart
	var xs_pdtRevenue = $('#xs_revenue').get(0).getContext('2d');
	//console.log(Chart.defaults.global);

	var data = {
        labels: ["Petrol", "Diesel", "Kerosene"],
        datasets: [
	        {
	            label: 'Petrol',
	            backgroundColor: '#00802b',
	            data: [12],
	        },
	        {
	            label: 'Diesel',
	            backgroundColor: '#000066',
	            data: [17],
	        },
	        {
	        	label: 'Kerosene',
	        	backgroundColor: '#ff9900',
	        	data: [10],
	        }
        ]
    };

    var options = {
    	scales: {
    		yAxes: [{
    			display: true,
    			ticks: {
    				
    			},
    			barPercentage: 0.8,
    		}],
    		xAxes: [{
    			display:false,
    			ticks: {
    				beginAtZero: true
    			}
    		}]
    	}
    }

	var xs_productRevenue = new Chart(xs_pdtRevenue, {
	    type: 'horizontalBar',
	    data: data,
	    options: options
	});

	//xs horizontal bar chart
	var xs_monthly = $('#xs_monthlyChart').get(0).getContext('2d');

	var data = {
        labels: ["This month", "Last month"],
        datasets: [
	        {
	            label: 'Pump',
	            backgroundColor: '#4bc0c0',
	            data: [133,221]
	        },
	        
	        {
	            label: 'Tank',
	            backgroundColor: '#7bd1d1',
	            data: [408,547]
	        }
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
    			display:false,
    		}]
    	}
    }

	var pumpTank = new Chart(xs_monthly, {
	    type: 'horizontalBar',
	    data: data,
	    options: options
	});

	//xs horizontal bar chart
	var xs_reconcile = $('#xs_reconcileChart').get(0).getContext('2d');

	var data = {
        labels: ["This month", "Last month"],
        datasets: [
	        {
	            label: 'Amount expected',
	            backgroundColor: '#4bc0c0',
	            data: [133,221]
	        },
	        
	        {
	            label: 'Cash deposited',
	            backgroundColor: '#7bd1d1',
	            data: [408,547]
	        }
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
    			display:false,
    		}]
    	}
    }

	var reconcile = new Chart(xs_reconcile, {
	    type: 'horizontalBar',
	    data: data,
	    options: options
	});

	//reconciliation bar chart
	var recon = $('#reconcile').get(0).getContext('2d');
	//console.log(Chart.defaults.global);

	var data = {
        labels: ["Mar 2017", "Apr 2017", "May 2017"],
        datasets: [
	        {
	            label: 'Amount expected',
	            backgroundColor: '#008080',
	            data: [12, 19, 18],
	        },
	        {
	            label: 'Cash deposited',
	            backgroundColor: '#4bc0c0',
	            data: [17, 17, 15],
	        }
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

    	}
    }

	var reconcileChart = new Chart(recon, {
	    type: 'bar',
	    data: data,
	    options: options
	});

	//mixed bar-line chart
	var volTrendId = $('#vol_trend').get(0).getContext('2d');
	//console.log(Chart.defaults.global);

	var data = {
        labels: ["Mar 2017", "Apr 2017", "May 2017","1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1",],
        datasets: [
	        {
	            label: 'Start Stock Volume',
	            backgroundColor: '#008080',
	            data: [12, 19, 18, 21, 16, 19, 15, 13, 18, 17, 21, 16, 19, 15, 13, 18, 17],
	        },
	        {
	            label: 'End Stock Volume',
	            backgroundColor: '#4bc0c0',
	            data: [17, 17, 15, 15, 13, 18, 17, 17, 21, 16, 19, 15, 13, 18, 21, 16, 19],
	        },
	        {
	            label: 'Volume Consumed',
	            //backgroundColor: '#a742f4',
	            borderColor: '#a742f4',
	            data: [17, 17, 15, 15, 13, 18, 17, 17, 21, 16, 19, 15, 13, 18, 21, 16, 19],
	            type: 'line',
	            fill: false,
	            lineTension: 0,
	        }
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
    				beginAtZero: true,
    			},
    			barPercentage: 0.8,
    			categoryPercentage: 0.5
    		}],

    	}
    }

	var reconcileChart = new Chart(volTrendId, {
	    type: 'bar',
	    data: data,
	    options: options
	});
	/**
	function parseActivePumps(activePumps)
	{	
		var pump;
		var pumps = [];
		var sales = [];

		for (pump in activePumps)
		{
			if (// hasOwnProperty)
			{
				pums
			}
		}

		return [pumps, sales];
	}
	*/
});
 