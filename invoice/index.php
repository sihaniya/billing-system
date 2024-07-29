<?php


$title = "Customer";
include "../config/config.php";
include "../partials/head.php";
include "../service/productService.php";
include "../service/invoiceService.php";

?>

<div class="wrapper">
    <?php include "../partials/sidebar.php"; ?>

    <div class="main">
        <?php include "../partials/navbar.php"; ?>

        <main class="content">
            <div class="container-fluid p-0">

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h1 class="h3">Invoices</h1>
                    <a href="<?= $base_url ?>invoice/create.php" class="btn btn-primary">Add Invoice</a>
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
                                                <th scope="col">Invoice.N</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($invoices->num_rows === 0) { ?>
                                            <tr>
                                                <td colspan="4">No Data</td>
                                            </tr>
                                            <?php } else { ?>
                                            <?php while ($invoice = $invoices->fetch_assoc()) { ?>
                                            <tr>
                                                <th scope="row"><?= $invoice['id'] ?></th>
                                                <td><?= $invoice['customer_id'] ?></td>
                                                <td><?= $invoice['date'] ?></td>
                                                <td><?= $invoice['amount'] ?></td>
                                                <td><?= $invoice['status'] ?></td>
                                                <td>
                                                    <a href="./edit.php?action=inEdit&id=<?= $invoice['id'] ?>"
                                                        class="btn btn-sm btn-success"><i data-feather="edit"></i></a>
                                                    <a href="?action=inDelete&id=<?= $invoice['id'] ?>"
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