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
		<!-- <link id = "style" rel="stylesheet" href="style.css"> -->
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

        <form action="Reviews.php" method="post" class="mt-5" id="reviewForm">

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
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Review Title">
            </div>
            <div class="mb-3 ml-3">
                <label for="comment" class="form-label">Comments</label>
                <textarea class="form-control" name="comments" id="comment" rows="5"></textarea>
            </div>

            <div class="btn-group-justified mb-3 ml-3">
                <input class="btn btn-primary" type="submit" value="Submit">
                <input class="btn btn-primary" type="reset" value="Reset">
              </div>
                    
        </form>
        </div>
<!--Area to display user submitted reviews,
            fetch data from database to display dynamically-->
            <?php
            include "init.php";

            /*
            * Establish the database connection
            */
            $conn = new mysqli($serverName, $userName, $password, $dbName);
            if ($conn -> connect_error) {
                die("Connection failed: " . $conn -> connect_error);
            }

            $title = "";
            $comments = "";
            $rating = "";
            $valuesSelected = false;


            /*
            * If the form was submitted $_POST["Submit"] will be set
            */
            if (isset($_POST["submit"])) {
                /*
                * Set local variables to the form input values
                */
                $title = isset($_POST["title"]) ? $_POST["title"] : "";
                $comments = isset($_POST["comments"]) ? $_POST["comments"] : "";
                $rating = isset($_POST["rating"])? $_POST["rating"]: 5;

                if (!empty($title) || !empty($comments))
                {
                    $valuesSelected = true;
                }

                /*
                * Unset the submit flag
                */
                unset($_POST['submit']);
            }
            
            //require_once 'functions.php';
            /*Insert Reviews */
            //$bookingID = "SELECT BookingID FROM booking JOIN customer ON booking.CustomerID=customer.CustomerID WHERE BookingID=1;";
            //submitReview($conn, $bookingID, $title, $comments, $rating)


?>

<?php
        include "init.php";

        /*
        * Establish the database connection
        */
        $conn = new mysqli($serverName, $userName, $password, $dbName);
        if ($conn -> connect_error) {
            die("Connection failed: " . $conn -> connect_error);
        }
            /*Display Reviews Dynamically*/

            $sql = "SELECT ReviewDate, Title, Comments, Rating FROM review;";
            $result = $conn -> query($sql);
            if($result -> num_rows > 0){
                while($row = $result -> fetch_assoc()){
                    $rating = $row["Rating"];
                    $date = $row["ReviewDate"];
                    $title = $row["Title"];
                    $comments = $row["Comments"];
                    

            
                    echo"<div class='container col-md-6 '>";

                        echo "<div class='card-deck mt-5 mb-5'>";

                            echo"<div class='card'>";
                                echo"<img class='card-img-top' src='img/Europe/Iceland1.jpg' alt='Card image cap'>";

                                echo"<div class='card-body h-50'>";
                                    echo"<h5 class='card-title'> $title</h5>";
                                    echo"<h6 class='card-title'>User Rating: $rating out of 5</h6>";
                                    echo"<p class='card-text'> $comments</p>";
                                echo"</div>";

                                echo "<div class='card-footer'>";
                                    echo"<small class='text-muted'>Review Posted: $date</small>";
                                    echo"</div>";

                            echo"</div>";

                        echo"</div>";
                    echo"</div>";


                }
            }


    

            ?>
        
    
        



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