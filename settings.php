<!DOCTYPE html>

<?php 	
		session_start();
		if (!isset($_SESSION["loggedIn"]) && !isset($_SESSION["user_id"]))
		{
			header("Location: login.php");
			exit();
		}
		
		require 'databases/upload.php';
		$username = $_SESSION["userName"];
		$retrieveemail= query("SELECT email from users where username='$username'")[0];
		$retrieveprofile= query("SELECT * from users_detail where email = (SELECT email FROM users WHERE username ='$username')")[0];

		/*$lokasi = [["location"=>"Jakarta"],["location"=>"Bandung"],["location"=>"Surabaya"]];
		var_dump($lokasi);*/

		if(isset($_POST["submitpassword"])) {
		$passlama = $_POST["passlama"];
		$passbaru =	$_POST["passbaru"];
		$user_id = $_SESSION["user_id"];

		//validasi input
		$errors = array();
		if (strlen($passlama) == 0){
			array_push($errors, "Password Lama tidak boleh kosong");
		}
		if (strlen($passbaru) == 0) {
			array_push($errors, "Password Baru tidak boleh kosong");
		}
		if (count($errors) == 0) {
			require_once("databases/Database.php");
			require_once("databases/users.php");

			$db = new Users();
			if ($db->gantipassword($passbaru,$user_id)){
					session_destroy();
					header("Location: login.php");
				exit();
				}
				else {
					array_push($errors, "Gagal Ganti Password");
				}
			
		}
	}

	if(isset($_POST["submitprofile"])) {
		if(edit_account($_POST)>0)
			{
			echo "
			<script>
			 	alert('Input Berhasil');
			 	document.location.href = 'settings.php';
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

	<title>Settings</title>
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

<section id="main">
	<div class="contain">
  <h2>Settings</h2>
  <br>
  <!-- Nav pills -->
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#changepassword">Change Password</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#edit_profile">Edit Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#wallet">Wallet</a>
    </li>
  </ul>

  <!-- Tab panes -->

  <div id="tabContent" class="tab-content">
    <div id="changepassword" class="container tab-pane active"><br>
      <h3>Change Password</h3>
      <form action="settings.php" method="post">
			<div class="form-group">
				<label class="badge badge-success">Old Password :</label>	
				<input class="form-control" type="password" name="passlama">
			</div>
			<div class="form-group">
				<label class="badge badge-warning">New Password :</label>   
				<input class="form-control" type="password" name="passbaru">
			</div>
			<input type="submit" name="submitpassword" value="Change Password">
		</form>
	</div>

    <div id="edit_profile" class="container tab-pane"><br>
      <h3>Edit Profile</h3>
       <form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label class="badge badge-success">Name :</label>	
				<input class="form-control" type="text" name="nama" value="<?php echo $retrieveprofile["nama"]?>">
			</div>
			<div class="form-group">
				<label class="badge badge-warning">Biography (Max 100 Words) :</label>   
				<textarea class="form-control" name="biografi" rows="5"> <?php echo $retrieveprofile["biografi"]; ?></textarea>
			</div>

			<div class="form-group">
				<label class="badge badge-success">Profile Photo (200px*200px) :</label>	
				<input class="form-control" type="file" name="fotoprofil" value="<?php echo $retrieveprofile["filefotoprofil"]; ?>"><img src="account/<?php echo $retrieveprofile["filefotoprofil"]; ?>">
			</div>

			<div class="form-group">
				<label class="badge badge-success">Location :</label>	
					<select class="form-control" name="lokasi" required="">

				<?php if ($retrieveprofile["lokasi"]=="") : ?>
						<option value ="Jakarta">Jakarta</option>
						<option value="Bandung">Bandung</option>
						<option value="Surabaya">Surabaya</option>
				<?php else : ?>
					<option value="<?php echo $retrieveprofile["lokasi"]; ?>"><?php echo $retrieveprofile["lokasi"]; ?></option>
					<?php foreach($lokasi as $l) : ?>
						<?php if($l["location"] != $retrieveprofile["lokasi"]) : ?>
							<option value="<?php echo $l["location"]; ?>"><?php echo $l["location"]; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</select>	
		</div>
			<input type="hidden" name="oldphoto" value="<?php echo $retrieveprofile['filefotoprofil']; ?>">
			<input type="submit" name="submitprofile" value="Submit">
			<input type="hidden" name="emailprofile" value="<?php echo $retrieveemail["email"]?>">
		</form>
    </div>

     <div id="wallet" class="container tab-pane"><br>
      <h3>Wallet</h3>
      <form action="settings.php" method="post">
			<div class="form-group">
				<label class="badge badge-success">Balance :</label>	
				<input class="form-control" type="text" name="saldo" readonly="" value="<?php echo $retrieveprofile["saldo"]; ?>">
			</div>
	
			<input type="submit" name="topup" value="Top Up" <a href="https://www.paypal.com/id/home" target="_blank" title="topup">
			<input type="submit" name="redeem" value="Redeem" <a href="https://www.paypal.com/id/home" target="_blank" title="topup">
		</form>
	</div>
  </div>
</div>
</section>

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
