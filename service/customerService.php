<?php

$case = "";
$error = [];
if (isset($_GET['action'])) {
    $case = $_GET['action'];
}

switch ($case) {
    case 'create':
        $success = "";
        $name = $conn->real_escape_string($_POST['name']);
        $mobile = $conn->real_escape_string($_POST['mobile']);
        $email = $conn->real_escape_string($_POST['email']);
        $address = $conn->real_escape_string($_POST['address']);


        if (empty($name) || empty($email) || empty($address)) {
            $success = false;
            header("Location: create.php");
        } else {
            $customerCreateQuery = "INSERT INTO customers(name, mobile, email, address, created_at) VALUES ('{$name}', '{$mobile}', '{$email}', '{$address}', now())";
            // echo $customerCreateQuery;
            // die;

            $customers = $conn->query($customerCreateQuery);

            if ($customers) {
                header("Location: ./index.php");
            }
        }

        break;
    case 'edit':

        $cusId = $_GET['id'];
        $cusSql = "SELECT * FROM customers WHERE  id={$cusId}";
        $cusRecord = $conn->query($cusSql);
        $customer = $cusRecord->fetch_assoc();

        break;
    case 'update':
        $success = "";

        $cusId = $_POST['id'];
        $name = $conn->real_escape_string($_POST['name']);
        $mobile = $conn->real_escape_string($_POST['mobile']);
        $email = $conn->real_escape_string($_POST['email']);
        $address = $conn->real_escape_string($_POST['address']);


        if (empty($name) || empty($email) || empty($address)) {
            $success = false;
            header("Location: edit.php");
        } else {
            $customerUpdateQuery = "UPDATE  customers SET name='{$name}', email='{$email}', mobile='{$mobile}', address='{$address}', updated_at=now() WHERE id={$cusId}";
            // echo $customerUpdateQuery;
            // die;
            $customers = $conn->query($customerUpdateQuery);

            if ($customers) {
                header("Location: ./index.php");
            }
        }
        break;
    case 'delete':
        $cusId = $_GET['id'];
        $cusSql = "DELETE FROM customers WHERE  id={$cusId}";
        $cusRecords = $conn->query($cusSql);
        if ($cusRecords) {
            header("Location: ./index.php");
        }

        break;
    default:
        $customers = $conn->query("SELECT * from customers");
        break;
}
