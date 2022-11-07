<!--
  Programmer Name: Meeganathan
Program Name:addAdmin.php
Description: UI design for adding new admin users
Edited/Modified by: Lee Jang Jhin
 -->

<?php
include "adminServer.php";
  session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
  }
?>
 <!-- Form for adding new admin user -->
 <!DOCTYPE html>
 <html>
 <head>
   <title>Add New Admin</title>
 </head>
 <body>
   <div class="header">
     <h2>Add New Admin</h2>
   </div>

   <form method="post" action="addAdmin.php">
     <div class="input-group">
       <!-- prompt error message if there is any error -->
       <?php include('errors.php'); ?>
       <label>Admin's Full Name</label>
       <input type="text" name="name" >
     </div>

     <div class="input-group">
       <label>Username</label>
       <input type="text" name="username">
     </div>

     <div class="input-group">
       <label>Password</label>
       <input type="password" name="password_1">
     </div>

     <div class="input-group">
       <label>Confirm password</label>
       <input type="password" name="password_2">
     </div>

     <div class="input-group">
       <label>Phone Number</label>
       <input type="text" name="phone" >
     </div>

     <div class="input-group">
       <label>Email</label>
       <input type="email" name="Email" >
     </div>

     <div class="input-group">
       <label>IC Number</label>
       <input type="text" name="IC_Number" >
     </div>


     <div class="input-group">
       <button type="submit" class="btn" name="reg_admin">Register</button><br><br> <a href="#" class="btn" onclick="history.back(1);">Back</a>
     </div>

   </form>

   <div id="footer">
     Copyright © WMS's Programmer Warehouse Management System 2022
   </div>

 </body>
 </html>

 <style>
 * {
   margin: 0px;
   padding: 0px;
 }
 body {
   margin: 0 auto;
   font-family: Helvetica;
   background-size:cover;
   background-position:center;
   display:flex;
   flex-direction:column;
   justify-content:center;
   align-items:center;
   text-align:center;
   padding:0 20px;
 }

 .header {
   width: 30%;
   margin: 50px auto 0px;
   color: white;
   background: skyblue;
   text-align: center;
   border: 1px solid #B0C4DE;
   border-bottom: none;
   border-radius: 10px 10px 0px 0px;
   padding: 20px;
 }
 form, .content {
   width: 30%;
   margin: 0px auto;
   padding: 20px;
   border: 0px solid #B0C4DE;
   background: white;
   border-radius: 0px 0px 10px 10px;
 }
 .input-group {
   margin: 10px 0px 10px 0px;
 }
 .input-group label {
   display: block;
   text-align: left;
   margin: 3px;
 }
 .input-group input {
   height: 30px;
   width: 93%;
   padding: 5px 10px;
   font-size: 16px;
   border-radius: 5px;
   border: 1px solid gray;
 }
 .btn {
   padding: 10px;
   font-size: 15px;
   color: white;
   background: skyblue;
   border: none;
   border-radius: 5px;
 }
 .error {
   width: 92%;
   margin: 0px auto;
   padding: 10px;
   border: 1px solid #a94442;
   color: #a94442;
   background: #f2dede;
   border-radius: 5px;
   text-align: left;
 }
 .success {
   color: #3c763d;
   background: #dff0d8;
   border: 1px solid #3c763d;
   margin-bottom: 20px;
 }

 #footer {
   position: fixed;
   padding: 10px 10px 0px 10px;
   bottom: 0;
   width: 100%;
   /* Height of the footer*/
   height: 20px;
   background: lightgrey;
}

 </style>
