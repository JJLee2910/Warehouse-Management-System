<!--
Programmer Name: Lee Jang Jhin
Program Name:bookSpaceValidate.php
Description: backend connection & logic to database for bookSpace. Fetch data to database if there is no errors
Edited/Modified by: Lee Jang Jhin
 -->

<?php
// initializing variables
$spaceID = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'fyp');


if (isset($_POST['book'])) {
  // receive all input values from the form
  $spaceID = mysqli_real_escape_string($db, $_POST['spaceID']);
  $Full_Name = mysqli_real_escape_string($db, $_POST['Full_Name']);
  $IC_Number =  mysqli_real_escape_string($db, $_POST['IC_Number']);
  $Phone_Number = mysqli_real_escape_string($db, $_POST['Phone_Number']);
  $rent_per_month = mysqli_real_escape_string($db, $_POST['rent_per_month']);
  $rental_date = mysqli_real_escape_string($db, $_POST['rental_date']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($spaceID)) { array_push($errors, "Space ID is required"); }
  if (empty($Full_Name)) { array_push($errors, "Your Name is required"); }
  if (empty($IC_Number)) { array_push($errors, "Your IC Number is required"); }
  if (empty($Phone_Number)) { array_push($errors, "Your Phone Number is required"); }
  if (empty($rent_per_month)) { array_push($errors, "Rental fee is required"); }
  if (empty($rental_date)) { array_push($errors, "Rental Date is required"); }

  // first check the database to make sure the space id is not duplicated
  $user_check_query = "SELECT * FROM inventory_info WHERE spaceID='$spaceID'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if space id exists
    if ($user['spaceID'] === $spaceID) {
      array_push($errors, "That Space has been rented!");
    }
  }

  // Finally, data is added into database if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO inventory_info (spaceID, IC_Number Full_Name, size, rent_per_month, rental_date)
  			  VALUES('$spaceID', '$IC_Number', '$Full_Name', '100', '$rent_per_month', '$rental_date')";

    $query2 = "INSERT INTO payment_info (IC_Number, Phone_Number, Delivery_address, booked_space_id, date, amount, status, payment_purpose)
              VALUES('$IC_Number', '$Phone_Number', '-', '$spaceID', '$rental_date', '$rent_per_month', 'Pending', 'Book Space')";
  	mysqli_query($db, $query);
    mysqli_query($db, $query2);
    header("location: payment.php");
  }
}
