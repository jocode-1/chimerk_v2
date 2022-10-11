<?php

include('../portal.php');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

$portal = new PortalUtility();

// $product_id = trim(mysqli_real_escape_string($conn, !empty($_POST['product_id']) ? $_POST['product_id'] : ""));
$product_name = trim(mysqli_real_escape_string($conn, !empty($_POST['product_name']) ? $_POST['product_name'] : ""));
$cost_price = trim(mysqli_real_escape_string($conn, !empty($_POST['cost_price']) ? $_POST['cost_price'] : ""));
$quantity = trim(mysqli_real_escape_string($conn, !empty($_POST['quantity']) ? $_POST['quantity'] : ""));
$selling_price = trim(mysqli_real_escape_string($conn, !empty($_POST['selling_price']) ? $_POST['selling_price'] : ""));
$date = trim(mysqli_real_escape_string($conn, !empty($_POST['date']) ? $_POST['date'] : ""));
$product_category = trim(mysqli_real_escape_string($conn, !empty($_POST['product_category']) ? $_POST['product_category'] : ""));
$status = trim(mysqli_real_escape_string($conn, !empty($_POST['status']) ? $_POST['status'] : ""));
$active = trim(mysqli_real_escape_string($conn, !empty($_POST['active']) ? $_POST['active'] : ""));

$user = $portal->create_product($conn, $product_name, $cost_price, $quantity, $selling_price, $date, $product_category, $status, $active);
echo $user; 