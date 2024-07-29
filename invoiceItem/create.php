<?php
$title = "Customer";

include "../config/config.php";
include "../partials/head.php";
include "../service/productService.php";
include "../service/invoiceService.php";
include "../service/invoiceItemService.php";

?>

<div class="wrapper">
    <?php include  "../partials/sidebar.php"; ?>

    <div class="main">
        <?php include  "../partials/navbar.php"; ?>

        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3">Create Invoice Item</h1>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="col-12 col-md-6">
                                    <!-- start: form -->
                                    <form method="post" action="?action=invoiceItemCreate">
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
                                            <label for="customer_id" class="form-label">Product</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="product_id" id="product_id">
                                                <option>Select Product</option>
                                                <?php while ($product = $products->fetch_assoc()) { ?>
                                                <option value="<?= $product['id'] ?>"><?= $product['product'] ?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="quantity" class="form-label">Quantity</label>
                                            <input type="text" class="form-control" name="quantity" id="quantity"
                                                placeholder="Quantity">
                                        </div>

                                        <div class="mb-3">
                                            <label for="unit_price" class="form-label">Unit Price</label>
                                            <input type="text" class="form-control" name="unit_price" id="unit_price"
                                                placeholder=" Unit Price">
                                        </div>

                                        <div class="mb-3">
                                            <label for="amount" class="form-label">Total Price</label>
                                            <input type="text" class="form-control" name="total_price" id="total_price"
                                                placeholder="Total price">
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