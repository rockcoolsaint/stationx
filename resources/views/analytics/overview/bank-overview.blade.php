<!--toggleable content-->
<div class="row">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="box-margin box-header bg-white" data-toggle="collapse" data-target="#bankOverview">
                <h3 class="box-title">BANK OVERVIEW</h3>
                <button type="button" class="btn btn-box-tool box-tools pull-right" data-toggle="collapse" data-target="#bankOverview" data-widget="collapse"><!--<i class="fa fa-minus"></i>-->
                </button>
            </div>
        </div>
    </div>

    <div class="collapse in" id="bankOverview">
        <!--mobile view-->
        <div class="row">
            <div class="col-xs-12 hidden-md hidden-lg">
                <div class="green-efizzy"></div>
                <div class="bg-white box-body">
                    <canvas id="xs_reconcileChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>

        <!--masonry-->
        <div id="mbank" class="row hidden-md hidden-lg">
            <div class="col-xs-12 text-center box-margin no-margin-bottom">
                <div class="efizzy"></div>
                <div id="mOutPay" class="bg-white box-body box-margin no-margin-top">
                    <h4><strong>Days With Outstanding Payments</strong></h4>
                    <span class="bank-value text-center loading-text hide">loading...</span>
                </div>
            </div>

            <div class="col-xs-12 text-center">
                <div class="efizzy"></div>
                <div id="mBankDep" class="bg-white box-body">
                    <h4><strong>Incomplete Bank Deposits</strong></h4>
                    <span class="bank-value text-center loading-text hide">loading...</span>
                </div>
            </div>
        </div>
        <!--mobile view-->

        <div class="row row-margin-top hidden-xs hidden-sm">
            <div id="bank" class="col-md-4">
                <div class="efizzy"></div>
                <div id="OutPay" class="bg-white box-body box-margin no-margin-top">
                    <h4 class="col-md-7 hidden-xs payments"><strong>Days With Outstanding Payments</strong></h4>
                    <span class="col-md-5 bank-value text-center loading-text hide">loading...</span>
                </div>
                <div class="efizzy"></div>
                <div id="BankDep" class="bg-white box-body bottom-padding">
                    <h4 class="col-md-7 hidden-xs payments"><strong>Incomplete Bank Deposits</strong></h4>
                    <span class="col-md-5 bank-value text-center loading-text hide">loading...</span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="green-efizzy"></div>
                <div class="bg-white box-body box-margin no-margin-top">
                    <h4>Reconciliation</h4>
                    <div>
                    <canvas id="reconcile" width="400" height="264"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>