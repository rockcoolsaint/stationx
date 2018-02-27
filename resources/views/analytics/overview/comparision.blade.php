<div id="monthly-comparision" class="row">
    <!--masonry-->
    <div class="row grid">
        <div class="col-md-12">
            <div class="box-header bg-white" data-toggle="collapse" data-target="#comparision">
                <h3 class="box-title">MONTHLY COMPARISION</h3>
                <button type="button" class="btn btn-box-tool pull-right" data-toggle="collapse" data-target="#replenishment" data-widget="collapse"><!--<i class="fa fa-minus"></i>-->
                </button>
            </div>
        </div>
    </div>

    <div id="comparision" class="collapse in">
        <div class="row hidden-xs">
            <div class="col-md-12">
                <div id="month-tolerance-chart" class="bg-white box-margin">
                    <div class="efizzy"></div>
                    <h4 class="box-label">Volume Sold Vs Tank Consumption</h4>
                    <hr>
                    <div >
                        <span class="loading-text hide">loading...</span>
                        <canvas id="month-tolerance-canvas" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div id="sales-comparision" class="box-margin bg-white">
                    <div class="red-efizzy"></div>
                    <h4 class="box-label">Sales This Month Vs Last Month</h4>
                    <hr>
                    <div>
                        <span class="box-value done-loading">0.00</span>
                        <span class="percent-margin hide"></span>
                        <span class="direction-icon hide"></span>
                        <span class="loading-text hide">loading...</span>
                        <span class="loading-hack loading-text hide box-value">0</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div id="comp-product-tolerance" class="product-tolerance box-margin bg-white">
                    <div class="efizzy"></div>
                    <h4 class="box-label">Stock Gain\Loss</h4>
                    <hr>
                    <div class="row">
                        <div id="comp-pms-tolerance" class="col-lg-4 col-xs-12">
                            <div class="box-value-heading">Petrol</div>
                            <div>
                                <span class="loading-text hide">loading...</span>
                                <span class="tolerance-value box-value done-loading">0.00</span>
                                <span class="loading-hack loading-text hide box-value">0</span>
                            </div>
                            <div class="tolerance-status hide red"></div>
                        </div>
                        <div id="comp-ago-tolerance" class="col-lg-4 col-xs-12">
                            <div class="box-value-heading">Diesel</div>
                            <div>
                                <span class="loading-text hide">loading...</span>
                                <span class="tolerance-value box-value done-loading">0.00</span>
                                <span class="loading-hack loading-text hide box-value">0</span>
                            </div>
                            <div class="tolerance-status hide red"></div>
                        </div>
                        <div id="comp-dpk-tolerance" class="col-lg-4 col-xs-12">
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
                <div id="revenue-comparision" class="box-margin bg-white">
                    <div class="green-efizzy"></div>
                    <h4 class="box-label">Revenue This Month Vs Last Month</h4>
                    <hr>
                    <div>
                        <span class="box-value green">₦</span>&nbsp;
                        <span class="box-value done-loading">0.00</span>
                        <span class="percent-margin hide"></span>
                        <span class="direction-icon hide"></span>
                        <span class="loading-text hide">loading...</span>
                        <span class="loading-hack loading-text hide box-value">0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>