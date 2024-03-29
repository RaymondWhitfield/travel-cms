<!DOCTYPE html>
<html>
    <head><title>Polar Lights | Reviews</title>
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
		<link id = "style" rel="stylesheet" href="style.css">
        <link id="active-stylesheet" href="" rel="stylesheet" type="text/css"/>
        <style>
            .star-input {
            display: none;
            }

            .star {
            color: gold;
            font-size:x-large;
            }

            .star-input:checked + .star ~ .star {
            color: grey;
            }
        </style>
		
		<!-- 
			* Linking Polar Lights project specific JavaScript file 
		-->
	    <script src="script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                const form = document.querySelector("form");
                form.addEventListener('submit', event => {
                    const formData = new FormData(event.target);
                    const rating = formData.get('rating');
                    console.log(rating);
                    event.preventDefault();
            });
        });
        </script>

    </head>

    <body>

        <!-- 
		* Navigation bar using Bootstrap's in-built navigation section 
	-->

	<?php
		include_once "navbar.php";
	?>
    
    <div class="container container-body container-main mb-5">
        <!--User Reviews Form-->

        <form class="mt-5"id="reviewForm">

            <!--Div that contains star ratings with values 1 - 5 -->

            <label class="mb-1 ml-3"><h5>Please Rate Your Trip!</h5></label>

            <!--Star Rating-->

            <div class="mb-3 ml-3" id="rating">
                <input type="radio" class="star-input" name="rating" id="star-1" value="1">
                <label for="star-1" class="star"><i class="fa fa-star"></i></label>
                <input type="radio" class="star-input" name="rating" id="star-2" value="2">
                <label for="star-2" class="star"><i class="fa fa-star"></i></label>
                <input type="radio" class="star-input" name="rating" id="star-3" value="3">
                <label for="star-3" class="star"><i class="fa fa-star"></i></label>
                <input type="radio" class="star-input" name="rating" id="star-4" value="4">
                <label for="star-4" class="star"><i class="fa fa-star"></i></label>
                <input type="radio" class="star-input" name="rating" id="star-5" value="5" checked>
                <label for="star-5" class="star"><i class="fa fa-star"></i></label>
            </div>

            <!--Div with dropdown list of trips for user reviews -->

            <label class="mb-1 ml-3"><h5>Which trip do you want to review?</h5></label>
            <div class="mb-3 ml-3" id="tripChoice">
                <select class="custom-select" name="trips" id="trips">
                    <optgroup label="European Trips">
                        <option>Iceland</option>
                        <option>Norway</option>
                    </optgroup>
                    <optgroup label="North American Trips">
                        <option>Canada</option>
                        <option>United States</option>
                    </optgroup>
                    <optgroup label="Oceania Trips">
                        <option>Australia</option>
                        <option>New Zealand</option>
                    </optgroup>
                    <optgroup label="South American Trips">
                        <option>Argentina</option>
                        <option>The Falkland Islands</option>
                        <option>South Georgia Island</option>
                    </optgroup>
                    <option>Antartica</option>
                </select>
            </div>

            
            <div class="mb-3 ml-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="First Name">
            </div>
            <div class="mb-3 ml-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Last Name">
            </div>
            <div class="mb-3 ml-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="name@email.com">
            </div>
            <div class="mb-3 ml-3">
                <label for="date" class="form-label">Date of Trip</label>
                <input type="date" class="form-control" id="date" placeholder="Date of Trip">
            </div>
            <div class="mb-3 ml-3">
                <label for="comment" class="form-label">Comments</label>
                <textarea class="form-control" id="comment" rows="5"></textarea>
            </div>

            <div class="btn-group-justified">
                <input class="btn btn-primary" type="submit" value="Submit">
                <input class="btn btn-primary" type="reset" value="Reset">
              </div>
                    
        </form>

        <!--Area to display user submitted reviews,
            fetch data from database to display dynamically-->
        <div>
            

        </div>
    </div>
    <div class="container mt-5 mb-5">
        <!-- <div>
            <h3>Reviews will be dynamically displayed here, below the form.</h3>
        </div>
        <div>
            <h3>Also, we could provide users a way to search or filter reviews
                on criteria like stars, trip, date, etc.
            </h3>
        </div>
        <div>
            <h3>The landing page could run a slideshow of all these reviews</h3>
        </div> -->

        <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="img/Europe/Iceland1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Our Trip to Iceland</h5>
                <p class="card-text">This is what we thought about Iceland and the polar lights.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="img/Antarctica/Antarctica1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Antartica is beautiful this time of year</h5>
                <p class="card-text">We loved our trip to Antartica. Don't forget to pack several layers of clothing. It was a truly unforgettable experience.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="img//SouthAmerica/Argentina1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Argentina is a magical place to see the auroras.</h5>
                <p class="card-text">We loved our trip to Argentina. Can't say enough about our experience with Polar Lights booking agency.</p>              
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
            </div>
          </div>
        </div>

        <!-- 
		* Page footer 
	-->
    <?php
		include_once "footer.php";
	?>
    
    <!-- Linking Polar Lights project specific JavaScript file -->
    <script src="script.js"></script>
    </body>
</html>