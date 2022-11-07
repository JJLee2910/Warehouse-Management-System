<!--
Programmer Name: Meeganathan
Program Name:adminServer.php
Description: backend connection & logic for validating the addAdmin form. Store admin details if there is no error
Edited/Modified by: Lee Jang Jhin
 -->

<?php
// initializing variables
$IC_Number = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'fyp');

if (isset($_POST['reg_admin'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
  $IC_Number = mysqli_real_escape_string($db, $_POST['IC_Number']);
  $username = mysqli_real_escape_string($db, $_POST['username']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Full name is required"); }
  if (empty($password_1)) { array_push($errors, "password is required"); }
  if (empty($password_2)) { array_push($errors, "Confirmed is required"); }
  if (empty($phone)) { array_push($errors, "Phone Number is required"); }
  if (empty($Email)) { array_push($errors, "Email is required"); }
  if (empty($IC_Number)) { array_push($errors, "IC Number is required"); }
  if (empty($username)) { array_push($errors, "username is required"); }
  if ($password_1 != $password_2) {
	   array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure the ic number is not duplicated
  $user_check_query = "SELECT * FROM users WHERE IC_Number='$IC_Number'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if ic is already exists push into $errors array
    if ($user['IC_Number'] === $IC_Number) {
      array_push($errors, "IC already exists");
    }
  }

  // Finally, admin account is added into database if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);
  	$query = "INSERT INTO users (name, password, Phone_Number, Email, IC_Number, username, role)
  			  VALUES('$name', '$password', '$phone', '$Email', '$IC_Number', '$username', 'Admin')";
  	mysqli_query($db, $query);
    header("location: panel.php");
  }
}
