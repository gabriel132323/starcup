<?php  

require_once 'connection.php';
$id = $_GET['id'];

if($_GET['table'] == 'teams'){

	$sql = "DELETE FROM FOOTBALLERS WHERE ID_TEAM = '$id'";
	if(!mysqli_query($conn, $sql)) echo "Error at delete a team!";

	$sql = "DELETE FROM TEAMS WHERE ID = '$id'";
	if(!mysqli_query($conn, $sql)) echo "Error at delete a team!";
	header('Location:/../teams.php');
}
else{
	$sql = "DELETE FROM FOOTBALLERS WHERE FOOT_ID = '$id'";
	if(!mysqli_query($conn, $sql)) echo "Error at delete a footballer!";
	header('Location:/../footballers.php');
	}
?>


