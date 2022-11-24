<?php
require('connection.php');
if (isset($_POST['delete_button'])){
    function validate($data){

        $data = trim($data);
 
        $data = stripslashes($data);
 
        $data = htmlspecialchars($data);
 
        return $data;
 
     }
 
     $uname = validate($_POST['user_name']);
     

     $sql = "SELECT * FROM users WHERE username='$uname' ";

     $result = mysqli_query($con, $sql);

     if (mysqli_num_rows($result) === 1) {

        echo "<script>alert('Confirm delete?')</script>";
        $sql = "DELETE FROM users WHERE username='$uname' ";
            $result = mysqli_query($con, $sql);

        

        echo "<script>alert('User deleted succesfully');</script>";

           echo "<script>window.location.href='../employee/delete.php';</script>";

        }

        else{

            
           echo "<script>alert('User doesnt't exsits');</script>";

           echo "<script>window.location.href='../employee/delete.php';</script>";

        
        
        }
    
      }