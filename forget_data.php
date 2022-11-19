<?php 
require('connection.php');
if (isset($_POST['login_button'])){
    function validate($data){

        $data = trim($data);
 
        $data = stripslashes($data);
 
        $data = htmlspecialchars($data);
 
        return $data;
 
     }
 
     $uname = validate($_POST['user_name']);
 
     $pass = validate($_POST['pass_word']);
     $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

     $result = mysqli_query($con, $sql);

     if (mysqli_num_rows($result) === 1) {