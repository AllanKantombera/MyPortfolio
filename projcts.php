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
    <br><br><br><br>
	<input type="text" id="searchInput" placeholder="Search sections" style="width: 200px;">
	<button onclick="searchSections()" style="background-color: rgb(0, 68, 100); color: white; border-radius: 10px;">Search</button>
	
	<br><br>
	<section>
		<div class="grid-container">
			<div class="grid-item2">
			
				<h4>SMOKE DETECTOR/FIRE ALARM</h4>
				<div class="progress-bar">
					<div class="progress">progress 100%</div>
				</div><br>
			<img src="images/1.png" style="height: 250px;">
			
			</div>
			<div class="grid-item2"><br><br><br>
						<?php
				require_once 'php/php1.php';

				// SQL query to retrieve data from the database
				$sql = "SELECT * FROM projects";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// Output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<p>" . $row["smoke_detector"]. "</p>";
					}
				} else {
					echo "0 results";
				}

				?>
			</div>
		</div><br><br>
	</section>

	<section>
		<div class="grid-container">
			<div class="grid-item2">
			
				<h4>MUSIC SITE</h4>
				<div class="progress-bar">
					<div class="progress3">progress 70%</div>
				</div><br>
			<img src="images/music.png" style="height: 250px;">
			
			</div>
			<div class="grid-item2"><br><br><br>
			<?php
				require_once 'php/php1.php';

				// SQL query to retrieve data from the database
				$sql = "SELECT * FROM projects";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// Output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<p>" . $row["music_site"]. "</p>";
					}
				} else {
					echo "0 results";
				}

				?>

			</div>
		</div>
	</section>

    <section>
		
		<div class="grid-container">
			<div class="grid-item2">
				<h4 class="animated-header">SOLAR TRACKER</h4>

		<div class="progress-bar">
			<div class="progress" class="animated-header">progress 100%</div>
		  </div><br>
		  <img src="images/solar2.jpg" style="width: 200px;">
		  </div>
		  <div class="grid-item2"><br><br><br>
		<?php
				require_once 'php/php1.php';

				// SQL query to retrieve data from the database
				$sql = "SELECT * FROM projects";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// Output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<p>" . $row["solar_tracker"]. "</p>";
					}
				} else {
					echo "0 results";
				}

				?>	</div>
	</div>
		<br><br>


    </section>

	<section>
		<div class="grid-container">
			<div class="grid-item2">
			
				<h4>E-COMMERCE SITE</h4>
				<div class="progress-bar">
					<div class="progress4">progress 80%</div>
				</div><br>
			<img src="images/SITE.png" style="height: 250px;">
			
			</div>
			<div class="grid-item2"><br><br><br>
			<?php
				require_once 'php/php1.php';

				// SQL query to retrieve data from the database
				$sql = "SELECT * FROM projects";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// Output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<p>" . $row["e-commerce"]. "</p>";
					}
				} else {
					echo "0 results";
				}

				?>
			</div>
		</div><br><br>
	</section>


    <section>
  	<div class="grid-container">
			<div class="grid-item2">
        <h4 class="animated-header">EGG INCUBATOR</h4>

		<div class="progress-bar">
			<div class="progress2">progress 70%</div>
		</div><br>
		<img src="images/incu.jpg" width=" 400px">

		</div>

			<div class="grid-item2"><br><br><br>
			<?php
				require_once 'php/php1.php';

				// SQL query to retrieve data from the database
				$sql = "SELECT * FROM projects";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// Output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<p>" . $row["egg_incubator"]. "</p>";
					}
				} else {
					echo "0 results";
				}

				?>
</div>
</div>	<br><br>
    </section>


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