<?php

include('../portal.php');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

$portal = new PortalUtility();

$exp_name = trim(mysqli_real_escape_string($conn, !empty($_POST['exp_name']) ? $_POST['exp_name'] : ""));
$exp_description = trim(mysqli_real_escape_string($conn, !empty($_POST['exp_description']) ? $_POST['exp_description'] : ""));
$exp_category = trim(mysqli_real_escape_string($conn, !empty($_POST['exp_category']) ? $_POST['exp_category'] : ""));
$exp_amount = trim(mysqli_real_escape_string($conn, !empty($_POST['exp_amount']) ? $_POST['exp_amount'] : ""));
$money_from = trim(mysqli_real_escape_string($conn, !empty($_POST['money_from']) ? $_POST['money_from'] : ""));
$exp_date = trim(mysqli_real_escape_string($conn, !empty($_POST['exp_date']) ? $_POST['exp_date'] : ""));


$user = $portal->createExpenses($conn, $exp_name, $exp_description, $exp_category, $exp_amount, $money_from, $exp_date);
echo $user;

