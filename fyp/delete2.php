<!--
Programmer Name: Lee Jang Jhin
Program Name:delete2.php
Description: backend connection & logic to database for deleting delivery data.
Edited/Modified by: Lee Jang Jhin
 -->

<?php
include "connect.php";

	$Delivery_ID = $_GET['Delivery_ID'];
	$IC_Number = $_GET['Delivery_ID'];
	$status = $_POST['status'];
	$date = $_POST['date'];
	$Delivery_address = $_POST ['Delivery_address'];
	$amount_of_stock = $_POST['amount_of_stock'];
	$sql = "DELETE FROM delivery_info WHERE Delivery_ID = '$Delivery_ID'";



	$result = mysqli_query($conn, $sql);
	header('location:viewBookDelivery.php');
?>
