<?php
require ('connection.php');
$sql = "UPDATE details SET attendance='ABSENT'";
$query=mysqli_query($con,$sql);
if(isset($_POST['attendance_button'])){
    $list=$_POST['list'];
   
    foreach($list as $list_students)
    {
        $sql = "UPDATE details SET attendance='PRESENT' WHERE cname ='$list_students'";
        $query=mysqli_query($con,$sql);
                echo "<script>alert('Attendance Recorded')</script>";
               echo "<script>window.location.href='../employee/employee_home.php'</script>";
    

    
        }

    }






?>