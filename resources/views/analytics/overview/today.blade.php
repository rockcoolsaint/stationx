
    <!--toggleable content-->

    <div id="today" class="row">
        <!--masonry-->
        <div class="row grid">
            <div class="col-md-12">
                <div class="box-header bg-white" data-toggle="collapse" data-target="#overviewToday">
                    <h3 class="box-title">SALES OVERVIEW: TODAY &nbsp;<span data-toggle="tooltip" id="automation-status" title="Station has automation means this site either has an FCC or ATG configured. No Automation on site means there is no FCC / ATG installed for near real-time data." > </span></h3>
                    <button type="button" class="btn btn-box-tool pull-right" data-toggle="collapse" data-target="#overviewToday" data-widget="collapse"><!--<i class="fa fa-minus"></i>-->
                    </button>
                </div>
            </div>
        </div>

        <div class="collapse in" id="overviewToday">

            <div class="row">
                <div class="col-md-4">
                    <!-- small box -->
                    <div id="today_transactions" class="box-margin bg-white">
                        <div class="efizzy"></div>
                        <h4 class="box-label">Transactions</h4>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12 col-xs-12">
                                <div class="box-value-heading">
                                    No. of Petrol purchases&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="loading-text hide">loading...</span>
                                    <span class="loading-hack loading-text hide box-value">0</span>
                                    <span id="pms_transactions" class="purple box-value done-loading">0</span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xs-12">
                                <div class="box-value-heading">
                                    No. of Diesel purchases&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="loading-text hide">loading...</span>
                                    <span class="loading-hack loading-text hide box-value">0</span>
                                    <span id="ago_transactions" class="purple box-value done-loading">0</span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xs-12">
                                <div class="box-value-heading">
                                    No. of Kerosene purchases
                                    <span class="loading-text hide">loading...</span>
                                    <span class="loading-hack loading-text hide box-value">0</span>
                                    <span id="dpk_transactions" class="purple box-value done-loading">0</span></div>
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
                                <div class="box-value-heading">
                                    Sold from Petrol pumps&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="loading-text hide">loading...</span>
                                    <span class="loading-hack loading-text hide box-value">0</span>
                                    <span id="pms_volume" class="purple box-value done-loading">0.00</span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xs-12">
                                <div class="box-value-heading">
                                    Sold from Diesel pumps&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="loading-text hide">loading...</span>
                                    <span class="loading-hack loading-text hide box-value">0</span>
                                    <span id="ago_volume" class="purple box-value done-loading">0.00</span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xs-12">
                                <div class="box-value-heading">
                                    Sold from Kerosene pumps
                                    <span class="loading-text hide">loading...</span>
                                    <span class="loading-hack loading-text hide box-value">0</span>
                                    <span id="dpk_volume" class="purple box-value done-loading">0.00</span></div>
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
                        <div>
                            <span class="box-value green">₦</span>&nbsp;
                            <span id="pms_revenue" class="green box-value done-loading">0.00</span>
                            <span class="loading-text hide">loading...</span>
                            <span class="loading-hack loading-text hide box-value">0</span>
                        </div>

                    </div>

                    <!-- small box -->
                    <div class="box-margin bg-white">
                        <div class="green-efizzy"></div>
                        <h4 class="box-label">Revenue (Diesel)</h4>
                        <hr>
                        <div>
                            <span class="box-value green">₦</span>&nbsp;
                            <span id="ago_revenue" class="green box-value done-loading">0.00</span>
                            <span class="loading-text hide">loading...</span>
                            <span class="loading-hack loading-text hide box-value">0</span>
                        </div>

                    </div>

                    <!-- small box -->
                    <div class="box-margin bg-white">
                        <div class="green-efizzy"></div>
                        <h4 class="box-label">Revenue (Kerosene)</h4>
                        <hr>
                        <div>
                            <span class="box-value green">₦</span>&nbsp;
                            <span id="dpk_revenue" class="green box-value done-loading">0.00</span>
                            <span class="loading-text hide">loading...</span>
                            <span class="loading-hack loading-text hide box-value">0</span>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <!-- small box -->

                    <div class="box-margin bg-white">
                        <div class="effizy"></div>
                        <h4 class="box-label">Average Volume per Customer (Litres)</h4>
                        <hr>
                        <span class="loading-text hide">loading...</span>
                        <span class="loading-hack loading-text hide box-value">0</span>
                        <span id="avg_vol" class="purple box-value done-loading">0L</span>
                    </div>

                    <div class="box-margin bg-white">
                        <div class="efizzy"></div>
                        <h4 class="box-label">Average Customer Value</h4>
                        <hr>
                        <span class="box-value green">₦</span>&nbsp;
                        <span class="loading-text hide">loading...</span>
                        <span class="loading-hack loading-text hide box-value">0</span>
                        <span id="avg_val" class="green box-value done-loading"> 0K </span>
                    </div>

                    <div class="box-margin bg-white">
                        <div class="efizzy"></div>
                        <h4 class="box-label">No. of Pumps on Site:</h4>
                        <hr>
                        <span class="loading-text hide">loading...</span>
                        <span class="loading-hack loading-text hide box-value">0</span>
                        <span id="num_pumps" class="purple box-value done-loading">0</span>
                    </div>
                    <div class="box-margin bg-white">
                        <div class="efizzy"></div>
                        <h4 class="box-label">No. of Pumps Selling:</h4>
                        <hr>
                        <span class="loading-text hide">loading...</span>
                        <span class="loading-hack loading-text hide box-value">0</span>
                        <span id="sell_pumps" class="purple box-value done-loading">0</span>
                    </div>

                </div>
            </div>

            <div class="row hidden-xs">
                <div class="col-md-8">
                    <!-- small box -->
                    <div class="bg-white box-margin">
                        <div class="efizzy"></div>
                        <h4 class="box-label">Sales Trend by Hour</h4>
                        <hr>
                        <div id="hourly_sales">
                            <span class="loading-text hide">loading...</span>
                            <canvas id="sales_trendChart" class="hidden-xs" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- small box -->
                    <div class="bg-white box-margin">
                        <div class="efizzy"></div>
                        <h4 class="box-label">Sales by Pump</h4>
                        <hr>
                        <div id="pump_sales">
                            <span class="loading-text hide">loading...</span>
                            <canvas id="pump_saleChart" class="hidden-xs" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
