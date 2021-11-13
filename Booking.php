<?php
	/*
	 * The include statement takes all the variables from the init.php file and copies it into this file
	 * We do this so that the database configuration variables are defined only in one file
	 */
	include "init.php";

	/*
	 * Check if the ID is populated in the session using the Login.php page
	 */
	if(empty($_SESSION["Id"])) {
	  header("Location:login.php");
	}

	/*
	 * Establish the database connection
	 */
	$conn = new mysqli($serverName, $userName, $password, $dbName);
	if ($conn -> connect_error) {
		die("Connection failed: " . $conn -> connect_error);
	}

	$packageId = "";
	$packageStartDate = "";
	$packageEndDate = "";

	if (isset($_POST["package"])) {
		$packageId = $_POST["package"];

		$sql = "SELECT StartDate, EndDate FROM package
				WHERE PackageID = '$packageId'";

		$result = $conn -> query($sql);
		if ($result -> num_rows > 0) {
			$row = $result -> fetch_assoc();
			$packageStartDate = $row["StartDate"];
			$packageEndDate = $row["EndDate"];
		}
	}
	else {
		header("location: Search.php");
	}

	$fromDate = "";
	$toDate = "";
	$numOfTravellers = "";
	$firstName = "";
	$lastName = "";
	$address = "";
	$city = "";
	$state = "";
	$zip = "";
	$email = "";
	$phone = "";
	$creditCard = "";
	$expDate = "";
	$cvvNumber = "";

	/*
	 * If the form was submitted $_POST["Submit"] will be set
	 */
	if(isset($_POST['Submit'])) {
		$fromDate = $_POST['fromDate'];
		$toDate = $_POST['toDate'];
		$numOfTravellers = $_POST['numTraveller'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zipcode'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$creditCard = $_POST['creditcard'];
		$expDate = $_POST['expdate'];
		$cvvNumber = $_POST['cvv'];
		$customerId = $_SESSION['Id'];

		$sql = "INSERT INTO booking (PackageID, CustomerID, FromDate, ToDate, NumOfTravellers, FirstName, LastName, Address, City, State, Zip, Email, Phone, CreditCard, ExpDate, CVVNumber) 
			VALUES ('$packageId', '$customerId', '$fromDate', '$toDate', '$numOfTravellers', '$firstName', '$lastName', '$address', '$city', '$state', '$zip', '$email', '$phone', '$creditCard', '$expDate', '$cvvNumber')";

		if ($conn -> query($sql)) {
			$last_id = $conn -> insert_id;
			header("Location:Confirmation.php?confirmationId=" . $last_id);
		}
		else {
			echo "Error creating booking. " . $conn -> error;
		}

		$fromDate = "";
		$toDate = "";
		$numOfTravellers = "";
		$firstName = "";
		$lastName = "";
		$address = "";
		$city = "";
		$state = "";
		$zip = "";
		$email = "";
		$phone = "";
		$creditCard = "";
		$expDate = "";
		$cvvNumber = "";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Polar Lights | Booking Page</title>
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
		
		<form id="bookingForm" action="Booking.php" method="POST" onsubmit="return validateForm();">
			<input type="hidden" name="package" id="package" value="<?php echo $packageId; ?>" />

			<div class="form-row mt-3">
				<div class="form-group col-md-6">
					<h5>Booking Information</h5>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="fromDate">From date</label>
					<input type="date" class="form-control" id="fromDate" name="fromDate" placeholder="mm/dd/yyyy" min="<?php echo date('Y-m-d', strtotime($packageStartDate)); ?>" max="<?php echo date('Y-m-d', strtotime($packageEndDate)); ?>" required="true" onblur="checkDate()">
				</div>
				<div class="form-group col-md-6">
					<label for="toDate">To date</label>
					<input type="date" class="form-control" id="toDate" name="toDate" placeholder="mm/dd/yyyy" min="<?php echo date('Y-m-d', strtotime($packageStartDate)); ?>" max="<?php echo date('Y-m-d', strtotime($packageEndDate)); ?>" required="true" onblur="checkDate()">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="numTraveller">No. of travellers</label>
					<select class="form-control col-md-6" id="numTraveller" name="numTraveller" title="Select the number of travellers on this trip" required="true">
						<option value="" disabled selected>No. of travellers</option>
						<?php 
						for ($x = 1; $x <= 10; $x++) {
							echo "<option value='$x'>$x</option>";
						}
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
					<input type="text" class="form-control" id="firstName" name="firstName" placeholder="First name" pattern="[a-zA-Z\-]+" required="true">
				</div>
				<div class="form-group col-md-6">
					<label for="lastName">Last name</label>
					<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last name" pattern="[a-zA-Z\-]+" required="true">
				</div>
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="city">City</label>
					<input type="text" class="form-control" id="city" name="city" pattern="[a-zA-Z]+">
				</div>
				<div class="form-group col-md-2">
					<label for="state">State</label>
					<input type="text" class="form-control" id="state" name="state" maxlength="2" pattern="[a-zA-Z]{2}">
				</div>
				<div class="form-group col-md-2">
					<label for="zipcode">Zip</label>
					<input type="text" class="form-control" id="zipcode" name="zipcode" maxlength="5" pattern="[0-9]{5}">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="name@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="true">
				</div>
				<div class="form-group col-md-3">
					<label for="phone">Phone</label>
					<input type="text" class="form-control" id="phone" name="phone" placeholder="xxx-xxx-xxxx" pattern="[0-9]{10}|[0-9]{3}-[0-9]{3}-[0-9]{4}">
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
					<input type="text" class="form-control" id="creditcard" name="creditcard" placeholder="xxxx-xxxx-xxxx-xxxx" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" required="true">
				</div>
				<div class="form-group col-md-2">
					<label for="expdate">Expiry date</label>
					<input type="text" class="form-control" id="expdate" name="expdate" placeholder="xx/xx" pattern="[0-9]{1,2}/[0-9]{2}" required="true" maxlength="5" onblur="checkExpDate()">
				</div>
				<div class="form-group col-md-2">
					<label for="cvv">CVV</label>
					<input type="text" class="form-control" id="cvv" name="cvv" maxlength="3" placeholder="xxx" pattern="[0-9]{3}" required="true">
				</div>
			</div>

			<div class="form-row mt-3">
				<div class="form-group col-md-4">
					<input type="submit" class="btn btn-outline-primary btn-sm form-control" value="Book It" name="Submit">
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
