<!--
Programmer Name: Lee Jang Jhin
Program Name:viewBookDelivery.php
Description: UI table design for displaying Booked delivery service data.
Edited/Modified by: Lee Jang Jhin
 -->

<?php
include("connect.php");

session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
  }

$sql = 'SELECT *
       FROM delivery_info';

$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}


?>

<!-- view booked delivery -->
<html>
<head>
  <title>View Booking Service</title>
  <style type="text/css">

    body {
      font-size: 15px;
      color: #343d44;
      font-family: "segoe-ui", "open-sans", tahoma, arial;
      background-size:cover;
      background-position:center;
      display:flex;
      flex-direction:column;
      justify-content:center;
      align-items:center;
      text-align:center;
      padding:0 20px;
      background-image: url(images/image1.jpg);
    }

    table {
      margin: auto;
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
      font-size: 12px;
    }

    h1 {
      margin: 25px auto 0;
      text-align: center;
      text-transform: uppercase;
      font-size: 30px;
    }

    table td {
      transition: all .5s;
    }

    /* Table */
    .data-table {
      border-collapse: collapse;
      font-size: 14px;
      min-width: 537px;
    }

    .data-table th,
    .data-table td {
      border: 1px solid #e1edff;
      padding: 7px 17px;
      text-align: center;
    }

    .data-table caption {
      margin: 7px;
    }

    /* Table Header */
    .data-table thead th {
      background-color: #508abb;
      color: #FFFFFF;
      border-color: #6ea1cc !important;
      text-transform: uppercase;
    }

    /* Table Body */
    .data-table tbody td {
      color: #353535;
      background-color: #f4fbff;
    }

    .data-table tbody td:first-child,
    .data-table tbody td:nth-child(4),
    .data-table tbody td:last-child {
      text-align:center ;
    }

    .data-table tbody tr:nth-child(odd) td {
      background-color: #f4fbff;
    }

    .data-table tbody tr:hover td {
      background-color: #ffffa2;
      border-color: #ffff0f;
    }

    .button {
      font-size:18px;
      text-decoration:none;
      color:#FFF;
      border:#FFF 2px solid;
      padding:10px 20px;
      border-radius:10px;
      margin-top:25px;
      margin-bottom:15px;
      bottom: auto;
      background-color: darkgrey;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      display:inline-block;
    }

    .button:hover{
      background:#3CF;
      color:#fff;
    }

    .button1 {
      font-size:18px;
      text-decoration:none;
      color:#FFF;
      border:#FFF 2px solid;
      padding:10px 20px;
      border-radius:10px;
      margin-top:0px;
      margin-bottom:15px;
      bottom: auto;
      background-color: darkgrey;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      display:inline-block;
     }

     .button1:hover{
       background:#3CF;
       color:#fff;
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
</head>
<body>
  <!-- table that generate data of booked delivery -->
  <h1>Booking Delivery </h1>
  <br>
  <br>
</form>

  <table class="data-table">
    <caption class="title"></caption>
    <thead>
      <tr>
        <th>Delivery ID</th>
        <th>IC Number</th>
        <th>Delivery Status</th>
        <th>Date</th>
        <th>Delivery Address</th>
        <th>Amount of Stock</th>
        <th>Delete</th>
        <th>Edit Status</th>

      </tr>
    </thead>
    <tbody>
      <?php
      while($row = mysqli_fetch_array($query))
      {
        echo '<tr>
            <td>'.$row['Delivery_ID'].'</td>
            <td>'.$row['IC_Number'].'</td>
            <td>'.$row['status'].'</td>
            <td>'.$row['date'].'</td>
            <td>'.$row['Delivery_address'].'</td>
            <td>'.$row['amount_of_stock'].'</td>
            <td><a href ="delete2.php?Delivery_ID='.$row['Delivery_ID'].'">Delete</a>
            <td><a href ="editStatus.php?Delivery_ID='.$row['Delivery_ID'].'">Edit</a>
            </tr>';
      }
      ?>

    </tbody>
  </table>

  <!-- button that direct the user back to previous page -->
  <a href="panel.php" class="button" onclick="history.back(1);">Admin Panel</a>

   <div id="footer">
     Copyright © WMS's Programmer Warehouse Management System 2022
   </div>

</body>
</html>
