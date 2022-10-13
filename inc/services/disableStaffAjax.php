<?php

include('../portal.php');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

$portal = new PortalUtility();

$staff_id = trim(mysqli_real_escape_string($conn, !empty($_POST['staff_id']) ? $_POST['staff_id'] : ""));

$user = $portal->disableStaff($conn, $staff_id);
echo $user;