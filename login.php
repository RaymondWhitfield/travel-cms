<?php
	/*
	 * The include statement takes all the variables from the init.php file and copies it into this file
	 * We do this so that the database configuration variables are defined only in one file
	 */
	include "init.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Polar Lights | Login Page</title>
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
	<style>
	html,body{
		background-size: cover;
		height: 100%;
	}

	.container{
		height: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	form{
		min-height: 30%;
		margin-top: auto;
		margin-bottom: auto;
	}
	</style>
</head>
<body>
	
	<?php
		include_once "navbar.php";
	?>

	<div class="container container-body">

		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
			</div>
			<div class="card-body">
				<form action="verifyLogin.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="email" placeholder="username/email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="loginPW" placeholder="password">
					</div>
					<div class="form-group">
						<input type="submit" value="Login" name="submit" class="btn login_btn">
					</div>
                    <!--Error Handling Messages from functions in verifyLogin.php-->
                    <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "nologin"){
                            echo "<p>Email or password incorrect.</p>";
                        }
                        else if($_GET["error"] == "emptyemail"){
                            echo "<p>Email left blank!</p>";
                        }
                        else if($_GET["error"] == "emptylogin"){
                            echo "<p>Email and or Password left blank!</p>";
                        }
                    }
                    ?>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<h6>Don't have an account?</h6><a href="register.php">Sign Up</a>
				</div>
			</div>
		</div>

	</div>

	<!-- Page footer -->
	<?php
		include_once "footer.php";
	?>
	
	<!-- Linking Polar Lights project specific JavaScript file -->
	<script src="script.js"></script>
</body>
</html>
