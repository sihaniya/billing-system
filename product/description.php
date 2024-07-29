<?php


$title = "Customer";
include "../config/config.php";
include "../partials/head.php";
include "../service/productService.php";

?>

<div class="wrapper">
    <?php include "../partials/sidebar.php"; ?>

    <div class="main">
        <?php include "../partials/navbar.php"; ?>

        <main class="content">
            <div class="container-fluid p-0">

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h1 class="h3">Products</h1>
                    <a href="<?= $base_url ?>product/index.php" class="btn btn-primary">Product</a>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $product['product'] ?></h5>
                                        <h6 class="card-subtitle mb-2 text-body-secondary"><?= $product['price'] ?></h6>
                                        <p class="card-text"><?= $product['description'] ?></p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </div>
    </main>
</div>
</div>


<?php include "../partials/foot.php"; ?>