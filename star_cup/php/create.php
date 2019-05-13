<?php 
	
require_once 'connection.php';
require_once 'date.php';

if(isset($_POST['create'])){
	if($_POST['table'] == "teams"){
		$name = mysqli_escape_string($conn, $_POST['name']);
		$color = mysqli_escape_string($conn, $_POST['color']);		
		//Formating the date on PT_br
		$date = new DateTime($_POST['date']);
		$date = $date->format('d-m-Y');
		$_POST['date'] = $date;

		$date = mysqli_escape_string($conn, $_POST['date']);

		$sql = "INSERT INTO TEAMS(TEAM_NAME, COLOR_SHIELD, FOUNDATION_DATE, CREATED_AT, UPDATED_AT) VALUES ('$name', '$color','$date','$datef','$datef')";

		if(mysqli_query($conn, $sql)){
			header('Location:/../teams.php');
		}
		else{
			echo "Not was possible to creat a new team!";
		     }	
	}
	else{
		$name = mysqli_escape_string($conn, $_POST['name']);
		$lastname = mysqli_escape_string($conn, $_POST['lastname']);
		$team = mysqli_escape_string($conn, $_POST['idteam']);
		$number = mysqli_escape_string($conn, $_POST['number']);

		$sql = "INSERT INTO FOOTBALLERS(ID_TEAM, NAME, LAST_NAME, TSHIRT_NUMBER, CREATED_AT, UPDATED_AT) VALUES ($team, '$name', '$lastname', '$number', '$datef', '$datef')";
		 if(mysqli_query($conn, $sql)){
			header('Location:/../footballers.php');
		}	
	}
}
?>