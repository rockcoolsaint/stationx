@extends('layouts.app')

@section('content')
  <!--Authenticated station manager role > 1-->
    
    <!-- Select box for stations -->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <p>
            <h3 id="companyName"></h3>
            <!--<label class="">Select Station</label>-->
            <!--<div>
              <select id="combobox" class="inline">
                <option value="">Select Station</option>
              </select>
            </div>-->
            <form id="stations" method="post">
              <!--<label><input type="checkbox" name="question2" value="cc" /> Credit Card</label>
              <label><input type="checkbox" name="question2" value="check" /> Check</label>
              <label><input type="checkbox" name="question2" value="paypal" /> Paypal</label>
              <label><input type="checkbox" name="question2" value="cash" /> Cash</label>-->
            </form>
          </p>
        </div>
        
        <!--<div class="col-lg-4 input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="text" class="form-control pull-right" id="datepicker">
        </div>-->
      </div>
    
      

      <!--toggleable content-->
      <div class="row">
        <!--masonry-->
        <div class="grid">
          <div class="col-lg-12 col-xs-12">
            <div class="box-header bg-white" data-toggle="collapse" data-target="#overviewToday">
              <h3 class="box-title">OVERVIEW: Today (First transaction time: <span id="first_transaction_time" class="box-value">0000-00-00 00:00:00</span>)</h3>
              <button type="button" class="btn btn-box-tool pull-right" data-toggle="collapse" data-target="#overviewToday" data-widget="collapse"><!--<i class="fa fa-minus"></i>-->
              </button>
            </div>
          </div>
        </div>

        <div class="collapse in" id="overviewToday">
          <div class="col-lg-4 col-xs-12 hidden-xs">
            <!-- small box -->
            <!--<div class="box-body box-margin bg-white">
              <h4>Volume</h4>
              <p>Sold from Pumps (Ltrs) <span class="purple-text">30,035.97</span></p>
              <p>Taken from Tanks (Ltrs) <span>29,853.00</span></p>
            </div>-->

            <!-- small box -->
            <div id="today_transactions" class="box-margin bg-white">
              <div class="efizzy"></div>
              <h4 class="box-label">Transactions</h4>
              <hr>
              <div class="row">
                <div class="col-lg-12 col-xs-12">
                  <div class="box-value-heading">Petrol</div>
                  <div id="pms_transactions" class="purple box-value">0</div>
                </div>
                <div class="col-lg-12 col-xs-12">
                  <hr>
                  <div class="box-value-heading">Diesel</div>
                  <div id="ago_transactions" class="purple box-value">0</div>
                </div>
                <div class="col-lg-12 col-xs-12">
                  <hr>
                  <div class="box-value-heading">Kerosene</div>
                  <div id="dpk_transactions" class="purple box-value">0</div>
                </div>
              </div>
            </div>

            <!-- small box -->
            <div id="volume" class="box-margin bg-white">
              <div class="efizzy"></div>
              <h4 class="box-label">Volume(Litres)</h4>
              <hr>
              <div class="row">
                <div class="col-lg-12 col-xs-12">
                  <hr>
                  <div class="box-value-heading">Petrol</div>
                  <div id="pms_volume" class="purple box-value">0</div>
                </div>
                <div class="col-lg-12 col-xs-12">
                  <hr>
                  <div class="box-value-heading">Diesel</div>
                  <div id="ago_volume" class="purple box-value">0</div>
                </div>
                <div class="col-lg-12 col-xs-12">
                  <hr>
                  <div class="box-value-heading">Kerosene</div>
                  <div id="dpk_volume" class="purple box-value">0</div>
                </div>
              </div>
            </div>

          </div>

          <!--mobile view-->
          <div class="col-xs-12 hidden-md hidden-lg">
            <!-- small box -->
            <div class="box-body box-margin bg-white text-center">
              <p><strong>Volume Sold from Pumps (Ltrs)</strong></p>
              <h3 class="orange"><strong>30,035.97</strong></h3>
            </div>
          </div>

          <div class="col-xs-12 hidden-md hidden-lg">
            <!-- small box -->
            <div class="box-body box-margin bg-white text-center">
              <p><strong>Volume Taken from Tanks (Ltrs)</strong></p>
              <h3 class="orange"><strong>29,853.00</strong></h3>
            </div>
          </div>
          <!-- mobile view-->

          <div id="today_revenue" class="col-lg-4 col-xs-12 hidden-xs">
            <!-- small box -->
            
            <div class="box-margin bg-white">
              <div class="green-efizzy"></div>
              <h4 class="box-label">Revenue (Petrol)</h4>
              <hr>
              <div class="green box-value">₦&nbsp;<span id="pms_revenue">0</span></div>
            </div>

            <!-- small box -->
            <div class="box-margin bg-white">
              <div class="green-efizzy"></div>
              <h4 class="box-label">Revenue (Diesel)</h4>
              <hr>
              <div class="green box-value">₦&nbsp;<span id="ago_revenue">0</span></div>
            </div>

            <!-- small box -->
            <div class="box-margin bg-white">
              <div class="green-efizzy"></div>
              <h4 class="box-label">Revenue (Kerosene)</h4>
              <hr>
              <div class="green box-value">₦&nbsp;<span id="dpk_revenue">0</span></div>
            </div>
          </div>

          <!--mobile view-->
          <div class="col-xs-12 hidden-md hidden-lg text-center">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <p><strong>Expected Revenue for Sales</strong></p>
              <h3 class="orange"><strong>₦4,591,391.25</strong></h3>
            </div>

            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <p><strong>Value of Consumption from Tanks</strong></p>
              <h3 class="orange"><strong>₦4,559,495.25</strong></h3>
            </div>

            <!-- small box -->
            <div class="box-body box-margin bg-white hidden-md hidden-lg">
              <h4>Tolerance</h4>
              <div class="row">
                <div class="col-xs-4 text-center">
                  <div>Petrol</div>
                  <h3 class="orange"><strong>20.06</strong></h3>
                </div>
                <div class="col-xs-4 text-center">
                  <div>Diesel</div>
                  <h3 class="orange"><strong>20.44</strong></h3>
                </div>
                <div class="col-xs-4 text-center">
                  <div>Kerosene</div>
                  <h3 class="orange"><strong>20.73</strong></h3>
                </div>
              </div>
            </div>

            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <p><strong>Tolerance Related Extra</strong></p>
              <h3 class="green"><strong>₦31,896.25</strong></h3>
            </div>
          </div>
          <!--mobile view-->

          <div class="col-lg-4 col-xs-12">
            <!-- small box -->
            
            <div class="box-margin bg-white">
              <div class="efizzy"></div>
              <h4 class="box-label">Average Volume per Customer</h4>
              <hr>
              <div id="avg_vol" class="box-value">
                0L
              </div>
            </div>

            <div class="box-margin bg-white">
              <div class="efizzy"></div>
              <h4 class="box-label">Average Customer Value</h4>
              <hr>
              <div id="avg_val" class="box-value">
                0
              </div>
            </div>

            <!--<div class="box-margin bg-white">
              <div class="efizzy"></div>
              <h4 class="box-label">Average Customer Value</h4>
              <hr>
              <div id="first_transaction_time" class="box-value">
                30K
              </div>
            </div> -->

            
              <div class="box-margin bg-white">
                <div class="efizzy"></div>
                <div><h4 class="box-label">No. of Pumps on Site: <span id="num_pumps">0</span></h4></div>
                <hr>
                <div class="balance">
                  <h4 class="box-label">No. of Pumps Selling: <span id="sell_pumps">0</span></h4>
                </div>
              </div> 

              
          
          </div>

          <!--<div class="col-lg-4 col-xs-12">
            
            
            <div class="box-margin bg-white">
              <div class="efizzy"></div>
              <h4 class="box-label">Average Customer Value</h4>
              <hr>
              <div id="first_transaction_time" class="box-value">
                30K
              </div>
            </div>
          </div> -->


          <!--<div class="col-lg-4 col-xs-12">
            
            <div class="box-body box-margin bg-white">
              
              <div id="cust_avg" class="text-center">
                <p><strong>Average Volume per Customer</strong></p>
                <h3 class="green"><strong id="avg_vol">30L</strong></h3>
                <hr>
                <p><strong>Average Customer Value</strong></p>
                <h3 class="green"><strong id="avg_val">30K</strong></h3>
              </div>
            </div>

            <div class="box-body box-margin bg-white">
              
              <div id="pump_act" class="text-center">
                <p><strong>Number of Pumps on Site</strong></p>
                <h3 class="green"><strong id="num_pumps">8</strong></h3>
                <hr>
                <p><strong>Number of Pumps Selling</strong></p>
                <h3 class="green"><strong id="sell_pumps">3</strong></h3>
              </div>
            </div>
          </div> -->

          <div class="col-lg-8 col-xs-12">
            <!-- small box -->
            <div class="bg-white box-body">
              <h4>Sales Trend by Hour</h4>
              <div id="hourly_sales">
                <canvas id="sales_trendChart" class="hidden-xs" width="400" height="200"></canvas>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-xs-12">
            <!-- small box -->
            <div class="bg-white box-body">
              <h4>Sales by Pump</h4>
              <div id="pump_sales">
                <canvas id="pump_saleChart" class="hidden-xs" width="400" height="200"></canvas>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-xs-6 hidden-xs">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <div><h4><strong>Petrol</strong></h4></div>
              <div class="text-center">
                <div class="doughnut">
                  <canvas id="petrol" width="120" height="120"></canvas>
                </div>
                <!--<input type="text" class="knob" value="60" data-width="120" data-height="120" data-fgColor="#cc0066" data-readonly="true">-->
                <div class="inner">
                  <h5 class="pdt-text"><strong>Volume</strong></h5>
                  <h3 id="vol-petrol" class="petrol pdt-text ">41,208</h3>
                  <p class="pdt-text">Days to Reorder   <span id="pms_reorder" class="petrol">4,508</span></p>
                  <hr>
                  <p class="pdt-text">Days to Dead Stock  <span id="pms_deadstock" class="petrol">3,866</span></p>
                  <!--<hr>
                  <p class="pdt-text">Volume Sold MTD  <span class="petrol">18,914.00</span></p>
                  <hr>
                  <p class="pdt-text">Volume Sold YTD  <span class="petrol">154,349.00</span></p>-->
                </div>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-xs-6 hidden-xs">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <div><h4><strong>Diesel</strong></h4></div>
              <div class="text-center">
                <div class="doughnut">
                  <canvas id="diesel" width="120" height="120" class=""></canvas>
                </div>
                <!--<input type="text" class="knob" value="60" data-width="120" data-height="120" data-fgColor="#ff9900" data-readonly="true">-->
                <div class="inner">
                  <h5 class="pdt-text"><strong>Volume</strong></h5>
                  <h3 class="diesel pdt-text">35,615</h3>
                  <p class="pdt-text">Days to Reorder   <span id="ago_reorder" class="diesel">4,508</span></p>
                  <hr>
                  <p class="pdt-text">Days to Dead Stock  <span id="ago_deadstock" class="diesel">3,866</span></p>
                  <!--<hr>
                  <p class="pdt-text">Volume Sold MTD  <span class="diesel">18,914.00</span></p>
                  <hr>
                  <p class="pdt-text">Volume Sold YTD  <span class="diesel">154,349.00</span></p>-->
                </div>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-xs-6 hidden-xs">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <div><h4><strong>Kerosene</strong></h4></div>
              <div class="text-center">
                <div class="doughnut">
                  <canvas id="kero" width="120" height="120" class=""></canvas>
                </div>
                <!--<input type="text" class="knob" value="60" data-width="120" data-height="120" data-fgColor="#00802b" data-readonly="true">-->
                <div class="inner">
                  <h5 class="pdt-text"><strong>Volume</strong></h5>
                  <h3 class="kerosene pdt-text">41,208</h3>
                  <p class="pdt-text">Days to Reorder   <span id="dpk_reorder" class="kerosene">4,508</span></p>
                  <hr>
                  <p class="pdt-text">Days to Dead Stock  <span id="dpk_deadstock" class="kerosene">3,866</span></p>
                  <!--<hr>
                  <p class="pdt-text">Volume Sold MTD  <span class="kerosene">18,914.00</span></p>
                  <hr>
                  <p class="pdt-text">Volume Sold YTD  <span class="kerosene">154,349.00</span></p>-->
                </div>
              </div>
            </div>
          </div>
          <!-- ./col -->

          <!-- mobile view -->
          <div class="col-xs-12 hidden-lg hidden-md">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <table class="table text-right">
                <thead>
                  <tr>
                    <th class="text-right">Volume</th>
                    <th class="text-right"></th>
                    <th class="text-right">Days to Reorder</th>
                    <th class="text-right">Days to Dead Stock</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="bottom">Petrol</td>
                    <td class="petrol pdt-text">41,208</td>
                    <td class="petrol pdt-text">7</td>
                    <td class="petrol pdt-text">9</td>
                  </tr>
                  <tr>
                    <td>Diesel</td>
                    <td class="diesel pdt-text">35,615</td>
                    <td class="diesel pdt-text">10</td>
                    <td class="diesel pdt-text">11</td>
                  </tr>
                  <tr>
                    <td>Kerosene</td>
                    <td class="kerosene pdt-text">9,994</td>
                    <td class="kerosene pdt-text">3,866</td>
                    <td class="kerosene pdt-text">4,508</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- mobile view -->

            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <h4>Volume Sold Month To Date</h4>
              <div class="vol-sold">
                <div class="text-center">
                  <span>Petrol</span>
                  <h3 class="green">85,488.00</h3>
                </div>
                <div class="text-center">
                  <span>Diesel</span>
                  <h3 class="green">18,914.00</h3>
                </div>
                <div class="kero text-center">
                  <span>Kerosene</span>
                  <h3 class="green">913.00</h3>
                </div>
              </div>

              <hr>

              <h4>Volume Sold Year To Date</h4>
              <div class="vol-sold">
                <div>
                  <span>Petrol</span>
                  <h3 class="green">85,488.00</h3>
                </div>
                <div>
                  <span>Diesel</span>
                  <h3 class="green">18,914.00</h3>
                </div>
                <div class="kero">
                  <span>Kerosene</span>
                  <h3 class="green">913.00</h3>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!--toggleable content-->
      <div class="row">
        <!--masonry-->
        <div class="grid">
          <div class="col-lg-12 col-xs-12">
            <div class="box-margin box-header bg-white" data-toggle="collapse" data-target="#overviewYesterday">
              <h3 class="box-title">OVERVIEW: YESTERDAY</h3>
              <button type="button" class="btn btn-box-tool pull-right" data-toggle="collapse" data-target="#overviewYesterday" data-widget="collapse"><!--<i class="fa fa-minus"></i>-->
              </button>
            </div>
          </div>
        </div>

        <div class="collapse in" id="overviewYesterday">
          <div class="col-lg-4 col-xs-12 hidden-xs">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <h4>Volume</h4>
              <p>Sold from Pumps (Ltrs) <span class="purple-text">30,035.97</span></p>
              <p>Taken from Tanks (Ltrs) <span>29,853.00</span></p>
            </div>

            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <h4>Tolerance</h4>
              <div class="row">
                <div class="col-lg-4 col-xs-12">
                  <div>Petrol</div>
                  <h3 class="purple">20.06</h3>
                </div>
                <div class="col-lg-4 col-xs-12">
                  <div>Diesel</div>
                  <h3 class="purple">20.44</h3>
                </div>
                <div class="col-lg-4 col-xs-12">
                  <div>Kerosene</div>
                  <h3 class="purple">20.73</h3>
                </div>
              </div>
            </div>
          </div>

          <!--mobile view-->
          <div class="col-xs-12 hidden-md hidden-lg">
            <!-- small box -->
            <div class="box-body box-margin bg-white text-center">
              <p><strong>Volume Sold from Pumps (Ltrs)</strong></p>
              <h3 class="orange"><strong>30,035.97</strong></h3>
            </div>
          </div>

          <div class="col-xs-12 hidden-md hidden-lg">
            <!-- small box -->
            <div class="box-body box-margin bg-white text-center">
              <p><strong>Volume Taken from Tanks (Ltrs)</strong></p>
              <h3 class="orange"><strong>29,853.00</strong></h3>
            </div>
          </div>

          <div class="col-lg-4 col-xs-12 hidden-xs">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <p><strong>Value of Consumption from Tanks</strong></p>
              <h3 class="green"><strong>₦4,559,495.25</strong></h3>
            </div>

            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <p><strong>Expected Revenue for Sales</strong></p>
              <h3 class="green"><strong>₦4,591,391.25</strong></h3>
            </div>

            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <p><strong>Tolerance Related Extra</strong></p>
              <h3 class="green"><strong>₦31,896.25</strong></h3>
            </div>
          </div>

          <!--mobile view-->
          <div class="col-xs-12 hidden-md hidden-lg text-center">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <p><strong>Expected Revenue for Sales</strong></p>
              <h3 class="orange"><strong>₦4,591,391.25</strong></h3>
            </div>

            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <p><strong>Value of Consumption from Tanks</strong></p>
              <h3 class="orange"><strong>₦4,559,495.25</strong></h3>
            </div>

            <!-- small box -->
            <div class="box-body box-margin bg-white hidden-md hidden-lg">
              <h4>Tolerance</h4>
              <div class="row">
                <div class="col-xs-4 text-center">
                  <div>Petrol</div>
                  <h3 class="orange"><strong>20.06</strong></h3>
                </div>
                <div class="col-xs-4 text-center">
                  <div>Diesel</div>
                  <h3 class="orange"><strong>20.44</strong></h3>
                </div>
                <div class="col-xs-4 text-center">
                  <div>Kerosene</div>
                  <h3 class="orange"><strong>20.73</strong></h3>
                </div>
              </div>
            </div>

            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <p><strong>Tolerance Related Extra</strong></p>
              <h3 class="green"><strong>₦31,896.25</strong></h3>
            </div>
          </div>
          <!--mobile view-->

          <div class="col-lg-4 col-xs-12">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <h5 class="vol-taken"><strong>Volume Taken Vs Daily Target</strong></h5>
              <div class="text-center">
                <hr>
                <p><strong>Volume Taken</strong></p>
                <h3 class="green"><strong>30K</strong></h3>
                <p>Taken from Tanks (Ltrs) <span>29,853.00</span></p>
                <hr>
                <p>Daily Target <span class="sky-blue"><strong>20K</strong></span></p>
                <p class="hyphen text-center"><i class="fa fa-minus"></i></p>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--toggleable content-->
      <div class="row">
        <!--masonry-->
        <div class="grid">
          <div class="col-lg-12 col-xs-12">
            <div class="box-margin box-header bg-white" data-target="#monthlyCompare">
              <h3 class="box-title">MONTHLY COMPARISON</h3>
              <button type="button" class="btn btn-box-tool box-tools pull-right" data-toggle="collapse" data-target="#monthlyCompare" data-widget="collapse"><!--<i class="fa fa-minus"></i>-->
              </button>
            </div>
          </div>
        </div>

        <div class="collapse in" id="monthlyCompare">
          <!--mobile view-->
          <div class="grid">
            <div class="col-xs-12 hidden-md hidden-lg">
              <div class="bg-white box-body">
                <canvas id="xs_monthlyChart" class="" width="400" height="200"></canvas>
              </div>
            </div>
          </div>

          <!--masonry-->
          <div class="grid hidden-md hidden-lg">
            <div class="col-xs-12 text-center">
              <div class="bg-white box-body box-margin">
                <h4>Sales</h4>
                <h3 class="green"><strong>₦106,139</strong></h3>
              </div>
            </div>

            <div class="col-xs-12 text-center">
              <div class="bg-white box-body box-margin">
                <h4>Revenue</h4>
                <h3 class="green"><strong>₦106,139</strong></h3>
              </div>
            </div>

            <div class="col-xs-12">
              <!-- small box -->
              <div class="bg-white box-body text-center">
                <h4>Revenue By Station & Location</h4>
                <canvas id="xs_revenueChart" width="400" height="400"></canvas>
              </div>
            </div>

            <div class="col-xs-12 text-center">
              <!-- small box -->
              <div class="box-body box-margin bg-white">
                <h4>Volume Sold</h4>
                <div class="row">
                  <div class="col-xs-4">
                    <div>Petrol</div>
                    <h3 class="purple"><strong>20.06</strong></h3>
                  </div>
                  <div class="col-xs-4">
                    <div>Diesel</div>
                    <h3 class="purple"><strong>20.44</strong></h3>
                  </div>
                  <div class="col-xs-4">
                    <div>Kerosene</div>
                    <h3 class="purple"><strong>20.73</strong></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--mobile view-->

          <!--masonry-->
          <div class="grid">
            <div class="col-lg-12 hidden-xs">
              <div class="bg-white box-body">
                <h4>Volume Sold from Pumps Vs Tank Consumption</h4>
                <canvas id="monthlyChart" class="" width="400" height="100"></canvas>
              </div>
            </div>
          </div>
          
          <!--masonry-->
          <div class="grid">
            <div class="col-lg-4 hidden-xs">
              <div class="bg-white box-body box-margin">
                <h4>Sales This Month Vs Last Month</h4>
                <h3 class="orange"><strong>₦106,139</strong></h3>
              </div>
            </div>

            <div class="col-lg-4 hidden-xs">
              <div class="bg-white box-body box-margin">
                  <h4>Sales This Month Vs Last Month</h4>
                  <h3 class="orange"><strong>₦106,139</strong></h3>
              </div>
            </div>

            <div class="col-lg-4 hidden-xs">
              <div class="bg-white box-body box-margin text-center">
                <div class="doughnut">
                <canvas id="monthly_target" width="120" height="120" class=""></canvas>
              </div>
                <!--<input type="text" class="knob" value="60" data-width="120" data-height="120" data-fgColor="#ff9900" data-readonly="true">-->
                <h3 class="orange"><strong>₦106,139</strong></h3>
              </div>
            </div>

            <div class="col-lg-4 hidden-xs">
              <!-- small box -->
              <div class="bg-white box-body">
                <h4>Revenue By Station & Location</h4>
                <canvas id="revenueChart" class="hidden-xs" width="400" height="400"></canvas>
              </div>
            </div>

            <div class="col-lg-4 hidden-xs">
              <!-- small box -->
              <div class="box-body box-margin bg-white">
                <h4>Tolerance</h4>
                <div class="row">
                  <div class="col-lg-4 col-xs-6">
                    <div>Petrol</div>
                    <h3>20.06</h3>
                  </div>
                  <div class="col-lg-4 col-xs-6">
                    <div>Diesel</div>
                    <h3>20.44</h3>
                  </div>
                  <div class="col-lg-4 col-xs-6">
                    <div>Kerosene</div>
                    <h3>20.73</h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-xs-12 hidden-md hidden-lg">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
                <h5 class="vol-taken"><strong>Volume Taken Vs Daily Target</strong></h5>
                <div class="text-center">
                  <hr>
                  <p><strong>Volume Taken</strong></p>
                  <h3 class="green"><strong>30K</strong></h3>
                  <p>Taken from Tanks (Ltrs) <span>29,853.00</span></p>
                  <hr>
                  <p>Daily Target <span class="sky-blue"><strong>20K</strong></span></p>
                  <p class="hyphen text-center"><i class="fa fa-minus"></i></p>
                  <hr>
                </div>
              </div>
            </div>

            <div class="col-lg-8 hidden-xs">
              <div class="bg-white box-body box-margin text-center">
                <div id="world-map2" style="height: 250px; width: 100%;"></div>
                <h3 class="orange"><strong>₦106,139</strong></h3>
              </div>
            </div>
          </div>
          <!--MONTHLY COMPARISON-->
        </div>
      </div>

      <!--toggleable content-->
      <div class="row">
        <!--masonry-->
        <div class="grid">
          <div class="col-lg-12 col-xs-12">
            <div class="box-margin box-header bg-white" data-target="#productOverview">
              <h3 class="box-title">PRODUCT OVERVIEW</h3>
              <button type="button" class="btn btn-box-tool box-tools pull-right" data-toggle="collapse" data-target="#productOverview" data-widget="collapse"><!--<i class="fa fa-minus"></i>-->
              </button>
            </div>
          </div>
        </div>

        <div class="collapse in" id="productOverview">
          <!--masonry-->
          <div class="grid">
            <div class="col-lg-4 col-xs-12">
              <div class="bg-white box-body box-margin">
                <h4 class="hidden-xs">Volume Sold</h4>
                <canvas id="volumeSold" width="400" height="200"></canvas>
              </div>
            </div>

            <div class="col-lg-8 col-xs-12">
              <div class="bg-white box-body box-margin hidden-xs">
                <h4>Revenue</h4>
                <canvas id="revenue" width="400" height="100"></canvas>
              </div>

              <div class="bg-white box-body box-margin text-center hidden-md hidden-lg">
                <h4>Revenue Trend</h4>
                <canvas id="xs_revenue" width="400" height="200"></canvas>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="bg-white box-body box-margin hidden-xs">
                <h4>Supply</h4>
                <canvas id="supply" width="400" height="100"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--toggleable content-->
      <div class="row">
        <div class="grid">
          <div class="col-lg-12 col-xs-12">
            <div class="box-margin box-header bg-white" data-target="#bankOverview">
              <h3 class="box-title">BANK OVERVIEW</h3>
              <button type="button" class="btn btn-box-tool box-tools pull-right" data-toggle="collapse" data-target="#bankOverview" data-widget="collapse"><!--<i class="fa fa-minus"></i>-->
              </button>
            </div>
          </div>
        </div>

        <div class="collapse in" id="bankOverview">
          <!--mobile view-->
          <div class="grid">
            <div class="col-xs-12 hidden-md hidden-lg">
              <div class="bg-white box-body">
                <canvas id="xs_reconcileChart" width="400" height="200"></canvas>
              </div>
            </div>
          </div>

          <!--masonry-->
          <div class="grid hidden-md hidden-lg">
            <div class="col-xs-12 text-center">
              <div class="bg-white box-body box-margin">
                <h4><strong>Days With Outstanding Payments</strong></h4>
                <h1 class="purple"><strong id="mOutPay">46</strong></h1>
              </div>
            </div>

            <div class="col-xs-12 text-center">
              <div class="bg-white box-body box-margin">
                <h4><strong>Incomplete Bank Deposits</strong></h4>
                <h1 class="orange"><strong id="mBankDep">6</strong></h1>
              </div>
            </div>
          </div>
          <!--mobile view-->

          <!--masonry-->
          <div class="grid">
            <div class="col-lg-4 hidden-xs">
              <div class="bg-white box-body box-margin">
                <h4 class="col-lg-7 col-xs-12 payments"><strong id="OutPay">Days With Outstanding Payments</strong></h4>
                <h2 class="col-lg-5 purple-bg text-center"><strong>46</strong></h2>
              </div>
            </div>

            <div class="col-lg-8 hidden-xs">
              <div class="bg-white box-body box-margin">
                <h4>Reconciliation</h4>
                <canvas id="reconcile" width="400" height="160"></canvas>
              </div>
            </div>

            <div class="col-lg-4 hidden-xs">
              <div class="bg-white box-body box-margin">
                <h4 class="col-lg-7 payments"><strong>Incomplete Bank Deposits</strong></h4>
                <h2 class="col-lg-5 orange-bg text-center"><strong id="BankDep">6</strong></h2>
              </div>
            </div>

            <div class="col-lg-12 hidden-xs">
              <div class="bg-white box-body box-margin">
                <h4>Volume Consumption Trend</h4>
                <canvas id="vol_trend" width="400" height="100"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!--masonry-->
        <div class="grid">
          <div class="col-lg-12 col-xs-12">
            <div class="box-header bg-white" data-toggle="collapse" data-target="#overview">
              <h3 class="box-title">OVERVIEW</h3>
              <button type="button" class="btn btn-box-tool pull-right" data-toggle="collapse" data-target="#overviewToday" data-widget="collapse"><!--<i class="fa fa-minus"></i>-->
              </button>
            </div>
          </div>
        </div>

        <div class="collapse in" id="overview">
          <div class="col-lg-4 col-xs-6 hidden-xs">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <div><h4><strong>Petrol</strong></h4></div>
              <div class="text-center">
                <div class="doughnut">
                  <canvas id="petrol" width="120" height="120"></canvas>
                </div>
                <!--<input type="text" class="knob" value="60" data-width="120" data-height="120" data-fgColor="#cc0066" data-readonly="true">-->
                <div class="inner">
                  <h5 class="pdt-text"><strong>Volume</strong></h5>
                  <h3 id="vol-petrol" class="petrol pdt-text ">41,208</h3>
                  <p class="pdt-text">Days to Reorder   <span id="pms_reorder" class="petrol">4,508</span></p>
                  <hr>
                  <p class="pdt-text">Days to Dead Stock  <span id="pms_deadstock" class="petrol">3,866</span></p>
                  <!--<hr>
                  <p class="pdt-text">Volume Sold MTD  <span class="petrol">18,914.00</span></p>
                  <hr>
                  <p class="pdt-text">Volume Sold YTD  <span class="petrol">154,349.00</span></p>-->
                </div>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-xs-6 hidden-xs">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <div><h4><strong>Diesel</strong></h4></div>
              <div class="text-center">
                <div class="doughnut">
                  <canvas id="diesel" width="120" height="120" class=""></canvas>
                </div>
                <!--<input type="text" class="knob" value="60" data-width="120" data-height="120" data-fgColor="#ff9900" data-readonly="true">-->
                <div class="inner">
                  <h5 class="pdt-text"><strong>Volume</strong></h5>
                  <h3 class="diesel pdt-text">35,615</h3>
                  <p class="pdt-text">Days to Reorder   <span id="ago_reorder" class="diesel">4,508</span></p>
                  <hr>
                  <p class="pdt-text">Days to Dead Stock  <span id="ago_deadstock" class="diesel">3,866</span></p>
                  <!--<hr>
                  <p class="pdt-text">Volume Sold MTD  <span class="diesel">18,914.00</span></p>
                  <hr>
                  <p class="pdt-text">Volume Sold YTD  <span class="diesel">154,349.00</span></p>-->
                </div>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-xs-6 hidden-xs">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <div><h4><strong>Kerosene</strong></h4></div>
              <div class="text-center">
                <div class="doughnut">
                  <canvas id="kero" width="120" height="120" class=""></canvas>
                </div>
                <!--<input type="text" class="knob" value="60" data-width="120" data-height="120" data-fgColor="#00802b" data-readonly="true">-->
                <div class="inner">
                  <h5 class="pdt-text"><strong>Volume</strong></h5>
                  <h3 class="kerosene pdt-text">41,208</h3>
                  <p class="pdt-text">Days to Reorder   <span id="dpk_reorder" class="kerosene">4,508</span></p>
                  <hr>
                  <p class="pdt-text">Days to Dead Stock  <span id="dpk_deadstock" class="kerosene">3,866</span></p>
                  <!--<hr>
                  <p class="pdt-text">Volume Sold MTD  <span class="kerosene">18,914.00</span></p>
                  <hr>
                  <p class="pdt-text">Volume Sold YTD  <span class="kerosene">154,349.00</span></p>-->
                </div>
              </div>
            </div>
          </div>
          <!-- ./col -->

          <!-- mobile view -->
          <div class="col-xs-12 hidden-lg hidden-md">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <table class="table text-right">
                <thead>
                  <tr>
                    <th class="text-right">Volume</th>
                    <th class="text-right"></th>
                    <th class="text-right">Days to Reorder</th>
                    <th class="text-right">Days to Dead Stock</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="bottom">Petrol</td>
                    <td class="petrol pdt-text">41,208</td>
                    <td class="petrol pdt-text">7</td>
                    <td class="petrol pdt-text">9</td>
                  </tr>
                  <tr>
                    <td>Diesel</td>
                    <td class="diesel pdt-text">35,615</td>
                    <td class="diesel pdt-text">10</td>
                    <td class="diesel pdt-text">11</td>
                  </tr>
                  <tr>
                    <td>Kerosene</td>
                    <td class="kerosene pdt-text">9,994</td>
                    <td class="kerosene pdt-text">3,866</td>
                    <td class="kerosene pdt-text">4,508</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- mobile view -->

            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <h4>Volume Sold Month To Date</h4>
              <div class="vol-sold">
                <div class="text-center">
                  <span>Petrol</span>
                  <h3 class="green">85,488.00</h3>
                </div>
                <div class="text-center">
                  <span>Diesel</span>
                  <h3 class="green">18,914.00</h3>
                </div>
                <div class="kero text-center">
                  <span>Kerosene</span>
                  <h3 class="green">913.00</h3>
                </div>
              </div>

              <hr>

              <h4>Volume Sold Year To Date</h4>
              <div class="vol-sold">
                <div>
                  <span>Petrol</span>
                  <h3 class="green">85,488.00</h3>
                </div>
                <div>
                  <span>Diesel</span>
                  <h3 class="green">18,914.00</h3>
                </div>
                <div class="kero">
                  <span>Kerosene</span>
                  <h3 class="green">913.00</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
@endsection