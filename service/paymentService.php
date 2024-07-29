<?php

$case = "";
$error = [];
if (isset($_GET['action'])) {
    $case = $_GET['action'];
}

switch ($case) {
    case 'paymentCreate':
        $success = "";
        $invoice = $conn->real_escape_string($_POST['invoice_id']);
        $price = $conn->real_escape_string($_POST['amount']);
        $date = $conn->real_escape_string($_POST['payment_date']);
        $method = $conn->real_escape_string($_POST['payment_method']);


        if (empty($invoice) || empty($price) || empty($date) || empty($price)) {
            $success = false;
            header("Location: create.php");
        } else {
            $paymentCreateQuery = "INSERT INTO payments(invoice_id, amount, payment_date, payment_method, created_at) VALUES ('{$invoice}', '{$price}', '{$date}', '{$method}',  now())";
            // echo $customerCreateQuery;
            // die;

            $payments = $conn->query($paymentCreateQuery);

            if ($payments) {
                header("Location: ./index.php");
            }
        }

        break;
    case 'paymentEdit':

        $payId = $_GET['id'];
        $paySql = "SELECT * FROM payments WHERE  id={$payId}";
        $payRecord = $conn->query($paySql);
        $payment = $payRecord->fetch_assoc();

        break;
    case 'paymentUpdate':
        $success = "";

        $payId = $_POST['id'];
        $invoice = $conn->real_escape_string($_POST['invoice_id']);
        $price = $conn->real_escape_string($_POST['amount']);
        $date = $conn->real_escape_string($_POST['payment_date']);
        $method = $conn->real_escape_string($_POST['payment_method']);

        if (empty($invoice) || empty($price) || empty($date) || empty($price)) {
            $success = false;
            header("Location: create.php");
        } else {
            $paymentUpdateQuery = "UPDATE  payments SET invoice_id='{$invoice}', amount='{$price}', payment_date='{$date}',  payment_method='{$method}', updated_at=now() WHERE id={$payId}";
            // echo $customerCreateQuery;
            // die;
            $payment = $conn->query($paymentUpdateQuery);

            if ($payment) {
                header("Location: ./index.php");
            }
        }
        break;
    case 'paymentDelete':
        $payId = $_GET['id'];
        $paySql = "DELETE FROM payments WHERE  id={$payId}";
        $payRecords = $conn->query($paySql);
        if ($payRecords) {
            header("Location: ./index.php");
        }

        break;
    default:
        $payments = $conn->query("SELECT * from payments");
        break;
}