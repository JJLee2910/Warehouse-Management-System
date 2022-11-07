<!--
Programmer Name: Aw Jun Yuan & Kingsley Ng Ti Heng
Program Name:connect.php
Description: backend connection to database for entire system
Edited/Modified by: Lee Jang Jhin
 -->

<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "fyp";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}
