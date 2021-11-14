<?php
	/*
	 * The include statement takes all the variables from the init.php file and copies it into this file
	 * We do this so that the database configuration variables are defined only in one file
	 */
	include "init.php";

	/*
	 * Store current page
	 */
	$_SESSION["currentPage"]="index.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Polar Lights | Home Page</title>
	<!-- 
		* Linking Bootstrap CSS file 
	-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!--
		* Importing Google fonts
	-->
	<style>@import url('https://fonts.googleapis.com/css2?family=Sora:wght@300&display=swap');</style>
	<style>@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap');</style>
	<style>@import url('https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap');</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- 
		* Linking Polar Lights project specific CSS file 
	-->
	<link rel="stylesheet" href="style.css" type="text/css">
	<link id="active-stylesheet" href="" rel="stylesheet" type="text/css"/>
</head>
<body>	

	<?php
		include_once "navbar.php";
	?>

	<!-- 
		* Div for home page video
	-->
	<div class="container container-body mt-5">
		<video class="img-fluid mx-auto d-block" max-width="1920" max-height="1080" controls autoplay muted>
			<source src="AuroraAustralis.mp4" type="video/mp4">
		</video>
	</div>

	<!-- 
		* Container for main body 
	-->
	<div class="container container-body mx-auto">
		<div class="body-section text-justify">
			<h3 class="p-2 mb-3 text-center subTitles" style="font-size: 30px;">Great Adventures Await</h3>
			<p>For thousands of years, the neon glows of the auroras have captured the curiosity of humans everywhere. In an age where social media followers and likes reign supreme, chasing polar lights has made its way to every other bucket list; they do, nonetheless, make for awe-inspiring Insta-worthy stories and envy-evoking Facebook picture albums! Experiencing the wondrous extravaganza that is polar lights has, also, never been easier thanks to the ever-growing ease of travel and technological advancements. </p>

			<p> With northern lights getting the giant’s share of attention, what many people don’t realize is that the southern continents also boast of marvelous atmospheric light displays of their own - that are just as captivating (if not more impressive). This is a one-off, unique information repository of expeditions focused specifically on traveling to see polar lights, in places where the skies put on impressive displays, but are still accessible and still boast of other natural wonders - one that will help the visitor glean through the limited, but compelling visual resources to hone down on a destination to travel to.</p>
		</div>

		<!-- 
			* Div to display world map with clickable links 
		-->
		<div class="body-section">
			<!-- 
				* Div to center the content using Bootstrap class 
			-->
			<div class="row justify-content-center pb-1">
				<div class="col-md-12 heading-section text-center">
					<h3 class="p-2 mb-3 subTitles" style="font-size: 30px;">Explore your destination</h3>
					<p>Click on the map to explore your destination.</p>
				</div>
			</div>

    		<!-- 
    			* World mpa with clickable lines 
    		-->
    		<img class="img-fluid mx-auto d-block" src="img/worldmap.png " style="width: auto;" alt="Clickable world map" usemap="#worldmap">
			<!-- 
				* Map areas for each continent 
			-->
			<map name="worldmap">
				<area shape="rect" coords="10,300,170,340" alt="North America" href="NorthAmerica.html">
				<area shape="rect" coords="55,430,210,465" alt="South America" href="SouthAmerica.html">
				<area shape="rect" coords="585,45,745,85" alt="Europe" href="Europe.html">
				<area shape="rect" coords="570,435,725,470" alt="Oceania" href="Oceania.html">
				<area shape="rect" coords="715,500,870,535" alt="Antarctica" href="Antarctica.html">
			</map>
		</div>
	</div> 

	<!-- 
		* Container for blog section with top margin, top and bottom padding using Bootstrap class 
	-->
	<div class="blog-section mt-5">
		<div class="container pt-5 pb-5">
			<!-- 
				* Div to center the content using Bootstrap class 
			-->
			<div class="row justify-content-center">
				<div class="col-md-7 heading-section text-center">
					<h3 class="p-2 blogTitle mb-2">Travel Blogs</h3>
					<p class="mb-3">Glean through fellow enthusiasts' experiences, advice, and suggestions to catch the magnificence of the polar lights in person.</p>
				</div>
			</div>
			<div class="row">
				<!-- 
					* Responsive div for blog entry using Bootstrap class 
				-->
				<div class="col-md-6 col-lg-4">
					<!-- 
						* Div for blog image with justified content using Bootstrap class 
					-->
					<div class="blog-entry justify-content-end">
						<a href="https://www.wildjunket.com/northern-lights-in-iceland-guide/" target="_blank">
							<img src="img/Blog/wildjunket.jpg" class="blog-image" alt="Polar light image">
						</a>
						<p class="pt-3"> Widely followed Dutch professional travel blogger, Nellie Huang, shares her tidbits to help plan the perfect, once-in-a-lifetime Northern Lights experience in Iceland.</p>
						<button type="button" class="btn btn-primary blog-button" onclick="window.location.href='https://www.wildjunket.com/northern-lights-in-iceland-guide/';">Read More</button>
					</div>
				</div>
				<!-- 
					* Responsive div for blog link using Bootstrap class 
				-->
				<div class="col-md-6 col-lg-4">
					<!-- 
						* Div for blog image with justified content using Bootstrap class 
					-->
					<div class="blog-entry justify-content-end">
						<a href="https://thriftynomads.com/the-best-places-to-see-the-southern-lights/" target="_blank">
							<img src="img/Blog/thriftynomads.jpg" class="blog-image" alt="Wilsons Promontory, Victoria, Australia">
						</a>
						<p class="pt-3">Canadians Jen and Ted Avery, behind the successful Thrifty Nomads blog, show us some of the best places to see the Southern Lights are accessible to get to, and are easy to incorporate into intriguing travel plans.</p>
						<button type="button" class="btn btn-primary blog-button" onclick="window.location.href='https://thriftynomads.com/the-best-places-to-see-the-southern-lights/';">Read More</button>
					</div>
				</div>
				<!-- 
					* Responsive div for blog link using Bootstrap class 
				-->
				<div class="col-md-6 col-lg-4">
					<!-- 
					* Div for blog image with justified content using Bootstrap class 
					-->
					<div class="blog-entry justify-content-end">
						<a href="https://www.shopback.sg/blog/how-to-see-the-aurora" target="_blank">
							<img src="img/Blog/thesmarterway.jpg" class="blog-image" alt="Yorkshire Staithes, England">
						</a>
						<p class="pt-3">Singaporean Gia Mendoza, of The Smarter Way, recommends planning and strategizing your polar lights trips - with location and timing being of essence. </p>
						<button type="button" class="btn btn-primary blog-button" onclick="window.location.href='https://www.shopback.sg/blog/how-to-see-the-aurora';">Read More</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- 
		* Container for Instagram section header 
	-->
	<div class="container container-body container-main mt-5">
		<div class="body-section pb-0">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center">
					<h3 class="p-2 mb-3 subTitles" style="font-size: 30px;">Instagram</h3>
					<p>Follow aurora aficionados on Instagram</p>
				</div>
			</div>
		</div>
	</div>

	<!-- 
		* Container for Instagram links
	-->
	<div class="row">
		<!-- 
			* Div to center the content using Bootstrap class 
		-->
		<div class="d-flex justify-content-center">
			<!-- 
				* Div for instagram link with top and right margin using Bootstrap class 
			-->
			<div class="mr-2 pr-2">
				<a href="https://www.instagram.com/auroraborealisobservatory/?hl=en" target="_blank">
					<img  src="img/Instagram/InstaNorway.png" class="insta-image img-fluid" alt="Aurora Borealis Observatory at Mt. Krumpet, Norway">
					<div class="middle"><i class="fa fa-instagram instaIcon"></i></div>
				</a>
			</div>
			<!-- 
				* Div for instagram link with top and right margin using Bootstrap class 
			-->
			<div class="mr-2 pr-2">
				<a href="https://www.instagram.com/explore/tags/northernlightsiceland/?hl=en" target="_blank">
					<img  src="img/Instagram/InstaIceland.png" class="insta-image img-fluid" alt="Northern Lights at Studlagil Canyon, Iceland">
					<div class="middle"><i class="fa fa-instagram instaIcon"></i></div>
				</a>
			</div>
			<!-- 
				* Div for instagram link with top and right margin using Bootstrap class 
			-->
			<div class="mr-2 pr-2">
				<a href="https://www.instagram.com/p/BjBdiQgHr_J/" target="_blank">
					<img  src="img/Instagram/InstaAntarctica.png" class="insta-image img-fluid" alt=" Southern Lights at Lemaire Channel, Antarctica">
					<div class="middle"><i class="fa fa-instagram instaIcon"></i></div>
				</a>
			</div>
			<!-- 
				* Div for instagram link with top and right margin using Bootstrap class 
			-->
			<div class="mr-2 pr-2">
				<a href="https://www.instagram.com/p/B4MO7yonFaf/" target="_blank">
					<img  src="img/Instagram/InstaUSA.png" class="insta-image img-fluid" alt="Northern Lights at Fairbanks, Alaska">
					<div class="middle"><i class="fa fa-instagram instaIcon"></i></div>
				</a>
			</div>
			<!-- 
				* Div for instagram link with top and right margin using Bootstrap class 
			-->
			<div class="mr-2 pr-2">
				<a href="https://www.instagram.com/p/BUpyGYMA8_A/?hl=en" target="_blank">
					<img  src="img/Instagram/InstaNZ.png" class="insta-image img-fluid" alt="Southern Lights at Dunedin, NZ">
					<div class="middle"><i class="fa fa-instagram instaIcon"></i></div>
				</a>
			</div>
		</div>
	</div>

	<?php
		include_once "footer.php";
	?>

	<!-- 
		* Linking Polar Lights project specific JavaScript file 
	-->
	<script src="script.js"></script>
</body>
</html>
