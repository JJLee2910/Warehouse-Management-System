<!--
Programmer Name: Meeganathan
Program Name:warehouseTable.php
Description: UI table design for displaying warehouse info data.
Edited/Modified by: Lee Jang Jhin
 -->

<?php

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
  }
  ?>
<!-- generate warehouse info -->
<!DOCTYPE html>
<html>
<head>
<title>Warehouse Info</title>
<style>
  table {
    border-collapse: collapse;
    width: 50%;
    color: #588c7e;
    font-family: monospace;
    font-size: 20px;
    text-align: center;
    margin: auto;
  }

  th {
    background-color: #87CEEB;
    color: white;
    text-align: auto;
  }

  tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
  <!-- table that generate data from database -->
  <table>
  <tr>
    <h2 style="text-align: center">Warehouse Spacing Info</h2>
      <th>Space ID</th>
      <th>Price per month (RM)</th>
      <th>Availability</th>
      <th>Warehouse spacing info (sqft)</th>
  </tr>
      <?php
      include "connect.php";
      $sql = "SELECT spaceID, price_per_month, availability, space_info FROM warehouse_info";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["spaceID"]. "</td><td>" . $row["price_per_month"] . "</td><td>"
      . $row["availability"]. "</td><td>" . $row["space_info"]. "</td></tr>";
      }
      echo "</table>";
      } else { echo "0 results"; }
      $conn->close();
      ?>
  </table>
</body>
</html>
