<!--
Programmer Name: Lee Jang Jhin
Program Name:bot.php
Description: backend connection to database for chatbot. Fetch response from database to users
Edited/Modified by: Lee Jang Jhin
 -->

<?php
$conn = mysqli_connect("localhost","root","","fyp");

if($conn){
$user_messages = mysqli_real_escape_string($conn, $_POST['messageValue']);
$query = "SELECT * FROM chatbot WHERE messages LIKE '%$user_messages%'";
$runQuery = mysqli_query($conn, $query);

if(mysqli_num_rows($runQuery) > 0){
    // fetch result
    $result = mysqli_fetch_assoc($runQuery);
    // echo result
    echo $result['response'];
}else{
    echo "Sorry I don't understand your question! Please contact our customer service for more inquiry purpose.\n";
    echo "You can call our customer service at +603 1234 5678 from 9am to 9pm or kindly email to wms.support@gmail.com";
}
}else{
    echo "connection Failed " . mysqli_connect_errno();
}
?>
