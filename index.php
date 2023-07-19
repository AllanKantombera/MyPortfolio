<!DOCTYPE html>
<html lang="en">
<head>
	<title>AllanCanto Portfolio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/css.css">
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>

</head>

<header>
	<nav style="width: 100%;">
		<div class="grid-container">
			<div class="grid-item2"><ul>
			  <li><a href="contacts.php"><l>CONTACTS</l></a></li>
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
<body onload="initMap()">
<br><br><br><br><br>

<div class="grid-container">

	<div class="grid-item">
		<div class="slideshow-container" >
			<div class="slide">
			  <img src="images/2.png" alt="Slide 1"  >
			</div>
			<div class="slide">
			  <img src="images/5.jpg" alt="Slide 2"  >
			</div>
			<div class="slide">
			  <img src="images/1.png" alt="Slide 3" >
			</div>
		</div>
	</div>

	<div class="grid-item">

		<h3><div id="clock"></div></h3>
		<br><h3 id="greeting" style="font-family: monospace; margin: 20px; color: aliceblue; float: right;">HI</h3>
		<div class="loading" style="float: left;"></div>
		<div class="loading" style="float: left;"></div>

	</div>
  </div><br><br>

<section>
			
	<div class="grid-container">
		<div class="grid-item2">
			<div class="card" style="padding-left: 20px;">
			<img src="images/allan1.jpg" alt="Image" style="width: 80%">
			<div class="container1">
			  <h4>ALLAN KANTOMBERA</h4><br>
			  <h5>IOT ENGINEER | ROBOTICS AND ELECTRONICS ENGINEER |
				3D MODELER | WEB DEVELOPER<br>
			</h5>
			</div>
		</div>
	</div>

	<div class="grid-item2">
	<?php
	require_once 'php/php1.php';

    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM myportfolio";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<p>" . $row["myportfolio"]. "</p>";
        }
    } else {
        echo "0 results";
    }

    ?>

		</div>
	</div>
</section>

</p>

<br>
</section>
<div class="grid-container">
	<div class="grid-item2">
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
</p>
<br><br>
</div>
<div class="grid-item2"><br>

<div style="background-color: #00030f; border-width: 3px; box-shadow: 0 4px 15px 0 rgba(0, 225, 255, 0.9); padding: 20px;
max-width: fit-content; border-style: solid; border-radius: 14px;">
    <h2>Contact Us</h2>

    <form action="#" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      
      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>
      
      <input type="submit" value="Submit">
    </form>
</div>
</div>
</div>

<h2>Map with Current Location</h2>
<div id="map"></div>


<script src="js/js.js"></script>
</body>
<footer>
	<br>
	<h6>Follow Me On_<a href="https://web.facebook.com/allan.kantomberaowellos"><l>FACEBOOK</l></a>
		<a href="https://twitter.com/AllanKantombera"><l>TWITTER</l></a><a href="https://www.instagram.com/allan_canto1/"><l>INSTAGRAM</l></a></h6>
	<br>
	<h6>
	Email: allancanto7@gmail.com<br>
	Tel: 0993505862
    </h6>
</footer>
</html>