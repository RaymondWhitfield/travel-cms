<?php
/*
 * The include statement takes all the variables from the init.php file and copies it into this file
 * We do this so that the database configuration variables are defined only in one file
 */
include "init.php";

/*
 * Establish the database connection
 */
$conn = new mysqli($serverName, $userName, $password, $dbName);
if ($conn -> connect_error) {
	die("Connection failed: " . $conn -> connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Polar Lights | Search Packages Page</title>
	<!-- Linking Bootstrap CSS file -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style>@import url('https://fonts.googleapis.com/css2?family=Sora:wght@300&display=swap');</style>
	<style>@import url('https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap');</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Linking Polar Lights project specific CSS file -->
	<link rel="stylesheet" href="style.css">
	<link id="active-stylesheet" href="" rel="stylesheet" type="text/css"/>
	
</head>
<body>

	<!-- Navigation bar using Bootstrap's in-built navigation section -->
	<nav class = "navbar navbar-expand-lg">
		<div class = "container">
			<!-- Heading for website -->
			<a class = "navbar-brand" href="index.html">POLAR LIGHTS</a>

			<div>
				<!-- Navigation menu as unordered list, each list item has specific padding using Bootstrap class -->
				<ul class="navbar-nav">
					<li><a href="index.html" class="nav-link"><span>HOME</span></a></li>
					<li>
						<div class="dropdownDiv">
							<button class="dropdownBtn nav-link"><span>CONTINENTS</span>
								<i class="fa fa-caret-down"></i>
							</button>
							<div class="dropdown-content">
								<a href="Antarctica.html" class="dropdown-item"><span>ANTARCTICA</span></a>
								<a href="Europe.html" class="dropdown-item"><span>EUROPE</span></a>
								<a href="NorthAmerica.html" class="dropdown-item"><span>NORTH AMERICA</span></a>
								<a href="Oceania.html" class="dropdown-item"><span>OCEANIA</span></a>
								<a href="SouthAmerica.html" class="dropdown-item"><span>SOUTH AMERICA</span></a>
							</div>
						</div>
					</li>
					<li><a href="Gallery.html" class="nav-link"><span>GALLERY</span></a></li>
					<li><a href="Search.php" class="nav-link"><span>SEARCH</span></a></li>
					<li><a href="Reviews.html"class="nav-link"><span>REVIEWS</span></a></li>
					<li><a href="About.html" class="nav-link"><span>ABOUT</span></a></li>
					<li><a class="nav-link changeCSS" data-stylesheet="darkMode.css"><span>DARK</span></a></li>
					<li><a class="nav-link changeCSS" data-stylesheet="style.css"><span>LIGHT</span></a></li>

				</ul>
			</div>
		</div>
	</nav>

	<!-- Container for main body -->
	<div class="container container-body container-main mb-5">
		
		<div class="form-row">
			<div class="form-group col-md-4">
				<select class="custom-select mr-md-2 form-control" id="destination" title="Select a destination to search package">
					<option value="" disabled selected>Destination</option>
					<?php 
					$sql = "SELECT * FROM destination
							ORDER BY NAME";
					$result = $conn -> query($sql);
					if ($result -> num_rows > 0) {
						while($row = $result -> fetch_assoc()) {
							$Id = $row["DestinationID"];
							$name = $row["Name"];
							echo "<option value='$Id'>$name</option>";
						}
					}
					?>
				</select>
			</div>
			<div class="form-group col-md-4">
				<select class="custom-select mr-sm-2 form-control" id="theme" title="Select a theme to search package">
					<option value="" disabled selected>Theme</option>
					<?php 
					$sql = "SELECT * FROM theme
							ORDER BY NAME";
					$result = $conn -> query($sql);
					if ($result -> num_rows > 0) {
						while($row = $result -> fetch_assoc()) {
							$Id = $row["ThemeID"];
							$name = $row["Name"];
							echo "<option value='$Id'>$name</option>";
						}
					}
					?>
				</select>
			</div>
			<div class="form-group col-md-4">
				<button id="searchPackage" type="" class="btn btn-outline-primary btn-sm form-control" onclick="searchPackages()">Search Packages</button>
			</div>
		</div>

		<div id="packageDiv" class="mt-5 displayNone">
			<p>
				Display package descriptions from database here...
			</p>

			<table>
				<?php 
					for ($x = 1; $x <= 5; $x++) {
						echo "<tr>";
						echo "<td class='pb-2'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>";
						echo "<td style='width: 100px; valigh:top'><a href='Booking.php'>Booking link</a></td>";
						echo "</tr>";
					}
				?>
			</table>
		</div>

	</div>

	<!-- Page footer -->
	<footer>
		<!-- Div with top and bottom padding as well as centered text with Bootstrap class -->
		<div class="pt-4 pb-2 text-center">
			<h4>About <span><a href="index.html">Polar Lights</a></span></h4>
			<p>Shine like the whole universe is yours.</p>
			<p>
				<a href="mailto:rdighe@edgewood.edu"><span>rdighe@edgewood.edu</span></a>
			</p>
			<p>
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Created by Radnee Dighe
			</p>
		</div>
	</footer>
	<!-- Linking Polar Lights project specific JavaScript file -->
	<script src="script.js"></script>
</body>
</html>
