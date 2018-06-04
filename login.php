<?php
	session_start();

	if (isset($_SESSION["loggedIN"]) && isset($_SESSION["user_id"]))
		{
			header("Location: home1.php");
			exit();
		}
 if ($_POST) { 
 	$username = $_POST["username"];
 	 $password = $_POST["password"];

 		if ($username == "admin" && $password == "admin")
 		{	echo "<script>alert('Login berhasil!')</script>";
 			$_SESSION["loggedIN"] = true;
 			header("Location: admin.php");
 			
 			exit();

 			
 		}
 		else {
 			require_once("databases/Database.php");
 			require_once("databases/users.php");

 			$db = new Users();
 			$user_id = $db->login($username, $password);

 			if($user_id != -1){
 				$_SESSION["loggedIN"] = true;
 				$_SESSION["user_id"] = $user_id;
 				$_SESSION["userName"] = $_POST["username"];

 				header("location: home1.php");
 			}
 			else
 				echo "
					<script>
			 		alert('Wrong Username/ Wrong password/ Banned User');
			 		document.location.href = 'login.php';
					</script>";
 		}
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In GemDev</title>
	<meta charset="utf-8">
	<!--------------------------------------------my own css and bootstrap css-------------------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="login.css">
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
							<li class="nav-item active"><a class="nav-link" href="./home.php">Home</a></li>
							<li class="nav-item active"><a class="nav-link" href="./StartProject.php">Start Project</a></li>
							<li class="nav-item active"><a class="nav-link" href="./register.php">Register</a></li>
						</ul>
				</nav>
		</div>
	</header>

	<section class="main">
		<div class="row">
			<section class="col-12 col-sm-6 col-md-3 ml-5">
			<form class="form-container" action="login.php" method="post">
				<h1 class="text-center font-weight-bold">Login</h1>
				<div class="form-group">
						<input type="text"  class="form-control" name="username" placeholder="Username" required>
				</div>
				<div class="form-group">
						<input type="Password" class="form-control" name="password" placeholder="Password" required>
				</div>
				<div>
						<input type="submit" class="btn btn-primary btn-block" name="submit" value="Login">
				</div>
				<div style="text-align: center;">
					<label>atau</label>
				</div>
				<div style="text-align: center;">
						<a href="register.php">Sign Up</a>
				</div>
			</form>
			</section>
		</div>
	</section>

	<footer id="footer">
		<div class=ftr-wrapper>
			<ul>
				<a href="./aboutus.php">ABOUT US</a> | <a href="./contact.php">CONTACT</a>
			</ul>
		</div>

		<div class="ftr-social-icons">
			<ul>
				<li><a href="https://www.facebook.com/GemDev-1233795066722877/" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/gemdev2"  target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
			</ul>
		</div>
	
		<div class="ftr-bottom-section-wrapper">
			<i class="fa fa-copyright"></i>GemDev 2018 <address class="footer-address" role="company address">Jakarta, Indonesia</address>
		</div>
		<div class="ftr-bottom-section-wrapper">
			<a href="Terms.php">Terms of Use</a> | <a href="./Policy.php">Privacy Policy</a>
		</div>
	</footer>

	<!-------------------------------------------js cdn---------------------------------------------->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>