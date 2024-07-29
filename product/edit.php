<?php
$title = "Customer";

include "../config/config.php";
include "../partials/head.php";
include "../service/productService.php";
include "../service/paymentService.php";

?>

<div class="wrapper">
    <?php include  "../partials/sidebar.php"; ?>

    <div class="main">
        <?php include  "../partials/navbar.php"; ?>

        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3">Edit Product</h1>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="col-12 col-md-6">
                                    <!-- start: form -->
                                    <form method="post" action="?action=update">
                                        <input type="hidden" name="id" id="id" value="<?= $product['id'] ?>">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Product Name</label>
                                            <input type="text" class="form-control" name="product" id="product"
                                                placeholder="Product Name" value="<?= $product['product'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Price</label>
                                            <input type="text" class="form-control" name="price" id="price"
                                                placeholder=" Price" value="<?= $product['price'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="mobile" class="form-label">Description</label>
                                            <textarea class="form-control" name="description" id="description" rows="3"
                                                placeholder=" Description"><?= $product['description'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-success">Save</button>
                                    </form>
                                    <!-- end: form -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</div>


<?php include  "../partials/foot.php"; ?>