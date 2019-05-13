<?php
$server = "localhost"; 
$user = "root";
$password = "";
$database = "cup";

$conn = mysqli_connect($server, $user, $password, $database);

if(mysqli_connect_error()):
	echo "Connection Error!";
endif;

 ?>