<!--
Programmer Name: Meeganathan
Program Name:history.php
Description: UI table design for displaying customer's payment history data. Search query was implemented to assist users to filter results
Edited/Modified by: Lee Jang Jhin
 -->

<?php
session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}

 if(isset($_POST['search']))
 {
     $valueToSearch = $_POST['valueToSearch'];
     // search in all table columns
     $query =  "SELECT * FROM payment_info WHERE IC_Number LIKE'%".$valueToSearch."%'";
     $search_result = filterTable($query);

 }
 else {
    $query = "SELECT * FROM payment_info";
    $search_result = filterTable($query);
}


 // function to connect and execute the query
 function filterTable($query)
 {
     include "connect.php";
     $filter_Result = mysqli_query($conn, $query);
     return $filter_Result;
 }

 ?>

<!-- form for displaying data -->
 <html>
     <head>
         <title>Payment Information</title>
         <style>
             table,tr,th,td {
               border: 2.5px solid #e1edff;
               padding: 7px 17px;
               text-align: center;
               font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;

             }

             .searchbox {
               position: center;
               text-align: center;
               margin-left: 40px;
             }

             .button {
                font-size:10px;
                text-decoration:none;
                color:#FFF;
                border:#FFF 2px solid;
                padding:10px 20px;
                border-radius:10px;
                position:center;
                background:darkgrey;
                margin-right:0px;
                margin-left: 40px;
             }

             .button:hover {
                background:#3CF;
                color:#fff;
             }


             h1 {
               text-align: center;
               text-transform: uppercase;
               font-size: 30px;
               margin-left: 40px;
               font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
             }

             body{
              background-size:cover;
              background-position:center;
              display:flex;
              flex-direction:column;
              justify-content:center;
              align-items:center;
              text-align:center;
              padding:0 20px;
             }

             .button1 {
               font-size:18px;
               text-decoration:none;
               color:#FFF;
               border:#FFF 2px solid;
               padding:10px 20px;
               border-radius:10px;
               margin-top:25px;
               margin-bottom:15px;
               margin-left: 40px;
               bottom: auto;
               background-color: darkgrey;
               font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
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
             text-align:center;
            }

         </style>
     </head>
     <!-- form to content table -->
     <body>
         <h1>Warehouse Payment Info Search</h1>

         <form action="history.php" method="post">
           <input type="text" name="valueToSearch" placeholder="Search by IC Number" class="searchbox"><br><br>
           <input type="submit" name="search" value="FILTER/RESET" class="button"><br><br>

             <table>
                 <tr>
                 <th>Payment ID</th>
                 <th>Phone Number</th>
                 <th>Delivery Address</th>
                 <th>Booked Spaced ID</th>
                 <th>Date</th>
                 <th>amount</th>
                 <th>payment purpose</th>
                 <th>Status</th>
                 </tr>

       <!-- populate table with data from mysql database -->
        <?php while($row = mysqli_fetch_array($search_result)):?>
                 <tr>
                     <td><?php echo $row['payment_id'];?></td>
                     <td><?php echo $row['Phone_Number'];?></td>
                     <td><?php echo $row['Delivery_address'];?></td>
                     <td><?php echo $row['booked_space_id'];?></td>
                     <td><?php echo $row['date'];?></td>
                     <td><?php echo $row['amount'];?></td>
                     <td><?php echo $row['payment_purpose'];?></td>
                     <td><?php echo $row['status'];?></td>
                 </tr>
                 <?php endwhile;?>
             </table>
         </form>
             <a href="main.php" class="button1">Main Menu</a>

             <div id="footer">
               Copyright © WMS's Programmer Warehouse Management System 2022
             </div>

     </body>
 </html>
