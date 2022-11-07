<!--
Programmer Name: Lee Jang Jhin
Program Name:response.php
Description: UI response form for admin to add more reponsive message for the chatbot
Edited/Modified by: Lee Jang Jhin
 -->

<?php include "validate.php";
?>
<html>
<head>
  <title>Add Response</title>
</head>
<body>
  <div class="header">
    <h2>Add Response</h2>
  </div>

  <form method="post" action="response.php">
    <div class="input-group">
      <?php include('errors.php'); ?>
      <label>User's Input Question</label>
      <input type="text" name="messages" >
    </div>

    <div class="input-group">
      <label>Response</label>
      <input type="text" name="response" >
    </div>


    <div class="input-group">
      <button type="submit" class="btn" name="add_resp">Add</button>
    </div>
    <br>
    <a href="#" class="btn" onclick="history.back();">Back</a>

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
