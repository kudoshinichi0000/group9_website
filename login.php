<?php
	include_once "db.php";
	include_once "functions.php";

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from admin where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);

					if(password_verify($password, $user_data['password']))
					{
						$_SESSION['username'] = $username;
						$_SESSION['userid'] = $user_data['userid'];
						header("Location: resultsadmin.php");
						die;

					}
				}
			}

			$_SESSION['errormessage'] = "Wrong Username or Password!";
			header("location: login.php");
			exit;
		}else
		{
			$_SESSION['errormessage'] = "Wrong Username or Password!";
			header("location: login.php");
			exit;
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<!-- If login info is not correct -->
	<?php include_once "db.php"; include_once "navbar2.php" ?>
	<?php if(isset($_SESSION['errormessage'])): ?>
		 <script type="text/javascript">
		 		alert('<?php echo $_SESSION['errormessage']; ?>');
		 </script>
		 <?php unset($_SESSION['errormessage']);
	 	endif;?>
		<!-- Admin Added -->
		<?php include_once "db.php"; include_once "navbar2.php" ?><
		<?php if(isset($_SESSION['regsuccess'])): ?>
			 <script type="text/javascript">
			 		alert('<?php echo $_SESSION['regsuccess']; ?>');
			 </script>
			 <?php unset($_SESSION['regsuccess']);
		 	endif;?>
	<div class="container">
		<div class="img">
			<img src="res/images/bg1.svg">
		</div>
		<div class="login-content">
			<form method="POST">
				<img src="res/images/prof.svg">
				<h2 class="title">LOGIN</h2>
							<div class="input-div one">
								 <div class="i">
										<i class="fas fa-user"></i>
								 </div>
								 <div class="div">
										<h5>Username</h5>
										<input type="text" name="username" class="input" required>
								 </div>
							</div>
							<div class="input-div pass">
								 <div class="i">
										<i class="fas fa-lock"></i>
								 </div>
								 <div class="div">
										<h5>Password</h5>
										<input type="password" name="password" class="input" required>
								 </div>
							</div>

							<input type="submit" class="btn" value="Login" id="login">
							<h4>Don't have any account?<a href="register.php">Sign Up</a></h4>
						</form>
				</div>
		</div>
		<script type="text/javascript" src="script/main01.js"></script>
</body>
</html>
