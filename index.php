<?php 
require('database/connection.php');

session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}
   $uname=$_SESSION['username'];
     $sql = "SELECT * FROM users WHERE username='$uname'";

     $result = mysqli_query($con, $sql);

     ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <?php 
    
    while($rows=mysqli_fetch_assoc($result))
    {
      ?>

      <?php
    echo $rows['username'];
    ?>
    <?php
    }
    ?>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-right">
        <span class="material-icons-outlined">account_circle</span>
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
           <img src="Images/logo_200x200.png" width= "100px" height= "100px">TRACK_U
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <span class="material-icons-outlined">dashboard</span> Dashboard
          </li>
          <li class="sidebar-list-item">
            <span class="material-icons-outlined">inventory_2</span> Track your child
          </li>
          <li class="sidebar-list-item">
            <span class="material-icons-outlined">category</span> Contact Us
          </li>
          <li class="sidebar-list-item"> 
            <span class="material-icons-outlined">groups</span> About Us
          </li>
          <li class="sidebar-list-item">
            <span class="material-icons-outlined">fact_check</span> Report Problems
          </li>
          <li class="sidebar-list-item">
            <span class="material-icons-outlined">poll</span> Reports
          </li>
          <li class="sidebar-list-item">
            <span class="material-icon-outlined">close</span> <a href='logout.php'>log out</a>
            </li>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <h2>DASHBOARD</h2>
        </div>

        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <h3>TRACK</h3>
              <span class="material-icons-outlined"><i class='fas fa-route'></i> </span>
            </div>
            <h1>249</h1>
          </div>

          <div class="card">
            <div class="card-inner">
            <h3> CATEGORIES</h3>
              <span class="material-icons-outlined">category</span>
            </div>
            <h1>25</h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>CUSTOMERS</h3>
              <span class="material-icons-outlined">groups</span>
            </div>
            <h1>1500</h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>ALERTS</h3>
              <span class="material-icons-outlined">notification_important</span>
            </div>
            <h1>56</h1>
          </div>

        </div>

        <div class="charts">

          <div class="charts-card">
            <h2 class="chart-title">Top 5 Products</h2>
            <div id="bar-chart"></div>
          </div>

          <div class="charts-card">
            <h2 class="chart-title">Purchase and Sales Orders</h2>
            <div id="area-chart"></div>
          </div>

        </div>
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
  </body>
</html>