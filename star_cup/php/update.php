<?php 
	require_once 'connection.php';
	require_once 'date.php';

	if(isset($_POST['update'])){
		if($_POST['table'] == "teams"){
			$id = mysqli_escape_string($conn, $_POST['id']);
			$name = mysqli_escape_string($conn, $_POST['name']);
			$color = mysqli_escape_string($conn, $_POST['color']);
			$date = new DateTime($_POST['date']);
			$date = $date->format('d-m-Y');
			$_POST['date'] = $date;

			$date = mysqli_escape_string($conn, $_POST['date']);

			$sql = "UPDATE TEAMS SET TEAM_NAME = '$name', COLOR_SHIELD ='$color', FOUNDATION_DATE = '$date', UPDATED_AT ='$datef' WHERE ID = $id";
			if(mysqli_query($conn, $sql)){
				header('Location:/../teams.php');
			}
		}
		else{
			$id = mysqli_escape_string($conn, $_POST['id']);
			$name = mysqli_escape_string($conn, $_POST['name']);
			$lastname = mysqli_escape_string($conn, $_POST['lastname']);
			$number = mysqli_escape_string($conn, $_POST['number']);
			$team = mysqli_escape_string($conn, $_POST['idteam']);

			$sql = "UPDATE FOOTBALLERS SET  ID_TEAM ='$team', NAME = '$name', LAST_NAME ='$lastname', TSHIRT_NUMBER = '$number', UPDATED_AT = '$datef' WHERE FOOT_ID = '$id'";
			if(mysqli_query($conn, $sql)){
				header('Location:/../footballers.php');
			}
		}
	}		
 ?>