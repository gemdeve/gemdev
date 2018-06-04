<?php
	if ($_POST){
		$username = trim($_POST["username"]);
		$password = trim($_POST["password"]);
		$repassword = trim($_POST["repassword"]);
		$email = trim($_POST["email"]) ;

		// validasi input
		$errors = array();
		if(strlen(trim($username))==0) {
			array_push($errors, "Username tidak boleh kosong");
		}
		if(strlen($password)==0){
			array_push($errors, "Password harus diisi");
		}
		if(strlen($email)==0){
			array_push($errors, "Email harus diisi");
		}

		if(count($errors)==0){
			//Insert ke database jika tidak ada error
			require_once("databases/Database.php");
			require_once("databases/users.php");

			$db = new Users();

			if($repassword == $password)
			{
				if($db->insert($email, $username, $password)) 
				{
					if($db->insertdetail($email))
					{
					header("Location: login.php");
					exit();
					}
				}
				else {
					echo "
	                <script>
	                    alert('Sign Up Failed');
	                    document.location.href = 'register.php';
	                </script>
	            ";
				}
			}
			else {
					echo "
	                <script>
	                    alert('PAssword sama Failed');
	                    document.location.href = 'register.php';
	                </script>
	            ";
				}
			}
		
	}
?>

<html>
<head>
	<title>Register GemDev</title>
	<meta charset="utf-8">
	<!--------------------------------------------my own css and bootstrap css-------------------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="login.css">
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
							<li class="nav-item active"><a class="nav-link" href="./login.php">Sign In</a></li>
						</ul>
					</nav>
		</div>
	</header>

	<section class="main">
		<div class="row">
			<section class="col-12 col-sm-6 col-md-3 ml-5">
			<form class="form-container" action="register.php" method="post">
				<h1 class="text-center font-weight-bold">Sign Up</h1>
				<div class="form-group">
						<input type="email"  class="form-control" name="email" placeholder="Masukan Email" required>
				</div>
				<div class="form-group">
						<input type="text"  class="form-control" name="username" placeholder="Masukan Username" required>
				</div>
				<div class="form-group">
						<input type="Password" class="form-control" name="password" placeholder="Password" required>
				</div>
				<div class="form-group">
						<input type="text"  class="form-control" name="repassword" placeholder="Re-enter Password" required>
				</div>
				<div>
						<input type="submit" class="btn btn-primary btn-block" name="submit" value="Sign Up">
				</div>
			</form>
			</section>
		</div>
	</section>
	
</body>
</html>
