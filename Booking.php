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
	<title>Polar Lights | Booking Page</title>
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
		
		<form id="bookingForm">
			<div class="form-row mt-3">
				<div class="form-group col-md-6">
					<h5>Booking Information</h5>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="fromDate">From date</label>
					<input type="date" class="form-control" id="fromDate" placeholder="mm/dd/yyyy">
				</div>
				<div class="form-group col-md-6">
					<label for="toDate">To date</label>
					<input type="date" class="form-control" id="toDate" placeholder="mm/dd/yyyy">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="numTraveller">No. of travellers</label>
					<select class="form-control col-md-6" id="numTraveller" title="Select the number of travellers on this trip">
						<option value="" disabled selected>No. of travellers</option>
						<?php 
						for ($x = 1; $x <= 5; $x++) {
							echo "<option value='$x'>$x</option>";
						}
						echo "<option value='6'>5+</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-row mt-3">
				<div class="form-group col-md-6">
					<h5>Personal Information</h5>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="firstName">First name</label>
					<input type="text" class="form-control" id="firstName" placeholder="First name" pattern="[a-zA-Z\-]+">
				</div>
				<div class="form-group col-md-6">
					<label for="lastName">Last name</label>
					<input type="text" class="form-control" id="lastName" placeholder="Last name" pattern="[a-zA-Z\-]+">
				</div>
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" class="form-control" id="address" placeholder="1234 Main St">
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="city">City</label>
					<input type="text" class="form-control" id="city" pattern="[a-zA-Z]+">
				</div>
				<div class="form-group col-md-1">
					<label for="state">State</label>
					<input type="text" class="form-control" id="state" maxlength="2" pattern="[a-zA-Z]{2}">
				</div>
				<div class="form-group col-md-2">
					<label for="zipcode">Zip</label>
					<input type="text" class="form-control" id="zipcode" maxlength="5" pattern="[0-9]{5}">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" placeholder="name@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
				</div>
				<div class="form-group col-md-3">
					<label for="phone">Phone</label>
					<input type="text" class="form-control" id="phone" placeholder="xxx-xxx-xxxx" pattern="[0-9]{10}|[0-9]{3}-[0-9]{3}-[0-9]{4}">
				</div>
			</div>

			<div class="form-row mt-3">
				<div class="form-group col-md-6">
					<h5>Billing Information</h5>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="creditcard">Credit card</label>
					<input type="text" class="form-control" id="creditcard" placeholder="xxxx-xxxx-xxxx-xxxx" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}">
				</div>
				<div class="form-group col-md-2">
					<label for="expdate">Expiry date</label>
					<input type="text" class="form-control" id="expdate" placeholder="xx/xx" pattern="[0-9]{1,2}/[0-9]{2}">
				</div>
				<div class="form-group col-md-2">
					<label for="cvv">CVV</label>
					<input type="text" class="form-control" id="cvv" maxlength="3" placeholder="xxx" pattern="[0-9]{3}">
				</div>
			</div>

			<div class="form-row mt-3">
				<div class="form-group col-md-4">
					<input type="submit" class="btn btn-outline-primary btn-sm form-control" value="Book It">
				</div>
			</div>
		</form>

	</div>

	<!-- Page footer -->
	<?php
		include_once "footer.php";
	?>
	
	<!-- Linking Polar Lights project specific JavaScript file -->
	<script src="script.js"></script>
</body>
</html>
