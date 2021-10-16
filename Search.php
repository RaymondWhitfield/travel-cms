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
	<?php
		include_once "navbar.php";
	?>

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
	<?php
		include_once "footer.php";
	?>
	
	<!-- Linking Polar Lights project specific JavaScript file -->
	<script src="script.js"></script>
</body>
</html>
