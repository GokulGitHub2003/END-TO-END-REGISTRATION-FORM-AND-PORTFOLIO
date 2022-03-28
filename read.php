
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is gfg
$database = 'cv';

// Server is localhost with
// port number 3308
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM users ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Resume User Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>resume</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>username</th>
                <th>email_address</th>
                <th>password</th>
                <th>confirm_password</th>
                <th>grade</th>
				<th>college</th>
				<th>language</th>
                <th>programming</th>
				<th>techn_skills</th>
				<th>cgpa</th>
				<th>projects</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['username'];?></td>
                <td><?php echo $rows['email_address'];?></td>
                <td><?php echo $rows['password'];?></td>
                <td><?php echo $rows['confirm_password'];?></td>
				<td><?php echo $rows['college'];?></td>
				<td><?php echo $rows['language'];?></td>
				<td><?php echo $rows['tech_skills'];?></td>
				<td><?php echo $rows['cgpa'];?></td>
				<td><?php echo $rows['projects'];?></td>
                <td><?php echo $rows['grade'];?></td>
                <td><?php echo $rows['programming'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>