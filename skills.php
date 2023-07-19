<!DOCTYPE html>
<html lang="en">
<head>
	<title>AllanCanto Portfolio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/css.css">
</head>

<header>

<nav style="width: 100%;">
		<div class="grid-container">
			<div class="grid-item2"><ul>
			  <li><a href="index.php"><l>HOME</l></a></li>
			  <li><a href="contacts.php"><l>CONTACTS</l></a></li>
			  <li><a href="projcts.php"><l>PROJECTS</l></a></li>
			
			</ul>
		</div>
			<div class="grid-item2">
			<img src="images/a4.png" width="200px" style="float: right;">
		</div>
	</div>
</nav>
</header>
<body><br><br><br><br><br>
	<p><b>SKILLS | TOOLS | TECHNOLOGIES</b><br>
		IOT ENGINEER | ROBOTICS AND ELECTRONICS ENGINEER |
		3D MODELER | WEB DEVELOPER<br><br>
		<div class="progress-bar">
			<div class="progressWEB">WEB DEVELOPMENT</div>
		</div><br>
		<div class="progress-bar">
			<div class="progressELE">ARDUINO PROGRAMMING</div>
		</div><br>
		<div class="progress-bar">
			<div class="progress3D">3D MODELING</div>
		</div><br>
		
		<p><b>SKILLS | TOOLS | TECHNOLOGIES</b><br>
			IOT ENGINEER | ROBOTICS AND ELECTRONICS ENGINEER |
			3D MODELER | WEB DEVELOPER</p>
			<b>TOOLS</b><br>
			<?php
			require_once 'php/php1.php';
		
			// SQL query to retrieve data from the database
			$sql = "SELECT * FROM skills";
			$result = $conn->query($sql);
		
			if ($result->num_rows > 0) {
				// Output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<p>" . $row["tools"]. "</p>";
				}
			} else {
				echo "0 results";
			}
		
			?>
			
			<b>TECHNOLOGIES</b><br>
			<?php
			require_once 'php/php1.php';
		
			// SQL query to retrieve data from the database
			$sql = "SELECT * FROM skills";
			$result = $conn->query($sql);
		
			if ($result->num_rows > 0) {
				// Output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<p>" . $row["technologies"]. "</p>";
				}
			} else {
				echo "0 results";
			}
			// Close the connection
			$conn->close();
			?>
	<br>
	




    <script src="js/js.js"></script>
</body>
</html>