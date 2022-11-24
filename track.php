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

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
            <?php 
            echo "<h3>Welcome ".$rows['username'].",</h3>";
             ?>
        </div>

        <div class="main-cards">

          
            <div class="card">
            <div class="card-inner">
             <a href="link " style="color:aliceblue;"> <h2><b>Track</b></h2> </a>
              <span class="material-icons-outlined"> </span>
            </div>
            
            <?php 
   echo "<h3>".$rows['sbus']."</h3>";
      ?>
            
          </div>

          <div class="card">
            <div class="card-inner">
  
            <h2><b>Driver</b></h2>
              <span class="material-icons-outlined"></span>
            </div>        
            <?php 
  $bus=$rows['sbus'];
  $sql = "SELECT * FROM driver WHERE sbus ='$bus'";

  $result = mysqli_query($con, $sql);
  $rows=mysqli_fetch_assoc($result);
  echo "<h3>".$rows['username']."</h3>";
      ?>
          </div>

          <div class="card">
            <div class="card-inner">
              <h2><b>Phone Number</b></h2>
              <span class="material-icons-outlined"></span>
            </div>
            <?php 
   echo "<h3>".$rows['number']."</h3>";
      ?>
          </div>

          <div class="card">
            <div class="card-inner">
              <h2><b>Bus Number</b></h2>
              <span class="material-icons-outlined"></span>
            </div>
            <?php 
   echo "<h3>".$rows['sbus']."</h3>";
      ?>
          </div>



        </div>
<div class="charts">

<div class="charts-card">
  <h2 class="chart-title"></h2><h3>School Starts At: 9:00 AM</h3>
  <?php 
   $uname=$_SESSION['username'];
   $sql = "SELECT * FROM details WHERE username='$uname'";

   $result = mysqli_query($con, $sql);
   $rows=mysqli_fetch_assoc($result);


   echo "<h3>"."School Departure Time: ".$rows['pick']."</h3>";
      ?>
  <div id="bar-chart"></div>
</div>

<div class="charts-card">
  <h2 class="chart-title"></h2><h3>School Ends At: 04:00 PM </h3>
  <?php 
   echo "<h3>"."School Departure Time: ".$rows['departure']."</h3>";
      ?>
  <div id="area-chart"></div>
</div>

</div>
</main>
<!-- End Main -->
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
  </body>
</html>
+ 