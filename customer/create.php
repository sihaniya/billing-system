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

                <h1 class="h3 mb-3">Create Customer</h1>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="col-12 col-md-6">
                                    <!-- start: form -->
                                    <form method="post" action="?action=create">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Customer Name</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Customer Name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder=" Email Address">
                                        </div>

                                        <div class="mb-3">
                                            <label for="mobile" class="form-label">Mobile</label>
                                            <input type="text" class="form-control" name="mobile" id="mobile"
                                                placeholder="Mobile Number">
                                        </div>

                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" class="form-control" name="address" id="address"
                                                placeholder="Address ">
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