<?php require '../include/header.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <nav class="col-md-1 col-lg-1">
                    <?php include '../include/dashboard_navigation.php'; ?>
                </nav> <!-- end navigation -->

                <div class="col-md-11 col-lg-11" style="margin-left: -45px;">
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

                                                <div class="budget-chooser">
                                                    <div class="budget-chooser-item">
                                                        <div class="widget-info-img">
                                                            <img src="assets/images/cost_per_click2.png" alt="">
                                                        </div>

                                                        <div class="widget-info-desc">
                                                            <h4 class="title">Pay-per-click</h4>
                                                            <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam amet assumenda consequatur distinctio ducimus.</span>
                                                            <input type="radio" name="budget_type"
                                                                   value="pay_per_click">
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <div class="budget-chooser">
                                                    <div class="budget-chooser-item">
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

                                            </div> <!-- end widget body div -->
                                        </div> <!-- end col-md-5 col-lg-5 -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="widget widget-wrapper hidden">
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
                                                    <div class="col-md-12 col-lg-12">
                                                        <ul class="money_container">
                                                            <li>
                                                                <div class="money_wrapper">
                                                                    <div class="money_chooser_item">
                                                                        <input type="radio" value="20" name="budget">
                                                                        <div class="money_image">
                                                                            <img src="assets/images/money_bag.png" alt="Cedi Icon">
                                                                        </div>
                                                                        <div class="money_content">
                                                                            <span>GH&cent;20</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="money_wrapper">
                                                                    <div class="money_chooser_item">
                                                                        <input type="radio" value="40" name="budget">
                                                                        <div class="money_image">
                                                                            <img src="assets/images/money_bag.png" alt="Cedi Icon">
                                                                        </div>
                                                                        <div class="money_content">
                                                                            <span>GH&cent;40</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li><li>
                                                                <div class="money_wrapper">
                                                                    <div class="money_chooser_item">
                                                                        <input type="radio" value="60" name="budget">
                                                                        <div class="money_image">
                                                                            <img src="assets/images/money_bag.png" alt="Cedi Icon">
                                                                        </div>
                                                                        <div class="money_content">
                                                                            <span>GH&cent;60</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li><li>
                                                                <div class="money_wrapper">
                                                                    <div class="money_chooser_item">
                                                                        <input type="radio" value="80" name="budget">
                                                                        <div class="money_image">
                                                                            <img src="assets/images/money_bag.png" alt="Cedi Icon">
                                                                        </div>
                                                                        <div class="money_content">
                                                                            <span>GH&cent;80</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li><li>
                                                                <div class="money_wrapper">
                                                                    <div class="money_chooser_item">
                                                                        <input type="radio" value="100" name="budget">
                                                                        <div class="money_image">
                                                                            <img src="assets/images/money_bag.png" alt="Cedi Icon">
                                                                        </div>
                                                                        <div class="money_content">
                                                                            <span>GH&cent;100</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li><li>
                                                                <div class="money_wrapper">
                                                                    <div class="money_chooser_item">
                                                                        <input type="radio" value="200" name="budget">
                                                                        <div class="money_image">
                                                                            <img src="assets/images/money_bag.png" alt="Cedi Icon">
                                                                        </div>
                                                                        <div class="money_content">
                                                                            <span>GH&cent;200</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li><li>
                                                                <div class="money_wrapper">
                                                                    <div class="money_chooser_item">
                                                                        <input type="radio" value="400" name="budget">
                                                                        <div class="money_image">
                                                                            <img src="assets/images/money_bag.png" alt="Cedi Icon">
                                                                        </div>
                                                                        <div class="money_content">
                                                                            <span>GH&cent;400</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li><li>
                                                                <div class="money_wrapper">
                                                                    <div class="money_chooser_item">
                                                                        <input type="radio" value="800" name="budget">
                                                                        <div class="money_image">
                                                                            <img src="assets/images/money_bag.png" alt="Cedi Icon">
                                                                        </div>
                                                                        <div class="money_content">
                                                                            <span>GH&cent;800</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li><li>
                                                                <div class="money_wrapper">
                                                                   <div class="money_chooser_item">
                                                                       <input type="radio" value="more" name="budget">
                                                                       <div class="money_image">
                                                                           <img src="assets/images/money_bag.png" alt="Cedi Icon">
                                                                       </div>
                                                                       <div class="money_content">
                                                                           <span>More</span>
                                                                       </div>
                                                                   </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div> <!-- end widget body div -->
                                        </div> <!-- end col-md-5 col-lg-5 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="btn-wrapper">
                                    <button class="form-btn hidden" id="submit-btn" type="button">Submit</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require '../include/footer.php'; ?>
