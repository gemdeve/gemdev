<?php
	session_start();
	if (!isset($_SESSION["loggedIN"])) {
		header("Location: login.php");
		exit();
	}
	require 'databases/upload.php';
	require_once("databases/Database.php");
	require_once("databases/users.php");
	$id_project = $_GET['id'];
	var_dump($id_project);
	$db = new users();
	$username = $_SESSION["userName"];
	$project = isset($id_project) ? $db->select_by_id_project($id_project) : array ();
	$retrieveprofile= query("SELECT * from users_detail where email = (SELECT email FROM users WHERE username ='$username')")[0];
	if ($_POST) {
		$id_project = trim($_POST['id_project']);
		if ($db->delete_project($id_project)) {
			header("Location: created_project.php");
			exit();
		}
		else 
			array_push($errors, "Gagal menghapus project");
	}

	// jika ?id=<id> di-set pada URL, maka dapatkan informasi buku tersebut
	$book = isset($_GET['id_project']) ? $db->select_by_id_project($_GET['id_project']) : array();
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
	<title>Create Project</title>
	<meta charset="utf-8">
	<!--------------------------------------------my own css and bootstrap css-------------------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="Policy.css">
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
	<br><br>
<section id="Policy">
		<div class="contain">
		<h1 style="text-align:left">Delete Project</h1>
		<br>
		<?php if ($_POST && (count($errors) > 0)) { ?>
		<p style="color:red">
			<strong>Errors:</strong>
			<ul>
			<?php foreach ($errors as $error) { ?>
				<li><?php echo $error; ?></li>
			<?php } ?>	
			</ul>
		</p>
		<?php } ?>
		<form method="post">
			<input type="hidden" name="id_project" value="<?php echo $id_project;?>">
			<table>
				<tr>
					<td>Project Title</td>
					<td>
						<input type="text" nama="project_title" readonly value="<?php echo $project['project_title']; ?>">
					</td>
				</tr>
				<tr>
					<td>Category</td>
					<td>
						<input type="text" name="category" readonly value="<?php echo $project['category']; ?>" readonly>
					</td>
				</tr>
				<tr>
			</table>
			<br>
			<input type="submit" name="submit" value="Delete">
			<a href="created_project.php">Cancel</a>
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
	<script type="text/javascript">
		$('[data-trigger="manual"]').click(function() {
    	$(this).popover('toggle');
		}).blur(function() {
    	$(this).popover('hide');
		});
	</script>
</body>
</html>	