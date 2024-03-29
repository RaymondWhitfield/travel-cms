<!DOCTYPE html>
<html lang="en">
<head>
	<title>Polar Lights | Oceania Page</title>
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
			<h2 class="p-2 subTitles subTitlesFont">Australia</h2>
			<!-- Div containing mini description about Australia -->
			<div id="australiaDiv" class="displayBlock">
				<p>With the bigger northern sibling controlling a giant’s share of attention, the smaller, but equally brilliant aurora australis lights quietly work their share of magic across far southern skies...
					<!-- Span to allow users to read more -->
					<span class="readMoreLess" onclick="moreLessContent('australiaDiv');">Read more &gt;&gt;</span>
				</p>
			</div>	
			<!-- Div containing main description about Australia -->
			<div id="australiaDivMain" class="displayNone">
				<p>With the bigger northern sibling controlling a giant’s share of attention, the smaller, but equally brilliant aurora australis lights quietly work their share of magic across far southern skies. Known for some of the cleanest air quality in the world (quite the pre-requisite for great aurora viewings), Michael Bonocore of the Matador Network states Tasmania boasts of magical neon beams sweeping over its Bruny Island with considerable reliability (2015). Just about an hour’s drive from the Tasmanian capital of Hobart, getting to Bruny is a breeze as its winter skies fulfill aurora chasers’ dreams with ethereal swaths of striking pink pillars to swirls of blues, yellows, and greens with surprising frequency from April to August (Veith, 2020). But the Dancing Lady, as the aurora is affectionately known on Bruny, is not the only attraction here. The island home to a rugged, relatively untouched landscape that is both dramatic and beautiful. So when you’re not pursuing polar lights, consider exploring the island to catch her resident wild white wallaby population or her abundance of echidnas, dusky antechinuses, masked lapwings, Rosella’s, and fur and elephant seals along the coast (Lee, 2018). Sohpie Colvin of ABC News also vouches for the island’s famed walking tracks and pristine swimming, surfing and fishing beaches, and a flourishing fine food and wine industry (2019). Nothing beats watching starry skies lit up with the luminescence of the auroras on an endless coastline with luxury at your fingertips!
					<!-- Span to allow users to read less -->
					<span class="readMoreLess" onclick="moreLessContent('australiaDiv');">&lt;&lt; Read less</span>
				</p>
			</div>
		</div>

		<!-- Div for images from Australia -->
		<div class="gallery">
			<div class="mb-2">
				<img id="aus1" class="img-fluid popup-image landscape" src="img/Oceania/Tasmania1.jpg" alt="The Hazards mountain range, Eastern Tasmania by Colvin, S. (2019, June 13) | ABC News" onclick="modalGalleryImage('aus1')">
			</div>
			<div class="mb-2">
				<img id="aus2" class="img-fluid popup-image portrait" src="img/Oceania/Tasmania2.jpg" alt="Mount Wellington, Tasmania by Nalewicki, J. (n.d.) | Smithsonian Magazine" onclick="modalGalleryImage('aus2')">
			</div>
			<div class="mb-2">
				<img id="aus3" class="img-fluid popup-image landscape" src="img/Oceania/Tasmania3.jpg" alt="Cloudy Bay Lagoon, Bruny Island by Vieth, C. (2020, April 29) | Shutterbug Walkabouts" onclick="modalGalleryImage('aus3')">
			</div>
			<div class="mb-2">
				<img id="aus4" class="img-fluid popup-image portrait" src="img/Oceania/Tasmania4.png" alt="Cradle Mountain-Lake, St. Clair National Park, Tasmania by Lee, R. (2018, May 2) | TripZilla" onclick="modalGalleryImage('aus4')">
			</div>
			<div class="mb-2">
				<img id="aus5" class="img-fluid popup-image portrait" src="img/Oceania/Tasmania5.jpg" alt="White Wallaby, Bruny Island by Glassman-Hughes, E. (n.d.) | Here Magazine" onclick="modalGalleryImage('aus5')">
			</div>
			<div class="mb-2">
				<img id="aus6" class="img-fluid popup-image landscape" src="img/Oceania/Tasmania6.jpg" alt="Bay of Fires, Tasmania by Waddington, M. (2017, November 3) | Travel Nine" onclick="modalGalleryImage('aus6')">
			</div>
			<div class="mb-2">
				<img id="aus7" class="img-fluid popup-image portrait" src="img/Oceania/Tasmania7.jpg" alt="Eastern Rosella, Bruny Island (2019, March 27) | Not Only Birds" onclick="modalGalleryImage('aus7')">
			</div>
			<div class="mb-2">
				<img id="aus8" class="img-fluid popup-image landscape" src="img/Oceania/Tasmania8.jpeg" alt="Adventure Bay, Bruny Island by Glassman-Hughes, E. (n.d.) | Here Magazine" onclick="modalGalleryImage('aus8')">
			</div>
			<div class="mb-2">
				<img id="aus9" class="img-fluid popup-image landscape" src="img/Oceania/Tasmania9.jpg" alt="Painted Rocks on Tasmania’s coastline by Bonocor, M. (2015, March 18) | Matador Network" onclick="modalGalleryImage('aus9')">
			</div>
			<div class="mb-2">
				<img id="aus10" class="img-fluid popup-image portrait" src="img/Oceania/Tasmania10.jpg" alt="Cradle Mountain Drive, Tasmania by Bonocor, M. (2015, March 18) | Matador Network" onclick="modalGalleryImage('aus10')">
			</div>
			<div class="mb-2">
				<img id="aus11" class="img-fluid popup-image landscape" src="img/Oceania/Tasmania11.jpg" alt="Bridestowe Lavender Fields, Tasmania by Bonocor, M. (2015, March 18) | Matador Network" onclick="modalGalleryImage('aus11')">
			</div>
			<div class="mb-2">
				<img id="aus12" class="img-fluid popup-image portrait" src="img/Oceania/Tasmania12.jpg" alt="International Space Station over Bridestowe Lavender Fields, Tasmania by Bonocor, M. (2015, March 18) | Matador Network" onclick="modalGalleryImage('aus12')">
			</div>
		</div>

		<!-- Div to justify the content with top and bottom margin using Bootstrap class -->
		<div class="text-justify mt-5 mb-4">
			<h2 class="p-2 subTitles subTitlesFont">New Zealand</h2>
			<!-- Div containing mini description about New Zealand -->
			<div id="newzealandDiv" class="displayBlock">
				<p>Southern lights aficionados must go the extra mile to view nature’s own fickle but electrifying light show. However, those that do are oftentimes rewarded by radiant ribbons of southern lights illuminating the night sky...
					<!-- Span to allow users to read more -->
					<span class="readMoreLess" onclick="moreLessContent('newzealandDiv');">Read more &gt;&gt;</span>
				</p>
			</div>
			<!-- Div containing main description about New Zealand -->
			<div id="newzealandDivMain" class="displayNone">
				<p>Southern lights aficionados must go the extra mile to view nature’s own fickle but electrifying light show. However, those that do are oftentimes rewarded by radiant ribbons of southern lights illuminating the night sky, in spectacles markedly more stunning than their boreal counterparts. Nalewicki, of the Smithsonian Magazine, recommends New Zealand’s Lake Tekapo region which boasts of little to no light pollution with its dark sky reserves, and barring Antarctica, its lakeshore loops offer more promising to watch the mesmerizing swirl of the auroras than anywhere else in the southern hemisphere. NZ Pocket Guide’s Chris McLachlan remarks that the southern winter is the ideal time to see the aurora australis in New Zealand skies, and if you love skiing or outdoor adventure sports, you can plan a trip that combines both. Queenstown is a popular adventure sports destination on the shores of the South Island’s Lake Wakatipu and is famous for its reliability put on an amazing aurora show. Lake Wakatipu is a convenient a 15-minute drive from downtown Queensland; reaching there on snow clad highways between May to July, the peak of the southern winter, is not a problem (2017). Dandelion Chandelier notes that this region of New Zealand has lots to offer. You could spend your evenings rejuvenating at Tekapo’s hot pools or explore the picturesque scenery of Canterbury with its yellow-eyed, fiordland crested and little blue penguins, fur seals, whales, and even the world’s smallest dolphin - the Maui dolphin (National Geographic UK, 2020).
					<!-- Span to allow users to read less -->
					<span class="readMoreLess" onclick="moreLessContent('newzealandDiv');">&lt;&lt; Read less</span>
				</p>
			</div>
		</div>

		<!-- Div for images from New Zealand -->
		<div class="gallery">
			<div class="mb-2">
				<img id="nz1" class="img-fluid popup-image landscape" src="img/Oceania/NZ1.jpg" alt="Queenstown, South Island, NZ by Nalewicki, J. (n.d.) | Smithsonian Magazine" onclick="modalGalleryImage('nz1')">
			</div>
			<div class="mb-2">
				<img id="nz2" class="img-fluid popup-image portrait" src="img/Oceania/NZ2.jpg" alt="Lake Tekapo, South Island, NZ (2018, April 19) | Dandelion Chandelier" onclick="modalGalleryImage('nz2')">
			</div>
			<div class="mb-2">
				<img id="nz3" class="img-fluid popup-image landscape" src="img/Oceania/NZ3.jpg" alt="Queenstown, NZ (2020, September 14) | Space Tourism Guide" onclick="modalGalleryImage('nz3')">
			</div>
			<div class="mb-2">
				<img id="nz4" class="img-fluid popup-image portrait" src="img/Oceania/NZ4.jpg" alt="Stewart Island, NZ (2020, September 14) | Space Tourism Guide" onclick="modalGalleryImage('nz4')">
			</div>
			<div class="mb-2">
				<img id="nz5" class="img-fluid popup-image portrait" src="img/Oceania/NZ5.jpg" alt="Lake Tekapo, South Island, NZ (n.d.) | Newzealand" onclick="modalGalleryImage('nz5')">
			</div>
			<div class="mb-2">
				<img id="nz6" class="img-fluid popup-image landscape" src="img/Oceania/NZ6.jpg" alt="Mount Cook, South Island, NZ (n.d.) | D K Photography" onclick="modalGalleryImage('nz6')">
			</div>
			<div class="mb-2">
				<img id="nz7" class="img-fluid popup-image portrait" src="img/Oceania/NZ7.jpg" alt="Yellow-Eyed Penguin, Otago Peninsula, South Island, NZ by McLachlan, C. (2017, August 17) | NZ Pocket Guide" onclick="modalGalleryImage('nz7')">
			</div>
			<div class="mb-2">
				<img id="nz8" class="img-fluid popup-image landscape" src="img/Oceania/NZ8.jpg" alt="Kea, Otago, South Island, NZ by McLachlan, C. (2017, August 17) | NZ Pocket Guide" onclick="modalGalleryImage('nz8')">
			</div>
			<div class="mb-2">
				<img id="nz9" class="img-fluid popup-image landscape" src="img/Oceania/NZ9.jpg" alt="Hector’s Dolphin, Akaroa Harbour, near Christchurch, NZ (2016, October 14) | Awesome Ocean" onclick="modalGalleryImage('nz9')">
			</div>
			<div class="mb-2">
				<img id="nz10" class="img-fluid popup-image portrait" src="img/Oceania/NZ11.jpg" alt="Lake Tekapo, South Island, NZ by Stamatiou, P. (2020, January 15) | Paul Stamatiou" onclick="modalGalleryImage('nz10')">
			</div>
			<div class="mb-2">
				<img id="nz11" class="img-fluid popup-image landscape" src="img/Oceania/NZ10.jpg" alt="Takahē, Murchison Mountains, Fiordland National Park, near Queenstown, NZ (n.d.) | Auckland Zoo" onclick="modalGalleryImage('nz11')">
			</div>
			<div class="mb-2">
				<img id="nz12" class="img-fluid popup-image portrait" src="img/Oceania/NZ12.jpg" alt="Orca breaching on the Kaikōura Coastline, NZ by Farber, M. (2018, December 12) | FOX News" onclick="modalGalleryImage('nz12')">
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
