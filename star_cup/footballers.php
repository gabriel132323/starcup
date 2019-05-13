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
    <h2>Footballers</h2>
    <table border="1" width="1250px" height="150px">
	<tr>
	   <td align="center" width="170px">NAME</td>
	   <td align="center" width="170px">LAST NAME</td>
	   <td align="center" width="180px">T-SHIRT NUMBER</td>
	   <td align="center" width="180px">TEAM</td>
	   <td align="center" colspan="2"><a href="sign_footballers.php">SIGN FOOTBALLERS</a></td>
	</tr>

	 <?php
      $sql = "SELECT FOOTBALLERS.ID_TEAM, FOOTBALLERS.FOOT_ID, FOOTBALLERS.NAME,FOOTBALLERS.LAST_NAME,FOOTBALLERS.TSHIRT_NUMBER, TEAMS.TEAM_NAME FROM 
      FOOTBALLERS, TEAMS WHERE TEAMS.ID = FOOTBALLERS.ID_TEAM;";

	  $result = mysqli_query($conn, $sql);

	  while($data = mysqli_fetch_array($result)){
		echo "<tr><td align='center'>".$data['NAME']."</td>
		      <td align='center'>".$data['LAST_NAME']."</td>
		      <td align='center'>".$data['TSHIRT_NUMBER']."</td>
		       <td align='center'>".$data['TEAM_NAME']."</td>
		      <td align='center' width='250px'><a href='footballers_edit.php?id=".$data['FOOT_ID']. "&table=footballers&idteam=".$data['ID_TEAM']."'</a>EDIT</td>
		      <td align='center' width='250px'><a href='php/delete.php?id=".$data['FOOT_ID']."&table=footballers'</a>DELETE</td></tr>";
	  }
	?>	
	</tr>
    </table>
</body>
</html>