<?php

include('../portal.php');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

$portal = new PortalUtility();

// $product_id = trim(mysqli_real_escape_string($conn, !empty($_POST['product_id']) ? $_POST['product_id'] : ""));
$full_name = trim(mysqli_real_escape_string($conn, !empty($_POST['fullname']) ? $_POST['fullname'] : ""));
$email = trim(mysqli_real_escape_string($conn, !empty($_POST['email']) ? $_POST['email'] : ""));
$password = trim(mysqli_real_escape_string($conn, !empty($_POST['password']) ? $_POST['password'] : ""));
$address = trim(mysqli_real_escape_string($conn, !empty($_POST['address']) ? $_POST['address'] : ""));
$phone = trim(mysqli_real_escape_string($conn, !empty($_POST['phone']) ? $_POST['phone'] : ""));
$role = trim(mysqli_real_escape_string($conn, !empty($_POST['role']) ? $_POST['role'] : ""));



$user = $portal->createStaff($conn, $full_name, $email, $password, $address, $phone, $role );
echo $user; 