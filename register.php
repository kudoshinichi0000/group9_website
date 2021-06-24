<?php
include("db.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
  //something was posted
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password_conf = $_POST['password_conf'];
  // CHECK IF CONFIRMED PASSWORD IS THE SAME AS PASSWORD
  if ($password == $password_conf) {
    // CHECK IF INPUT IS NOT EMPTY AND USERNAME IS NOT NUMERIC
  if(!empty($username) && !empty($password) && !is_numeric($username))
  {
    // $var = "SELECT count(*) FROM admin";
    // $query = $con2-> query($var);

    // CHECK IF USERNAME IS ALREADY TAKEN
    $queryString = "SELECT count(*) as countusers FROM admin WHERE username = '$username'";
    $result = mysqli_query($con, $queryString);
    while($row = mysqli_fetch_assoc($result))
    {
      //
      if($row["countusers"] != 0)
      {
        $_SESSION['userexists'] = "Username Already Exists!";
        header("location: register.php");
        exit;
      }
      else {// ACTUAL PROCESS IF USER ARE NOT REGISTERED
        $user_id = rand();

        $password = password_hash($password, PASSWORD_DEFAULT);
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
    }
  }

  else{
    $_SESSION['registererror'] = "Please Input some Valid Information!";
    header("location: register.php");
    exit;
  }
  }
  else {
    $_SESSION['passerror'] = "Password is not Matched!";
    header("location: register.php");
    exit;
  }
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1">
  </head>
  <body>
    <!-- If User Exists -->
    <?php include_once "db.php"; include_once "navbar2.php" ?>
  	<?php if(isset($_SESSION['userexists'])): ?>
  		 <script type="text/javascript">
  		 		alert('<?php echo $_SESSION['userexists']; ?>');
  		 </script>
  		 <?php unset($_SESSION['userexists']);
  	 	endif;?>
    <!-- If register is not successful -->
    <?php include_once "db.php"; include_once "navbar2.php" ?>
  	<?php if(isset($_SESSION['registererror'])): ?>
  		 <script type="text/javascript">
  		 		alert('<?php echo $_SESSION['registererror']; ?>');
  		 </script>
  		 <?php unset($_SESSION['registererror']);
  	 	endif;?>
      <!-- If Register is Successful -->
      <?php include_once "db.php"; include_once "navbar2.php" ?>
    	<?php if(isset($_SESSION['regsuccess'])): ?>
    		 <script type="text/javascript">
    		 		alert('<?php echo $_SESSION['regsuccess']; ?>');
    		 </script>
    		 <?php unset($_SESSION['regsuccess']);
    	 	endif;?>
        <!-- if Password is incorrect -->
        <?php include_once "db.php"; include_once "navbar2.php" ?>
      	<?php if(isset($_SESSION['passerror'])): ?>
      		 <script type="text/javascript">
      		 		alert('<?php echo $_SESSION['passerror']; ?>');
      		 </script>
      		 <?php unset($_SESSION['passerror']);
      	 	endif;?>
          <br>
          <div class="container">
      		<div class="img">
      			<img src="res/images/bg5.svg">
      		</div>
      		<div class="login-content">
      			<form method="POST" e enctype="multipart/form-data">
      				<img src="res/images/prof.svg">
      				<h2 class="title">SignUp</h2>
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
      								 		<i class="fas fa-unlock-alt"></i>

      								 </div>
      								 <div class="div">
      										<h5>Password</h5>
      										<input type="password" name="password" class="input" required>
      								 </div>
      							</div>
      							<div class="input-div pass">
      								 <div class="i">
      										<i class="fas fa-lock"></i>

      								 </div>
      								 <div class="div">
      										<h5>Confirm Password</h5>
      										<input type="password" name="password_conf" class="input" required>
      								 </div>
      							</div>

      							<input type="submit" class="btn" value="SignUp" id="login">
      							<h4>Already have an account?<a href="login.php">LOGIN</a></h4>
      						</form>
      				</div>
      		</div>
    <script type="text/javascript" src="script/main01.js"></script>
  </body>
</html>
