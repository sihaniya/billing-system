<?php

$case = "";
$error = [];
if (isset($_GET['action'])) {
    $case = $_GET['action'];
}

switch ($case) {
    case 'inCreate':
        $success = "";
        $name = $conn->real_escape_string($_POST['customer_id']);
        $date = $conn->real_escape_string($_POST['date']);
        $amount = $conn->real_escape_string($_POST['amount']);
        $status = $conn->real_escape_string(isset($_POST['status']) ? 1 : 0);




        if (empty($name) || empty($date) || empty($amount)) {
            $success = false;
            header("Location: create.php");
        } else {
            $invoiceCreateQuery = "INSERT INTO invoices(customer_id, date, amount, status, created_at) VALUES('{$name}', '{$date}', '{$amount}', '{$status}', now())";
            // echo $invoiceCreateQuery;
            // die;

            $invoices = $conn->query($invoiceCreateQuery);

            if ($invoices) {
                header("Location: ./index.php");
            }
        }

        break;
    case 'inEdit':

        $invId = $_GET['id'];
        $invSql = "SELECT * FROM invoices WHERE  id={$invId}";
        $invRecord = $conn->query($invSql);
        $invoice = $invRecord->fetch_assoc();

        break;
    case 'inUpdate':
        $success = "";

        $inId = $_POST['id'];
        $name = $conn->real_escape_string($_POST['customer_id']);
        $date = $conn->real_escape_string($_POST['date']);
        $amount = $conn->real_escape_string($_POST['amount']);
        $status = $conn->real_escape_string(isset($_POST['status']) ? 1 : 0);




        if (empty($name) || empty($date) || empty($amount)) {
            $success = false;
            header("Location: create.php");
        } else {
            $invoiceUpdateQuery = "UPDATE  invoices SET customer_id='{$name}', date='{$date}', amount='{$amount}', status='{$status}', updated_at=now() WHERE id={$inId}";
            // echo $invoiceCreateQuery;
            // die;

            $invoices = $conn->query($invoiceUpdateQuery);

            if ($invoices) {
                header("Location: ./index.php");
            }
        }
        break;
    case 'inDelete':
        $inId = $_GET['id'];
        $inSql = "DELETE FROM invoices WHERE  id={$inId}";
        $inRecords = $conn->query($inSql);
        if ($inRecords) {
            header("Location: ./index.php");
        }

        break;
    default:
        $invoices = $conn->query("SELECT * from invoices");
        break;
}