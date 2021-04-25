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

			echo "wrong name or pass!";
		}else
		{
			echo "wrong username or password!";
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
	<?php include_once "db.php"; include_once "navbar.php" ?><br><br>

	<div id="box">
		<form method="POST">
			<table class="formchild" style="border-radius: 1em;">
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
            <br><td colspan="2">
              <input type="submit" value="LOGIN" id="login">
            </td>
        </tr>
        		<tr>
          			<td><br><a href="main.php" class="main">Go back</a></td>
          	</tr>
			</table>
		</form>
	</div>

</body>
	<?php include_once "footer.php"; ?>
</html>
