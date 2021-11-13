<?php
	/*
	 * The include statement takes all the variables from the init.php file and copies it into this file
	 * We do this so that the database configuration variables are defined only in one file
	 */
	include "init.php";

	/*
	 * Store current page
	 */
	$_SESSION["currentPage"]="Gallery.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Polar Lights | Gallery Page</title>
	<!-- Linking Bootstrap CSS file -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
	<div class="container container-body mb-5">
		<h1 class="p-2 subTitles subTitlesFont text-center" style="font-size: 30px;">Gallery</h1>
		<p class="text-center">Even if your travel plans this year have been entirely upended, you can still experience the joy of polar expeditions by discovering the amazingly magical vistas aurora adventurers have caught on camera. </p>
		<!-- Div to center the content using Bootstrap class -->
		<div class="row justify-content-center">
			<!-- Responsive div for gallery image with top margin using Bootstrap class -->
			<div class="col-md-6 col-lg-4 gallery-div">
				<div class="parent">
					<div class="child">
						<img id="image1" src="img/Gallery/Gallery1.png" class="gallery-image popup-image" alt="Banff National Park, Canada" onclick="modalGalleryImage('image1')">
					</div>
				</div>
			</div>
			<!-- Responsive div for gallery image with top margin using Bootstrap class -->
			<div class="col-md-6 col-lg-4 gallery-div">
				<div class="parent">
					<div class="child">
						<img id="image2" src="img/Gallery/Gallery2.png" class="gallery-image popup-image" alt="South Arm, Tasmania" onclick="modalGalleryImage('image2')">
					</div>
				</div>
			</div>
			<!-- Responsive div for gallery image with top margin using Bootstrap class -->
			<div class="col-md-6 col-lg-4 gallery-div">
				<div class="parent">
					<div class="child">
						<img id="image3" src="img/Gallery/Gallery3.png" class="gallery-image popup-image" alt="Dettifoss, Iceland" onclick="modalGalleryImage('image3')">
					</div>
				</div>
			</div>
			<!-- Responsive div for gallery image with top margin using Bootstrap class -->
			<div class="col-md-6 col-lg-4 gallery-div">
				<div class="parent">
					<div class="child">
						<img id="image4" src="img/Gallery/Gallery4.png" class="gallery-image popup-image" alt="Kinloch, New Zealand" onclick="modalGalleryImage('image4')">
					</div>
				</div>
			</div>
			<!-- Responsive div for gallery image with top margin using Bootstrap class -->
			<div class="col-md-6 col-lg-4 gallery-div">
				<div class="parent">
					<div class="child">
						<img id="image5" src="img/Gallery/Gallery5.png" class="gallery-image popup-image" alt="Fairbanks, Alaska" onclick="modalGalleryImage('image5')">
					</div>
				</div>
			</div>
			<!-- Responsive div for gallery image with top margin using Bootstrap class -->
			<div class="col-md-6 col-lg-4 gallery-div">
				<div class="parent">
					<div class="child">
						<img id="image6" src="img/Gallery/Gallery6.png" class="gallery-image popup-image" alt="Icelandic Horses at Farm Kálfhóll" onclick="modalGalleryImage('image6')">
					</div>
				</div>
			</div>
			<!-- Responsive div for gallery image with top margin using Bootstrap class -->
			<div class="col-md-6 col-lg-4 gallery-div">
				<div class="parent">
					<div class="child">
						<img id="image8" src="img/Gallery/Gallery7.png" class="gallery-image popup-image" alt="Patagonia" onclick="modalGalleryImage('image8')">
					</div>
				</div>
			</div>
			<!-- Responsive div for gallery image with top margin using Bootstrap class -->
			<div class="col-md-6 col-lg-4 gallery-div">
				<div class="parent">
					<div class="child">
						<img id="image9" src="img/Gallery/Gallery8.png" class="gallery-image popup-image" alt="Skaftafellsjökull Glacier, Iceland" onclick="modalGalleryImage('image9')">
					</div>
				</div>
			</div>
			<!-- Responsive div for gallery image with top margin using Bootstrap class -->
			<div class="col-md-6 col-lg-4 gallery-div">
				<div class="parent">
					<div class="child">
						<img id="image10" src="img/Gallery/Gallery9.png" class="gallery-image popup-image" alt="South Pole, Antarctica" onclick="modalGalleryImage('image10')">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Div for modal pop-up -->
	<div id="modalDiv" class="modal">
		<!-- Span to show close icon -->
		<span class="close" onclick="onSpanClick()">&times;</span>
		<!-- Image tag to display the modal image -->
		<img class="modalImage" id="modalImage">
		<!-- Caption for the modal display -->
		<div id="modalCaption"></div>
		<!-- Previous and next buttons -->
		<a class="prev" onclick="prevImage()" title="Previous image">&#10094;</a>
		<a class="next" onclick="nextImage()" title="Next image">&#10095;</a>
	</div>

	<!-- Page footer -->
	<?php
		include_once "footer.php";
	?>
	
	<!-- Linking Polar Lights project specific JavaScript file -->
	<script src="script.js"></script>
</body>
</html>
