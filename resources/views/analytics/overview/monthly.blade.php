
<!--toggleable content-->

<div id="today" class="row">
    <!--masonry-->
    <div class="row grid">
        <div class="col-md-12">
            <div class="box-header bg-white" data-toggle="collapse" data-target="#overviewMonthly">
                <h3 class="box-title">OVERVIEW: Monthly <span class="loading-text loading hide">Loading ...</span></h3>
                <button type="button" class="btn btn-box-tool pull-right" data-toggle="collapse" data-target="#overviewMonthly" data-widget="collapse"><!--<i class="fa fa-minus"></i>-->
                </button>
            </div>
        </div>
    </div>

    <div class="collapse in" id="overviewMonthly">

        <div class="row">
            <div class="col-md-12">
                <!-- small box -->
                <div class="bg-white box-body box-margin">
                    <h4>Volume Sold from Pumps Vs Tank Consumption</h4>
                    <div id="hourly_sales">
                        <canvas id="sales_trendChart" class="hidden-xs" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <!-- small box -->
                <div id="today_transactions" class="box-margin bg-white">
                    <div class="efizzy"></div>
                    <h4 class="box-label">Transactions</h4>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12 col-xs-12">
                            <div class="box-value-heading">No. of Petrol purchases&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="pms_transactions" class="purple box-value">0</span></div>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <div class="box-value-heading">No. of Diesel purchases&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="ago_transactions" class="purple box-value">0</span></div>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <div class="box-value-heading">No. of Kerosene purchases<span id="dpk_transactions" class="purple box-value">0</span></div>
                        </div>
                    </div>
                </div>

                <!-- small box -->
                <div id="volume" class="box-margin bg-white">
                    <div class="efizzy"></div>
                    <h4 class="box-label">Volume(Liters)</h4>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12 col-xs-12">
                            <div class="box-value-heading">Sold from Petrol pumps&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="pms_volume" class="purple box-value">0.00</span></div>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <div class="box-value-heading">Sold from Diesel pumps&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="ago_volume" class="purple box-value">0.00</span></div>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <div class="box-value-heading">Sold from Kerosene pumps<span id="dpk_volume" class="purple box-value">0.00</span></div>
                        </div>
                    </div>
                </div>

            </div>


            <div id="today_revenue" class="col-md-4">
                <!-- small box -->

                <div class="box-margin bg-white">
                    <div class="green-efizzy"></div>
                    <h4 class="box-label">Revenue (Petrol)</h4>
                    <hr>
                    <div class="green box-value">₦&nbsp;<span id="pms_revenue">0.00</span></div>
                </div>

                <!-- small box -->
                <div class="box-margin bg-white">
                    <div class="green-efizzy"></div>
                    <h4 class="box-label">Revenue (Diesel)</h4>
                    <hr>
                    <div class="green box-value">₦&nbsp;<span id="ago_revenue">0.00</span></div>
                </div>

                <!-- small box -->
                <div class="box-margin bg-white">
                    <div class="green-efizzy"></div>
                    <h4 class="box-label">Revenue (Kerosene)</h4>
                    <hr>
                    <div class="green box-value">₦&nbsp;<span id="dpk_revenue">0.00</span></div>
                </div>
            </div>


            <div class="col-md-4">
                <!-- small box -->

                <div class="box-margin bg-white">
                    <div class="efizzy"></div>
                    <h4 class="box-label">Average Volume per Customer (Liters)</h4>
                    <hr>
                    <div id="avg_vol" class="box-value">
                        30L
                    </div>
                </div>

                <div class="box-margin bg-white">
                    <div class="efizzy"></div>
                    <h4 class="box-label">Average Customer Value</h4>
                    <hr>
                    <div id="avg_val" class="box-value">
                        30K
                    </div>
                </div>

                <div class="box-margin bg-white">
                    <div class="efizzy"></div>
                    <div><h4 class="box-label">No. of Pumps on Site: <span id="num_pumps" class="box-value">0</span></h4></div>
                    <hr>
                    <div class="balance">
                        <h4 class="box-label">No. of Pumps Selling: <span id="sell_pumps" class="box-value">0</span></h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
