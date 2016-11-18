<?php require '../include/header.php'; ?>
<?php require '../utilities/Category.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <nav class="col-md-1 col-lg-1">
                    <?php include '../include/dashboard_navigation.php'; ?>
                </nav> <!-- end navigation -->
                <div class="col-md-11 col-lg-11" style="margin-left: -45px;">
                    <div class="col-md-12 col-lg-12">
                        <div class="col-md-3 col-lg-3">
                            <div class="cat-wrapper">
                                <div class="cat-header">
                                    <h3>Select a category</h3>
                                </div>
                                <div class="cat-body">
                                    <ul>
                                        <?php foreach( Category::all() as $category ):  ?>
                                            <li>
                                                <a href="javascript:void(0);" onclick="logmenow();"><i class="fa fa-plus"></i> <?php echo $category; ?></a>
                                                <div class="has-sub">
                                                    <ul>
                                                        <?php foreach( Category::all() as $category): ?>
                                                            <li>
                                                                <a href="javascript:void(0);"><i class="fa fa-minus"></i> <?php echo $category; ?></a>
                                                                <div class="has-sub">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0);"><i class="fa fa-times"></i> Level Three Sub Category</a>
                                                                            <div class="has-sub">
                                                                                <ul>
                                                                                    <li><a href="javascript:void(0);"><i class="fa fa-send"></i> Level Four</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-3">
                            <div class="cat-wrapper hidden">
                                <div class="cat-header">
                                    <h3>Select a subcategory</h3>
                                </div>
                                <div class="cat-body" id="has-sub2"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-3">
                            <div class="cat-wrapper hidden">
                                <div class="cat-header">
                                    <h3>Select a subcategory</h3>
                                </div>
                                <div class="cat-body" id="has-sub3"></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-3">
                            <div class="cat-wrapper hidden">
                                <div class="cat-header">
                                    <h3>Select a subcategory</h3>
                                </div>
                                <div class="cat-body" id="has-sub4"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require '../include/footer.php'; ?>
