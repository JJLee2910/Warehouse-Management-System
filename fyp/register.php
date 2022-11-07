<!--
Programmer Name: Aw Jun Yuan & Kingsley Ng Ti Heng
Program Name:register.php
Description: UI table design for registering new customer
Edited/Modified by: Lee Jang Jhin
 -->

<?php
include('server.php') ?>
<!DOCTYPE html>
<!-- register form for registering new user -->
<html>
<head>
  <title>Customer Registration</title>
</head>
<body>
  <div class="header">
    <h2>Customer Registration</h2>
  </div>

  <form method="post" action="register.php">
    <div class="input-group">
      <?php include('errors.php'); ?>
      <label>User's Full Name</label>
      <input type="text" name="name" >
    </div>

    <div class="input-group">
      <label>Account Username</label>
      <input type="text" name="username" >
    </div>

    <div class="input-group">
      <label>IC Number</label>
      <input type="text" name="IC_Number" >
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
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>

<!-- link to sign in page if the user has an account -->
    <p>
      Already a user? <a href="index.php">Sign in</a>
    </p>
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
  background:url(img/bg.png);
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
  height: auto;
  background: lightgrey;
}

</style>
