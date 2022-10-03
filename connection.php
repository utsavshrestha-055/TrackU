<?php
$con=mysqli_connect("localhost","root","","accounts");
if (mysqli_connect_error()){
	echo"<script>alert('error connecting to database')</script> ";
	exit();
	
}

?>