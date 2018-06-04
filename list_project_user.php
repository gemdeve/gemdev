<?php
	session_start();
	if (!isset($_SESSION["loggedIN"])){
		header("Location: login.php");
	exit();
		}
	require 'databases/upload.php';
		$username = $_SESSION["userName"];
	$retrieveprofile= query("SELECT * from users_detail where email = (SELECT email FROM users WHERE username ='$username')")[0];
?>

<?php 
	$NAMA = $_SESSION["userName"];
 ?>
	
<!DOCTYPE html>
<html>
<head>
	<title>List Project</title>
	<meta charset="utf-8">
	<!--------------------------------------------my own css and bootstrap css-------------------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="list_project_user.css">
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
							<li class="nav-item active"><a class="nav-link" href="./list_project_user.php">List Project</a></li>

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
		<h1> List Project</h1>
		<br>
		<?php 
			require_once("databases/Database.php");
			require_once("databases/users.php");
			$db = new users();
			
			$listproject = $db->select_all_project();
		?>	
			<table class="table table-dark" border="1">
			<tr>
			<th>id_project</th>
			<th>project_title</th>
			<th>category</th>
			<th>project_location</th>
			<th>funding_duration</th>
			<th>funding_goal</th>
			<th>email</th>
			</tr>
			
		<?php
		foreach ($listproject as $project) {
			echo "<tr>";
			echo "<td>", $project["id_project"], "</td>";
			echo "<td>", $project["project_title"], "</td>";
			echo "<td>", $project["category"], "</td>";
			echo "<td>", $project["project_location"], "</td>";
			echo "<td>", $project["funding_duration"], "</td>";
			echo "<td>", $project["funding_goal"], "</td>";
			echo "<td>", $project["email"], "</td>";
			echo "<td>";
			echo "<a href='project_view.php?id=" . $project['id_project']."'>View  </a>";
			echo "</td>";
			echo "</tr>";
		}
		?>
		</table>
		</p>
		
	</div>

	<br><br><br><br><br>
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