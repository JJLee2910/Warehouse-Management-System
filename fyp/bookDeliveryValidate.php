<!--
Programmer Name: Lee Jang Jhin
Program Name:bookDeliveryValidate.php
Description: backend connection & logic to database for bookDelivery. Fetch all the results to database if there is no error
Edited/Modified by: Lee Jang Jhin
 -->

<?php
// initializing variables
$IC_Number = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'fyp');


if (isset($_POST['delivery'])) {
  // receive all input values from the form
  $IC_Number = mysqli_real_escape_string($db, $_POST['IC_Number']);
  $Delivery_address = mysqli_real_escape_string($db, $_POST['Delivery_address']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $Phone_Number = mysqli_real_escape_string($db, $_POST['Phone_Number']);
  $amount_of_stock = mysqli_real_escape_string($db, $_POST['amount_of_stock']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($IC_Number)) { array_push($errors, "IC Number is required"); }
  if (empty($Delivery_address)) { array_push($errors, "Delivery Address is required"); }
  if (empty($date)) { array_push($errors, "date is required"); }
  if (empty($amount)) { array_push($errors, "amount is required"); }
  if (empty($Phone_Number)) { array_push($errors, "Phone Number is required"); }
  if (empty($amount_of_stock)) { array_push($errors, "Amount of stock is required"); }

  // Finally, date is added into database if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO payment_info (Delivery_address, date, amount, status, Phone_Number, IC_Number, booked_space_id, payment_purpose)
  			  VALUES('$Delivery_address', '$date', '$amount', 'Pending', '$Phone_Number', '$IC_Number', '-', 'Book Delivery')";

// store delivery info into delivery table
    $query2 = "INSERT INTO delivery_info (status, IC_Number date, Delivery_address, amount_of_stock)
            VALUES('Pending', '$IC_Number' '$date', '$Delivery_address', '$amount_of_stock')";

    // performing the query against database
  	mysqli_query($db, $query);
    mysqli_query($db, $query2);
    header("location: payment.php");
  }
}
