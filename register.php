<?php
include("db.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
  //something was posted
  $username = $_POST['username'];
  $password = $_POST['password'];

  if(!empty($username) && !empty($password) && !is_numeric($username))
  {

    //save to database
    $user_id = random_num(20);
    //$query = "insert into admin (user_id,username,password) values ('$userid','$username','$password')";

    //mysqli_query($con, $query);

    $sql = "INSERT INTO admin (userid, username, password) VALUES ( '$user_id', '$username', '$password')";
    if (mysqli_query($con, $sql)) {
      $_SESSION['regsuccess'] = "Admin Added!";
			header("location: login.php");
			exit;
    }
    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
  }
  else{
    $_SESSION['registererror'] = "Please Input some Valid Information!";
    header("location: register.php");
    exit;
  }
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css">
  </head>
  <body>
    <?php include_once "db.php"; include_once "navbar.php" ?><br><br>
  	<?php if(isset($_SESSION['errormessage'])): ?>
  		 <script type="text/javascript">
  		 		alert('<?php echo $_SESSION['registererror']; ?>');
  		 </script>
  		 <?php unset($_SESSION['registererror']);
  	 	endif;?>
    <form method="post">
			<h1>Register</h1>

			<input id="text" type="text" name="username"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
  </body>
</html>
