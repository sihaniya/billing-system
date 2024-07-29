<?php
$title = "Customer";

include "../config/config.php";
include "../partials/head.php";
include "../service/productService.php";
include "../service/invoiceService.php";
include "../service/paymentService.php";

?>

<div class="wrapper">
    <?php include  "../partials/sidebar.php"; ?>

    <div class="main">
        <?php include  "../partials/navbar.php"; ?>

        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3">Create Payment</h1>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="col-12 col-md-6">
                                    <!-- start: form -->
                                    <form method="post" action="?action=paymentCreate">
                                        <div class="mb-3">
                                            <label for="customer_id" class="form-label">Invoice</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="invoice_id" id="invoice_id">
                                                <option>Select Invoice Number</option>
                                                <?php while ($invoice = $invoices->fetch_assoc()) { ?>
                                                <option value="<?= $invoice['id'] ?>"><?= $invoice['id'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>


                                        <div class="mb-3">
                                            <label for="amount" class="form-label">Amount</label>
                                            <input type="text" class="form-control" name="amount" id="amount"
                                                placeholder="Amount">
                                        </div>

                                        <div class="mb-3">
                                            <label for="payment_date" class="form-label">Payment Date</label>
                                            <input type="date" class="form-control" name="payment_date"
                                                id="payment_date">
                                        </div>

                                        <div class="mb-3">
                                            <label for="payment_method" class="form-label">Payment Method</label>
                                            <input type="text" class="form-control" name="payment_method"
                                                id="payment_method" placeholder="Payment Method">
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