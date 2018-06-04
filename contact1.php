<?php 
    session_start();
	$NAMA = $_SESSION["userName"];
		if (!isset($_SESSION["loggedIn"]) && !isset($_SESSION["user_id"]))
		{
			header("Location: login.php");
			exit();
		}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact GemDev</title>
	<meta charset="utf-8">
	<!--------------------------------------------my own css and bootstrap css-------------------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="contact.css">
	<!-------------------------------------------font awesome-------------------------------->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<header>
		<div class="navbar navbar-default fixed-top">
				<div href="#default" id="logo"><img src="./img/GemDev_logo.png" width="250" height="65"></div>
					<nav>
						<ul>
							<li class="nav-item active"><a class="nav-link" href="./home1.php">Home</a></li>
							<li class="nav-item active"><a class="nav-link" href="list_project_user.php">List Project</a></li>
							<li class="nav-item dropdown">
      						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Project</a>
      							<div class="dropdown-menu">
        							<a class="dropdown-item" href="./created_project.php">Created Project</a>
        							<a class="dropdown-item" href="./add_project.php">Add Project</a>
        							<a class="dropdown-item" href="./backed_project.php">Backed Project</a></div>
    						</li>

    						<li class="nav-item dropdown">
      						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><?= $NAMA?></a>
      							<div class="dropdown-menu">
        							<a class="dropdown-item" href="./Profile.php">Profile</a>
        							<a class="dropdown-item" href="./settings.php">Settings</a>
        							<a class="dropdown-item" href="./logout.php">Logout</a></div>
    						</li>					
						</ul>
				</nav>
		</div>
	</header>
	<section id="main">
		<div class="contain">
			<br>
			<h3>Alamat GemDev</h3>
			<br>
				<iframe src="https://www.google.com/maps/embed/v1/place?q=untar%201&key=AIzaSyBUnUXnX5VCzL6p_wFyg5EqRCL2WzdcE6c" width="100%" height="450" frameborder="0" style="border:2px solid;"></iframe>
				
				<h3>Kontak Lainnya</h3>
					<ul>
              			<li><i class="fa fa-phone"></i> (021) 8282828</li>
              			<li><i class="fa fa-envelope"></i> support@gemdev.com</li>
              			<li><i class="fa fa-map"></i> Grogol, Jakarta, Indonesia</li>
              		</ul>
        </div>
    </section>

	<footer id="footer">
		<div class=ftr-wrapper>
			<ul>
				<a href="./aboutus1.php">ABOUT US</a> | <a href="./contact1.php">CONTACT</a>
			</ul>
		</div>

		<div class="ftr-social-icons">
			<ul>
				<li><a href="https://www.facebook.com/GemDev-1233795066722877/" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/gemdev2"  target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
		</div>
	
		<div class="ftr-bottom-section-wrapper">
			<i class="fa fa-copyright"></i>GemDev 2018 <address class="footer-address" role="company address">Jakarta, Indonesia</address>
		</div>
		<div class="ftr-bottom-section-wrapper">
			<a href="Terms1.php">Terms of Use</a> | <a href="./Policy1.php">Privacy Policy</a>
		</div>
	</footer>
	!-------------------------------------------js cdn---------------------------------------------->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>	
</body>
</html>	