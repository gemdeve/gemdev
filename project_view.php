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

		$email = $retrieveemail['email'];
		$retrievesaldopengguna= query(
			"SELECT saldo from users_detail where email='$email'")[0];
		$retrieveproject= query("SELECT * from project where id_project = '$id_project'")[0];
		$emailpembuat = $retrieveproject['email'];
		$retrievesaldopembuat= query(
			"SELECT saldo from users_detail where email='$emailpembuat'")[0];

		if(isset($_POST["submitrewards"])) {
			var_dump($retrievesaldopengguna['saldo'],$retrieveproject['r_amount']);
			$simpansementara = $id_project;
			if(($retrievesaldopengguna['saldo'] >= $retrieveproject['r_amount']))
			{
				if(kurang_saldo($email, $retrievesaldopengguna['saldo'], $retrieveproject['r_amount'])>0){
				{
				if(nambah_saldo_project($id_project, $retrieveproject['r_amount'])>0)
					{ 
						if(nambah_saldo($emailpembuat, $retrievesaldopembuat['saldo'], $retrieveproject['r_amount'])>0)
							{
							if(addprojectbacked($id_project, $retrieveproject['project_title'], $email, $emailpembuat)>0)
								{
									echo "
									<script>
			 						alert('Input Berhasil');
			 						document.location.href = 'project_view.php?id=$simpansementara';
									</script>";
								}
							else {
									echo "
									<script>
			 						alert('Input GAGAL');
			 						document.location.href = 'project_view.php?id=$simpansementara';
									</script>";
								}
							}
					}
				}					
			}
		}}

		?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="unititled">
	<meta name="keywords" content="HTML5 Crowdfunding Profile Template">
	<meta name="author" content="Audain Designs">
	<link rel="shortcut icon" href="favicon.ico">  
	<title>Launch - HTML5 Crowdfunding Profile Template</title>

	<!-- Gobal CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Template CSS -->
	<link href="assets/css/style.css" rel="stylesheet">

	<!--Fonts-->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<!--Google Analytics-->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-12345678-9', 'auto');
		ga('send', 'pageview');

	</script>
</head>
<body>
	<!--header-->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="goal-summary pull-left">
					<div class="funded">
						<h3><?php echo $retrieveproject["saldo"]; ?> Points</h3>
						<span>raised out of <?php echo $retrieveproject["funding_goal"]; ?> Points</span>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--/header-->
	<!--main content-->
	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="content col-md-8 col-sm-12 col-xs-12">
					<div class="section-block">
						<div class="funding-meta">
							<h1><?php echo $retrieveproject["project_title"]; ?></h1>
							<span class="type-meta"><i class="fa fa-user"></i> <?php echo $retrieveproject["category"]; ?></span>
							<span class="type-meta"><i class="fa fa-user"></i> <?php echo $retrieveproject["project_location"]; ?></span>
							<!--img src="assets/img/image-heartbeat.jpg" class="img-responsive" alt="launch HTML5 Crowdfunding"-->
							<div class="video-frame">
								<iframe src="<?php echo $retrieveproject["s_video"]; ?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
							
							<h2><?php echo $retrieveproject["saldo"]; ?> Points</h2>							
							<span class="contribution">raised out of <strong><?php echo $retrieveproject["funding_goal"]; ?></strong> points</span>
							
						
						</div>
						
					</div>
					<!--signup-->
					
					<!--/signup-->
					<!--tabs-->
					<div class="section-block">
						<div class="section-tabs">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">Project Description</a></li>
						</div>
					</div>
					<!--/tabs-->
					<!--tab panes-->
					<div class="section-block">
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="about">
								<div class="about-information">
									<h1 class="section-title"><?php echo $retrieveproject["project_title"]; ?></h1>
									<p><img src = "project/<?php echo $retrieveproject["project_image_new"]; ?>" width='600' height='400'/></p>
									<p><?php echo $retrieveproject["s_description"]; ?></p>

								</div>
							</div>
						
						</div>
					</div>
				</div>
				<!--/tabs-->
				<!--/main content-->
				<!--sidebar-->
				<div class="content col-md-4 col-sm-12 col-xs-12">
					<div class="section-block summary">
						<h1 class="section-title">GEMDEV</h1>
						<div class="profile-contents">
							<h2 class="position">GIVE 'EM 'DE EVOLUTION</h2>
							<img src="assets/img/profile-img.jpg" class="profile-image img responsive" alt="John Doe">
							<!--social links-->
							<ul class = "list-inline">
				<li><a href="https://www.facebook.com/GemDev-1233795066722877/" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/gemdev2"  target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
			</ul>
							<!--/social links-->
							<a class="btn btn-contact"><i ></i>2018</a>
						</div>
					</div>
					<?php  if($email != $emailpembuat) { ?>

						<div class="section-block">
							<h1 class="section-title">REWARDS</h1>
							<!--reward blocks-->
							<div class="reward-block">
								<h3> <?php echo $retrieveproject["r_amount"]; ?> Points</span></h3>
								<h2><?php echo $retrieveproject["r_title"]; ?></h2>
								<p><?php echo $retrieveproject["r_description"]; ?></p>
								<form method="post">
								<input type="submit" name="submitrewards" value="Submit">
								</form>
							<!--/reward blocks-->
							</div>
						</div>
					<?php } ?>
				<!--/sidebar-->
			</div>
		</div>
	</div>

	
	<!-- Global jQuery -->
	<script type="text/javascript" src="assets/js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	
	<!-- Template JS -->
	<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>
