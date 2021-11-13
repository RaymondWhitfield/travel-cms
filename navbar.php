
<!-- 
		* Navigation bar using Bootstrap's in-built navigation section 
	-->
	<nav class = "navbar navbar-expand-lg navbar-dark bg-dark">
		<div class = "container-fluid">
			<!-- 
				* Heading for website 
			-->
			<a class = "navbar-brand" href="index.php">POLAR LIGHTS</a>
			<?php
				
				if(isset($_SESSION["FirstName"])){
					$name = $_SESSION["FirstName"];
					echo "<li>Welcome back, $email </li>";
				}
			?>
			<div>
				<!-- 
					* Navigation menu as unordered list, each list item has specific padding using Bootstrap class 
				-->
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav">
					<li><a href="index.php" class="nav-link"><span>HOME</span></a></li>
					
				
					<li>
						<div class="dropdownDiv">
							<button class="dropdownBtn nav-link"><span>CONTINENTS</span>
								<i class="fa fa-caret-down"></i>
							</button>
							<div class="dropdown-content">
								<a href="Antarctica.php" class="dropdown-item"><span>ANTARCTICA</span></a>
								<a href="Europe.php" class="dropdown-item"><span>EUROPE</span></a>
								<a href="NorthAmerica.php" class="dropdown-item"><span>NORTH AMERICA</span></a>
								<a href="Oceania.php" class="dropdown-item"><span>OCEANIA</span></a>
								<a href="SouthAmerica.php" class="dropdown-item"><span>SOUTH AMERICA</span></a>
							</div>
						</div>
					</li>
					<li><a href="Gallery.php" class="nav-link"><span>GALLERY</span></a></li>
					<li><a href="Search.php" class="nav-link"><span>SEARCH</span></a></li>
					<li><a href="Reviews.php"class="nav-link"><span>REVIEWS</span></a></li>
					<li><a href="About.php" class="nav-link"><span>ABOUT</span></a></li>
					<?php
						if(isset($_SESSION["Email"])){
							echo "<li><a href='user.php' class='nav-link'><span>ACCOUNT</span></a></li>";
							echo "<li><a href='logout.php' class='nav-link'><span>LOGOUT</span></a></li>";
						}
						else{
							echo "<li><a href='register.php' class='nav-link'><span>REGISTER</span></a></li>";
							echo "<li><a href='login.php' class='nav-link'><span>LOGIN</span></a></li>";
						}
					?>
					<li><a class="nav-link changeCSS" data-stylesheet="darkMode.css"><span>DARK</span></a></li>
					<li><a class="nav-link changeCSS" data-stylesheet="style.css"><span>LIGHT</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>