<!--
Programmer Name: Lee Jang Jhin
Program Name:delete.php
Description: backend connection & logic to database for deleting space renting data.
Edited/Modified by: Lee Jang Jhin
 -->

<?php
include "connect.php";

	$spaceID = $_GET['spaceID'];
	$Full_Name = $_POST['Full_Name'];
	$size = $_POST['size'];
	$rent_per_month = $_POST ['rent_per_month'];
	$rental_date = $_POST['rental_date'];
	$sql = "DELETE FROM inventory_info WHERE spaceID = '$spaceID'";



	$result = mysqli_query($conn, $sql);
	header('location:viewBookSpace.php');
?>
