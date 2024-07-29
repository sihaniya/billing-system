<?php
$title = "Customer";

include "../config/config.php";
include "../partials/head.php";
include "../service/customerService.php";
?>

<div class="wrapper">
    <?php include  "../partials/sidebar.php"; ?>

    <div class="main">
        <?php include  "../partials/navbar.php"; ?>

        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3">Edit Customer</h1>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="col-12 col-md-6">
                                    <!-- start: form -->
                                    <form method="post" action="?action=update">
                                        <input type="hidden" name="id" id="id" value="<?= $customer['id'] ?>">

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Customer Name</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Customer Name" value="<?= $customer['name'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder=" Email Address" value="<?= $customer['email'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="mobile" class="form-label">Mobile</label>
                                            <input type="text" class="form-control" name="mobile" id="mobile"
                                                placeholder="Mobile Number" value="<?= $customer['mobile'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" class="form-control" name="address" id="address"
                                                placeholder="Address" value="<?= $customer['address'] ?>">
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