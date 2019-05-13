<?php require_once 'php/connection.php' ?>

<?php 
	if(isset($_GET['id'])){
		$id = mysqli_escape_string($conn, $_GET['id']);
		$sql = "SELECT * FROM FOOTBALLERS WHERE FOOT_ID = '$id' ";
		$result = mysqli_query($conn, $sql);
		$data = mysqli_fetch_array($result);
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Stars Club</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <a href="footballers.php"><h1>STAR CUP</h1></a>
    <form action="../php/update.php" method="POST">
		Footballer Name:
		<input type="text" value= <?php echo $data['NAME']; ?> name="name" required>
		<br>
		<br>
		Footballers Last Name:
			<input type="text" value=<?php echo $data['LAST_NAME']; ?> name="lastname" required>
		<br>
		<br>
		T-Shirt Number:
		<input type="number" value=<?php echo $data['TSHIRT_NUMBER']; ?> name="number" required>
		<br>
		<br>
		Team:
		<select name="idteam">
			<?php 
				 $sql = "SELECT TEAMS.TEAM_NAME, TEAMS.ID FROM TEAMS";	
		 		 $result = mysqli_query($conn, $sql);
		 		 while($data = mysqli_fetch_array($result)){
		 		 	  	if($data['ID'] == $_GET['idteam']){
		 		 	  		echo "<option value= " . $data['ID'] . " selected>". $data['TEAM_NAME']."</option>";
		 		 	  	}
		 		 	  	else{
		 		 	  		echo "<option value= " . $data['ID'] . ">". $data['TEAM_NAME']."</option>";
		 		 	  	}
		 		 }
			 ?>
		</select>
		<br>
		<br>
		<input type="hidden" name="id" value= <?php echo $_GET['id']?>>
		<input type="hidden" name="table" value="footballers">
		<input type="submit" value="Update" name="update">
    </form>
</body>
</html>