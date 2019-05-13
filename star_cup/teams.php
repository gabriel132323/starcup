<?php include_once "php/connection.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Stars Club</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <a href="index.php"><h1>STAR CUP</h1></a>
    <h2>TEAMS</h2>
    <table border="1" width="1250px" height="150px">
	<tr>
	   <td align="center" width="170px">NAME</td>
	   <td align="center" width="170px">COLOR SHIELD</td>
	   <td align="center" width="180px">FOUNDATION DATE</td>
	   <td align="center" colspan="2"><a href="sign_team.php">SIGN TEAM</a></td>
	</tr>
	 <?php
	  
      $sql = "SELECT * FROM TEAMS";	
	  $result = mysqli_query($conn, $sql);

	  while($data = mysqli_fetch_array($result)){
		echo "<tr><td align='center'>".$data['TEAM_NAME']."</td>
		      <td align='center'>".$data['COLOR_SHIELD']."</td>
		      <td align='center'>".$data['FOUNDATION_DATE']."</td>

		      <td align='center' width='250px'><a href='teams_edit.php?id=".$data['ID']. "'</a>EDIT</td>
		      <td align='center' width='250px'><a href='php/delete.php?id=".$data['ID']."&table=teams'</a>DELETE</td></tr>";
	  }

	?>	
	</tr>
    </table>
</body>
</html>