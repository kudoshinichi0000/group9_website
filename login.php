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

					if($user_data['password'] === $password)
					{

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
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<style media="screen">
		body{
			background-image: url("css/images/LogBackground.jfif");
			margin: 0;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>
<body>
	<!-- If login info is not correct -->
	<?php include_once "db.php"; include_once "navbar.php" ?><br><br>
	<?php if(isset($_SESSION['errormessage'])): ?>
		 <script type="text/javascript">
		 		alert('<?php echo $_SESSION['errormessage']; ?>');
		 </script>
		 <?php unset($_SESSION['errormessage']);
	 	endif;?>
		<!-- Admin Added -->
		<?php include_once "db.php"; include_once "navbar.php" ?><br><br>
		<?php if(isset($_SESSION['regsuccess'])): ?>
			 <script type="text/javascript">
			 		alert('<?php echo $_SESSION['regsuccess']; ?>');
			 </script>
			 <?php unset($_SESSION['regsuccess']);
		 	endif;?>
	<div id="box">
		<form method="POST">
			<table class="formchild" style="border-radius: 2em;">
				<tr>
					<th><br><div class="centerBlack">Login</div></th>
				</tr>
				<tr>
					<td><input type="text" name="username" placeholder="Username:" class="btnon" required></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Password: " class="btnon" required> </td>
				</tr>
				<tr>
            <td colspan="2"><input type="submit" value="LOGIN" id="login"></td>


        </tr>
        		<tr>
								<td colspan="2"><input type="submit" value="LOGIN" id="login"></td>
								<i class="far fa-arrow-alt-circle-left"></i>
          	</tr>
						<tr id="formFooter">
								<td colspna="2">Don't have any account?</td>
						</tr>
						<tr>
							<td><a class="underlineHover" href="register.php">Register</a></td>
						</tr>
			</table>
		</form>
	</div>

</body>
		<?php include_once "footerr.php";?>
</html>
