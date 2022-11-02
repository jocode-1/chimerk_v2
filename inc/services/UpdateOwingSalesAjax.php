<?php

include('../portal.php');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

$portal = new PortalUtility();

$product_name = trim(mysqli_real_escape_string($conn, !empty($_POST['product_name']) ? $_POST['product_name'] : ""));
$product_price = trim(mysqli_real_escape_string($conn, !empty($_POST['product_price']) ? $_POST['product_price'] : ""));
$litres = trim(mysqli_real_escape_string($conn, !empty($_POST['product_quantity']) ? $_POST['product_quantity'] : ""));
$total_amount = trim(mysqli_real_escape_string($conn, !empty($_POST['total_amount']) ? $_POST['total_amount'] : ""));
$amount_paid = trim(mysqli_real_escape_string($conn, !empty($_POST['amount_paid']) ? $_POST['amount_paid'] : ""));
$amount_owing = trim(mysqli_real_escape_string($conn, !empty($_POST['amount_owing']) ? $_POST['amount_owing'] : ""));
$customer_name = trim(mysqli_real_escape_string($conn, !empty($_POST['customer_name']) ? $_POST['customer_name'] : ""));
// $sales_id = trim(mysqli_real_escape_string($conn, !empty($_POST['sales_id']) ? $_POST['sales_id'] : ""));

$user = $portal->UpdateOwingSales($conn, $product_name, $product_price, $litres, $total_amount, $amount_paid, $amount_owing, $customer_name);
echo $user;