<?php


$title = "Customer";
include "../config/config.php";
include "../partials/head.php";
include "../service/productService.php";
include "../service/invoiceService.php";
include "../service/paymentService.php";

?>

<div class="wrapper">
    <?php include "../partials/sidebar.php"; ?>

    <div class="main">
        <?php include "../partials/navbar.php"; ?>

        <main class="content">
            <div class="container-fluid p-0">

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h1 class="h3">Payment</h1>
                    <a href="<?= $base_url ?>payment/create.php" class="btn btn-primary">Add payment</a>
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
                                                <th scope="col">Amount</th>
                                                <th scope="col">Payment Date</th>
                                                <th scope="col">Payment Method</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php if ($payments->num_rows === 0) { ?>
                                            <tr>
                                                <td colspan="4">No Data</td>
                                            </tr>
                                            <?php } else { ?>
                                            <?php while ($payment = $payments->fetch_assoc()) { ?>
                                            <tr>
                                                <th scope="row"><?= $payment['id'] ?></th>
                                                <td><?= $payment['invoice_id'] ?></td>
                                                <td><?= $payment['amount'] ?></td>
                                                <td><?= $payment['payment_date'] ?></td>
                                                <td><?= $payment['payment_method'] ?></td>
                                                <td>
                                                    <a href="./edit.php?action=paymentEdit&id=<?= $payment['id'] ?>"
                                                        class="btn btn-sm btn-success"><i data-feather="edit"></i></a>
                                                    <a href="?action=paymentDelete&id=<?= $payment['id'] ?>"
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