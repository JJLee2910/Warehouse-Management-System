<!--
Programmer Name: Aw Jun Yuan & Kingsley Ng Ti Heng
Program Name:index.php
Description: Login interface for the entire system & Backend logic and validations.
Edited/Modified by: Lee Jang Jhin
 -->

<?php
session_start();
//connect to database
include("connect.php");
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {
  // create a user define functions/variable and set to empty
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  $username = test_input($_POST['username']);
  $password = test_input($_POST['password']);
  $role = test_input($_POST['role']);

  // use empty functions to check is username/password is empty
  // prompt error message on header link if username/password is empty
  if (empty($username)) {
    header("Location: index.php?error=Username is required");
  }else if (empty($password)) {
    header("Location: index.php?error=Password is required");

  }else {
    // hashing Password
    $password = md5($password);
    $sql = "SELECT * FROM users WHERE username= '$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)===1) {
      $row = mysqli_fetch_assoc($result);
      // login to customer main menu
      if ($row['password'] === $password && $row['role'] === 'Customer') {
        $_SESSION['IC_Number'] = $row['IC_Number'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['role'] = $row['role'];
        header("Location: main.php?status=Successfully Login");

        // login to admin panel
      }elseif ($row['password'] === $password && $row['role'] === 'Admin') {
        $_SESSION['IC_Number'] = $row['IC_Number'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['role'] = $row['role'];
        header("Location: panel.php?status=Successfully Login");

      }else {
        header("Location: index.php?error=Incorrect username or password");
}
}
}
}

    mysqli_close($conn);
?>


<style>

body{
  margin: 0;
  padding: 0;
  background:url(img/bg.png);
  background-size: cover;
  background-position: center;
  font-family: sans-serif;
}

.login-box{
  width: 320px;
  height: auto;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%,-50%);
  box-sizing: border-box;
  padding: 70px 30px;
  border-radius: 15px;
}

.avatar{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
}

h1{
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  font-size: 22px;
  font-family: Arial, Helvetica, sans-serif;
}

.login-box p{
  margin: 0;
  padding: 0;
  font-weight: bold;
}

.login-box input{
  width: 100%;
  margin-bottom: 20px;
}

.login-box input[type="text"], input[type="password"]{
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;
}

.login-box input[type="submit"]{
  border: none;
  outline: none;
  height: 40px;
  background: #1c8adb;
  color: #fff;
  font-size: 18px;
  border-radius: 20px;
}

.login-box input[type="submit"]:hover{
  cursor: pointer;
  background: #1c8adb;
  color: #fff;
}

.login-box a{
  text-decoration: none;
  font-size: 14px;
  color: #fff;
}

a:link, a:visited {
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;
}

.login-box a
.footer{
  position: fixed;
  left:0;
  bottom: 0;
  width: 100%;
  background-color: grey;
  color: black;
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
  text-align: center;
}

</style>

<!-- include register validation -->
<?php include('server.php') ?>

<!-- login form -->
<html>
<head>
    <title> Log In </title>
</head>
    <body>
    <div class="login-box">

        <h1>Log in to continue:</h1>
            <form name="login" method="post" action="index.php">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password"  name="password" placeholder="Enter Password">
            <input type="submit" name="login_user" value="Login">
            <p><a link= "register" href="register.php">Register</a>
            <br></br>
            <!-- drop down menu selection -->
             <select class="form-select mb-3" name="role" aria-label="Default select example">
              <option selected="">Please choose your role</option>
              <option select="admin">Admin</option>
              <option select="Customer">Customer</option>
            </select>
            </form>
    </div>

    <div id="footer">
      Copyright © WMS's Programmer Warehouse Management System 2022
    </div>

    </body>
</html>
