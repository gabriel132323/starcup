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
    <form action="../php/create.php" method="POST">
	Team Name:
	<input type="text" name="name" required>
	<br>
	<br>
	Color Shield:
 	<input type="text" value="" name="color" required>
	<br>
	<br>
	Date Fundation:
	<input type="date" value="" name="date" required>
	<br>
	<br>
	<input type="submit" value="Create" name="create">
	<input type="hidden" name="table" value="teams">
    </form>
</body>
</html>