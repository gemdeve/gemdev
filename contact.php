
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
	<style>
	input::placeholder {
		font-size: 18px;
	}
	textarea::placeholder {
		font-size: 18px;
	}
	</style>
	<script> 
		function over(o)
			{
				o.style.backgroundColor = "#808080";
			}
		function out(o){
				o.style.backgroundColor = "#FD1D03";
			}
		</script>
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
	<script type="text/javascript">
		$('[data-trigger="manual"]').click(function() {
    	$(this).popover('toggle');
		}).blur(function() {
    	$(this).popover('hide');
		});
	</script>
</body>
</html>	