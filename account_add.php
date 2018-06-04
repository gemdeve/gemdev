<?php
	session_start();
	if (!isset($_SESSION["loggedIN"])) {
		header("Location: login.php");
		exit();
	}

	if ($_POST) {
		$email = trim($_POST['email']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$activated = trim($_POST['activated']);	
	
		$errors = array();
		if (strlen($email) == 0)
			array_push($errors, "Email harus diisi");
		if (strlen($username) == 0)
			array_push($errors, "Username harus diisi");
		if (strlen($password) == 0)
			array_push($errors, "Password harus diisi");
		if (strlen($activated) == 0)
			array_push($errors, "Activated harus diisi");
	
		if (count($errors) == 0) {
			require_once("databases/Database.php");
			require_once("databases/users.php");

			$db = new users();
			if ($db->insertadmin($email, $username, $password, $activated)) {
				header("Location: list_account.php");
				exit();
			} else {
				array_push($errors, "Gagal Menyimpan Account Baru");
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add New Account</title>
	<meta charset="utf-8">
	<!--------------------------------------------my own css and bootstrap css-------------------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="aboutus.css">
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
							<li class="nav-item active"><a class="nav-link" href="./admin.php">Home</a></li>
							<li class="nav-item dropdown">
      						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">List</a>
      							<div class="dropdown-menu">
        							<a class="dropdown-item" href="./list_project.php">List Project</a>
        							<a class="dropdown-item" href="./list_account.php">List Account</a></div>
    						</li>

    						<li class="nav-item dropdown">
      						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Admin</a>
      							<div class="dropdown-menu">
        							<a class="dropdown-item" href="./logout.php">Logout</a></div>
    						</li>					
						</ul>
				</nav>
		</div>
	</header>
	<section id="main">
		<div class="contain">
			<h1>Add New Account</h1>
			<br>
			<?php if ($_POST && (count($errors) > 0)) { ?>
				<p style="color:red">
					<strong>Erros:</strong>
					<ul>
						<?php foreach ($errors as $error) { ?>
								<li><?php echo $error; ?></li>
					<?php } ?>
					</ul>
				</p>
			<?php	}  ?>
		<form method="post" action="account_add.php">
			<table>
				<tr>
						<td>Email</td>
						<td>
							<input type="text" name="email">
						</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>
						<input type="text" name="username">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="password" name="password">
					</td>
				</tr>
				<tr>
					<td>Activated</td>
					<td>
						<input type="number" name="activated">
					</td>
				</tr>
			</table>
			<br>
			<input type="submit" name="submit" value="Save">
			<a href="list_account.php">Cancel</a>
		</form>
	</div>
</section>
<footer id="footer">
		<div class=ftr-wrapper>
			<ul>
				<a href="./aboutusadmin.php">ABOUT US</a> | <a href="./contact_admin.php">CONTACT</a>
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
			<a href="Terms_admin.php">Terms of Use</a> | <a href="./Policy_admin.php">Privacy Policy</a>
		</div>
	</footer>
	!-------------------------------------------js cdn---------------------------------------------->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>	
</body>
</html>	