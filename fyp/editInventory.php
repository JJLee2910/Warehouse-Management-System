<!--
Programmer Name: Lee Jang Jhin
Program Name:editInventory.php
Description: UI design table for editting inventory information
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
include('editValidation2.php');

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
  }

if (isset($_GET['no'])) {
    $no = $_GET['no'];
    $update = true;
    $record = mysqli_query($con, "SELECT * FROM warehouse_info WHERE no=$no");

if (count($record) == 1 ) {
      $n = mysqli_fetch_array($record);
      $spaceID = $n['spaceID'];
      $price_per_month = $n['price_per_month'];
      $availability = $n['availability'];
      $space_info = $n['space_info'];
    }
  }

 ?>
<!-- form for admin edit Inventory -->
<html>
<head>
  <title>Edit</title>
</head>

<body>
<div id="container">
 <h1> Edit Inventory Info </h1>
 <form name="update" action="editInventory.php" method="POST">
<input type="hidden" name="no" value="<?php echo $no; ?>">

  <h2> Inventory details: </h2>

  <div class="userinput">
   <label> Space ID </label>
   <td><input type="text" name="spaceID" required= "required"></td>
  </div>

  <div class="userinput">
     <label> Price Per Month </label>
   <td><input type="text" name="price_per_month" required="required"></td>
  </div>

  <div class="userinput">
   <label> Availability Status </label>
   <td><input type="text" name="availability" required= "required"></td>
  </div>

  <div class="userinput">
   <label> Spacing Info </label>
   <td><input type="text" name="space_info" required= "required"></td>
  </div>

  <div style="text-align:center">
   <button type="submit" class="sampleBtn1" name="update">Update</button><br><br>
   <a href="panel.php" class="btn" onclick="history.back(1);">Back</a>
  </div>

 </form>
 </div>

 <div id="footer">
   Copyright © WMS's Programmer Warehouse Management System 2022
 </div>

</body>
</html>
