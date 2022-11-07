<!--
Programmer Name: Lee Jang Jhin
Program Name:editUser.php
Description: UI design table for editting user information
Edited/Modified by: Lee Jang Jhin
 -->

<style>
body{

  margin: 0 auto;
  font-family: arial;
  background-size:cover;
  background-position:center;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  text-align:left;
  padding:0 20px;
}

h1{

  color: #09F;
  text-align: center;
}
label{

 color: #0CF;
 width: 15%;
 display: inline-block;

}

#container{

 padding: 20px;
 width: 60%;
 margin: 0 auto;
 margin-top: 1%;
 margin-bottom: 1%;
 background-color: white;
}

.userinput{

  padding-top: 7px;
  padding-bottom: 7px;
  padding-left: 5px;
  padding-right: 5px;
  margin-bottom: 30px;
}
label{

color: #666;
font-size: 14px;
}
textarea{
  color: #000;
  font-size: 14px;
}

select{
  color: #09F;
}

.sampleBtn1{
  border-radius: 10px;
  background-color: #09F;
  width: 20%;
  height: 35px;
  font-size: 16px;
  color:white;

}
.sampleBtn1:hover{
  color: white;
  background-color: grey;
  cursor: pointer;
}

.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #09F;
  border: none;
  border-radius: 10px;
  width: 20%;
}

.btn:hover{
  color: white;
  background-color: grey;
  cursor: pointer;
}

 h2{
 color:#666;
 text-align: center;
 }

 #footer {
  position: fixed;
  padding: 10px 10px 0px 10px;
  bottom: 0;
  width: 100%;
  /* Height of the footer*/
  height: 20px;
  background: lightgrey;
  text-align:center;
 }

</style>



<?php
include('editValidation.php');



  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
  }

if (isset($_GET['no'])) {
    $no = $_GET['no'];
    $update = true;
    $record = mysqli_query($con, "SELECT * FROM users WHERE no=$no");

if (count($record) == 1 ) {
      $n = mysqli_fetch_array($record);
      $IC_Number = $n['IC_Number'];
      $role = $n['role'];
      $username = $n['username'];
      $password = $n['password'];
      $name = $n['name'];
    }
  }

 ?>


<!-- form for user edit personal profile -->
<html>
<head>
  <title>Edit</title>
</head>

<body>
<div id="container">
 <h1> Edit User Profile </h1>
 <form name="update" action="editvalidation.php" method="POST">
<input type="hidden" name="no" value="<?php echo $no; ?>">

  <h2> User details: </h2>

  <div class="userinput">
   <label> IC Number  </label>
   <td><input type="text" name="IC_Number" required= "required"></td>
  </div>

  <div class="userinput">
   <label> Username  </label>
   <td><input type="text" name="username" required= "required"></td>
  </div>

  <div class="userinput">
   <label> Password   </label>
   <td><input type="password" name="password" required= "required"></td>
  </div>

  <div class="userinput">
   <label> Full Name  </label>
   <td><input type="text" name="name" required= "required"></td>
  </div>

  <div class="userinput">
   <label> Phone Number  </label>
   <td><input type="text" name="phone" required= "required"></td>
  </div>

  <div class="userinput">
   <label> Email  </label>
   <td><input type="text" name="Email" required= "required"></td>
  </div>

  <div style="text-align:center">
   <button type="submit" class="sampleBtn1" name="update">Update</button><br><br>
   <a href="#" class="btn" onclick="history.back(1);">Back</a>
  </div>

 </form>
 </div>

 <div id="footer">
   Copyright © WMS's Programmer Warehouse Management System 2022
 </div>

</body>
</html>
