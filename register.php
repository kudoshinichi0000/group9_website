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
          $_SESSION['status'] = "User admin successfully added!";
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <!-- If User Exists -->
    <?php include_once "db.php"; include_once "navbar.php" ?><br><br>
  	<?php if(isset($_SESSION['userexists'])): ?>
  		 <script type="text/javascript">
  		 		alert('<?php echo $_SESSION['userexists']; ?>');
  		 </script>
  		 <?php unset($_SESSION['userexists']);
  	 	endif;?>
    <!-- If register is not successful -->
    <?php include_once "db.php"; include_once "navbar.php" ?><br><br>
  	<?php if(isset($_SESSION['registererror'])): ?>
  		 <script type="text/javascript">
  		 		alert('<?php echo $_SESSION['registererror']; ?>');
  		 </script>
  		 <?php unset($_SESSION['registererror']);
  	 	endif;?>
      <!-- If Register is Successful -->
      <?php include_once "db.php"; include_once "navbar.php" ?><br><br>
    	<?php if(isset($_SESSION['regsuccess'])): ?>
    		 <script type="text/javascript">
    		 		alert('<?php echo $_SESSION['regsuccess']; ?>');
    		 </script>
    		 <?php unset($_SESSION['regsuccess']);
    	 	endif;?>
        <!-- if Password is incorrect -->
        <?php include_once "db.php"; include_once "navbar.php" ?><br><br>
      	<?php if(isset($_SESSION['passerror'])): ?>
      		 <script type="text/javascript">
      		 		alert('<?php echo $_SESSION['passerror']; ?>');
      		 </script>
      		 <?php unset($_SESSION['passerror']);
      	 	endif;?>
    <div class="wrapper">
      <div id="formContent">
        <h1>Register</h1>
          <form  method="post" enctype="multipart/form-data">
      			<div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="username" placeholder="Username : ">
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <input type="password" class="form-control" placeholder="Password: " required name="password">
                </div>
                <div class="col">
                  <input type="password" class="form-control" placeholder="Confirm Password: " required name="password_conf">
                </div>
            </div>
            <input type="submit" value="SignUp">
      	    <div id="formFooter">
              Already have an Account?
              <br>
              <a class="underlineHover" href="login.php">LOGIN</a>
            </div>
      		</form>
      </div>
    </div>
  </body>
</html>
