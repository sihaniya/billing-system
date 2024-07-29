<?php

$title = "Dashboard";
include "./config/config.php";
include "./partials/head.php";

?>

<div class="wrapper">
    <?php include "./partials/sidebar.php"; ?>

    <div class="main">
        <?php include "./partials/navbar.php"; ?>

        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3">Dashboard Page</h1>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Empty card</h5>
                            </div>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</div>


<?php include "./partials/foot.php"; ?>