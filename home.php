<?php 
	require 'databases/upload.php';

	if(isset($_POST["submitsubscribe"])) {

		$email = $_POST["email"];
		if(subscribe($email)>0)
			{
			echo "
			<script>
			 	alert('Berhasil Subscribe');
			</script>
		";
			}
			else
			{
			echo "
			<script>
			 	alert('Gagal Subscribe');
			</script>
		";			}
	}

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Home GemDev</title>
	<meta charset="utf-8">
	<!--------------------------------------------my own css and bootstrap css-------------------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="home.css">
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
							<li class="nav-item active">
								<button type="button" class="btn" id="icon-profile" data-toggle="popover" 
										data-placement="bottom" 
										data-trigger="focus"
										data-content="
										<li class='nav-item active'><a class='nav-link' href='./login.php' style='color:black'>Login</a></li>
										<li class='nav-item active'><a class='nav-link' href='./register.php' style='color:black'>Signup</a></li>"
										data-html="true">
									<img src="./img/no-pic.png" width="25" height="25">
								</button>
							</li>
						</ul>
				</nav>
		</div>
	</header>

	<section id="carousel">
		<div id="carouselHome" class="carousel slide" data-ride="carousel">
  			<ol class="carousel-indicators">
    			<li data-target="#carouselHome" data-slide-to="0" class="active"></li>
    			<li data-target="#carouselHome" data-slide-to="1"></li>
  			</ol>
  		<div class="carousel-inner">
    		<div class="carousel-item active">
      			<img class="d-block w-100" src="./img/a700.jpg" alt="First slide">
      				<div class="carousel-caption">
    					<h5>Selamat Datang Di GemDev</h5>
    					<br>
    					<p>GemDev merupakan website yang berfokus pada crowdfunding yang ditujukan bagi para Developer Game Jakarta, Bandung dan Surabaya baik yang pemula atau professional</p>
  					</div>
   			</div>
    		<div class="carousel-item">
      			<img class="d-block w-100" src="./img/b700.jpg" alt="Second slide">
      			<div class="carousel-caption">
    					<h5>Bergabunglang Bersama Kami</h5>
    					<br>
    					<a class="btn btn-success" href="./register.php" role="button">DAFTAR</a>
  					</div>
    		</div>
  		</div>
  		<a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
 		 </a>
  		<a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
   			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a>
		</div>
	</section>

	<section id="tab">
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  			<li class="nav-item">
   				<a class="nav-link active" id="pills-action-tab" data-toggle="pill" href="#pills-action" role="tab" aria-controls="pills-action" aria-selected="true">ACTION</a>
  			</li>
  			<li class="nav-item">
   				 <a class="nav-link" id="pills-RPG-tab" data-toggle="pill" href="#pills-RPG" role="tab" aria-controls="pills-RPG" aria-selected="false">RPG</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link" id="pills-simulation-tab" data-toggle="pill" href="#pills-simulation" role="tab" aria-controls="pills-simulation" aria-selected="false">SIMULATION</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link" id="pills-strategy-tab" data-toggle="pill" href="#pills-strategy" role="tab" aria-controls="pills-strategy" aria-selected="false">STRATEGY</a>
  			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
  			<div class="tab-pane fade show active" id="pills-action" role="tabpanel" aria-labelledby="pills-action-tab">
  					<h4>Gigantic</h4>
					<img class="rounded float-left" src="./img/Gigantic_cover.jpg" width="275" height="365">
					<p style="text-align: justify; font-size: 25px; padding-left: 300px">Gigantic is a free-to-play strategic hero shooter video game developed by the independent game studio Motiga and published by Perfect World Entertainment.The game focuses on team-based action combat with heroes battling alongside a massive guardian. Players must protect their guardian along with their team and attempt to destroy the opposing team and their guardian.</p>
  			</div>
  			<div class="tab-pane fade" id="pills-RPG" role="tabpanel" aria-labelledby="pills-RPG-tab">
  					<h4>The Elder Scroll Online</h4>
					<img class="rounded float-left" src="./img/elders.jpg" width="275" height="365">
					<p style="text-align: justify; font-size: 25px; padding-left: 300px">The Elder Scrolls Online is a massively multiplayer online role-playing (MMORPG) video game developed by ZeniMax Online Studios and published by Bethesda Softworks.It was originally released for Microsoft Windows and OS X in April 2014.It is a part of The Elder Scrolls series, of which it is the first multiplayer installment.</p>
  			</div>
  			<div class="tab-pane fade" id="pills-simulation" role="tabpanel" aria-labelledby="pills-simulation-tab">
  					<h4>SimCity</h4>
					<img class="rounded float-left" src="./img/simc.jpg" width="275" height="365">
					<p style="text-align: justify; font-size: 25px; padding-left: 300px">SimCity is an open-ended city-building video game series originally designed by Will Wright. The first game in the series, SimCity, was published by Maxis in 1989. The success of SimCity sparked the creation of several sequels and many other spin-off "Sim" titles, including 2000's The Sims, which itself became a best-selling computer game and franchise.</p>
  			</div>
  			<div class="tab-pane fade" id="pills-strategy" role="tabpanel" aria-labelledby="pills-strategy-tab">
  					<h4>Warcraft III</h4>
					<img class="rounded float-left" src="./img/wc.jpg" width="275" height="365">
					<p style="text-align: justify; font-size: 25px; padding-left: 300px">Warcraft III: Reign of Chaos is a high fantasy real-time strategy video game developed and published by Blizzard Entertainment, and was released in July 2002. It is the second sequel to Warcraft: Orcs & Humans, and it is the third game set in the Warcraft fictional universe. An expansion pack, The Frozen Throne, was released in July 2003.</p>
  			</div>
		</div>
	</section>

	<section id="newsletter">
		<div class="contain">
			<h1>Subscribe to Our Newsletter</h1>
			 <form action="home.php" method="post">
				<input type="email" name="email" placeholder="Masukan email...">
				<button type="submit" class="btn_submitsubscribe" name="submitsubscribe">Subscribe</button>
			</form>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".box").on("click", "li", function(){
				var tabsId = $(this).attr("id");
				$(this).addClass("active").siblings().removeClass("active");
				$("#" + tabsId + "-content-box").addClass("active").siblings().removeClass("active");
			})
		})
	</script>
	<script type="text/javascript">
		$(function () {
  			$('[data-toggle="popover"]').popover()
		})
	</script>
</body>
</html>	