<!DOCTYPE html>
<html lang="en">
<head>
	<title>Polar Lights | Europe Page</title>
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
	<div class="container container-body container-main mb-5">
		<!-- Div to justify the content with bottom margin using Bootstrap class -->
		<div class="text-justify mb-4">
			<h2 class="p-2 subTitles subTitlesFont">Norway</h2>
			<!-- Div containing mini description about Norway -->
			<div id="norwayDiv" class="displayBlock">
				<p>When it comes to popular bucket list items, catching the splendor of the aurora borealis is right up there with adrenaline pumpers like skydiving and bungee jumping...
					<!-- Span to allow users to read more -->
					<span class="readMoreLess" onclick="moreLessContent('norwayDiv');">Read more &gt;&gt;</span>
				</p>
			</div>
			<!-- Div containing main description about Norway -->
			<div id="norwayDivMain" class="displayNone">
				<p>When it comes to popular bucket list items, catching the splendor of the aurora borealis is right up there with adrenaline pumpers like skydiving and bungee jumping. Which one of us has not seen images of intense swishes of the polar phenomenon making vivid appearances on dark winter nights; a thousand images, however, don’t even come close to experiencing the real thing. And if you want to experience the real thing, the Norway is the place to do it. As per the Norway Travel Guide, The north of the country is conveniently settled in the aurora belt, and excellent transport connections combined with comfy accommodations make Norway one of the most convenient places on earth to experience the northern lights (Murison, 2015). Much like its westerly cousin, Iceland, Norway is beautiful beyond words. Even without the auroras, the reds and yellows of brightly lit Norwegian settlements stand against the stunning backdrops of waterfalls, picturesque fishing spots, and snow-capped peaks. Norway also has a never-ending supply of fun winter activities from downhill and cross-country skiing, tobogganing, ice skating, snowshoe hiking, ice fishing, sleigh riding, and of course, dog sledding waiting for you. Or for all you Frozen fanatics, spend your days exploring the remoteness of the Lofoten Islands to see the magnificent scenery that inspired the highest-grossing animated film’s wintry setting (Ross, 2018). From refreshingly bearable temperatures to epic landscapes and majestic shows of exploding northern lights burning from pale yellows to unabashed greens and reds, it is easy to be enchanted by the experiences of Norway.
					<!-- Span to allow users to read less -->
					<span class="readMoreLess" onclick="moreLessContent('norwayDiv');">&lt;&lt; Read less</span>
				</p>
			</div>
		</div>

		<!-- Div for images from Norway -->
		<div class="gallery">
			<div class="mb-2">
				<img id="norway1" class="img-fluid popup-image landscape" src="img/Europe/Norway1.jpg" alt="Northern Lights over Reine, Lofoten Islands, Norway by Stepanoff, M. (2020, August 20) | Marat Stepanoff" onclick="modalGalleryImage('norway1')">
			</div>
			<div class="mb-2">
				<img id="norway2" class="img-fluid popup-image portrait" src="img/Europe/Norway2.jpg" alt="Aurora Borealis over Ålesund, Norway by Murison, M. (2015, February 13) | Norway Travel Guide" onclick="modalGalleryImage('norway2')">
			</div>
			<div class="mb-2">
				<img id="norway3" class="img-fluid popup-image landscape" src="img/Europe/Norway3.jpg" alt="Lofoten Islands, Norway (n.d.) | TripSavvy" onclick="modalGalleryImage('norway3')">
			</div>
			<div class="mb-2">
				<img id="norway4" class="img-fluid popup-image portrait" src="img/Europe/Norway4.jpg" alt="Geirangerfjord, Sunnmøre Region, Norway by Neilsen, M. (2014, August 22) | Futurism" onclick="modalGalleryImage('norway4')">
			</div>
			<div class="mb-2">
				<img id="norway5" class="img-fluid popup-image portrait" src="img/Europe/Norway5.jpg" alt="Bergen, Western Norway by Ross, E. (2018, July 24) | Time Out Norway" onclick="modalGalleryImage('norway5')">
			</div>
			<div class="mb-2">
				<img id="norway6" class="img-fluid popup-image landscape" src="img/Europe/Norway6.jpg" alt="Musk Ox Calf, Harstad, Norway by Sartore, J. (2010, November 11) | National Geographic" onclick="modalGalleryImage('norway6')">
			</div>
			<div class="mb-2">
				<img id="norway7" class="img-fluid popup-image portrait" src="img/Europe/Norway7.jpg" alt="Humpback Whale Breaching near Tromsø, Western Norway by Brune, V. (2020, February 24) | Fodors Travel Guide" onclick="modalGalleryImage('norway7')">
			</div>
			<div class="mb-2">
				<img id="norway8" class="img-fluid popup-image landscape" src="img/Europe/Norway8.jpeg" alt="Reine Coastline, Lofoten Islands by Ross, E. (2018, July 24) | Time Out Norway" onclick="modalGalleryImage('norway8')">
			</div>
			<div class="mb-2">
				<img id="norway9" class="img-fluid popup-image landscape" src="img/Europe/Norway9.jpg" alt="Wolves, Norwegian Lapland by Allen, D. (2016, March 14) | CNN" onclick="modalGalleryImage('norway9')">
			</div>
			<div class="mb-2">
				<img id="norway10" class="img-fluid popup-image portrait" src="img/Europe/Norway10.jpeg" alt="Polar Bear, Karl Prins Forlandet by Murison, M. (2015, February 13) | Norway Travel Guide" onclick="modalGalleryImage('norway10')">
			</div>
			<div class="mb-2">
				<img id="norway11" class="img-fluid popup-image landscape" src="img/Europe/Norway11.jpg" alt="Auroras over the Lofoten Islands by Brune, V. (2020, February 24) | Fodors Travel Guide" onclick="modalGalleryImage('norway11')">
			</div>
			<div class="mb-2">
				<img id="norway12" class="img-fluid popup-image portrait" src="img/Europe/Norway12.jpeg" alt="Eurasian Lynx, Vestfold Region by Murison, M. (2015, February 13) | Norway Travel Guide" onclick="modalGalleryImage('norway12')">
			</div>
		</div>

		<!-- Div to justify the content with top and bottom margin using Bootstrap class -->
		<div class="text-justify mt-5 mb-4">
			<h2 class="p-2 subTitles subTitlesFont">Iceland</h2>
			<!-- Div containing mini description about Iceland -->
			<div id="icelandDiv" class="displayBlock">
				<p>Sitting snugly in the aurora belt, an electromagnetic field floating like a halo over the Earth, is Iceland - the star of the spectacle that is aurora borealis...
					<!-- Span to allow users to read more -->
					<span class="readMoreLess" onclick="moreLessContent('icelandDiv');">Read more &gt;&gt;</span>
				</p>
			</div>
			<!-- Div containing main description about Iceland -->
			<div id="icelandDivMain" class="displayNone">
				<p>Sitting snugly in the aurora belt, an electromagnetic field floating like a halo over the Earth, is Iceland - the star of the spectacle that is aurora borealis. If you wished to globetrot for the chance to catch sight of nature’s most electrifying show, but were not considering giving up life’s luxuries, no need to worry. From drinks by a pool, lounging in a heated outdoor jacuzzi, or even professional chefs tending to your every whim and fancy as you scroll through live feeds of social media, all the while watching the dance of the aurora gods - if you’ve dreamed it, Iceland has it! Iceland is the modern tourist’s dream come true (Team Wanderlust, 2018). With winter nights long and dark October through March, even the reluctant visitor is offered the perfect for aurora-spotting and photography opportunity. According to the Tucan Travel Blog, Western Iceland offers an array of great viewing sites for show of the auroras, including Akranes, Borgarnes, and the Snaefellsnes Peninsula (Ganna, n.d). It must be said that even in the winter, Iceland’s understated natural beauty is unrivaled where every vista one turns to seems straight out of an outrageously beautiful perfume commercial. Another bucket list experience you do not want to miss are visiting Iceland’s famed ice caves. Created by freshwater bodies carving tunnels under the glaciers during the warm summer months, winters are when the waterways freeze and the caves are safe to enter. Few experiences are as surreal and magical as exploring these sapphire blue caves with a camera and an experienced guide.
					<!-- Span to allow users to read less -->
					<span class="readMoreLess" onclick="moreLessContent('icelandDiv');">&lt;&lt; Read less</span>
				</p>
			</div>
		</div>

		<!-- Div for images from Iceland -->
		<div class="gallery">
			<div class="mb-2">
				<img id="iceland1" class="img-fluid popup-image landscape" src="img/Europe/Iceland1.jpg" alt="Mount Esja, Iceland (n.d.) | Grayline" onclick="modalGalleryImage('iceland1')">
			</div>
			<div class="mb-2">
				<img id="iceland2" class="img-fluid popup-image portrait" src="img/Europe/Iceland2.jpg" alt="Lake Mývatn, Iceland (2018, September 18) | Wanderlust" onclick="modalGalleryImage('iceland2')">
			</div>
			<div class="mb-2">
				<img id="iceland3" class="img-fluid popup-image landscape" src="img/Europe/Iceland3.jpg" alt="Auroras over Hvannadalshnúkur, Iceland by Ganna, M. (n.d.) | Tucan Travel Blog - The Chasqui. " onclick="modalGalleryImage('iceland3')">
			</div>
			<div class="mb-2">
				<img id="iceland4" class="img-fluid popup-image portrait" src="img/Europe/Iceland4.jpg" alt="Arctic Fox, Westfjords, Iceland (n.d.). NAT Iceland" onclick="modalGalleryImage('iceland4')">
			</div>
			<div class="mb-2">
				<img id="iceland5" class="img-fluid popup-image portrait" src="img/Europe/Iceland5.jpeg" alt="Reykjavik, Iceland (2020, July 7) | KPMG" onclick="modalGalleryImage('iceland5')">
			</div>
			<div class="mb-2">
				<img id="iceland6" class="img-fluid popup-image landscape" src="img/Europe/Iceland6.jpg" alt="Puffins, Vestmannaeyjar Islands - Largest Colony in the World by Herdis, S. (n.d.) | Happy Campers" onclick="modalGalleryImage('iceland6')">
			</div>
			<div class="mb-2">
				<img id="iceland7" class="img-fluid popup-image portrait" src="img/Europe/Iceland7.jpg" alt="Blue Lagoon Geothermal Spa, Reykjanes Peninsula (2020, January 22) | Travel Manga" onclick="modalGalleryImage('iceland7')">
			</div>
			<div class="mb-2">
				<img id="iceland8" class="img-fluid popup-image landscape" src="img/Europe/Iceland8.png" alt="Grótta, Iceland (2019, October 22) | The Escapist" onclick="modalGalleryImage('iceland8')">
			</div>
			<div class="mb-2">
				<img id="iceland9" class="img-fluid popup-image landscape" src="img/Europe/Iceland10.jpg" alt="Ice Caves at Vatnajökull Glacier (2017, January 13) | Departful" onclick="modalGalleryImage('iceland9')">
			</div>
			<div class="mb-2">
				<img id="iceland10" class="img-fluid popup-image portrait" src="img/Europe/Iceland11.jpg" alt="Gullfoss Falls, Southwest Iceland (2020, January 22) | Travel Manga" onclick="modalGalleryImage('iceland10')">
			</div>
			<div class="mb-2">
				<img id="iceland11" class="img-fluid popup-image landscape" src="img/Europe/Iceland12.jpg" alt="Reykjavik, Iceland (2020, November 3) | Azamara" onclick="modalGalleryImage('iceland11')">
			</div>
			<div class="mb-2">
				<img id="iceland12" class="img-fluid popup-image portrait" src="img/Europe/Iceland13.jpg" alt="Auroras over the town of Akureyri, Northwest Iceland (2017, January 24) | Running Iceland" onclick="modalGalleryImage('iceland12')">
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
