<!--
Programmer Name: Lee Jang Jhin
Program Name:validate.php
Description: backend logic for validating the response form
Edited/Modified by: Lee Jang Jhin
 -->

<?php
// initializing variables
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'fyp');

// add question and responses
if (isset($_POST['add_resp'])) {
  // receive all input values from the form
  $messages = mysqli_real_escape_string($db, $_POST['messages']);
  $response = mysqli_real_escape_string($db, $_POST['response']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($messages)) { array_push($errors, "Messages is required"); }
  if (empty($response)) { array_push($errors, "Response is required"); }


  // Finally, add response and question if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO chatbot (messages, response)
  			  VALUES('$messages', '$response')";
  	mysqli_query($db, $query);
  }
}
