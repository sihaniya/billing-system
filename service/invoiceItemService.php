<?php

$case = "";
$error = [];
if (isset($_GET['action'])) {
    $case = $_GET['action'];
}

switch ($case) {
    case 'invoiceItemCreate':
        $success = "";
        $invoice = $conn->real_escape_string($_POST['invoice_id']);
        $product = $conn->real_escape_string($_POST['product_id']);
        $quantity = $conn->real_escape_string($_POST['quantity']);
        $unit = $conn->real_escape_string($_POST['unit_price']);
        $price = $conn->real_escape_string($_POST['total_price']);




        if (empty($invoice) || empty($product) || empty($quantity) || empty($unit) || empty($price)) {
            $success = false;
            header("Location: create.php");
        } else {
            $invoiceItemCreateQuery = "INSERT INTO invoiceItems(invoice_id, product_id, quantity, unit_price, total_price, created_at) VALUES('{$invoice}', '{$product}', '{$quantity}', '{$unit}', '{$price}', now())";
            // echo $invoiceItemCreateQuery;
            // die;

            $invoiceItem = $conn->query($invoiceItemCreateQuery);

            if ($invoiceItem) {
                header("Location: ./index.php");
            }
        }

        break;
    case 'inItemEdit':

        $invItemId = $_GET['id'];
        $invItemSql = "SELECT * FROM invoiceItems WHERE  id={$invItemId}";
        $invItemRecord = $conn->query($invItemSql);
        $invItem = $invItemRecord->fetch_assoc();

        break;
    case 'invoiceItemUpdate':
        $success = "";

        $inId = $_POST['id'];
        $invoice = $conn->real_escape_string($_POST['invoice_id']);
        $product = $conn->real_escape_string($_POST['product_id']);
        $quantity = $conn->real_escape_string($_POST['quantity']);
        $unit = $conn->real_escape_string($_POST['unit_price']);
        $price = $conn->real_escape_string($_POST['total_price']);



        if (empty($invoice) || empty($product) || empty($quantity) || empty($unit) || empty($price)) {
            $success = false;
            header("Location: create.php");
        } else {
            $invItemUpdateQuery = "UPDATE  invoiceItems SET invoice_id='{$invoice}', product_id='{$product}', quantity='{$quantity}', unit_price='{$unit}', total_price='{$price}', updated_at=now() WHERE id={$inId}";
            // echo $invoiceCreateQuery;
            // die;

            $invoices = $conn->query($invItemUpdateQuery);

            if ($invoices) {
                header("Location: ./index.php");
            }
        }
        break;
    case 'inItemDelete':
        $inId = $_GET['id'];
        $inSql = "DELETE FROM invoiceItems WHERE  id={$inId}";
        $inRecords = $conn->query($inSql);
        if ($inRecords) {
            header("Location: ./index.php");
        }

        break;
    default:
        $invoiceItems = $conn->query("SELECT * from invoiceItems");
        break;
}