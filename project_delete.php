<?php
	session_start();
	if (!isset($_SESSION["loggedIN"])) {
		header("Location: login.php");
		exit();
	}

	require_once("databases/Database.php");
	require_once("databases/users.php");
	$id_project = $_GET['id'];
	$db = new users();
	$project = isset($id_project) ? $db->select_by_id_project($id_project) : array ();

	if ($_POST) {
		$id_project = trim($_POST['id_project']);
		if ($db->delete_project($id_project)) {
			header("Location: list_project.php");
			exit();
		}
		else 
			array_push($errors, "Gagal menghapus project");
	}

	// jika ?id=<id> di-set pada URL, maka dapatkan informasi buku tersebut
	$book = isset($_GET['id_project']) ? $db->select_by_id_project($_GET['id_project']) : array();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Project Admin</title>
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
		<h1>Delete Project</h1>
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
		<form method="post" action="project_delete.php">
			<input type="hidden" name="id_project" value="<?php echo $id_project;?>">
			<table>
				<tr>
					<td>Project Title</td>
					<td>
						<input type="text" nama="project_title" value="<?php echo $project['project_title']; ?>">
					</td>
				</tr>
				<tr>
					<td>Category</td>
					<td>
						<input type="text" name="category" value="<?php echo $project['category']; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>Project Location</td>
					<td>
						<input type="text" name="project_location" value="<?php echo $project['project_location']; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>Funding Duration</td>
					<td>
						<input type="text" name="funding_duration" value="<?php echo $project['funding_duration']; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>Funding Goal</td>
					<td>
						<input type="text" name="funding_goal" value="<?php echo $project['funding_goal']; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>
						<input type="text" name="email" value="<?php echo $project['email']; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>Rewards Title</td>
					<td>
						<input type="text" name="r_title" value="<?php echo $project['r_title']; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>Rewards Amount</td>
					<td>
						<input type="text" name="r_amount" value="<?php echo $project['r_amount']; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>Rewards Description</td>
					<td>
						<input type="text" name="r_description" value="<?php echo $project['r_description']; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>Video</td>
					<td>
						<input type="text" name="s_video" value="<?php echo $project['s_video']; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>Video Description</td>
					<td>
						<input type="text" name="s_description" value="<?php echo $project['s_description']; ?>" readonly>
					</td>
				</tr>
				
			</table>
			<br>
			<input type="submit" name="submit" value="Delete">
			<a href="list_project.php">Cancel</a>
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
				<li><a href="http://facebook.com/" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
				<li><a href="http://twitter.com/"  target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
			</ul>
		</div>
	
		<div class="ftr-bottom-section-wrapper">
			<i class="fa fa-copyright"></i>GemDev 2018 <address class="footer-address" role="company address">Jakarta, Indonesia</address>
		</div>
		<div class="ftr-bottom-section-wrapper">
			<a href="Terms_admin.php">Terms of Use</a> | <a href="./Policy_admin.php">Privacy Policy</a>
		</div>
	</footer>
	<!-------------------------------------------js cdn---------------------------------------------->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
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
</body>
</html>	

	</body>
</html>