<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
      <!-- Montserrat Font -->
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

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
  <span class="material-icons-outlined">account_circle</span>
  </div>
</header>
<!-- End Header -->

<!-- Sidebar -->
<aside id="sidebar">
  <div class="sidebar-title">
    <div class="sidebar-brand">
      <span class="material-icons-outlined">shopping_cart</span> <img src="images\download.png" width="50" height="50">TRACK_U
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
    <h2> EMPLOYEE DASHBOARD</h2>
  </div>

  <div class="main-cards">

    <div class="card">
      <div class="card-inner">
        <h3>PRODUCTS</h3>
        <span class="material-icons-outlined">inventory_2</span>
      </div>
      <h1>249</h1>
    </div>

    <div class="card">
      <div class="card-inner"
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