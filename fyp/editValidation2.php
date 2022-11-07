<!--
Programmer Name: Lee Jang Jhin
Program Name:editValidation2.php
Description: Backend logic & connection for updating Inventory informaation. Validate if input has no error then update to database.
Edited/Modified by: Lee Jang Jhin
 -->


<?php
session_start();

include('connect.php');
  $spaceID = 0;
  $update = false;

// receiving input from the form
 if (isset($_POST['update'])) {
    $spaceID = mysqli_real_escape_string($conn, $_POST['spaceID']);
    $price_per_month =  mysqli_real_escape_string($conn,$_POST['price_per_month']);
    $availability =  mysqli_real_escape_string ($conn,$_POST['availability']);
    $space_info =  mysqli_real_escape_string($conn,$_POST['space_info']);

    // update to specific spaceID where spaceID entered is matched with spaceID valid in database
    $query4 ="UPDATE warehouse_info  SET spaceID='$spaceID', price_per_month='$price_per_month', availability='$availability', space_info='$space_info' WHERE `warehouse_info`.`spaceID` = '$spaceID'";
    $outcome4=mysqli_query($conn, $query4);

    if(!$outcome4)
    {
       echo "<script>alert('PLEASE TRY AGAIN!')</script>";
       echo "<script>window.history.back('editInventory.php')</script>";
    }

    else
    {
      echo "<script>alert('Successfully edited!')</script>";
      echo "<script>window.location.replace('panel.php')</script>";
    }

   mysqli_close($conn);

 }

 ?>
