
<!--toggleable content-->
<div id="yday" class="row">
    <!--masonry-->
    <div class="grid row">
        <div class="col-md-12">
            <div class="box-header bg-white" data-toggle="collapse" data-target="#overviewYesterday">
                <h3 class="box-title">OVERVIEW: <span id="filter-date-heading">YESTERDAY</span></h3>
                <button type="button" class="btn btn-box-tool pull-right" data-toggle="collapse" data-target="#overviewYesterday" data-widget="collapse"><!--<i class="fa fa-minus"></i>-->
                </button>
            </div>
        </div>
    </div>



    <div class="collapse in" id="overviewYesterday">

        <div class="filter-wrapper row">
            <div class="col-md-12 ">
                <!--<div class="box-margin bg-white">-->
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="radio-wrapper">
                            <label class="col-sm-3 col-xs-6"><input type="radio" name="product" value="all"> ALL</span><span class="check"></span></label>
                            <label class="col-sm-3 col-xs-6"><input type="radio" name="product" value="pms"> PMS</span><span class="check"></span></label>
                            <label class="col-sm-3 col-xs-6"><input type="radio" name="product" value="ago"> AGO</span><span class="check"></span></label>
                            <label class="col-sm-3 col-xs-6"><input type="radio" name="product" value="dpk"> DPK</span><span class="check"></span></label>
                            </div>
                        </div>


                        <!--<input type="radio" name="product" value="all"> ALL</span>
                        <input type="radio" name="product" value="pms"> PMS</span>
                        <input type="radio" name="product" value="ago"> AGO</span>
                        <input type="radio" name="product" value="dpk"> DPK</span>-->
                        <div class="col-md-4 date-wrapper">
                            <input type="text" id="from-datepicker">to
                            <input type="text" id="to-datepicker">
                        </div>


                        <div class="col-md-4 filter-button-wrapper">
                            <button id="filter-button" class="btn btn-info">Filter</button>
                        </div>


                    </div>
                    <!--<div class="row">

                    </div>-->


                <!--</div>-->
            </div>
        </div>




        <div class="row yday-sales">
            <div class="col-md-4">
                <!-- small box -->
                <div class="box-margin bg-white">
                    <div class="efizzy"></div>
                    <h4 class="box-label">Volume(Litres)</h4>
                    <hr>

                    <div class="box-value-heading">
                        Sold from Pumps
                        <span class="loading-text hide">loading...</span>
                        <span class="loading-hack loading-text hide box-value">0</span>
                        <span class="purple-text pump-sales box-value done-loading">0.00</span>
                    </div>
                    <div class="box-value-heading">
                        Consumed from Tanks
                        <span class="loading-text hide">loading...</span>
                        <span class="loading-hack loading-text hide box-value">0</span>
                        <span class="purple-text tank-consumption box-value done-loading">0.00</span>
                    </div>
                </div>

                <!-- small box -->
                <div class="product-tolerance box-margin bg-white">
                    <div class="efizzy"></div>
                    <h4 class="box-label">Stock Gain\Loss</h4>
                    <hr>
                    <div class="row">
                        <div id="pms-tolerance" class="col-lg-4 col-xs-12">
                            <div class="box-value-heading">Petrol</div>
                            <div>
                                <span class="loading-text hide">loading...</span>
                                <span class="tolerance-value box-value done-loading">0.00</span>
                                <span class="loading-hack loading-text hide box-value">0</span>
                            </div>
                            <div class="tolerance-status hide red"></div>
                        </div>
                        <div id="ago-tolerance" class="col-lg-4 col-xs-12">
                            <div class="box-value-heading">Diesel</div>
                            <div>
                                <span class="loading-text hide">loading...</span>
                                <span class="tolerance-value box-value done-loading">0.00</span>
                                <span class="loading-hack loading-text hide box-value">0</span>
                            </div>
                            <div class="tolerance-status hide red"></div>
                        </div>
                        <div id="dpk-tolerance" class="col-lg-4 col-xs-12">
                            <div class="box-value-heading">Kerosene</div>
                            <div>
                                <span class="loading-text hide">loading...</span>
                                <span class="tolerance-value box-value done-loading">0.00</span>
                                <span class="loading-hack loading-text hide box-value">0</span>
                            </div>
                            <div class="tolerance-status hide red"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <!-- small box -->
                <div class="box-margin bg-white">
                    <div class="green-efizzy"></div>
                    <h4 class="box-label">Value of Consumption from Tanks</h4>
                    <hr>
                    <div>
                        <span class="box-value green">₦</span>&nbsp;<span class="green tank-consumption-value box-value done-loading">0.00</span>
                        <span class="loading-text hide">loading...</span>
                        <span class="loading-hack loading-text hide box-value">0</span>
                    </div>
                </div>

                <!-- small box -->
                <div class="box-margin bg-white">
                    <div class="green-efizzy"></div>
                    <h4 class="box-label">Revenue for Sales</h4>
                    <hr>
                    <div>
                        <span class="box-value green">₦</span>&nbsp;<span class="green expected-revenue box-value done-loading">0.00</span>
                        <span class="loading-text hide">loading...</span>
                        <span class="loading-hack loading-text hide box-value">0</span>
                    </div>
                </div>

                <!-- small box -->
                <div class="box-margin bg-white">
                    <div class="green-efizzy"></div>
                    <h4 class="box-label">Value of Stock Gain\Loss</h4>
                    <hr>
                    <div>
                        <span class="box-value green">₦</span>&nbsp;<span class="green tolerance-extra box-value done-loading">0.00</span>
                        <span class="loading-text hide">loading...</span>
                        <span class="loading-hack loading-text hide box-value">0</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box-margin bg-white">
                    <!-- small box -->
                    <div class="green-efizzy"></div>
                    <h4 class="box-label">Volume Sold Vs Daily Target(Litres)</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="volume-taken">
                                <canvas id="volume-taken-chart" width="120" height="253" class="hidden-xs"></canvas>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="text-center volume-target">
                                <p><strong>Volume Sold</strong></p>
                                <div>
                                    <span class="loading-text hide">loading...</span>
                                    <span class="sky-blue volume-sold box-value done-loading">0K</span>
                                    <span class="loading-hack loading-text hide box-value">0</span>
                                </div>
                                <hr>
                                <p>Daily Target <span class="loading-text hide">loading...</span><strong><span class="green daily-target done-loading">0K</span></strong></p>
                                <p class="hyphen text-center"><i class="fa fa-minus"></i></p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row yday-stock">
            <div class="col-md-4">
                <div class="bg-white" >
                    <div class="efizzy"></div>
                    <h4 id="pms-closing-stock-label" class="box-label">PMS Closing Stock(Litres)</h4>
                    <hr>
                    <div>
                        <span class="purple pms-closing-stock box-value done-loading">0.00</span>
                        <span class="loading-text hide">loading...</span>
                        <span class="loading-hack loading-text hide box-value">0</span>
                    </div>
                </div>
            </div>

            <!-- small box -->
            <div class="col-md-4">
                <div class="bg-white">
                    <div class="efizzy"></div>
                    <h4 id="ago-closing-stock-label" class="box-label">AGO Closing Stock(Litres)</h4>
                    <hr>
                    <div>
                        <span class="purple ago-closing-stock box-value done-loading">0.00</span>
                        <span class="loading-text hide">loading...</span>
                        <span class="loading-hack loading-text hide box-value">0</span>
                    </div>
                </div>
            </div>

            <!-- small box -->
            <div class="col-md-4">
                <div class="bg-white">
                    <div class="efizzy"></div>
                    <h4 id="dpk-closing-stock-label" class="box-label">DPK Closing Stock(Litres)</h4>
                    <hr>
                    <div>
                        <span class="purple dpk-closing-stock box-value done-loading">0.00</span>
                        <span class="loading-text hide">loading...</span>
                        <span class="loading-hack loading-text hide box-value">0</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>