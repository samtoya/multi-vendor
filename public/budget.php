<?php require '../include/header.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <nav class="col-md-1 col-lg-1">
                    <div class="menu-wrapper">
                        <ul class="menu">
                            <a href="dashboard.php">
                                <li>
                                    <i class="fa fa-home fa-2x"></i><br>
                                    <span>Home</span>
                                </li>
                            </a>
                            <a href="budget.php">
                                <li class="active">
                                    <i class="fa fa-money fa-2x"></i><br>
                                    <span>Set a Budget</span>
                                </li>
                            </a>
                            <a href="list_product.php">
                                <li>
                                    <i class="fa fa-plus fa-2x"></i><br>
                                    <span>List Products</span>
                                </li>
                            </a>
                            <a href="overview.php">
                                <li>
                                    <i class="fa fa-database fa-2x"></i><br>
                                    <span>Products Overview</span>
                                </li>
                            </a>
                            <a href="invoice.php">
                                <li>
                                    <i class="fa fa-file-o fa-2x"></i><br>
                                    <span>Invoices</span>
                                </li>
                            </a>
                            <a href="setting.php">
                                <li>
                                    <i class="fa fa-gear fa-2x"></i><br>
                                    <span>Settings</span>

                                </li>
                            </a>
                        </ul>
                    </div> <!-- end menu wrapper -->
                </nav> <!-- end navigation -->

                <div class="col-md-11 col-lg-11 no-margin no-padding">
                    <div class="col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-md-10 col-lg-10">
                                <div class="information">
                                    <p>
                                        As a retailer, you only pay PriceDrummer when a shopper clicks to see your
                                        online store or contact details. This is normally referred to pay-per-click
                                        marketing.
                                        We believe this is fair, as you only pay us when we have successfully referred a
                                        shopperto you. Currently we charge 10 pesewas for every click to your online
                                        shop or product page.
                                    </p>
                                    <p>
                                        For example, Shop A has 100 clicks to their online shop or site in a week. Total
                                        payout will be <span style="font-weight: bold;">0.1 * 100=10GHS</span>. You are
                                        not able to list a product until you set a budget. An account manager will
                                        contact you when you set your budget and list your products.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-lg-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="widget widget-wrapper">
                                            <div class="widget-header">
                                                <h5>Budget Type</h5>
                                            </div>

                                            <div class="widget-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12">
                                                        <h4 class="sub-title">Set your budget type</h4>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="form-group product-chooser">
                                                            <div class="product-chooser-item">
                                                                <div class="widget-info-img">
                                                                    <img src="assets/images/cost_per_click2.png" alt="">
                                                                </div>

                                                                <div class="widget-info-desc">
                                                                    <h4 class="title">Pay-per-click</h4>
                                                                    <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam amet assumenda consequatur distinctio ducimus.</span>
                                                                    <input type="radio" name="budget_type"
                                                                           value="pay_per_click" checked>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="form-group product-chooser">
                                                            <div class="product-chooser-item">
                                                                <div class="widget-info-img">
                                                                    <img src="assets/images/cost_per_conversion.png"
                                                                         alt="">
                                                                </div>

                                                                <div class="widget-info-desc">
                                                                    <h4 class="title">Pay-per-conversion</h4>
                                                                    <span class="description">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam amet assumenda consequatur distinctio ducimus.
                                                                    </span>
                                                                    <input type="radio" name="budget_type"
                                                                           value="pay_per_conversion">
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> <!-- end widget body div -->
                                        </div> <!-- end col-md-5 col-lg-5 -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="widget widget-wrapper">
                                            <div class="widget-header">
                                                <h5>Budget Amount</h5>
                                            </div>

                                            <div class="widget-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12">
                                                        <h4 class="sub-title">Set your budget amount (GH&cent;20) minimum</h4>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6">

                                                    </div>
                                                    <div class="col-md-6 col-lg-6">

                                                    </div>
                                                </div>

                                            </div> <!-- end widget body div -->
                                        </div> <!-- end col-md-5 col-lg-5 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require '../include/footer.php'; ?>