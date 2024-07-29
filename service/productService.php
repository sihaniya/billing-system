<?php

$case = "";
$error = [];
if (isset($_GET['action'])) {
    $case = $_GET['action'];
}

switch ($case) {
    case 'create':
        $success = "";
        $name = $conn->real_escape_string($_POST['product']);
        $price = $conn->real_escape_string($_POST['price']);
        $description = $conn->real_escape_string($_POST['description']);


        if (empty($name) || empty($price)) {
            $success = false;
            header("Location: create.php");
        } else {
            $productCreateQuery = "INSERT INTO products(product, price, description,  created_at) VALUES ('{$name}', '{$price}', '{$description}',  now())";
            // echo $customerCreateQuery;
            // die;

            $products = $conn->query($productCreateQuery);

            if ($products) {
                header("Location: ./index.php");
            }
        }

        break;
    case 'edit':

        $proId = $_GET['id'];
        $proSql = "SELECT * FROM products WHERE  id={$proId}";
        $proRecord = $conn->query($proSql);
        $product = $proRecord->fetch_assoc();

        break;
    case 'update':
        $success = "";

        $proId = $_POST['id'];
        $name = $conn->real_escape_string($_POST['product']);
        $price = $conn->real_escape_string($_POST['price']);
        $description = $conn->real_escape_string($_POST['description']);

        if (empty($name) || empty($price)) {
            $success = false;
            header("Location: create.php");
        } else {
            $productUpdateQuery = "UPDATE  products SET product='{$name}', price='{$price}', description='{$description}',  updated_at=now() WHERE id={$proId}";
            // echo $customerCreateQuery;
            // die;
            $products = $conn->query($productUpdateQuery);

            if ($products) {
                header("Location: ./index.php");
            }
        }
        break;
    case 'delete':
        $proId = $_GET['id'];
        $proSql = "DELETE FROM products WHERE  id={$proId}";
        $proRecords = $conn->query($proSql);
        if ($proRecords) {
            header("Location: ./index.php");
        }

        break;
    default:
        $products = $conn->query("SELECT * from products");
        break;
}