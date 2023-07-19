<!DOCTYPE html>
<html lang="en">
<head>
<title>CONTACTS allancanto</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/css.css">
</head>

<header>
<nav style="width: 100%;">
		<div class="grid-container">
			<div class="grid-item2"><ul>
			  <li><a href="index.php"><l>HOME</l></a></li>
			  <li><a href="projcts.php"><l>PROJECTS</l></a></li>
			  <li><a href="skills.php"><l>SKILLS</l></a></li>
			</ul>
		</div>
			<div class="grid-item2">
			<img src="images/a4.png" width="200px" style="float: right;">
		</div>
	</div>
</nav>
</header>
<body>
	<br><br><br>
	<h4 style="text-align: centeR;">CONTACTS</h4>
	<?php
	require_once 'php/php1.php';

    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM contacts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<p>Phone:" . $row["phone"]. "</p>";
			echo "<p>Email:" . $row["email"]. "</p>";
        }
    } else {
        echo "0 results";
    }
    // Close the connection
    $conn->close();
    ?>


</body>

</html>
