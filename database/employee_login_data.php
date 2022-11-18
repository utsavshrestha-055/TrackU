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

        $row = mysqli_fetch_assoc($result);

        if ($row['username'] === $uname && $row['password'] === $pass) {
            session_start();
            $_SESSION['username']=$uname;

           echo "<script>window.location.href='../employee_home.php'</script>";


        }

        }else{
            echo "<script>alert('Wrong username or password')</script>";
            echo "<script>window.location.href='index.php'</script>";  
        }
    }