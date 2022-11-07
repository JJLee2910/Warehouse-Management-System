<!--
Programmer Name: Meeganathan
Program Name:adminValidation.php
Description: backend connection to database for update admin info UI.
Edited/Modified by: Lee Jang Jhin
 -->

<?php

session_start();

// include the connection to database
include('connect.php');
	$update = false;

// receiving users input
 if (isset($_POST['update'])) {
    $IC_Number = mysqli_real_escape_string($conn, $_POST['IC_Number']);
    $Phone_Number =  mysqli_real_escape_string($conn,$_POST['Phone_Number']);
    $Email =  mysqli_real_escape_string ($conn,$_POST['Email']);
    $Password =  mysqli_real_escape_string($conn,$_POST['Password']);
	  $Full_Name = mysqli_real_escape_string($conn,$_POST['Full_Name']);
		$username =  mysqli_real_escape_string ($conn,$_POST['username']);

    // hashing password
    $Newpassword = md5($Password);
    $query4 ="UPDATE users SET Phone_Number='$Phone_Number', Email='$Email', Password='$Newpassword', name='$Full_Name', username='$username' WHERE `users`.`IC_Number` = '$IC_Number'";
    $outcome4=mysqli_query($conn, $query4);

    if(!$outcome4)
    {
       echo "<script>alert('PLEASE TRY AGAIN!')</script>";
       echo "<script>window.history.back('editAdmin.php')</script>";
    }

    else
    {
      echo "<script>alert('Successfully edited!')</script>";
      echo "<script>window.location.replace('panel.php')</script>";
    }

   mysqli_close($conn);

 }
 ?>
