<div id="overview-repl" class="row hidden-xs">
    <!--masonry-->
    <div class="row grid">
        <div class="col-md-12">
            <div class="box-header bg-white" data-toggle="collapse" data-target="#replenishment">
                <h3 class="box-title">STOCK OVERVIEW  <span id="read-date" class="done-loading"></span> </h3>
                <button type="button" class="btn btn-box-tool pull-right" data-toggle="collapse" data-target="#replenishment" data-widget="collapse"><!--<i class="fa fa-minus"></i>-->
                </button>
            </div>
        </div>
    </div>

    <div id="replenishment" class="collapse in row">

            <div class="col-md-4 pms-repl">
                <!-- small box -->
                <div class="box-margin bg-white">
                    <div class="efizzy"></div>
                    <h4 class="box-label">Petrol</h4>
                    <hr>
                    <!-- <!--<h5 class="pdt-text"><strong>Volume</strong></h5>
                            <h3 id="pms-vol-left" class="petrol pdt-text ">0</h3>-->
                    <div class="text-center box-content">
                        <div class="repl-doughnuts">
                            <canvas id="pms-repl-doughnut"></canvas>
                        </div>
                        <div>Days to Reorder
                            <span class="loading-text hide">loading...</span>
                            <span class="loading-hack loading-text hide box-value">0</span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="pms-reorder" class="box-value done-loading reorder-value">0</span>
                        </div>
                        <span id="pms-reorder-message" class="reorder-message red hide">
                            You need to reorder now
                        </span>
                        <hr class="short">
                        <div>Days to Dead Stock
                            <span class="loading-text hide">loading...</span>
                            <span class="loading-hack loading-text hide box-value">0</span>
                            <span id="pms-deadstock" class="box-value done-loading">0</span>
                        </div>
                        <hr class="short">
                        <div>Volume Sold MTD
                            <span class="loading-text hide">loading...</span>
                            <span class="loading-hack loading-text hide box-value">0</span>
                            <span id="pms-mtd" class="box-value done-loading pms-mtd-value">0</span>
                        </div>
                        <hr class="short">
                        <div>Volume Sold YTD
                            <span class="loading-text hide">loading...</span>
                            <span class="loading-hack loading-text hide box-value">0</span>
                            <span id="pms-ytd" class="box-value done-loading pms-ytd-value">0</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ago-repl">
                <!-- small box -->
                <div class="box-margin bg-white">
                    <div class="efizzy"></div>
                    <h4 class="box-label">Diesel</h4>
                    <hr>
                    <div class="text-center">
                        <div class="repl-doughnuts">
                            <canvas id="ago-repl-doughnut"></canvas>
                        </div>
                        <div>Days to Reorder
                            <span class="loading-text hide">loading...</span>
                            <span class="loading-hack loading-text hide box-value">0</span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="ago-reorder" class="box-value done-loading reorder-value">0</span>
                        </div>
                        <span id="ago-reorder-message" class="reorder-message red hide">
                            You need to reorder now
                        </span>
                        <hr class="short">
                        <div>Days to Dead Stock
                            <span class="loading-text hide">loading...</span>
                            <span class="loading-hack loading-text hide box-value">0</span>
                            <span id="ago-deadstock" class="box-value done-loading reorder-value">0</span>
                        </div>
                        <hr class="short">
                        <div>Volume Sold MTD
                            <span class="loading-text hide">loading...</span>
                            <span class="loading-hack loading-text hide box-value">0</span>
                            <span id="ago-mtd" class="box-value done-loading ago-mtd-value">0</span>
                        </div>
                        <hr class="short">
                        <div>Volume Sold YTD
                            <span class="loading-text hide">loading...</span>
                            <span class="loading-hack loading-text hide box-value">0</span>
                            <span id="ago-ytd" class="box-value done-loading ago-ytd-value">0</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 dpk-repl">
                <!-- small box -->
                <div class="box-margin bg-white">
                    <div class="efizzy"></div>
                    <h4 class="box-label">Kerosene</h4>
                    <hr>
                    <!--<h5>Volume</h5>
                    <h3 id="dpk-vol-left">0</h3>-->
                    <div class="text-center">
                        <div class="repl-doughnuts">
                            <canvas id="dpk-repl-doughnut"></canvas>
                        </div>
                        <div>Days to Reorder
                            <span class="loading-text hide">loading...</span>
                            <span class="loading-hack loading-text hide box-value">0</span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="dpk-reorder" class="box-value done-loading reorder-value">0</span>
                        </div>
                        <span id="dpk-reorder-message" class="reorder-message red hide">
                            You need to reorder now
                        </span>
                        <hr class="short">
                        <div>Days to Dead Stock
                            <span class="loading-text hide">loading...</span>
                            <span class="loading-hack loading-text hide box-value">0</span>
                            <span id="dpk-deadstock" class="box-value done-loading">0</span>
                        </div>
                        <hr class="short">
                        <div>Volume Sold MTD
                            <span class="loading-text hide">loading...</span>
                            <span class="loading-hack loading-text hide box-value">0</span>
                            <span id="ago-mtd" class="box-value done-loading ago-mtd-value">0</span>
                        </div>
                        <hr class="short">
                        <div>Volume Sold YTD
                            <span class="loading-text hide">loading...</span>
                            <span class="loading-hack loading-text hide box-value">0</span>
                            <span id="dpk-ytd" class="box-value done-loading dpk-ytd-value">0</span>
                        </div>
                    </div>
                </div>
            </div>


    </div>

</div>