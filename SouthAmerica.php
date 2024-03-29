<!DOCTYPE html>
<html lang="en">
<head>
	<title>Polar Lights | South America Page</title>
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
			<h2 class="p-2 subTitles subTitlesFont">Argentina</h2>
			<!-- Div containing mini description about Argentina -->
			<div id="argentinaDiv" class="displayBlock">
				<p>The Argentine town of Ushuaia, or the southernmost settlement also known as the ‘city at the end of the world’, borders the Tierra del Fuego archipelago and is perfectly placed to begin your Antarctic voyage...
					<!-- Span to allow users to read more -->
					<span class="readMoreLess" onclick="moreLessContent('argentinaDiv');">Read more &gt;&gt;</span>
				</p>
			</div>
			<!-- Div containing main description about Argentina -->
			<div id="argentinaDivMain" class="displayNone">
				<p>The Argentine town of Ushuaia, or the southernmost settlement also known as the ‘city at the end of the world’, borders the Tierra del Fuego archipelago and is perfectly placed to begin your Antarctic voyage. Brad Japhe of Thrillist divulges that its terrain is as foreboding as they come, but the valleys of Ushuaia put on aurora australis spectacles to behold. This far south on the Southern American continent, the weather is unpredictable and several places, although inhabited, sport reputations of weather not conducive to viewing polar lights. Ushuaia even boasts of its own airport, so getting there is not too tricky (2020). If you were to head down to this edge of the world where the Andes plunge into the sea, Charlie Andrews of the Hurtigruten Cruises suggests choosing the colder climes of the winter to visit and consider camping in the idyllic Tierra del Fuego National Park that will leave you alone with the luster of the neon glows! Ushuaia also sits facing the Beagle Channel - your gateway to several islands dotting this archipelago inhabited only colonies of sea lions, Magellanic and gentoo penguins (2019).
					<!-- Span to allow users to read less -->
					<span class="readMoreLess" onclick="moreLessContent('argentinaDiv');">&lt;&lt; Read less</span>
				</p>
			</div>
		</div>

		<!-- Div for images from Argentina -->
		<div class="gallery">
			<div class="mb-2">
				<img id="argentina1" class="img-fluid popup-image landscape" src="img/SouthAmerica/Argentina1.jpg" alt="Auroras over Tierra del Fuego by McPhillips, K. (2019, February 14) | Well+Good" onclick="modalGalleryImage('argentina1')">
			</div>
			<div class="mb-2">
				<img id="argentina2" class="img-fluid popup-image portrait" src="img/SouthAmerica/Argentina2.jpg" alt="Aurora-lit beach by Ushuaia by Diskin, E. (2019, September 20) | Matador Network" onclick="modalGalleryImage('argentina2')">
			</div>
			<div class="mb-2">
				<img id="argentina3" class="img-fluid popup-image landscape" src="img/SouthAmerica/Argentina13.jpg" alt="Southern Lights Light Up the Beagle Channel by Diskin, E. (2019, September 20) | Matador Network" onclick="modalGalleryImage('argentina3')">
			</div>
			<div class="mb-2">
				<img id="argentina4" class="img-fluid popup-image portrait" src="img/SouthAmerica/Argentina3.jpeg" alt="Sunset in Ushuaia by Japhe, B. (2020, June 29) | Thrillist " onclick="modalGalleryImage('argentina4')">
			</div>
			<div class="mb-2">
				<img id="argentina5" class="img-fluid popup-image portrait" src="img/SouthAmerica/Argentina4.jpg" alt="Crabeater Seals, Bahia Aguirre, near Ushuaia by Andrews, C. G. Antarctic Animals. (2019) | Hurtigruten " onclick="modalGalleryImage('argentina5')">
			</div>
			<div class="mb-2">
				<img id="argentina6" class="img-fluid popup-image landscape" src="img/SouthAmerica/Argentina5.jpg" alt="Puma, Tierra del Fuego by Nachlas, C. (2016, October 22) | Sunrise Birding" onclick="modalGalleryImage('argentina6')">
			</div>
			<div class="mb-2">
				<img id="argentina7" class="img-fluid popup-image portrait" src="img/SouthAmerica/Argentina6.jpg" alt="Peaks of the Tierra del Fuego by Nachlas, C. (2016, October 22) | Sunrise Birding" onclick="modalGalleryImage('argentina7')">
			</div>
			<div class="mb-2">
				<img id="argentina8" class="img-fluid popup-image landscape" src="img/SouthAmerica/Argentina7.jpg" alt="Guanacos, Tierra del Fuego by Poma, E. (2017, March 15)  Good Nature Travel" onclick="modalGalleryImage('argentina8')">
			</div>
			<div class="mb-2">
				<img id="argentina9" class="img-fluid popup-image landscape" src="img/SouthAmerica/Argentina8.png" alt="Orcas of Patagonia by French, N. (2016, February 2) | The Argentina Specialists" onclick="modalGalleryImage('argentina9')">
			</div>
			<div class="mb-2">
				<img id="argentina10" class="img-fluid popup-image portrait" src="img/SouthAmerica/Argentina9.jpg" alt="Patagonian Coastline by Diskin, E. (2019, September 20) | Matador Network" onclick="modalGalleryImage('argentina10argentina11')">
			</div>
			<div class="mb-2">
				<img id="argentina11" class="img-fluid popup-image landscape" src="img/SouthAmerica/Argentina10.jpg" alt="Martial Glacier, Ushuaia by Selden, S. (2019, May 10) | Good Nature Travel" onclick="modalGalleryImage('argentina11')">
			</div>
			<div class="mb-2">
				<img id="argentina12" class="img-fluid popup-image portrait" src="img/SouthAmerica/Argentina12.jpeg" alt="Sunrise at Tierra del Fuego by Nachlas, C. (2016, October 22) | Sunrise Birding" onclick="modalGalleryImage('argentina12')">
			</div>
		</div>

		<!-- Div to justify the content with top and bottom margin using Bootstrap class -->
		<div class="text-justify mt-5 mb-4">
			<h2 class="p-2 subTitles subTitlesFont">The Falkland Islands</h2>
			<!-- Div containing mini description about Falkland Islands -->
			<div id="falklandDiv" class="displayBlock">
				<p>Four hundred miles east of the cost of Argentina in the Southern Atlantic Ocean, Sebastian Modak of The New York Times states that a plethora of unscathed locales of the Falkland Islands offer stunning glimpses of auroras in the southern hemisphere...
					<!-- Span to allow users to read more -->
					<span class="readMoreLess" onclick="moreLessContent('falklandDiv');">Read more &gt;&gt;</span>
				</p>
			</div>
			<!-- Div containing main description about Falkland Islands -->
			<div id="falklandDivMain" class="displayNone">
				<p>Four hundred miles east of the cost of Argentina in the Southern Atlantic Ocean, Sebastian Modak of The New York Times states that a plethora of unscathed locales of the Falkland Islands offer stunning glimpses of auroras in the southern hemisphere (2019). Flights from Santiago and São Paulo and cruise vessels, ranging from luxury liners to small expeditionary vessels, in the southern winters offer convenient travel options. Besides playing host to amazing aurora australis spectacles, this archipelago of more than 750 islands and islets is a tourist destination for bird watchers, wildlife seekers, and anyone hoping for a taste of the “deep south” in this gateway to Antarctica. Home to fewer than three thousand people, these islands will have you privy to endless horizons teeming only with colonies of albatrosses, penguins, and sea lions, and wrap you with the serenity of beautiful vistas wherever you choose to set foot on the islands (Honke, 2018).
					<!-- Span to allow users to read less -->
					<span class="readMoreLess" onclick="moreLessContent('falklandDiv');">&lt;&lt; Read less</span>
				</p>
			</div>
		</div>

		<!-- Div for images from Falkland Islands -->
		<div class="gallery">
			<div class="mb-2">
				<img id="fi1" class="img-fluid popup-image landscape" src="img/SouthAmerica/FI1.jpeg" alt="Southern Lights over Bertha’s Beach, The Falkland Islands by Japhe, B. (2020, June 29) | Thrillist" onclick="modalGalleryImage('fi1')">
			</div>
			<div class="mb-2">
				<img id="fi2" class="img-fluid popup-image portrait" src="img/SouthAmerica/FI2.jpg" alt="Auroras over Mount Adam, The Falkland Islands (2020, October 19) | Space Tourism Guide" onclick="modalGalleryImage('fi2')">
			</div>
			<div class="mb-2">
				<img id="fi3" class="img-fluid popup-image landscape" src="img/SouthAmerica/FI3.jpg" alt="King Penguins at Mariqueta, East Falkland Islands by Japhe, B. (2020, June 29) | Thrillist" onclick="modalGalleryImage('fi3')">
			</div>
			<div class="mb-2">
				<img id="fi4" class="img-fluid popup-image portrait" src="img/SouthAmerica/FI4.jpg" alt="King Penguins and Elephant Seals by Thomas-Graham, P. (2019, April 18) | Dandelion Chandelier" onclick="modalGalleryImage('fi4')">
			</div>
			<div class="mb-2">
				<img id="fi5" class="img-fluid popup-image portrait" src="img/SouthAmerica/FI5.jpg" alt="King Penguins by Modak, S. (2019, July 23) | The New York Times" onclick="modalGalleryImage('fi5')">
			</div>
			<div class="mb-2">
				<img id="fi6" class="img-fluid popup-image landscape" src="img/SouthAmerica/FI6.jpg" alt="Long-Tailed Meadowlark by Fraga, R. (2013, March 7) Birds Of The World" onclick="modalGalleryImage('fi6')">
			</div>
			<div class="mb-2">
				<img id="fi7" class="img-fluid popup-image portrait" src="img/SouthAmerica/FI7.jpg" alt="Black-browed Albatross by del Hoyo, J., Carboneras, C., Jutglar, F., Collar, N., & Kirwan, G. M. (2018, January 2) | Birds Of The World" onclick="modalGalleryImage('fi7')">
			</div>
			<div class="mb-2">
				<img id="fi8" class="img-fluid popup-image landscape" src="img/SouthAmerica/FI8.jpg" alt="Haddassah Bay, East Falkland Islands by Honke, D. (2018, May 1) | Olive Oil and Lemons" onclick="modalGalleryImage('fi8')">
			</div>
			<div class="mb-2">
				<img id="fi9" class="img-fluid popup-image landscape" src="img/SouthAmerica/FI9.jpg" alt="York Bay, East Falkland Islands by Honke, D. (2018, May 1) | Olive Oil and Lemons" onclick="modalGalleryImage('fi9')">
			</div>
			<div class="mb-2">
				<img id="fi10" class="img-fluid popup-image portrait" src="img/SouthAmerica/FI10.jpg" alt="Sea Lions (2016, August 11) | National Geographic" onclick="modalGalleryImage('fi10')">
			</div>
			<div class="mb-2">
				<img id="fi11" class="img-fluid popup-image landscape" src="img/SouthAmerica/FI11.jpg" alt="Crested Caracara by Morrison, J. L., & Dwyer, J. F. (2012, July 27) | Birds Of The World" onclick="modalGalleryImage('fi11')">
			</div>
			<div class="mb-2">
				<img id="fi12" class="img-fluid popup-image portrait" src="img/SouthAmerica/FI12.jpg" alt="Rockhopper Penguins by Winkler, D. W., Billerman, S. M., & Lovette I.J. (2020, February 24) | Birds of the World" onclick="modalGalleryImage('fi12')">
			</div>
		</div>

		<!-- Div to justify the content with top and bottom margin using Bootstrap class -->
		<div class="text-justify mt-5 mb-4">
			<h2 class="p-2 subTitles subTitlesFont">South Georgia Island</h2>
			<!-- Div containing mini description about South Georgia Island -->
			<div id="georgiaDiv" class="displayBlock">
				<p>Further out east into the South Atlantic, the most adventuresome of visitors can choose to head to South Georgia Island by boat. It is second only to the Antarctic in terms of the challenges of getting there...
					<!-- Span to allow users to read more -->
					<span class="readMoreLess" onclick="moreLessContent('georgiaDiv');">Read more &gt;&gt;</span>
				</p>
			</div>
			<!-- Div containing main description about South Georgia Island -->
			<div id="georgiaDivMain" class="displayNone">
				<p>Further out east into the South Atlantic, the most adventuresome of visitors can choose to head to South Georgia Island by boat. It is second only to the Antarctic in terms of the challenges of getting there, but the hardships of the voyage pale easily in comparison to the outstanding beauty of the island (Japhe, n.d.). Expeditions here start in Buenos Aires or Santiago and stop en route in Ushuaia, the world’s southernmost city, from where the rest of the journey is completed via ship most cruises first landing in Antarctica, and then moving onward to South Georgia Island (Orrell, 2017). Known as the Serengeti of the Southern Ocean, Eben Diskin of the Matadore Network recommends taking a trip here in the southern hemisphere’s winters to see king, chinstrap, gentoo, and macaroni penguins, albatrosses, elephant and fur seals, and blue, fin, and humpback whales adorn the 100-mile stretch of rugged coastlines that rise up from the frigid waters of the Antarctic to the south (2012). The immeasurable beauty of this part of the world is only matched in equivalence to the distances that separate it from the rest of the planet, and visitors can enjoy magnificent, unaltered and least visited scenery on earth.
					<!-- Span to allow users to read less -->
					<span class="readMoreLess" onclick="moreLessContent('georgiaDiv');">&lt;&lt; Read less</span>
				</p>
			</div>
		</div>

		<!-- Div for images from South Georgia Island -->
		<div class="gallery">
			<div class="mb-2">
				<img id="sgi1" class="img-fluid popup-image landscape" src="img/SouthAmerica/SGI1.jpg" alt="Fortuna Bay, South Georgia Island by Arlidge, B. (2018, February 26) | Antarctica Guide" onclick="modalGalleryImage('sgi1')">
			</div>
			<div class="mb-2">
				<img id="sgi2" class="img-fluid popup-image portrait" src="img/SouthAmerica/SGI2.jpg" alt="Cumberland West Bay, South Georgia Island by Orrell, A. (2017, February 28) | Wander Wisdom" onclick="modalGalleryImage('sgi2')">
			</div>
			<div class="mb-2">
				<img id="sgi3" class="img-fluid popup-image landscape" src="img/SouthAmerica/SGI3.jpeg" alt="Grytviken, South Georgia Island by Japhe, B. (2020, June 29) | Thrillist" onclick="modalGalleryImage('sgi3')">
			</div>
			<div class="mb-2">
				<img id="sgi4" class="img-fluid popup-image portrait" src="img/SouthAmerica/SGI4.jpg" alt="King Penguin Colony, South Georgia Island by Shaw, D. (2012, December 17) | Matador Network" onclick="modalGalleryImage('sgi4')">
			</div>
			<div class="mb-2">
				<img id="sgi5" class="img-fluid popup-image portrait" src="img/SouthAmerica/SGI5.jpg" alt="Gentoo Penguins by Martínez, I., Jutglar, F., Garcia, E., Sharpe, C., & Christie, M. (2017, April 20) | Birds Of The World" onclick="modalGalleryImage('sgi5')">
			</div>
			<div class="mb-2">
				<img id="sgi6" class="img-fluid popup-image landscape" src="img/SouthAmerica/SGI6.jpg" alt="Penguins Chick Wait for Parents by Garcia, E., Jutglar, F., & Martínez, I. (2014, February 25) | Birds Of The World" onclick="modalGalleryImage('sgi6')">
			</div>
			<div class="mb-2">
				<img id="sgi7" class="img-fluid popup-image portrait" src="img/SouthAmerica/SGI8.jpg" alt="Macaroni Penguins by Shaw, D. (2012, December 17) | Matador Network" onclick="modalGalleryImage('sgi7')">
			</div>
			<div class="mb-2">
				<img id="sgi8" class="img-fluid popup-image landscape" src="img/SouthAmerica/SGI7.jpg" alt="Hourglass Dolphins by Shaw, D. (2012, December 17) | Matador Network" onclick="modalGalleryImage('sgi8')">
			</div>
			<div class="mb-2">
				<img id="sgi9" class="img-fluid popup-image landscape" src="img/SouthAmerica/SGI9.jpg" alt="Penguin Colonies, South Georgia Island (2020, February 12) | Nomadasaurus" onclick="modalGalleryImage('sgi9')">
			</div>
			<div class="mb-2">
				<img id="sgi10" class="img-fluid popup-image portrait" src="img/SouthAmerica/SGI10.jpg" alt="Risting Glacier, Drygalski Fjord, South Georgia Island (n.d.) | Headon" onclick="modalGalleryImage('sgi10')">
			</div>
			<div class="mb-2">
				<img id="sgi11" class="img-fluid popup-image landscape" src="img/SouthAmerica/SGI12.jpg" alt="Drygalski Fjord, South Georgia Island by Bradford, A., & Salem, J. (n.d.) | Nomadasaurus" onclick="modalGalleryImage('sgi11')">
			</div>
			<div class="mb-2">
				<img id="sgi12" class="gallery-image popup-image portrait" src="img/SouthAmerica/SGI11.jpg" alt="Chinstrap Penguins, South Georgia Island by Shaw, D. (2012, December 17) | Matador Network" onclick="modalGalleryImage('sgi12')">
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
