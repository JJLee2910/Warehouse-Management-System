<!--
Programmer Name: Lee Jang Jhin
Program Name:editValidation.php
Description: Backend logic & connection for updating customer informaation. Validate if input has no error then update to database.
Edited/Modified by: Lee Jang Jhin
 -->

<?php

session_start();

include('connect.php');

  $IC_Number = 0;
	$update = false;

// receiving input from the form
 if (isset($_POST['update'])) {
    $IC_Number = mysqli_real_escape_string($conn, $_POST['IC_Number']);
    $username =  mysqli_real_escape_string ($conn,$_POST['username']);
    $password =  mysqli_real_escape_string($conn,$_POST['password']);
	  $name = mysqli_real_escape_string($conn,$_POST['name']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $Email = mysqli_real_escape_string($conn,$_POST['Email']);

    // hashing password
    $Newpassword = md5($password);
    // update to specific IC Number where IC Number entered is matched with IC Number valid in database
    $query4 ="UPDATE users  SET role='Customer', username='$username', password='$Newpassword', name='$name', Phone_Number ='$phone', Email= '$Email' WHERE `users`.`IC_Number` = '$IC_Number'";
    $outcome4=mysqli_query($conn, $query4);

    if(!$outcome4)
    {
       echo "<script>alert('PLEASE TRY AGAIN!')</script>";
       echo "<script>window.history.back('editUser.php')</script>";
    }

    else
    {
      echo "<script>alert('Successfully edited!')</script>";
      echo "<script>window.location.replace('main.php')</script>";
    }

   mysqli_close($conn);

 }





 ?>
