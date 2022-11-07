<!--
Programmer Name: Meeganathan
Program Name:viewBookSpace.php
Description: UI table design for displaying booked space (warehouse) data.
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
       FROM inventory_info';

$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}
?>

<!-- view booked space id-->
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

<!-- table generate booked space with customers info -->
<body>
  <h1>Booking Space </h1>
  <br>
  <br>
</form>

  <table class="data-table">
    <caption class="title"></caption>
    <thead>
      <tr>
        <th>Space ID</th>
        <th>Full Name</th>
        <th>Inventory Space</th>
        <th>Rental Per Month</th>
        <th>Date of Rent</th>
        <th>Delete</th>

      </tr>
    </thead>
    <tbody>
    <?php
    while($row = mysqli_fetch_array($query))
    {
      // delete button is used to delete specifc record
      // using spaceID to locate which data to delete in database
      echo '<tr>
          <td>'.$row['spaceID'].'</td>
          <td>'.$row['Full_Name'].'</td>
          <td>'.$row['size'].'</td>
          <td>'.$row['rent_per_month'].'</td>
          <td>'.$row['rental_date'].'</td>
          <td><a href ="delete.php?spaceID='.$row['spaceID'].'">Delete</a>
          </tr>';
    }
    ?>

    </tbody>
  </table>

  <!-- redirect back to previous page -->
  <a href="panel.php" class="button" onclick="history.back(1);">Admin Panel</a>

   <div id="footer">
     Copyright © WMS's Programmer Warehouse Management System 2022
   </div>


</body>
</html>
