<!--
Programmer Name: Meeganathan
Program Name:search.php
Description: Search query fucntions was implemented to assist users to filter results. UI table design for displaying warehouse info data. 
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
    // any values can be used to search
    $query =  "SELECT * FROM warehouse_info WHERE CONCAT(spaceID, price_per_month, availability, space_info) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM warehouse_info";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    include('connect.php');
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}

?>

<!-- search warehouse Information -->
<html>
    <head>
        <title>Warehouse Information</title>
        <style>
            table,tr,th,td{
              border: 2.5px solid #e1edff;
              padding: 7px 17px;
              text-align: center;
              font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            }

            .searchbox{
              position: center;
              text-align: center;
              margin-left: 40px;
            }

            .button{
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

            .button:hover{
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
              background-image: url(images/image1.jpg);
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
        </style>
    </head>
    <body>
      <!-- table to generate search records/generate data from database -->
        <h1>Warehouse Information Search</h1>

        <form action="search.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Search here..." class="searchbox"><br><br>
            <input type="submit" name="search" value="FILTER/RESET" class="button"><br><br>

            <table>
                <tr>
                <th>Space ID</th>
                <th>Rent Per Month (RM)</th>
                <th>Availability</th>
                <th>Space Info (sqft)</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['spaceID'];?></td>
                    <td><?php echo $row['price_per_month'];?></td>
                    <td><?php echo $row['availability'];?></td>
                    <td><?php echo $row['space_info'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>

            <!-- button redirect user to main menu/book space page -->
            <a href="main.php" class="button1">Main Menu</a><a href="bookSpace.php" class="button1">Book Space?</a>
    </body>
</html>
