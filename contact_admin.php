<!DOCTYPE html>
<html>
<head>
	<title>Contact Admin</title>
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
			
			<p><font size= "6">Silahkan isi form dibawah ini untuk menghubungi kami.</font></p>
				<div>
					<label for="nama">Nama</label><br>
					<input type="text" name="nama" placeholder="Silakan isi nama anda...">
				</div>
				<br>
				<div>
					<label for="email">E-mail</label><br>
					<input type="email" name="email" placeholder="Silakan isi E-mail anda...">
				</div>
				<br>
				<div>
					<label for="subject">Subject</label><br>
					<input type="text" name="subject" placeholder="Silakan isi keluhan anda...">
				</div>
				<br>
				<div>
					<label for="message">Isi Pesan</label><br>
					<textarea name="message" placeholder="Isi pesan anda..."></textarea>
				</div>
				<br>
				<button type="submit" class="btn btn-primary btn-md" name="btn_sendm" onmouseover="over(this)" onmouseout="out(this)">Submit</button>

				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<hr>

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