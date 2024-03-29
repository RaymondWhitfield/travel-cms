<!DOCTYPE html>
<html lang="en">
<head>
	<title>Polar Lights | Antarctica Page</title>
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
			<h2 class="p-2 subTitles subTitlesFont">Antarctica</h2>
			<!-- Div containing mini description about Antarctica -->
			<div id="antarcticaDiv" class="displayBlock">
				<p>Such is nature’s paradox that the most noteworthy place for viewing the polar lights anywhere on earth will always remain unrealistic for most people! In the coldest months, the skies above the Antarctic light up with southern lights...
					<!-- Span to allow users to read more -->
					<span class="readMoreLess" onclick="moreLessContent('antarcticaDiv');">Read more &gt;&gt;</span>
				</p>
			</div>
			<!-- Div containing main description about Antarctica -->
			<div id="antarcticaDivMain" class="displayNone">
				<p>Such is nature’s paradox that the most noteworthy place for viewing the polar lights anywhere on earth will always remain unrealistic for most people! In the coldest months, the skies above the Antarctic light up with southern lights in all their vivid glory on the regular - the auroras here are more breathtaking, more zestful, and more impressive than all the other places combined. Brandor Specktor of LiveScience, though, notes that anyone who does choose to brave the coldest temperatures seen on Earth, treacherous tempests, and menacing ice packs, are in for a treat of their lifetimes that will, all doubts reassured, induce Instagram envy! The challenge, though, is just getting to the Antarctic - winter or summer. Full disclosure : expeditions here reach deep into visitors’ pockets and are oftentimes fraught with risk (Diskin, 2019).</p>
				<p>That said, it’s not an impossible plan to visit this southernmost continent. Tourist and adventure activities are steadily on the rise and if time, distance, and cost were no deterrents to you, a luxury cruise expedition heading into and out of winter would be your best bet. Although dangerous ice packs are known to derail many an expedition in the Antarctic in these shoulder months, they also happen to be a great time for spotting humpback, sperm, and killer whales (CoolAntarctica.com, n.d.). With the allure of visiting this pristine wonderful thriving in many an adventurer, Steven Cowpe of Antarctica Bound, a British travel agency, has this to say about Antarctic expeditions in the Business Insider, “You feel like you're at the end of the planet because it's so wild and when you come back, you feel like you have achieved something great, even if you're not an explorer” (2019).
					<!-- Span to allow users to read less -->
					<span class="readMoreLess" onclick="moreLessContent('antarcticaDiv');">&lt;&lt; Read less</span>
				</p>
			</div>
		</div>

		<!-- Div for images from Antarctica -->
		<div class="gallery">
			<div class="mb-2">
				<img id="antarctica1" class="img-fluid popup-image landscape" src="img/Antarctica/Antarctica1.jpg" alt="Dragon Aurora, Antarctic Peninsula by Specktor, B. (2019, February 22) | Live Science" onclick="modalGalleryImage('antarctica1')">
			</div>
			<div class="mb-2">
				<img id="antarctica2" class="img-fluid popup-image portrait" src="img/Antarctica/Antarctica3.jpg" alt="Solar Pillar, Paradise Harbour, Antarctica (2016) | Cool Antarctica" onclick="modalGalleryImage('antarctica2')">
			</div>
			<div class="mb-2">
				<img id="antarctica3" class="img-fluid popup-image landscape" src="img/Antarctica/Antarctica2.jpg" alt="Nacreous Cloud, Antarctic Peninsula (2016) | Cool Antarctica" onclick="modalGalleryImage('antarctica3')">
			</div>
			<div class="mb-2">
				<img id="antarctica4" class="img-fluid popup-image portrait" src="img/Antarctica/Antarctica4.jpg" alt="Emperor Penguins, Antarctic Peninsula by Katz, B. (n.d.) | Smithsonian Magazine" onclick="modalGalleryImage('antarctica4')">
			</div>
			<div class="mb-2">
				<img id="antarctica5" class="img-fluid popup-image portrait" src="img/Antarctica/Antarctica6.jpg" alt="Antarctic Settlement at Esperanza Base (n.d.) | Phys" onclick="modalGalleryImage('antarctica5')">
			</div>
			<div class="mb-2">
				<img id="antarctica6" class="img-fluid popup-image landscape" src="img/Antarctica/Antarctica5.jpg" alt="Leopard Seal, Antarctic Peninsula (2016) | Cool Antarctica" onclick="modalGalleryImage('antarctica6')">
			</div>
			<div class="mb-2">
				<img id="antarctica7" class="img-fluid popup-image portrait" src="img/Antarctica/Antarctica7.jpg" alt="Deception Island, Antarctica by Diskin, E. (2019, September 20) | Matador Network" onclick="modalGalleryImage('antarctica7')">
			</div>
			<div class="mb-2">
				<img id="antarctica8" class="img-fluid popup-image landscape" src="img/Antarctica/Antarctica12.jpg" alt="Whale Shark on the Antarctic Coast by Gamillo, E. (2018, July 24) | Science Magazine" onclick="modalGalleryImage('antarctica8')">
			</div>
			<div class="mb-2">
				<img id="antarctica9" class="img-fluid popup-image landscape" src="img/Antarctica/Antarctica10.jpg" alt="Iceberg at the Ross Ice Shelf, Antarctica (2016) | Cool Antarctica" onclick="modalGalleryImage('antarctica9')">
			</div>
			<div class="mb-2">
				<img id="antarctica10" class="img-fluid popup-image portrait" src="img/Antarctica/Antarctica9.jpg" alt="Dragon Aurora, Antarctic Peninsula by Specktor, B. (2019, February 22) | Live Science" onclick="modalGalleryImage('antarctica10')">
			</div>
			<div class="mb-2">
				<img id="antarctica11" class="img-fluid popup-image landscape" src="img/Antarctica/Antarctica8.jpeg" alt="Royal Penguin, Paradise Harbour by Katz, B. (n.d.) | Smithsonian Magazine" onclick="modalGalleryImage('antarctica11')">
			</div>
			<div class="mb-2">
				<img id="antarctica12" class="img-fluid popup-image portrait" src="img/Antarctica/Antarctica11.jpg" alt="Emperor Penguins with Chicks, Adelaide Island, Antarctic Peninsula by Phillips, K. (2008) | Journal of Experimental Biology" onclick="modalGalleryImage('antarctica12')">
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
