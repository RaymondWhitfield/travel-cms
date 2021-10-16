<!DOCTYPE html>
<html lang="en">
<head>
	<title>Polar Lights | North America Page</title>
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
			<h2 class="p-2 subTitles subTitlesFont">Canada</h2>
			<!-- Div containing mini description about Canada -->
			<div id="canadaDiv" class="displayBlock">
				<p>If the dancing hues of the northern lights were show business, Canada would be among its leading superstars. With its strategic northern latitudes and seemingly endless stretches of wide open land with little to no light pollution...
					<!-- Span to allow users to read more -->
					<span class="readMoreLess" onclick="moreLessContent('canadaDiv');">Read more &gt;&gt;</span>
				</p>
			</div>
			
			<!-- Div containing main description about Canada -->
			<div id="canadaDivMain" class="displayNone">
				<p>If the dancing hues of the northern lights were show business, Canada would be among its leading superstars. With its strategic northern latitudes and seemingly endless stretches of wide open land with little to no light pollution, Canada is among the most popular destinations for aurora chasers. All those who flock to Yellowknife, the capital of Canada’s Northwest Territories and also is known as the “Aurora Capital of North America” between the months of October and March are rarely disappointed. Veil upon veil of intense ribbons of auroras overarch on chilly winter nights and leave visitors mesmerized as they watch the action in warm teepees made by the Metis and Inuit peoples (Freeman, 2016).</p>
				<p>Off the beaten path, Yellowknife offers plenty of options for all sorts of winter activities. Canada may be a frozen wonderland, but it is also diverse and scenic in many aspects, and there is no dearth to the list of things you can see, do and explore in the Great White North. Jennifer Kennedy, of ThoughtCo, notes that the Northwest Territories (NWT) are popular for sharing three sub-populations of polar bears with neighboring jurisdictions. You could just be lucky enough to catch a bear that lives on the sea ice around Yellowknife’s many islands (2019). In addition, every year around April, thousands of reindeer carve their way to calving grounds on Richards Island, near Tuktoyaktuk on the Mackenzie Delta (Dory, n.d.). Matt Williams of BlogviaRail also recommends dog sledding tours (2019). They are a popular, and fun way to experience Canada’s stunning landscape and part of its past. Or delight in reaching isolated settlements only accessible in winter through ice highways plowed over the region’s innumerable water bodies! Canada shall not disappoint.
					<!-- Span to allow users to read less -->
					<span class="readMoreLess" onclick="moreLessContent('canadaDiv');">&lt;&lt; Read less</span>
				</p>
			</div>
		</div>

		<!-- Div for images from Canada -->
		<div class="gallery">
			<div class="mb-2">
				<img id="canada1" class="img-fluid popup-image landscape" src="img/NorthAmerica/Canada1.jpg" alt="Yellowknife River Territorial Park, Northwest Territories by Freeman, M. (2016) | Bored Panda" onclick="modalGalleryImage('canada1')">
			</div>
			<div class="mb-2">
				<img id="canada2" class="img-fluid popup-image portrait" src="img/NorthAmerica/Canada2.jpg" alt="Yellowknife River Territorial Park, Northwest Territories by Freeman, M. (2016) | Bored Panda" onclick="modalGalleryImage('canada2')">
			</div>
			<div class="mb-2">
				<img id="canada3" class="img-fluid popup-image landscape" src="img/NorthAmerica/Canada3.jpeg" alt=" Ice Highway, Northwest Territories by Findlay, A. (2019, September 23) | West Jet Magazine" onclick="modalGalleryImage('canada3')">
			</div>
			<div class="mb-2">
				<img id="canada4" class="img-fluid popup-image portrait" src="img/NorthAmerica/Canada3.jpg" alt="Weighing Down the Evergreens by Shabsove, M. (2018, December 17) | NarCity" onclick="modalGalleryImage('canada4')">
			</div>
			<div class="mb-2">
				<img id="canada5" class="img-fluid popup-image portrait" src="img/NorthAmerica/Canada5.jpg" alt="Reindeer Migration, Mackenzie Delta, Northwest Territories by Dory, N. (n.d.)| Nicolas Dory Photography. " onclick="modalGalleryImage('canada5')">
			</div>
			<div class="mb-2">
				<img id="canada6" class="img-fluid popup-image landscape" src="img/NorthAmerica/Canada4.jpg" alt="Dog Sledding by Williams, M. (2019, February 14) | Blog via Rail. " onclick="modalGalleryImage('canada6')">
			</div>
			<div class="mb-2">
				<img id="canada7" class="img-fluid popup-image portrait" src="img/NorthAmerica/Canada6.jpg" alt="Cross-country skiing across ice highways, Northwest Territories by Campbell, J. (2017, June 12) | Cottage Life" onclick="modalGalleryImage('canada7')">
			</div>
			<div class="mb-2">
				<img id="canada8" class="img-fluid popup-image landscape" src="img/NorthAmerica/Canada7.jpg" alt="Polar Bears, Southern Beaufort Sea, by Kennedy, J. (2019, January 4) | ThoughtCo." onclick="modalGalleryImage('canada8')">
			</div>
			<div class="mb-2">
				<img id="canada9" class="img-fluid popup-image landscape" src="img/NorthAmerica/Canada8.jpg" alt="Dettah Ice Road by Stockton, N. (2019, April 18) | Wired" onclick="modalGalleryImage('canada9')">
			</div>
			<div class="mb-2">
				<img id="canada10" class="img-fluid popup-image portrait" src="img/NorthAmerica/Canada9.jpg" alt="Teepee at Aurora Village, Yellowknife by Shabsove, M. (2018, December 17) | NarCity" onclick="modalGalleryImage('canada10')">
			</div>
			<div class="mb-2">
				<img id="canada11" class="img-fluid popup-image landscape" src="img/NorthAmerica/Canada10.jpg" alt="Musk Oxen Bulls | Spectacular Northwest Territories" onclick="modalGalleryImage('canada11')">
			</div>
			<div class="mb-2">
				<img id="canada12" class="img-fluid popup-image portrait" src="img/NorthAmerica/Canada11.jpg" alt="Willow Ptarmigan, Northwest Territories (2019, August 29) | Audubon" onclick="modalGalleryImage('canada12')">
			</div>
		</div>

		<!-- Div to justify the content with top and bottom margin using Bootstrap class -->
		<div class="text-justify mt-5 mb-4">
			<h2 class="p-2 subTitles subTitlesFont">United States of America</h2>
			<!-- Div containing mini description about US -->
			<div id="americaDiv" class="displayBlock">
				<p>Alaska plays no second fiddle to the giant that is Canada when it comes to viewing the aurora borealis. Her extensive national parks, gorgeous mountain vistas, and untouched frontiers make her a favorite of the bold explorer...
					<!-- Span to allow users to read more -->
					<span class="readMoreLess" onclick="moreLessContent('americaDiv');">Read more &gt;&gt;</span>
				</p>
			</div>
			<!-- Div containing main description about US -->
			<div id="americaDivMain" class="displayNone">
				<p>Alaska plays no second fiddle to the giant that is Canada when it comes to viewing the aurora borealis. Her extensive national parks, gorgeous mountain vistas, and untouched frontiers make her a favorite of the bold explorer. Fairbanks consistently ranks as one of the best places to view northern lights anywhere in the world. So much so that a three-night stay in this region will guarantee an 80% chance of watching the dancing polar hues. Alaska's aurora season is between October and late April, peaking in the shoulder month of March. Alaska, it must be said, has some of the most impressive natural wonders even if we were to leave northern lights out of the list (Kreuger, 2019). Abundant wildlife year-around, spawns of sockeye salmon in her rivers and estuaries, and late afternoon Alpenglows on the Chugach mountain range in the thick of winter are once-yearly wonders that entice every visitor (Endres, n.d.). </p>
				<p>Claire Volkman of VisitTheUsa reminds us that worthwhile trips to see polar lights, however, do not mandate camping out far away into some frigid wilderness (n.d). She notes that closer to the mainland US, it’s difficult to go wrong with Marquette or Ely. Marquette, Michigan, offers 180-degree unobstructed views of the glimmering hues along the shores of Lake Superior. On clear nights, lights reflect of the water’s surface for the show of a lifetime - with the colder months of the year from October to April generally regarded as one’s best bets to view this phenomenon. Ely, Minnesota, offers tough competition between November to February when beautiful, bold bands of auroras embrace the horizons of innumerable water bodies of the area (Kreuger, 2019). Cherry Springs Park of Pennsylvania, according to Patricia Inglish of WanderWisdom, is yet another fantastic option for aurora chasers in September. With its exceptionally dark skies designated as a Gold Level Dark Sky by the International Dark Sky Association, this park on the eastern seaboard comes alive with the neon hues of polar lights on the regular in the fall months (n.d.).
					<!-- Span to allow users to read less -->
					<span class="readMoreLess" onclick="moreLessContent('americaDiv');">&lt;&lt; Read less</span>
				</p>
			</div>
		</div>

		<!-- Div for images from US -->
		<div class="gallery">
			<div class="mb-2">
				<img id="usa1" class="img-fluid popup-image landscape" src="img/NorthAmerica/USA1.jpg" alt="Denali National Park and Preserve by Volkman, C. (n.d.) | Visit The USA. " onclick="modalGalleryImage('usa1')">
			</div>
			<div class="mb-2">
				<img id="usa2" class="img-fluid popup-image portrait" src="img/NorthAmerica/USA2.jpg" alt="Cherry Springs State Park, PA by Inglish, P. (n.d.) | Wander Wisdom" onclick="modalGalleryImage('usa2')">
			</div>
			<div class="mb-2">
				<img id="usa3" class="img-fluid popup-image landscape" src="img/NorthAmerica/USA3.jpg" alt="Ely, MN by Kreuger, A. (2019, August 31) | MPR News" onclick="modalGalleryImage('usa3')">
			</div>
			<div class="mb-2">
				<img id="usa4" class="img-fluid popup-image portrait" src="img/NorthAmerica/USA4.jpg" alt="Sockeye Salmon Spawning, Quartz Creek, Alaska by Matchar, E. (2020, October 13) | Smithsonian Magazine" onclick="modalGalleryImage('usa4')">
			</div>
			<div class="mb-2">
				<img id="usa5" class="img-fluid popup-image portrait" src="img/NorthAmerica/USA5.jpeg" alt="Alpenglow at Mt. Brooks, Alaska by Endres, P. (n.d.) | Alaska Photo Graphics" onclick="modalGalleryImage('usa5')">
			</div>
			<div class="mb-2">
				<img id="usa6" class="img-fluid popup-image landscape" src="img/NorthAmerica/USA6.jpg" alt="Alaskan Spring (2018, March 18)| Sunstone Tours & Cruises Blog." onclick="modalGalleryImage('usa6')">
			</div>
			<div class="mb-2">
				<img id="usa7" class="img-fluid popup-image portrait" src="img/NorthAmerica/USA7.jpg" alt="Grizzly Bear, Denali National Park by Rose, H. (n.d.) | Hugh Rose Photography" onclick="modalGalleryImage('usa7')">
			</div>
			<div class="mb-2">
				<img id="usa8" class="img-fluid popup-image landscape" src="img/NorthAmerica/USA8.jpg" alt="Dall Sheep of Denali National Park by Dengler, J. L. (2010, October 13) | Dengler Images" onclick="modalGalleryImage('usa8')">
			</div>
			<div class="mb-2">
				<img id="usa9" class="img-fluid popup-image landscape" src="img/NorthAmerica/USA9.jpg" alt="Moose, Denali National Park by Rose, H. (n.d.) | Hugh Rose Photography" onclick="modalGalleryImage('usa9')">
			</div>
			<div class="mb-2">
				<img id="usa10" class="img-fluid popup-image portrait" src="img/NorthAmerica/USA10.jpg" alt="Lynx Family, Superior National Forest, Upper Michigan by Kaczke, L. (2018, February 6) | Twin Cities" onclick="modalGalleryImage('usa10')">
			</div>
			<div class="mb-2">
				<img id="usa11" class="img-fluid popup-image landscape" src="img/NorthAmerica/USA11.jpg" alt="Bald Eagle, Superior National Forest, Upper Michigan by Uren, A. (2019, August 15) | Bring Me The News" onclick="modalGalleryImage('usa11')">
			</div>
			<div class="mb-2">
				<img id="usa12" class="img-fluid popup-image portrait" src="img/NorthAmerica/USA12.jpg" alt="Gray Fox, Cherry Springs State Park, PA by Fergus, C. (n.d.) | PA Mammal Atlas" onclick="modalGalleryImage('usa12')">
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
