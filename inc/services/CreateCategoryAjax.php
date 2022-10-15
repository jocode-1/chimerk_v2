<?php

include('../portal.php');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

$portal = new PortalUtility();

// $product_id = trim(mysqli_real_escape_string($conn, !empty($_POST['product_id']) ? $_POST['product_id'] : ""));
$category_name = trim(mysqli_real_escape_string($conn, !empty($_POST['category_name']) ? $_POST['category_name'] : ""));
$status = trim(mysqli_real_escape_string($conn, !empty($_POST['status']) ? $_POST['status'] : ""));
// $active = trim(mysqli_real_escape_string($conn, !empty($_POST['active']) ? $_POST['active'] : ""));

$user = $portal->create_category($conn, $category_name, $status );
echo $user;