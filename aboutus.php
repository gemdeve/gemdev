
<!DOCTYPE html>
<html>
<head>
	<title>About Us GemDev</title>
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
							<li class="nav-item active"><a class="nav-link" href="./home.php">Home</a></li>
							<li class="nav-item active"><a class="nav-link" href="./StartProject.php">Start Project</a></li>

    						<li class="nav-item active">
								<button type="button" class="btn" id="icon-profile" data-toggle="popover" 
										data-placement="bottom" 
										data-trigger="manual"
										data-content="
										<a class='nav-link' href='./login.php' style='color:black'>Login</a>
										<a class='nav-link' href='./register.php' style='color:black'>Signup</a>"
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
			<article id="main-col">
				<h1 class="page-title">About Us</h1>
				<br>
				<h3>Sejarah GemDev</h3>
				<br>
				<p>
					Website ini dibuat dan dikembangkan oleh 3 orang Mahasiswa dari jurusan Teknik Informatika Univeristas Tarumanagara angkatan 2015. Sedangkan idenya sendiri sudah ada sejak semester genap tahun 2017. Ide pembuatan website ini muncul setelah salah satu mahasiswa merasa game developer dari Indonesia masih kalah bersaing dengan developer game luar, dimana salah satu kendala yang dialami game developer indonesia adalah masalah dana.
				</p><br>
				<hr><br>
				<h3>Apa Yang Kita Lakukan ?</h3>
				<br>
				<p>
					Kita mewadahi para developer game indonesia untuk mendapatkan bantuan dana melalui proses pengumpulan yang dilakukan di website kami. Developer game Indonesia baik yang amatir dan professional dapat melakukan proses pengumpulan dana untuk pengembangan game mereka dengan memanfaatkan website "GemDev" ini.
				</p><br>
				<hr><br>
				<h3>Team Kami</h3>
				<br>
				<p>
					Kami independen, website yang hanya dikendalikan oleh 3 developer bekerja bersama di Universitas Tarumanagara. Kami menghabiskan waktu kami untuk mendesain dan membuat GemDev, menghubungkan para developer game lokal dengan fans mereka melalui karya kreatif yang mereka ciptakan.
				</p>
				<p>
					Kami developer, desainer, support, partner dan masih banyak lagi. Kami positif dapat membantu developer game lokal untuk mewujudkan impian mereka dalam menerbitkan game ciptaan mereka kepada fans yang telah menunggu karya mereka.
				</p><br>
				</article>
			<aside id="sidebar">
				<h3>Developer GemDev:</h3>
				<br>
				<p>
					<img src="./img/fendy.jpg">
					<br>
					Nama : Fendy August
					<br>
					NIM	: 535150064
					<br>
					Jurusan : Teknik Informatika
				</p><br>
				<p>
					<img src="./img/tommy.jpg">
					<br>
					Nama : Tommy Wicaksono
					<br>
					NIM : 535150048
					<br>
					Jurusan : Teknik Informatika
				</p><br>

				<p>
					<img src="./img/mic.jpg">
					<br>
					Nama : Michael
					<br>
					NIM : 535150058
					<br>
					Jurusan : Teknik Informatika
				</p>
				</div>
			</aside>
			<hr>
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