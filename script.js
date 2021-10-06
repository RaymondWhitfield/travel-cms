function toggleDark(){
	var style = document.getElementById("style");
	if(style.href.match("style.css")){
		style.href = "darkMode.css";
	}
}
function toggleLight(){
	var style = document.getElementById("style");
	if(style.href.match("darkMode.css")){
		style.href = "style.css";
		
	}
}
/* JS file for JavaScript code */

var slideIndex = 0;

/*
 * Function to display modal pop-up fpr gallery image
 * When this function is invoked, we pass the imageId (of the image we want to magnify in the modal) as a parameter
 * The getElementById() function is used to get the modal pop-up relateements (like modalDiv, modalImage, modalCaption)
 * The imageId argument is used to get the exact image from the gallery page
 */
function modalGalleryImage(imageId) {
	// Get the modal pop-up div with id 'modalDiv'
	var modalDiv = document.getElementById("modalDiv");
	// Get the image element with id 'modalImage'
	var modalImage = document.getElementById("modalImage");
	// Get the caption element with id 'modalCaption'
	var modalCaption = document.getElementById("modalCaption")

	// Get the image element with the passed in 'imageId'
	var image = ""

	// Get list of images with class name 'popup-image'
	var images = document.getElementsByClassName("popup-image");

	// Loop through the images to find the image with 'imageId'
	for (var index = 0; index < images.length; index++) 
	{
		if (images[index].id == imageId) 
		{
			// Store the slide index of the image and get the image element for the image with id 'imageId'
			slideIndex = index;
			image = document.getElementById(imageId);
			break;
		}
	}

	/*
	 * Set the modal pop-up div display style to 'block' so that it is visible on the page on clicking 
	 * This is necessary because in the CSS class, the display is set to 'none'
	 */
	 modalDiv.style.display = "block";
	// Set the modal image source to the image soure of passed 'imageId'
	modalImage.src = image.src;
	// Set the caption to the image alternate of passed 'imageId'
	modalCaption.innerHTML = image.alt;
}

/*
 * Functon to close the modal pop-up
 * Once the close icon is clicked, the function is used to set the display property of the modalDiv to 'none' so that the modal stays hidden
 */
function onSpanClick() {
	// Get the modal pop-up div with id 'modalDiv'
	var modalDiv = document.getElementById("modalDiv");
	// Set the modal pop-up div display style to 'none'
	modalDiv.style.display = "none";
}

/*
 * Function to display/hide paragraph content on the continent pages
 */
function moreLessContent(divId) {
	// Get the div containing the short information
	var miniDiv = document.getElementById(divId);
	// Get the div containing the main information
	var mainDiv = document.getElementById(divId + "Main");

	if (mainDiv.style.display == "block") 
	{
		// If main div is being displayed, hide the main div and show the mini div
		miniDiv.style.display = "block";
		mainDiv.style.display = "none";
	}
	else 
	{
		// If main div is being hidden, hide the mini div and show the main div
		miniDiv.style.display = "none";
		mainDiv.style.display = "block";
	}
}

/* 
 * Function to show the previous image from the image list 
 */
function prevImage() {
	// Get list of images with class name 'popup-image'
	var images = document.getElementsByClassName("popup-image");
	// Decrement the 'slideIndex' to get the index of previous image in the list
	slideIndex--;
	// If the 'slideIndex' is less then 0, set it to the index of last image
	if (slideIndex < 0) {
		slideIndex = (images.length - 1);
	}
	// Invoke the 'modalGalleryImage' function with the corresponding image Id
	modalGalleryImage(images[slideIndex].id);
}

/* 
 * Function to show the next image from the image list
 */
function nextImage() {
	// Get list of images with class name 'popup-image'
	var images = document.getElementsByClassName("popup-image");
	// Increment the 'slideIndex' to get the index of next image in the list
	slideIndex++;
	// If the 'slideIndex' is greater then the index of last image, set the index to the first image
	if (slideIndex > (images.length - 1)) {
		slideIndex = 0;
	}
	// Invoke the 'modalGalleryImage' function with the corresponding image Id
	modalGalleryImage(images[slideIndex].id);
}