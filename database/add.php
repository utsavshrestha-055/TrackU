<?php
require('connection.php');
if (isset($_POST['add_button'])){
    function validate($data){

        $data = trim($data);
 
        $data = stripslashes($data);
 
        $data = htmlspecialchars($data);
 
        return $data;
 
     }
 
     $uname = validate($_POST['user_name']);
     $upass = validate($_POST['pass_word']);

     $sql = "SELECT * FROM users WHERE username='$uname' ";

     $result = mysqli_query($con, $sql);

     if (mysqli_num_rows($result) === 1) {

        echo "<script>alert('User exsits')</script>";

           echo "<script>window.location.href='../employee/add.php'</script>";


        }

        else{
            $sql = "INSERT INTO users (username, password) VALUES ('$uname','$upass') ";
            $result = mysqli_query($con, $sql);

        

        echo "<script>alert('User Added succesfully')</script>";

           echo "<script>window.location.href='../employee/add.php'</script>";
        
        
        }
    }
    