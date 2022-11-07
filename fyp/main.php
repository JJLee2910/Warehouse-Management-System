<!--
Programmer Name: Lee Jang Jhin
Program Name:main.php
Description: Customers main menu interface design. 
Edited/Modified by: Lee Jang Jhin
 -->

<?php
  session_start();
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
  }
  ?>
  <!-- main page of system -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

<body>
  <!-- side navigation bar -->
  <div class="sidebar close">
    <div class="logo-details">
      <span class="logo_name">Warehouse Management System</span>
    </div>
    <ul class="nav-links">

      <!-- search panel for retrieving warehouse information -->
      <li>
        <div class="iocn-link">
          <a href="search.php">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Category</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Category</a></li>
          <li><a href="search.php">Warehouse information</a></li>
        </ul>
      </li>

      <!-- Booking category with drop down sub-menu -->
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-cart' ></i>
            <span class="link_name">Booking</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Booking</a></li>
          <!-- book for warehouse space -->
          <li><a href="bookSpace.php">Book warehouse space</a></li>
          <!-- book for delivery service -->
          <li><a href="bookDelivery.php">Book Delivery</a></li>
        </ul>
      </li>

      <!-- chatbot features for Q&A purpose -->
      <li>
        <a href="chatbot/mainbot.php">
          <i class='bx bx-support' ></i>
          <span class="link_name">Chatbot</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="chatbot/mainbot.php">Chatbot</a></li>
        </ul>
      </li>

      <!-- view customers payment history -->
      <li>
        <a href="history.php">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="history.php">History</a></li>
        </ul>
      </li>

      <!-- edit customers account's personal info -->
      <li>
        <a href="editUser.php">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="editUser.php">Setting</a></li>
        </ul>
      </li>

      <!-- logout from the system -->
      <li>
        <a href="logout.php">
          <i class='bx bx-log-out' ></i>
          <span class="link_name">Logout</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="logout.php">Logout</a></li>
        </ul>
      </li>
</ul>
  </div>

  <!-- home content -->
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text"></span>
    </div>

    <!-- body contents -->
    <section class="body-content">
      <!-- center title -->
      <div class="header">
        <h2>Warehouse Management System</h2>
      </div>

      <!-- content on left side column -->
      <div class="row">
        <div class="leftcolumn">
          <!-- vision & mission of the system -->
          <div class="card">
            <h2>Our Vision & Mission</h2><br><br>
            <div class="text" style="height:200px;">Vision: <strong>"Bigger space, lowest price"</strong><br><br><br><br>Mission: <strong>Where inventory is not an issue.</strong></div>
          </div>

          <!-- updates of the system -->
          <div class="card">
            <h2>New Update!</h2>
            <div class="update" style="height:200px;"><img src='img/rack.png', height=100%; width=50% class="image"></div>
            <p>Brand NEW warehouse storage design for <strong>ALL</strong> E-Commerce seller with a <strong>square feet of  100!!</strong></p>
          </div>

          <!-- accordion that display general info of the system -->
          <div class="card" style="height:500px;">
            <button class="accordion" style="height:100px;">What do we do?</button>
            <div class="panel" style="text-align:justify;">
              <p>We provide warehouse space for E-commerece business seller.
                We at WMS provide inventory space for small to small medium or startup business that in need of storage space for keeping goods and product in a well organised, tidy and clean space.</p>
            </div>
            <hr>
            <br>
            <br>
            <br>
            <br>
            <hr>
            <button class="accordion" style="height:100px;">How To Contact Us?</button>
            <div class="panel" style="text-align:justify;">
              <p>Do reach out us at our warehouse at Technology Park Malaysia, Bukit Jalil or Call us at 03-1234 5678, Monday - Friday <br> 9am - 9pm! More Inquiry? Talk to <a href="chatbot/mainbot.php">Our Chatbot!</a></p>
            </div>
          </div>

        <!-- content of the right side column -->
        </div>
        <div class="rightcolumn">
          <!-- General description of the company -->
          <div class="card" style="text-align:justify;">
            <h2>About Us?</h2>
            <div class="picture" style="height:100px;"><img src='img/logo.png', height=100%; width=50% class="logo"></div>
            <p>We tend to provide places and service for E-commerce starter to feel at ease and at ease!</p>
          </div>

          <!-- system developer/person in charge of the company -->
          <div class="card">
            <h3>Boards Of Directory</h3>
            <div class="image1"><img src='img/jy.png', height=40%; width=50% class="image1"></div>Aw Jun Yuan<br>
            <div class="image1"><img src='img/kingsley.png', height=40%; width=50% class="image1"></div>Kingsley Ng Ti Heng<br>
            <div class="image1"><img src='img/meega.png', height=40%; width=50% class="image1"></div>Meeganathan<br>
            <div class="image1"><img src='img/jj.png', height=40%; width=50% class="image1"></div>Lee Jang Jhin
          </div>
        </div>
      </div>

<style>
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
  border-radius: 15px;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
  border-radius: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {
    width: 100%;
    padding: 0;
  }
}

.accordion {
  background-color: #eee;
  color: #000000;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  font-weight: bold;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;

}
.image1{
  border-radius: 15px;
}


</style>

<!-- scripting function for clicking/expanding the accordion -->
<script>
var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
  // add action event listener to click the accordion
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
    </section>
  </section>

  <!-- scripting function for expanding side navigation bar -->
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    // add action event listener to click the side navigation bar
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html>


<style>
/* Google Fonts Import Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.sidebar{
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 260px;
  background: #11101d;
  z-index: 100;
  transition: all 0.5s ease;
}
.sidebar.close{
  width: 78px;
}
.sidebar .logo-details{
  height: 60px;
  width: 100%;
  display: flex;
  align-items: center;
}
.sidebar .logo-details i{
  font-size: 30px;
  color: #fff;
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
}
.sidebar .logo-details .logo_name{
  font-size: 15px;
  color: #fff;
  font-weight: 600;
  transition: 0.3s ease;
  transition-delay: 0.1s;
}
.sidebar.close .logo-details .logo_name{
  transition-delay: 0s;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links{
  height: 100%;
  padding: 30px 0 150px 0;
  overflow: auto;
}
.sidebar.close .nav-links{
  overflow: visible;
}
.sidebar .nav-links::-webkit-scrollbar{
  display: none;
}
.sidebar .nav-links li{
  position: relative;
  list-style: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li:hover{
  background: #1d1b31;
}
.sidebar .nav-links li .iocn-link{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.sidebar.close .nav-links li .iocn-link{
  display: block
}
.sidebar .nav-links li i{
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
  color: #fff;
  font-size: 20px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.sidebar .nav-links li.showMenu i.arrow{
  transform: rotate(-180deg);
}
.sidebar.close .nav-links i.arrow{
  display: none;
}
.sidebar .nav-links li a{
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sidebar .nav-links li a .link_name{
  font-size: 18px;
  font-weight: 400;
  color: #fff;
  transition: all 0.4s ease;
}
.sidebar.close .nav-links li a .link_name{
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li .sub-menu{
  padding: 6px 6px 14px 80px;
  margin-top: -10px;
  background: #1d1b31;
  display: none;
}
.sidebar .nav-links li.showMenu .sub-menu{
  display: block;
}
.sidebar .nav-links li .sub-menu a{
  color: #fff;
  font-size: 15px;
  padding: 5px 0;
  white-space: nowrap;
  opacity: 0.6;
  transition: all 0.3s ease;
}
.sidebar .nav-links li .sub-menu a:hover{
  opacity: 1;
}
.sidebar.close .nav-links li .sub-menu{
  position: absolute;
  left: 100%;
  top: -10px;
  margin-top: 0;
  padding: 10px 20px;
  border-radius: 0 6px 6px 0;
  opacity: 0;
  display: block;
  pointer-events: none;
  transition: 0s;
}
.sidebar.close .nav-links li:hover .sub-menu{
  top: 0;
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
}
.sidebar .nav-links li .sub-menu .link_name{
  display: none;
}
.sidebar.close .nav-links li .sub-menu .link_name{
  font-size: 18px;
  opacity: 1;
  display: block;
}
.sidebar .nav-links li .sub-menu.blank{
  opacity: 1;
  pointer-events: auto;
  padding: 3px 20px 6px 16px;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li:hover .sub-menu.blank{
  top: 50%;
  transform: translateY(-50%);
}

.home-section{
  position: relative;
  background: #E4E9F7;
  height: auto;
  left: 260px;
  width: calc(100% - 260px);
  transition: all 0.5s ease;
}
.sidebar.close ~ .home-section{
  left: 78px;
  width: calc(100% - 78px);
}
.home-section .home-content{
  height: 60px;
  display: flex;
  align-items: center;
}
.home-section .home-content .bx-menu,
.home-section .home-content .text{
  color: #11101d;
  font-size: 35px;
}
.home-section .home-content .bx-menu{
  margin: 0 15px;
  cursor: pointer;
}
.home-section .home-content .text{
  font-size: 26px;
  font-weight: 600;
}

.button2{
  font-size:15px;
  text-decoration:none;
  color:#FFF;
  border:#FFF 2px solid;
  padding:10px 20px;
  border-radius:10px;
  margin-top:20px;
}

.button2:hover{
  background:#808080;
  color:#ffff;
}

@media (max-width: 420px) {
  .sidebar.close .nav-links li .sub-menu{
    display: none;
  }
}

</style>
