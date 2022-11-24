<?php 
require('../database/connection.php');

session_start();

if(!isset($_SESSION['username'])){
  header('location:employee.php');
}
   $uname=$_SESSION['username'];
     $sql = "SELECT * FROM driver WHERE username='$uname'";

     $result = mysqli_query($con, $sql);
     $rows=mysqli_fetch_assoc($result);

     ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Montserrat Font -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/styles.css">
    
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
            <a href='employee.php'><span class="material-icons-outlined">dashboard</span> Dashboard</a>

          </li>
          <li class="sidebar-list-item">
         <a href='attendance.php'>   <span class="material-icons-outlined"><span>&#10004;</span></span> Attendence</a>

          </li>


          <li class="sidebar-list-item">
           <a href='add.php'> <span class="material-icons-outlined"><i class="fa fa-user"></i></span> Add a user </a>
          </li>
         
          <li class="sidebar-list-item">
          <a href='update.php'>  <span class="material-icons-outlined"><i class="fa fa-user"></i></span> Update a user</a>
          </li>
          <li class="sidebar-list-item">
          <a href='delete.php'>  <span class="material-icons-outlined"><i class="fa fa-user"></i></span> Delete a user</a>
          </li>

          <li class="sidebar-list-item">
          <a href='../logout.php'>  <span class="material-icon-outlined"><i class="fa fa-sign-out "style="font-size:36px"></i></span> Log out</a>
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

    <form method="POST" action="../database/add.php" class="form-box">
        <div class="allign">
        <input type="text" name="user_name" class="input-field" placeholder="Username" required>
                <input type="password" class="input-field" name="pass_word" placeholder="Password" required>
             
       <button type="submit" name="add_button" class="btn">Submit</button>
        </div>
                </form>
       

          

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