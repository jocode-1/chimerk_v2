<?php

include('../portal.php');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

$portal = new PortalUtility();

// $sales_id = trim(mysqli_real_escape_string($conn, !empty($_POST['sales_id']) ? $_POST['sales_id'] : ""));
$agent_id = trim(mysqli_real_escape_string($conn, !empty($_POST['agent_id']) ? $_POST['agent_id'] : ""));
$agent_name = trim(mysqli_real_escape_string($conn, !empty($_POST['fullname']) ? $_POST['fullname'] : ""));
$product_name = trim(mysqli_real_escape_string($conn, !empty($_POST['product_name']) ? $_POST['product_name'] : ""));
$product_price = trim(mysqli_real_escape_string($conn, !empty($_POST['product_price']) ? $_POST['product_price'] : ""));
$product_quantity = trim(mysqli_real_escape_string($conn, !empty($_POST['product_quantity']) ? $_POST['product_quantity'] : ""));
$total_amount = trim(mysqli_real_escape_string($conn, !empty($_POST['total_amount']) ? $_POST['total_amount'] : ""));
$amount_paid = trim(mysqli_real_escape_string($conn, !empty($_POST['amount_paid']) ? $_POST['amount_paid'] : ""));
$amount_owing = trim(mysqli_real_escape_string($conn, !empty($_POST['amount_owing']) ? $_POST['amount_owing'] : ""));
$customer_name = trim(mysqli_real_escape_string($conn, !empty($_POST['customer_name']) ? $_POST['customer_name'] : ""));
$payment_type = trim(mysqli_real_escape_string($conn, !empty($_POST['payment_type']) ? $_POST['payment_type'] : ""));
$date = trim(mysqli_real_escape_string($conn, !empty($_POST['date']) ? $_POST['date'] : ""));
$product_id = trim(mysqli_real_escape_string($conn, !empty($_POST['product_id']) ? $_POST['product_id'] : ""));


$user = $portal->createSales($conn, $agent_id, $agent_name, $product_name, $product_price,
 $product_quantity, $total_amount, $amount_paid, $amount_owing, $customer_name, $payment_type, $date, $product_id);
echo $user;

