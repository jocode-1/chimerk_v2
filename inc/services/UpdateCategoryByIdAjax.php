<?php

include('../portal.php');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

$portal = new PortalUtility();

$category_id = trim(mysqli_real_escape_string($conn, !empty($_POST['category_id']) ? $_POST['category_id'] : ""));

$user = $portal->deleteCategory ($conn, $category_id);
echo $user;