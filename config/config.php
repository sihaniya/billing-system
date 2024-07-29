<?php


$base_url = "http://localhost/php/billing-system/";
$asset_url = $base_url . "assets/";


$frontend_path = $_SERVER['DOCUMENT_ROOT'] . '/php/billing-system/';
$admin_path = $_SERVER['DOCUMENT_ROOT'] . '/php-news-app/admin/';

// admin urls
$adminMenus = [
    ["label" => "Pages", "url" => "", 'icon' => "", "divider" => true],
    ["label" => "Dashboard", "url" => $base_url . "dashboard.php", 'icon' => "sliders", "divider" => false],
    ["label" => "Customers", "url" => $base_url . "customer/index.php", 'icon' => "users", "divider" => false],
    ["label" => "Products", "url" => $base_url . "product/index.php", 'icon' => "package", "divider" => false],
    ["label" => "Invoices", "url" => $base_url . "invoice/index.php", 'icon' => "file-text", "divider" => false],
    ["label" => "Invoice Items", "url" => $base_url . "invoiceItem/index.php", 'icon' => "align-left", "divider" => false],
    ["label" => " Payments", "url" => $base_url . "payment/index.php", 'icon' => "dollar-sign", "divider" => false],
    ["label" => "News", "url" => "", 'icon' => "", "divider" => true],
    ["label" => "Category", "url" => $base_url . "admin/category", 'icon' => "sliders", "divider" => false],
];


include_once $frontend_path . "/config/db.php";