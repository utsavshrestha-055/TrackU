<?php 
require('connection.php');

session_start();

if(!isset($_SESSION['username'])){
    header('location:index.php');
}

?>

<!DOCTYPE html>
<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
<body>

    <div class="hero">
    <header>
    <h1>TrackU</h1>
    <nav>
        <a href="home.php">Home</a>
       
        <a href="track.php">Track your child</a>
        <a href="contact.php">Contact Us</a>
        <a href="about.php">About Us</a>
        <a href="report.php">Report problem</a>
    </nav>
    <a href="logout.php"><h1>Log Out</h1></a>
</header>
       
           
    
    
   
    

</body>
</head>
</html>