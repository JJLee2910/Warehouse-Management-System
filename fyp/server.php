<!--
Programmer Name: Lee Jang Jhin
Program Name:server.php
Description: Backend logic & connection to database to validate if the users is existed or not, else insert data into database.
Edited/Modified by: Lee Jang Jhin
 -->

<?php
// initializing variables
$IC_Number = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'fyp');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $IC_Number = mysqli_real_escape_string($db, $_POST['IC_Number']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Full name is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($IC_Number)) { array_push($errors, "IC is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($password_2)) { array_push($errors, "Confirm Password is required"); }
  if (empty($Email)) { array_push($errors, "Email is required"); }
  if (empty($phone)) { array_push($errors, "Phone Number is required"); }
  if ($password_1 != $password_2) {
	   array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same IC Number
  $user_check_query = "SELECT * FROM users WHERE IC_Number='$IC_Number'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if ic exists
    if ($user['IC_Number'] === $IC_Number) {
      array_push($errors, "ic already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

    // update data into database
  	$query = "INSERT INTO users (IC_Number, username, name, password, role, Phone_Number, Email)
  			  VALUES('$IC_Number', '$username', '$name', '$password', 'Customer', '$phone', '$Email')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";

    // if register success redirect to main menu
  	header('location: main.php');
  }
}
