<!-- 
		* Navigation bar using Bootstrap's in-built navigation section 
	-->
	<nav class = "navbar navbar-collapse navbar-dark bg-dark">
		<div class = "container-fluid">
			<!-- 
				* Heading for website 
			-->
			<a class = "navbar-brand" href="index.php">POLAR LIGHTS</a>
			<?php
				
				if(isset($_SESSION["FirstName"])){
					$name = $_SESSION["FirstName"];
					echo "<li id='welcomemsg'>Welcome back, $name </li>";
				}
			?>
			<div>
				<!-- 
					* Navigation menu as unordered list, each list item has specific padding using Bootstrap class 
				-->
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span></button>
					
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php"><span>HOME</span></a></li>
					
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span>CONTINENTS</span></a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="Antarctica.php"><span>ANTARCTICA</span></a></li>
								<li><a class="dropdown-item" href="Europe.php"><span>EUROPE</span></a></li>
								<li><a class="dropdown-item" href="NorthAmerica.php"><span>NORTH AMERICA</span></a></li>
								<li><a class="dropdown-item" href="Oceania.php"><span>OCEANIA</span></a></li>
								<li><a class="dropdown-item" href="SouthAmerica.php"><span>SOUTH AMERICA</span></a></li>
							</ul>
						</li>
					<li><a href="Gallery.php" class="nav-link"><span>GALLERY</span></a></li>
					<li><a href="Search.php" class="nav-link"><span>SEARCH</span></a></li>
					<li><a href="Reviews.php"class="nav-link"><span>REVIEWS</span></a></li>
					<li><a href="About.php" class="nav-link"><span>ABOUT</span></a></li>
					<?php
						if(isset($_SESSION["Email"])){
							echo "<li class='nav-item'><a href='logout.php' class='nav-link'><span>LOGOUT</span></a></li>";
						}
						else{
							echo "<li class='nav-item'><a href='register.php' class='nav-link'><span>REGISTER</span></a></li>";
							echo "<li class='nav-item'><a href='login.php' class='nav-link'><span>LOGIN</span></a></li>";
						}
					?>
					<li><a class="nav-link changeCSS" data-stylesheet="darkMode.css"><span>DARK</span></a></li>
					<li><a class="nav-link changeCSS" data-stylesheet="style.css"><span>LIGHT</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>