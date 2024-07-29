<?php


$title = "Customer";
include "../config/config.php";
include "../partials/head.php";
include "../service/productService.php";
include "../service/invoiceService.php";
include "../service/invoiceItemService.php";

?>

<div class="wrapper">
    <?php include "../partials/sidebar.php"; ?>

    <div class="main">
        <?php include "../partials/navbar.php"; ?>

        <main class="content">
            <div class="container-fluid p-0">

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h1 class="h3">Invoices</h1>
                    <a href="<?= $base_url ?>invoiceItem/create.php" class="btn btn-primary">Add invoice Item</a>
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
                                                <th scope="col">Invoice N.</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Unit Price</th>
                                                <th scope="col">Total Price</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($invoiceItems->num_rows === 0) { ?>
                                            <tr>
                                                <td colspan="4">No Data</td>
                                            </tr>
                                            <?php } else { ?>
                                            <?php while ($inItem = $invoiceItems->fetch_assoc()) { ?>
                                            <tr>
                                                <th scope="row"><?= $inItem['id'] ?></th>
                                                <td><?= $inItem['invoice_id'] ?></td>
                                                <td><?= $inItem['product_id'] ?></td>
                                                <td><?= $inItem['quantity'] ?></td>
                                                <td><?= $inItem['unit_price'] ?></td>
                                                <td><?= $inItem['total_price'] ?></td>
                                                <td>
                                                    <a href="./edit.php?action=inItemEdit&id=<?= $inItem['id'] ?>"
                                                        class="btn btn-sm btn-success"><i data-feather="edit"></i></a>
                                                    <a href="?action=inItemDelete&id=<?= $inItem['id'] ?>"
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