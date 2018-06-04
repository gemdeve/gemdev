<?php 	
		session_start();
		if (!isset($_SESSION["loggedIn"]) && !isset($_SESSION["user_id"]))
		{
			header("Location: login.php");
			exit();
		}
		
		require 'databases/upload.php';
		$username = $_SESSION["userName"];
		$retrieveprofile= query("SELECT * from users_detail where email = (SELECT email FROM users WHERE username ='$username')")[0];
		$retrieveemail= query("SELECT email from users where username='$username'")[0];
		
	if(isset($_POST["submitbasics"])) {
		if(addproject($_POST)>0)
			{
			echo "
			<script>
			 	alert('Input Berhasil');
			</script>
		";
			}
			else
			{
			echo "
			<script>
			 	alert('Input Gagal');
			</script>
		";			}
	}

 ?>


<?php 
	$NAMA = $_SESSION["userName"];
 ?>

<!DOCTYPE html>
<html>
<head>
	<style>
	img {
    border-radius: 50%;
	}
	</style>
	<title>Add Project</title>
	<meta charset="utf-8">
	<!--------------------------------------------my own css and bootstrap css-------------------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="add_project.css">
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

    						<li class="nav-item active">
								<button type="button" class="btn" id="icon-profile" data-toggle="popover" 
										data-placement="bottom" 
										data-trigger="manual"
										title='Welcome , <?= $NAMA?>'
										data-content="
										<a class='nav-link' href='./created_project.php' style='color:black'>Created Project</a>
										<a class='nav-link' href='./add_project.php' style='color:black'>Add Project</a>
										<a class='nav-link' href='./backed_project.php' style='color:black'>Backed Project</a>
										<a class='nav-link' href='./profile.php' style='color:black'>Profile</a>										
										<a class='nav-link' href='./settings.php' style='color:black'>Settings</a>
										<a class='nav-link' href='./logout.php' style='color:black'>Logout</a>"
										data-html="true">
									<img src = "account/<?php echo $retrieveprofile["filefotoprofil"]; ?>" width='25' height='25'/>
								</button>
							</li>					
						</ul>
				</nav>
		</div>
	</header>
	<br><br><br>
		<div class="container">

  				<h2>Add New Project</h2>
  				<br>
  <!-- Nav pills -->
				  <ul class="nav nav-pills" role="tablist">
				    <li class="nav-item">
				      <a class="nav-link active" data-toggle="pill" href="#basics">Basics</a>
				    </li>
				  </ul>

				   <!-- Tab panes -->
			  <div id="tabContent" class="tab-content">
			    <div id="basics" class="container tab-pane active"><br>
			      <h3>Basics</h3>
			      <form action="add_project.php" method="post" enctype="multipart/form-data">
			      	<div class="form-group">
							<label class="badge badge-success">Project Image (600px*400px) : </label>	
							<input class="form-control" type="file" name="project_image">
						</div>

					<div class="form-group">
							<label class="badge badge-success">Project Title (2 - 4 Words) : </label>	
							<input class="form-control" type="text" name="project_title">
					</div>

					<div class="form-group">
							<label class="badge badge-success">Category :</label>	
							<select class="form-control" name="category" required="">
								<option value ="Action">Action</option>
								<option value="RPG">RPG</option>
								<option value="Simulation">Simulation</option>
								<option value="Strategy">Strategy</option>
						</select>	
					</div>
					
					<div class="form-group">
							<label class="badge badge-success">Project Location :</label>	
								<select class="form-control" name="project_location" required="">
								<option value ="Jakarta">Jakarta</option>
								<option value="Bandung">Bandung</option>
								<option value="Surabaya">Surabaya</option>
						</select>	
					</div>

					<div class="form-group">
							<label class="badge badge-success">Funding Duration :</label>	
							<select class="form-control" name="funding_duration" required="">
								<option value ="10">10</option>
								<option value="20">20</option>
								<option value="30">30</option>
						</select>	
					</div>

					<div class="form-group">
						<label class="badge badge-success">Funding Goal :</label>	
							<select class="form-control" name="funding_goal" required="">
								<option value ="10000">10000</option>
								<option value="50000">50000</option>
								<option value="100000">100000</option>
							</select>	
					</div>
					<input type="hidden" name="email" value="<?php echo $retrieveemail['email']; ?>">
					<input type="submit" name="submitbasics" value="Submit">
					</form>
			    </div>
			</div>
		</div>
		<br><br><br><br>
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
			</ul>
		</div>
	
		<div class="ftr-bottom-section-wrapper">
			<i class="fa fa-copyright"></i>GemDev 2018 <address class="footer-address" role="company address">Jakarta, Indonesia</address>
		</div>
		<div class="ftr-bottom-section-wrapper">
			<a href="Terms1.php">Terms of Use</a> | <a href="./Policy1.php">Privacy Policy</a>
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



