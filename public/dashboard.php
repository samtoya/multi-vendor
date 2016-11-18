<?php require '../include/header.php'; ?>

<?php 
    $faker = Faker\Factory::create();
    $categories = ['Mobile Phones', 'Tablets', 'Camera', 'TVs', 'Audio Speakers', 'Cars', 'Computers'];
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <nav class="col-md-1 col-lg-1">
                    <?php include '../include/dashboard_navigation.php'; ?>
                </nav> <!-- end navigation -->

                <div class="col-md-11 col-lg-11" style="margin-left: -45px;">
                    <div class="col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div style="margin-bottom: 10px;" class="box box-wrapper">
                                    <div class="box-header">
                                        <h4>Products</h4>
                                        <a class="link_va" href="overview.php">View all</a>
                                        <a href="" class="form-btn"><i class="fa fa-plus"> List a product</i></a>
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
                                            <?php $num = rand(1, count($categories)); ?>
                                            <?php for ($i = 0; $i < 3; $i++): ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td>PXDM0000-<?php echo $i; ?></td>
                                                    <td> <?php echo $categories[$num - 1]; ?></td>
                                                    <td>GH&cent; <?php echo $faker->numberBetween(500, 10000); ?></td>
                                                    <td><?php echo $faker->date($format = 'Y-m-d', $max = 'now');?></td>
                                                </tr>
                                            <?php endfor; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="box box-wrapper">
                                    <div class="box-header">
                                        <h4>Invoices</h4>
                                        <a class="link_va" href="invoice.php">View all</a>
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
                                        <p>Description of the retailer including image, addeess, phone, and some additional widget to make it look nice.</p>
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
