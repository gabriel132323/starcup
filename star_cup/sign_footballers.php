<?php require_once 'php/connection.php' ?>

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
    <form action="../php/create.php" method="POST">

	Footballer Name:
	<input type="text" name="name" required>
	<br>
	<br>
	Footballers Last Name:
 	<input type="text" value="" name="lastname" required>
	<br>
	<br>
	T-Shirt Number:
	<input type="number" min="0" name="number" required>
	<br>
	<br>
	Team:
	<select name="idteam" required>
		<?php 
			 $sql = "SELECT TEAMS.TEAM_NAME, TEAMS.ID FROM TEAMS";	
	 		 $result = mysqli_query($conn, $sql);
	 		 while($data = mysqli_fetch_array($result)){
	 		 	echo "<option value= " . $data['ID'] . ">". $data['TEAM_NAME']."</option>";
	 		 }
		 ?>
	</select>
	<br>
	<br>
	<input type="submit" value="Create" name="create">
	<input type="hidden" name="table" value="footballers">
    </form>
</body>
</html>