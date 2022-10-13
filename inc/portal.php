<?php

include('db_connection.php');
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions

//$conn = new mysqli('localhost','root', '', 'property');
//$conn = new mysqli('localhost','bernini47', 'Javax.swing2020', 'wuxianco_cbt');
//$username = "bernini47";
//$password = "Javax.swing2020";
$database = new database();
$conn = $database->getConnection();

class PortalUtility
{

	public function loginUser($conn, $email, $password)
	{
		$json = array();

		$query = "SELECT email, password, role from staff where email = '" . $email . "' and password = '" . $password . "'";
		$result = mysqli_query($conn, $query);
		$r = mysqli_fetch_array($result);
		if ($r > 0) {
			$_SESSION['login_user'] = $email;
			$json[] = $r;
		} else {
			$json[] = 0;
		}

		return json_encode($json, JSON_PRETTY_PRINT);
	}




	public function create_category($conn, $category_name, $status, $active )
	{
		$status = "";
		$category_id = substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5);
		$sql = "INSERT INTO `category`(`category_id`, `category_name`, `status`, `active`)
		 VALUES ('$category_id','$category_name', '$status', 'Y')";
		if (mysqli_query($conn, $sql)) {
			$status = json_encode(array("message" => "success","category_id"=>$category_id), JSON_PRETTY_PRINT);
		} else {
			$status = json_encode(array("message"=>"error","category_id"=>"null"), JSON_PRETTY_PRINT);
		}
		return $status;
	}


	public function fetchCategory($conn)
	{
		$json = array();
		$sql = "SELECT * FROM category WHERE active = 'Y'";
		$result = mysqli_query($conn, $sql);
		while ($r = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$json[] = $r;
		}
		return json_encode($json, JSON_PRETTY_PRINT);
	}

	public function create_product($conn, $product_name, $cost_price, $quantity, $selling_price, $date, $product_category, $status, $active)
	{
		$status = "";
		$product_id = substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5);
		$sql = "INSERT INTO `product`(`product_id`, `product_name`, `cost_price`, `quantity`, `selling_price`, `date`, `product_category`, `status`, `active`)
		 VALUES ('$product_id', '$product_name', '$cost_price', '$quantity', '$selling_price', '$date', '$product_category', '$status', 'Y')";
		if (mysqli_query($conn, $sql)) {
			$status = json_encode(array("message" => "success","product_id"=>$product_id), JSON_PRETTY_PRINT);
		} else {
			$status = json_encode(array("message"=>"error","product_id"=>"null"), JSON_PRETTY_PRINT);
		}
		return $status;
	}

	public function fetchProduct($conn)
	{
		$json = array();
		$sql = "SELECT * FROM product WHERE active = 'Y' ORDER BY stampdate DESC;";
		$result = mysqli_query($conn, $sql);
		while ($r = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$json[] = $r;
		}
		return json_encode($json, JSON_PRETTY_PRINT);
	}

	public function fetchCategoryById($conn, $category_id)
	{
		$json = array();
		$sql = "SELECT * FROM category WHERE active = 'Y' AND category_id = '$category_id' ORDER BY stampdate DESC;";
		$result = mysqli_query($conn, $sql);
		while ($r = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$json[] = $r;
		}
		return json_encode($json, JSON_PRETTY_PRINT);
	}

	public function createStaff($conn, $full_name, $email, $password, $address, $role, $phone)
	{
		$status = "";
		$staff_id = substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5);
		$password = substr(str_shuffle(str_repeat("0123456789abcdefghiABCDEFGHIJKLMNOPQRSTUVWXYZ", 4)), 0, 5);
		$sql = "INSERT INTO `staff`(`staff_id`, `fullname`, `email`, `password`, `address`, `role`, `active`, `phone`)
		 VALUES ('$staff_id', '$full_name', '$email', '$password', '$address', '$role', '$phone', 'Y')";
		if (mysqli_query($conn, $sql)) {
			$status = json_encode(array("message" => "success","staff_id"=>$staff_id), JSON_PRETTY_PRINT);
		} else {
			$status = json_encode(array("message"=>"error","staff_id"=>"null"), JSON_PRETTY_PRINT);
		}
		return $status;
	}

	public function createSales($conn, $agent_id, $agent_name, $product_name, $product_price, $product_quantity, $total_amount, $amount_paid, $amount_owing, $customer_name, $payment_type, $product_id)
{
    $status = "";
    $flag = "";
    if($amount_owing > 0){
        $flag = 'Owing';
    }else{
        $flag = 'Y';
    }
    $updateProducts = $this->getProductQuantity($conn, $product_id);
    $salesDeduction =  $updateProducts - $product_quantity;
	print_r($salesDeduction);
    $sales_id = substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5);
    $sql = "INSERT INTO `sales`(`sales_id`, `agent_id`, `fullname`, `product_name`, `product_price`, `quantity`, `total_amount`, `amount_paid`, `amount_owing`, `customer_name`, `payment_type`,`status`)
     VALUES ('$sales_id','$agent_id', '$agent_name', '$product_name','$product_price','$product_quantity','$total_amount','$amount_paid', '$amount_owing', '$customer_name','$payment_type','$flag')";
    if (mysqli_query($conn, $sql)) {
        $status = json_encode(array("message" => "success", "agent_id" => $agent_id), JSON_PRETTY_PRINT);
         $this->updateProductQuantity($conn, $product_id, $salesDeduction);
    } else {
        $status = json_encode(array("message" => "error", "agent_id" => "null"), JSON_PRETTY_PRINT);
    }
    return $status;
}


	public function fetchStaff($conn)
	{
		$json = array();

		$sqlSelect = "SELECT staff_id, fullname, email, password, address, r.role_name as role, phone, active FROM staff s, staff_role r WHERE r.role_id  = r.role_id";
		$result = mysqli_query($conn, $sqlSelect);
		while ($r = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$json[] = $r;
		}

		return json_encode($json, JSON_PRETTY_PRINT);
	}

	

	public function fetchProductById($conn, $product)
	{
		$json = array();

		$sqlSelect = "SELECT * FROM `products` WHERE `product_id`  = '$product'";
		$result = mysqli_query($conn, $sqlSelect);
		while ($r = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$json[] = $r;
		}

		return json_encode($json, JSON_PRETTY_PRINT);
	}


	public function fetchSalesById($conn, $staff_id)
	{
		$json = array();

		$sqlSelect = "SELECT * FROM `sales` WHERE `agent_id`  = '$staff_id'";
		$result = mysqli_query($conn, $sqlSelect);
		while ($r = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$json[] = $r;
		}

		return json_encode($json, JSON_PRETTY_PRINT);
	}


	public function updateProduct($conn, $product_name, $sales_point, $product_quantity, $empty_create, $product_category, $product_price, $product_description)
	{

		$sql = "UPDATE `products` SET `product_name`= '$product_name', `sales_point` = '$sales_point', `product_quantity` = '$product_quantity', `empty_create` = '$empty_create', `product_category` = '$product_category', `product_price` = '$product_price', `product_description` = '$product_description' WHERE `active` = 'Y'";
		$result = mysqli_query($conn, $sql);
		return '1';
	}

	public function deleteCategory($conn, $category_id)
	{

		$sql = "UPDATE `category` SET `active` = 'N' WHERE `category_id` = '$category_id'";
		$result = mysqli_query($conn, $sql);
		return '1';
	}

	public function deleteProduct($conn, $product_id)
	{

		$sql = "UPDATE `product` SET `active` = 'N' WHERE `product_id` = '$product_id'";
		$result = mysqli_query($conn, $sql);
		return '1';
	}

	public function updateProductQuantity($conn, $product_id, $salesDeduction)
	{

	
		$sql = "UPDATE `product` SET quantity = '$salesDeduction' WHERE `product_id` = '$product_id'";
		$result = mysqli_query($conn, $sql);
		// return '1';
	}

	public function getProductQuantity($conn, $product_id)
	{
		
		$sql = "SELECT * FROM `product` WHERE `product_id`  = '$product_id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	 	return $row['quantity'];
	}

	public function agents($conn)
	{
		$json = array();

		$query = "SELECT * FROM `staff` WHERE active = 'Y'";
		$result = mysqli_query($conn, $query);

		while ($r = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$json[] = $r;
		}

		return json_encode($json, JSON_PRETTY_PRINT);
	}
}

$portal = new PortalUtility();

// echo $portal->create_product($conn,'test','test','test','test','test','test','test','test','test');
// echo $portal->createSalesPoint($conn,'test','test','test','test');
// echo $portal->fetchCategoryById($conn,'ddytu');
// echo $portal->getProductQuantity($conn,'NLVRG');


