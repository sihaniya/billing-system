<?php
$title = "Customer";

include "../config/config.php";
include "../partials/head.php";
include "../service/customerService.php";
include "../service/invoiceService.php";


?>

<div class="wrapper">
    <?php include  "../partials/sidebar.php"; ?>

    <div class="main">
        <?php include  "../partials/navbar.php"; ?>

        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3">Edit Invoice</h1>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="col-12 col-md-6">
                                    <!-- start: form -->
                                    <form method="post" action="?action=inUpdate">
                                        <input type="hidden" class="form-control" name="id" id="id"
                                            value="<?= $invoice['id'] ?>">
                                        <div class="mb-3">
                                            <label for="customer_id" class="form-label">Customer</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="customer_id" id="customer_id">
                                                <option>Select Customer</option>
                                                <?php while ($customer = $customers->fetch_assoc()) { ?>
                                                <option value='<?= $customer['id'] ?>' <?php if ($customer['id'] == $invoice['customer_id']) {
                                                                                                echo 'selected';
                                                                                            } ?>>
                                                    <?= $customer['name'] ?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="date" class="form-label">Date</label>
                                            <input type="date" class="form-control" name="date" id="date"
                                                value="<?= $invoice['date'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="amount" class="form-label">Amount</label>
                                            <input type="text" class="form-control" name="amount" id="amount"
                                                value="<?= $invoice['amount'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <input type="checkbox" class="form-check-input" name="status" id="status"
                                                value="<?= $invoice['status'] ?>">

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