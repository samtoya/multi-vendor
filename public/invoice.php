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

                <div class="col-md-11 col-lg-11 no-margin no-padding">
                    <div class="col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-md-8 col-lg-8">
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
                                            <?php for ($i = 0; $i < 15; $i++): ?>
                                                <?php $num = rand(1, count($categories));  ?>
                                                <tr>
                                                    <td><?php echo $faker->ipv4(); ?></td>
                                                    <td><?php echo $faker->imageUrl($width = 640, $height = 480);  ?></td>
                                                    <td><?php echo $faker->date($format = 'Y-m-d', $max = 'now');?></td>
                                                    <td><?php echo $categories[$num - 1]; ?></td>
                                                    <td style="text-align: left;">GH&cent;<?php echo $faker->numberBetween(1000, 90000); ?> </td>
                                                </tr>
                                            <?php endfor; ?>
                                            </tbody>
                                        </table>
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
