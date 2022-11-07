<!--
Programmer Name: Lee Jang Jhin
Program Name:editVlaidation3.php
Description: Backend logic & connection for updating delivery status. Validate if input has no error then update to database.
Edited/Modified by: Lee Jang Jhin
 -->

<?php
session_start();

include('connect.php');
  $spaceID = 0;
  $update = false;

// receiving input from the form
 if (isset($_POST['update'])) {
    $Delivery_ID = mysqli_real_escape_string($conn, $_POST['Delivery_ID']);
    $IC_Number =  mysqli_real_escape_string($conn,$_POST['IC_Number']);
    $status =  mysqli_real_escape_string ($conn,$_POST['status']);
    $date =  mysqli_real_escape_string($conn,$_POST['date']);
    $Delivery_address =  mysqli_real_escape_string($conn,$_POST['Delivery_address']);
    $amount_of_stock =  mysqli_real_escape_string($conn,$_POST['amount_of_stock']);

    // update to specific spaceID where spaceID entered is matched with spaceID valid in database
    $query4 ="UPDATE delivery_info  SET Delivery_ID='$Delivery_ID', IC_Number='$IC_Number', status='$status', date='$date', Delivery_address='$Delivery_address', amount_of_stock='$amount_of_stock' WHERE `delivery_info`.`Delivery_ID` = '$Delivery_ID'";
    $outcome4=mysqli_query($conn, $query4);

    if(!$outcome4)
    {
       echo "<script>alert('PLEASE TRY AGAIN!')</script>";
       echo "<script>window.history.back('editStatus.php')</script>";
    }

    else
    {
      echo "<script>alert('Successfully edited!')</script>";
      echo "<script>window.location.replace('panel.php')</script>";
    }

   mysqli_close($conn);

 }

 ?>
