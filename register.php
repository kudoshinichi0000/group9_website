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
    $user_id = rand();
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
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <?php include_once "db.php"; include_once "navbar.php" ?><br><br>
  	<?php if(isset($_SESSION['errormessage'])): ?>
  		 <script type="text/javascript">
  		 		alert('<?php echo $_SESSION['registererror']; ?>');
  		 </script>
  		 <?php unset($_SESSION['registererror']);
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
                  <input type="password" class="form-control" placeholder="Confirm Password: " name="password_conf">
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
