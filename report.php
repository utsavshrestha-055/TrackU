<?php 
require('database/connection.php');

session_start();

if(!isset($_SESSION['username'])){
  header('location:login.php');
}
   $uname=$_SESSION['username'];
     $sql = "SELECT * FROM details WHERE username='$uname'";

     $result = mysqli_query($con, $sql);
     $rows=mysqli_fetch_assoc($result);

     ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Track</title>

    <!-- Montserrat Font -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/contact.css">
  </head>
  <body>

    

    
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-right">
          
    <?php 
    echo "<h2>".$rows['school']."</h2>";
      ?>
       
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
           <img src="Images/logo_200x200.png" width= "100px" height= "100px">Track-U
          </div>
         
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href='index.php'><span class="material-icons-outlined">dashboard</span> Dashboard</a>

          </li>
          <li class="sidebar-list-item">
         <a href='track.php'>   <span class="material-icons-outlined"><i class="fa fa-map-marker"></i></span> Track</a>

          </li>


          <li class="sidebar-list-item">
           <a href='contact.php'> <span class="material-icons-outlined"><i class="fa fa-address-book-o"></i></span> Contact Us </a>
          </li>
          
          <li class="sidebar-list-item">
          <a href='report.php'>  <span class="material-icons-outlined">fact_check</span> Report Problem</a>
          </li>

          <li class="sidebar-list-item">
          <a href='logout.php'>  <span class="material-icon-outlined"><i class="fa fa-sign-out "style="font-size:36px"></i></span> Log out</a>
            </li>
        </ul>
      </aside>
      <!-- End Sidebar -->
 <body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">KARVE,NEPAL</div>
          <div class="text-two">Dhulikhel 06</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">9816778950</div>
          <div class="text-two">9847039601</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">tracku@gmail.com</div>
          <div class="text-two">info.tracku@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from us or any types of queries related to our system, you can send me message from here. It's our pleasure to help you.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Your queries">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
          
        </div>
        <div class="button">
          <input type="button" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
    </div>
    

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
  </body>
</html>
+ 