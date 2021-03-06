<?php 	
		session_start();
		if (!isset($_SESSION["loggedIn"]) && !isset($_SESSION["user_id"]))
		{
			header("Location: login.php");
			exit();
		}
		$id_project = $_GET['id'];

		require 'databases/upload.php';
		$username = $_SESSION["userName"];
		$retrieveemail= query("SELECT email from users where username='$username'")[0];
			$retrieveprofile= query("SELECT * from users_detail where email = (SELECT email FROM users WHERE username ='$username')")[0];

		$retrieveproject= query("SELECT * from project where id_project = '$id_project'")[0];

		$category = [["kategori"=>"Action"],["kategori"=>"RPG"],["kategori"=>"Strategy"],["kategori"=>"Simulation"]];

		$lokasi = [["location"=>"Jakarta"],["location"=>"Bandung"],["location"=>"Surabaya"]];

		$fd = [["fdu"=>"10"],["fdu"=>"20"],["fdu"=>"30"]];

		$fg = [["fgo"=>"10000"],["fgo"=>"50000"],["fgo"=>"100000"]];
		$r_deliv = [["deliv"=>"2018"],["deliv"=>"2019"]];

			if(isset($_POST["submitstory"])) {
			$simpansementara = $id_project;
			if(edit_project_story($_POST)>0)
			{
				
				echo "
					<script>
			 			alert('Input Berhasil');
			 			document.location.href = 'edit_project.php?id=$simpansementara';
					</script>";
			}
			else
			{
				echo "
					<script>
			 			alert('Input Gagal');
					</script>";			
			}


	}

		if(isset($_POST["submitrewards"])) {
			$simpansementara = $id_project;
			if(edit_project_rewards($_POST)>0)
			{
				
				echo "
					<script>
			 			alert('Input Berhasil');
			 			document.location.href = 'edit_project.php?id=$simpansementara';
					</script>";
			}
			else
			{
				echo "
					<script>
			 			alert('Input Gagal');
					</script>";			
			}


	}

		if(isset($_POST["submitbasics"])) {
			$simpansementara = $id_project;
			if(edit_project_basics($_POST)>0)
			{
				
				echo "
					<script>
			 			alert('Input Berhasil');
			 			document.location.href = 'edit_project.php?id=$simpansementara';
					</script>";
			}
			else
			{
				echo "
					<script>
			 			alert('Input Gagal');
					</script>";			
			}


	}

?>
<?php
	$NAMA = $_SESSION["userName"];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Project</title>
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
<div class="container">
  <h2>Edit Project</h2>
  <br>
  <!-- Nav pills -->
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#basics">Basics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#rewards">Rewards</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#story">Story</a>
    </li>
  </ul>

   <!-- Tab panes -->
  <div id="tabContent" class="tab-content">
    <div id="basics" class="container tab-pane active"><br>
      <h3>Basics</h3>
      <form method="post" enctype="multipart/form-data">

      	<input type="hidden" name="id_project" value="<?php echo $id_project; ?>">
      	<input type="hidden" name="oldphoto" value="<?php echo $retrieveproject["project_image_new"] ?>">

      	<div class="form-group">
				<label class="badge badge-success">Project Image (600px*400px) : </label>	
				<input class="form-control" type="file" name="project_image" value="<?php echo $retrieveproject["project_image_new"]; ?>">
				<img width="50" src="project/<?php echo $retrieveproject["project_image_new"]; ?>">
		</div>

		<div class="form-group">
				<label class="badge badge-success">Project Title (2 - 4 Words) : </label>	
				<input class="form-control" type="text" name="project_title" value="<?php echo $retrieveproject["project_title"]?>">
		</div>

		<div class="form-group">
				<label class="badge badge-success">Category :</label>	
				<select class="form-control" name="category" required="">
					<?php if ($retrieveproject["category"]=="") : ?>
					<option value ="Action">Action</option>
					<option value="RPG">RPG</option>
					<option value="Simulation">Simulation</option>
					<option value="Strategy">Strategy</option>
					<?php else : ?>
					<option value="<?php echo $retrieveproject["category"]; ?>"><?php echo $retrieveproject["category"]; ?></option>
					<?php foreach($category as $l) : ?>
						<?php if($l["kategori"] != $retrieveproject["category"]) : ?>
							<option value="<?php echo $l["kategori"]; ?>"><?php echo $l["kategori"]; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</select>	
		</div>
		
		<div class="form-group">
				<label class="badge badge-success">Project Location :</label>	
					<select class="form-control" name="project_location" required="">
				<?php if ($retrieveproject["project_location"]=="") : ?>
						<option value ="Jakarta">Jakarta</option>
						<option value="Bandung">Bandung</option>
						<option value="Surabaya">Surabaya</option>
				<?php else : ?>
					<option value="<?php echo $retrieveproject["project_location"]; ?>"><?php echo $retrieveproject["project_location"]; ?></option>
					<?php foreach($lokasi as $l) : ?>
						<?php if($l["location"] != $retrieveproject["project_location"]) : ?>
							<option value="<?php echo $l["location"]; ?>"><?php echo $l["location"]; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</select>	
		</div>

		<div class="form-group">
				<label class="badge badge-success">Funding Duration (Days):</label>	
				<select class="form-control" name="funding_duration" required="">

				<?php if ($retrieveproject["funding_duration"]=="") : ?>
					<option value="10">10</option>
					<option value="20">20</option>
					<option value="30">30</option>

				<?php else : ?>
					<option value="<?php echo $retrieveproject["funding_duration"]; ?>"><?php echo $retrieveproject["funding_duration"]; ?></option>
					<?php foreach($fd as $l) : ?>
						<?php if($l["fdu"] != $retrieveproject["funding_duration"]) : ?>
							<option value="<?php echo $l["fdu"]; ?>"><?php echo $l["fdu"]; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</select>	
		</div>

		<div class="form-group">
			<label class="badge badge-success">Funding Goal :</label>	
				<select class="form-control" name="funding_goal" required="">
				<?php if ($retrieveproject["funding_goal"]=="") : ?>
					<option value ="10000">10000</option>
					<option value="50000">50000</option>
					<option value="100000">100000</option>
				<?php else : ?>
					<option value="<?php echo $retrieveproject["funding_goal"]; ?>"><?php echo $retrieveproject["funding_goal"]; ?></option>
					<?php foreach($fg as $l) : ?>
						<?php if($l["fgo"] != $retrieveproject["funding_goal"]) : ?>
							<option value="<?php echo $l["fgo"]; ?>"><?php echo $l["fgo"]; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>
				</select>	
		</div>
		<input type="submit" name="submitbasics" value="Submit">
		</form>
    </div>
 <!-- END OF BASICS -->

 <!-- REWARDS -->
    <div id="rewards" class="container tab-pane"><br>
      <h3>Rewards</h3>
       <form  method="post">
       		 <input type="hidden" name="id_project" value="<?php echo $id_project; ?>">
       		<div class="form-group">
				<label class="badge badge-success">Title (2 - 4 Words) :</label>	
				<input class="form-control" type="text" name="r_title" value="<?php echo $retrieveproject["r_title"]?>">
			</div>
			<div class="form-group">
				<label class="badge badge-success">Pledge Amount (Preferred 10 - 100 Points) :</label>	
				<input class="form-control" type="text" name="r_amount" value="<?php echo $retrieveproject["r_amount"]?>">
			</div>

			<div class="form-group">
				<label class="badge badge-success">Description (Max 100 Words) :</label>	
				<textarea class="form-control" rows="5" name="r_description" value="<?php echo $retrieveproject["r_description"]?>"></textarea>
			</div>
			<div class="form-group">
				<label class="badge badge-warning">Estimated Delivery :</label>   
					<select class="form-control" name="r_deliv" required="">

					<?php if ($retrieveproject["r_deliv"]=="") : ?>
					<option value ="2018">2018</option>
					<option value="2019">2019</option>

				<?php else : ?>
					<option value="<?php echo $retrieveproject["r_deliv"]; ?>"><?php echo $retrieveproject["r_deliv"]; ?></option>
					<?php foreach($r_deliv as $l) : ?>
						<?php if($l["deliv"] != $retrieveproject["r_deliv"]) : ?>
							<option value="<?php echo $l["deliv"]; ?>"><?php echo $l["deliv"]; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>
				</select>	

			</div>
		<input type="submit" name="submitrewards" value="Submit">
		</form>
    </div>

    <div id="story" class="container tab-pane"><br>
      <h3>Story</h3>
       <form  method="post" > 
       	<input type="hidden" name="id_project" value="<?php echo $id_project; ?>">
       		<div class="form-group">
				<label class="badge badge-success">Project Video (Link Embed) :</label>	
				<input class="form-control" type="text" name="s_video" value="<?php echo $retrieveproject["s_video"]?>">
			</div>

			<div class="form-group">
				<label class="badge badge-success">Project Description (Max 100 Words) : </label>	
				<textarea class="form-control" rows="5" name="s_description" value="<?php echo $retrieveproject["s_description"]?>"></textarea>
			</div>
			
		<input type="submit" name="submitstory" value="Submit">
		</form>
    </div>
  </div>
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

