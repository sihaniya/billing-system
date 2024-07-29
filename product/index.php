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
                    <a href="<?= $base_url ?>product/create.php" class="btn btn-primary">Add Product</a>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <!-- start: table -->
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($products->num_rows === 0) { ?>
                                            <tr>
                                                <td colspan="4">No Data</td>
                                            </tr>
                                            <?php } else { ?>
                                            <?php while ($product = $products->fetch_assoc()) { ?>
                                            <tr>
                                                <th scope="row"><?= $product['id'] ?></th>
                                                <td><?= $product['product'] ?></td>
                                                <td><?= $product['price'] ?></td>
                                                <td class="text-center">
                                                    <a href="./description.php?action=edit&id=<?= $product['id'] ?>"
                                                        class="btn btn-sm btn-primary">
                                                        <i data-feather="file-text"></i>
                                                    </a>
                                                </td>

                                                <td>
                                                    <a href="./edit.php?action=edit&id=<?= $product['id'] ?>"
                                                        class="btn btn-sm btn-success"><i data-feather="edit"></i></a>
                                                    <a href="?action=delete&id=<?= $product['id'] ?>"
                                                        onclick="return confirm ('Are you sure?')"
                                                        class="btn btn-sm btn-danger"><i data-feather="trash-2"></i></a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end: table -->

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