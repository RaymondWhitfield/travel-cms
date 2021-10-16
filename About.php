<!DOCTYPE html>
<html lang="en">
<head>
	<title>Polar Lights | About Page</title>
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
	
	<?php
		include_once "navbar.php";
	?>


	<!-- Container for main body -->
	<div class="container container-body contact-section">
		<!-- Div to center the content and bottom padding using Bootstrap class -->
		<div class="row justify-content-center pb-3">
			<!-- Div for medium column using Bootstrap class -->
			<div class="col-md-7 text-justify">
				<!-- Header with top and bottom padding using Bootstrap class -->
				<h4 class="mb-3 mt-4 p-2 subTitles" style="font-size: 30px;">About</h4>
				<p>This is not a guide for the average tourist. I will not list the usual places you could buy tacky souvenirs, sell you generic guided tours, or highlight the same old tourist attractions. For thousands of years, the neon glows of the auroras have captured the curiosity of humans everywhere. In an age where social media followers and likes reign supreme, chasing polar lights has made its way to every other bucket list; they do, nonetheless, make for awe-inspiring Insta-worthy stories and envy-evoking Facebook picture albums! Experiencing the wondrous extravaganza that is polar lights has, also, never been easier thanks to the ever-growing ease of travel and technological advancements. But with northern lights getting the giant’s share of attention, what many people don’t realize is that the southern continents also boast of marvelous atmospheric light displays of their own - that are just as captivating (if not more impressive).</p>

				<p>This site is designed to be a quick but quintessential exploration guide for all those struck with polar lights wanderlust. It’s a one-off, unique information repository of expeditions focused specifically on traveling to see polar lights in both, the northern and southern hemispheres - one that will help our visitors glean through and hopefully, hone down on a destination to travel to.</p>

				<p>Oh, and the best part? We’re still growing! New and unique places launch frequently, so what are you waiting for? Have a look around. Use the form below to get in touch if you’d like to leave behind comments or have specific questions.</p>
			</div>
		</div>

		<!-- Container for contact form -->
		<div class="container container-contact">
			<!-- Div to center the content using Bootstrap class -->
			<div class="row justify-content-center contact-form-background">
				<!-- Div for medium column using Bootstrap class -->
				<div class="col-md-7">
					<form action="mailto:rdighe@edgewood.com" method="post" class="p-4">
						<!-- Text field with bottom padding and uniform form control using Bootstrap class -->
						<div class="pb-3">
							<input name="name" type="text" class="form-control" placeholder="Your Name">
						</div>
						<!-- Text field with bottom padding and uniform form control using Bootstrap class -->
						<div class="pb-3">
							<input name="email" type="email" class="form-control" placeholder="Your Email">
						</div>
						<!-- Text field with bottom padding and uniform form control using Bootstrap class -->
						<div class="pb-3">
							<input name="subject" type="text" class="form-control" placeholder="Subject">
						</div>
						<!-- Text area with bottom padding and uniform form control using Bootstrap class -->
						<div class="pb-3">
							<textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
						</div>
						<!-- Button with bottom padding and button specific styles using Bootstrap class -->
						<div class="pb-3">
							<input type="submit" value="Send Message" class="btn btn-outline-primary btn-sm">
						</div>
					</form>
				</div>
			</div>
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
