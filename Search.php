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

	/*
	 * Initializing variables
	 */
	$destinationId = "";
	$themeId = "";
	$valuesSelected = false;

	/*
	 * If the form was submitted $_POST["Submit"] will be set
	 */
	if (isset($_POST["Submit"])) {
		/*
		 * Set local variables to the form input values
		 */
		$destinationId = isset($_POST["destination"]) ? $_POST["destination"] : "";
		$themeId = isset($_POST["theme"]) ? $_POST["theme"] : "";

		if (!empty($destinationId) || !empty($themeId))
		{
			$valuesSelected = true;
		}

		/*
		 * Unset the submit flag
		 */
		unset($_POST['Submit']);
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Polar Lights | Search Packages Page</title>
	<!-- Linking Bootstrap CSS file -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<style>@import url('https://fonts.googleapis.com/css2?family=Sora:wght@300&display=swap');</style>
	<style>@import url('https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap');</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Linking Polar Lights project specific CSS file -->
	<link id = "style" rel="stylesheet" href="style.css">
	<link id="active-stylesheet" href="" rel="stylesheet" type="text/css"/>
	
</head>
<body>

	<!-- Navigation bar using Bootstrap's in-built navigation section -->
	<?php
		include_once "navbar.php";
	?>

	<!-- Container for main body -->
	<div class="container container-body container-main mb-5">
		
		<form action="Search.php" method="POST">
			<div class="form-row">
				<div class="form-group col-md-4">
					<select class="custom-select mr-md-2 form-control" id="destination" name="destination" title="Select a destination to search package">
						<option value="" disabled selected>Destination</option>
						<?php 
						$sql = "SELECT * FROM destination
								ORDER BY NAME";
						$result = $conn -> query($sql);
						if ($result -> num_rows > 0) {
							while($row = $result -> fetch_assoc()) {
								$Id = $row["DestinationID"];
								$name = $row["Name"];
								if ($destinationId == $Id) {
									echo "<option value='$Id' selected>$name</option>";
								}
								else {
									echo "<option value='$Id'>$name</option>";
								}
							}
						}
						?>
					</select>
				</div>
				<div class="form-group col-md-4">
					<select class="custom-select mr-sm-2 form-control" id="theme" name="theme" title="Select a theme to search package">
						<option value="" disabled selected>Theme</option>
						<?php 
						$sql = "SELECT * FROM theme
								ORDER BY NAME";
						$result = $conn -> query($sql);
						if ($result -> num_rows > 0) {
							while($row = $result -> fetch_assoc()) {
								$Id = $row["ThemeID"];
								$name = $row["Name"];
								if ($themeId == $Id) {
									echo "<option value='$Id' selected>$name</option>";
								}
								else {
									echo "<option value='$Id'>$name</option>";
								}
							}
						}
						?>
					</select>
				</div>
				<div class="form-group col-md-4">
					<input type="submit" value="Search Packages" name="Submit" class="btn btn-outline-primary btn-sm form-control">
				</div>
			</div>
		</form>

		<?php 
		if ($valuesSelected)
		{
		?>
			<form id="bookPackage" action="Booking.php" method="POST">
				<div id="packageDiv" class="mt-5">

					<table>
						<?php 
							if (($destinationId > 0) && ($themeId > 0)) {
								$sql = "SELECT PackageID, Description, MonthName(Date(StartDate)) AS StartMonth, Day(Date(StartDate)) AS StartDt, MonthName(Date(EndDate)) AS EndMonth, Day(Date(EndDate)) AS EndDt FROM package
										WHERE DestinationID = '$destinationId' AND 
											  ThemeID = '$themeId'";
							}
							else if ($destinationId > 0) {
								$sql = "SELECT PackageID, Description, MonthName(Date(StartDate)) AS StartMonth, Day(Date(StartDate)) AS StartDt, MonthName(Date(EndDate)) AS EndMonth, Day(Date(EndDate)) AS EndDt FROM package
										WHERE DestinationID = '$destinationId'";
							}
							else { 
								$sql = "SELECT PackageID, Description, MonthName(Date(StartDate)) AS StartMonth, Day(Date(StartDate)) AS StartDt, MonthName(Date(EndDate)) AS EndMonth, Day(Date(EndDate)) AS EndDt FROM package
										WHERE ThemeID = '$themeId'";
							}

							$result = $conn -> query($sql);
							if ($result -> num_rows > 0) {
								echo "<tr class='pb-2'>";
								echo "<th class='displayNone'></th>";
								echo "<th>Description</th>";
								echo "<th style='width: 100px;'>Start Date</th>";
								echo "<th style='width: 100px;'>End Date</th>";
								echo "<th></th>";
								echo "</tr>";
								while($row = $result -> fetch_assoc()) {
									$Id = $row["PackageID"];
									$desc = $row["Description"];
									$startMonth = $row["StartMonth"];
									$endMonth = $row["EndMonth"];
									$startDt = $row["StartDt"];
									$endDt = $row["EndDt"];
									echo "<tr>";
									echo "<td class='displayNone'>$Id</td>";
									echo "<td class='pb-2'>$desc</td>";
									echo "<td>$startMonth" . "-" . "$startDt</td>";
									echo "<td>$endMonth" . "-" . "$endDt</td>";
									echo "<td style='width: 100px; valigh:top'><a href='#' onclick='launchBooking()'>Booking link</a></td>";
									echo "</tr>";
								}
							}
							else {
								echo "<tr>";
								echo "<td class='pb-2'>No packages found for the selected search options.</td>";
								echo "</tr>";
							}
						?>
					</table>
					<input type="hidden" name="package" id="package" />
				</div>
			</form>

		<?php
			$destinationId = "";
			$themeId = "";
			$valuesSelected = false;
		}
		?>

	</div>

	<!-- Page footer -->
	<?php
		/*
		 * Close database connection
		 */ 
		$conn -> close();
		include_once "footer.php";
	?>
	
	<!-- Linking Polar Lights project specific JavaScript file -->
	<script src="script.js"></script>
</body>
</html>
