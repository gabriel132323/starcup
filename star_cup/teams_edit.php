<?php require_once 'php/connection.php' ?>
<?php require_once 'php/date.php' ?>
<?php 
	if(isset($_GET['id'])){
		$id = mysqli_escape_string($conn, $_GET['id']);
		$sql = "SELECT * FROM TEAMS WHERE ID = '$id' ";
		$result = mysqli_query($conn, $sql);
		$data = mysqli_fetch_array($result);
	}

	$date = new DateTime($data['FOUNDATION_DATE']);
	$date = $date->format('Y-m-d');
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
    <a href="teams.php"><h1>STAR CUP</h1></a>
    <form action="../php/update.php?" method="POST">
		Team Name:
		<input type="text" value="<?php echo $data['TEAM_NAME']; ?>" name="name" required>
		<br>
		<br>
		Color Shield:
	 	<input type="text" value="<?php echo $data['COLOR_SHIELD'];?>"name="color" required>
		<br>
		<br>
		Date Fundation:
		<input type="date" value="<?php echo $date ?>" name="date" required>
		<br>
		<br>
		<input type="submit" value="Update" name="update">
		<input type="hidden" name="id" value="<?php echo $data['ID'];?>">
		<input type="hidden" name="table" value="teams">
    </form>
</body>
</html>