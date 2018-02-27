@extends('layouts.app')

@section('content')
  <!--Authenticated station manager role > 1-->
    @if (Auth::user()->role > '1')
  <!-- Select box for stations -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <p>
            <select class="form-control">
            <option value="">Select Station</option>
            <option value="CinOil Yaba">CinOil Yaba</option>
            <option value="Station B">Station B</option>
            <option value="Station C">Station C</option>
            <option value="Station D">Station D</option>
            <option value="Station E">Station E</option>
            <option value="Station F">Station F</option>
          </select>
          </p>
        </div>
        
        <div class="col-lg-4 input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="text" class="form-control pull-right" id="datepicker">
        </div>
      </div>
    @endif
	<!-- Small boxes (Stat box) -->
      <div class="row">
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
                <p class="pdt-text">Days to Reorder   <span class="petrol">4,508</span></p>
                <hr>
                <p class="pdt-text">Days to Dead Stock  <span class="petrol">3,866</span></p>
                <hr>
                <p class="pdt-text">Volume Sold MTD  <span class="petrol">18,914.00</span></p>
                <hr>
                <p class="pdt-text">Volume Sold YTD  <span class="petrol">154,349.00</span></p>
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
                <p class="pdt-text">Days to Reorder   <span class="diesel">4,508</span></p>
                <hr>
                <p class="pdt-text">Days to Dead Stock  <span class="diesel">3,866</span></p>
                <hr>
                <p class="pdt-text">Volume Sold MTD  <span class="diesel">18,914.00</span></p>
                <hr>
                <p class="pdt-text">Volume Sold YTD  <span class="diesel">154,349.00</span></p>
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
                <p class="pdt-text">Days to Reorder   <span class="kerosene">4,508</span></p>
                <hr>
                <p class="pdt-text">Days to Dead Stock  <span class="kerosene">3,866</span></p>
                <hr>
                <p class="pdt-text">Volume Sold MTD  <span class="kerosene">18,914.00</span></p>
                <hr>
                <p class="pdt-text">Volume Sold YTD  <span class="kerosene">154,349.00</span></p>
              </div>
            </div>
          </div>
        </div>
        <!-- ./col -->

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
                  <td>Petrol</td>
                  <td>41,208</td>
                  <td>7</td>
                  <td>9</td>
                </tr>
                <tr>
                  <td>Diesel</td>
                  <td>35,615</td>
                  <td>10</td>
                  <td>11</td>
                </tr>
                <tr>
                  <td>Kerosene</td>
                  <td>9,994</td>
                  <td>3,866</td>
                  <td>4,508</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- small box -->
          <div class="box-body box-margin bg-white">
            <h4>Volume Sold Month To Date</h4>
            <div class="vol-sold">
              <div class="text-center">
                <span>Petrol</span>
                <h3>85,488.00</h3>
              </div>
              <div class="text-center">
                <span>Diesel</span>
                <h3>18,914.00</h3>
              </div>
              <div class="kero text-center">
                <span>Kerosene</span>
                <h3>913.00</h3>
              </div>
            </div>

            <hr>

            <h4>Volume Sold Year To Date</h4>
            <div class="vol-sold">
              <div>
                <span>Petrol</span>
                <h3>85,488.00</h3>
              </div>
              <div>
                <span>Diesel</span>
                <h3>18,914.00</h3>
              </div>
              <div class="kero">
                <span>Kerosene</span>
                <h3>913.00</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!--toggleable content-->
      <div class="row">
        <!--masonry-->
        <div class="grid">
          <div class="col-lg-12 col-xs-12">
            <div class="box-header bg-white">
              <h3 class="box-title">OVERVIEW: Today</h3>
              <button type="button" class="btn btn-box-tool pull-right" data-toggle="collapse" data-target="#overviewToday" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
        </div>

        <div class="collapse in" id="overviewToday">
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
            <div class="box-margin box-header bg-white">
              <h3 class="box-title">OVERVIEW: YESTERDAY</h3>
              <button type="button" class="btn btn-box-tool pull-right" data-toggle="collapse" data-target="#overviewYesterday" data-widget="collapse"><i class="fa fa-minus"></i>
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
              <button type="button" class="btn btn-box-tool box-tools pull-right" data-toggle="collapse" data-target="#monthlyCompare" data-widget="collapse"><i class="fa fa-minus"></i>
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
              <button type="button" class="btn btn-box-tool box-tools pull-right" data-toggle="collapse" data-target="#productOverview" data-widget="collapse"><i class="fa fa-minus"></i>
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
              <button type="button" class="btn btn-box-tool box-tools pull-right" data-toggle="collapse" data-target="#bankOverview" data-widget="collapse"><i class="fa fa-minus"></i>
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
                <h1 class="purple"><strong>46</strong></h1>
              </div>
            </div>

            <div class="col-xs-12 text-center">
              <div class="bg-white box-body box-margin">
                <h4><strong>Days With Outstanding Payments</strong></h4>
                <h1 class="orange"><strong>6</strong></h1>
              </div>
            </div>
          </div>
          <!--mobile view-->

          <!--masonry-->
          <div class="grid">
            <div class="col-lg-4 hidden-xs">
              <div class="bg-white box-body box-margin">
                <h4 class="col-lg-7 col-xs-12 payments"><strong>Days With Outstanding Payments</strong></h4>
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
                <h2 class="col-lg-5 orange-bg text-center"><strong>6</strong></h2>
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
@endsection