<?php require '../include/header.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <nav class="col-md-1 col-lg-1">
                    <div class="menu-wrapper">
                        <ul class="menu">
                            <a href="dashboard.php">
                                <li class="active">
                                    <i class="fa fa-home fa-2x"></i><br>
                                    <span>Home</span>
                                </li>
                            </a>
                            <a href="budget.php">
                                <li>
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
                            <div class="col-md-6 col-lg-6">
                                <div style="margin-bottom: 10px;" class="box box-wrapper">
                                    <div class="box-header">
                                        <h4>Products</h4>
                                    </div>
                                    <div class="box-body">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>SKU</th>
                                                <th>Model Number</th>
                                                <th>Manufacturer</th>
                                                <th>Price</th>
                                                <th>Timestamp</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>PXDM0000001</td>
                                                <td>Samsung</td>
                                                <td>GH&cent;20000</td>
                                                <td><?php echo date('Y-m-d h:i:sa', time()); ?></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>PXDM0000002</td>
                                                <td>Huawei</td>
                                                <td>GH&cent;750</td>
                                                <td><?php echo date('Y-m-d h:i:sa', time()); ?></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>PXDM0000003</td>
                                                <td>Apple</td>
                                                <td>GH&cent;960</td>
                                                <td><?php echo date('Y-m-d h:i:sa', time()); ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="box box-wrapper">
                                    <div class="box-header">
                                        <h4>Invoices</h4>
                                    </div>
                                    <div class="box-body">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>IP Address</th>
                                                <th>Item Clicked</th>
                                                <th>Timestamp</th>
                                                <th>Category</th>
                                                <th>Cost</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>381.425.852.095</td>
                                                <td>1</td>
                                                <td><?php echo date('Y-m-d', time());?></td>
                                                <td>Mobile Phones</td>
                                                <td>GH&cent;850</td>
                                            </tr>
                                            <tr>
                                                <td>381.425.852.095</td>
                                                <td>1</td>
                                                <td><?php echo date('Y-m-d', time());?></td>
                                                <td>Computer &amp; Accessories</td>
                                                <td>GH&cent;850</td>
                                            </tr>
                                            <tr>
                                                <td>190.009.735.893</td>
                                                <td>1</td>
                                                <td><?php echo date('Y-m-d', time());?></td>
                                                <td>Home Appliances</td>
                                                <td>5p</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="box box-wrapper">
                                    <div class="box-header">
                                        <h4>Owner Information</h4>
                                    </div>
                                    <div class="box-body">
                                        <p>Owner information goes here.</p>
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