<?php
    /*Access the database*/
    include_once("db.php");

    /*Preparing query*/
    $userId = $_GET["id"];
    $query = "SELECT * FROM admin WHERE userid = '$userId'";
    $execQuery = mysqli_query($con, $query);

    $userInfo = mysqli_fetch_assoc($execQuery);

?>
<html>
    <head>
        <title>EditAdmin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min2.css">
        <link rel="stylesheet" type="text/css" href="css/main2.css">
    </head>
    <body>
      <!-- Password not match message -->
      <?php include_once "db.php"; include_once "navbar.php" ?><br><br>
    	<?php if(isset($_SESSION['passwrong'])): ?>
    		 <script type="text/javascript">
    		 		alert('<?php echo $_SESSION['passwrong']; ?>');
    		 </script>
    		 <?php unset($_SESSION['passwrong']);
    	 	endif;?>
      <!-- Matched Username Exists -->
      <?php include_once "db.php"; include_once "navbar.php" ?><br><br>
    	<?php if(isset($_SESSION['userexist'])): ?>
    		 <script type="text/javascript">
    		 		alert('<?php echo $_SESSION['userexist']; ?>');
    		 </script>
    		 <?php unset($_SESSION['userexist']);
    	 	endif;?>
        <div class="center">
              <div class="row">
                <span class="title" style="margin-left:40%;font-size:30px;"><b> Edit Profile</b></span>
              </div>
                <div class="container">
                  <div class="row formContainer">
                    <div class="col-lg-12">
                      <form action="editAdminHandler.php" method="post" enctype="multipart/form-data">
                      <div class="row form-group">
                        <div class="col">
                        <label for="username">Username:</label>
                          <input type="text" class="form-control" placeholder="Enter New Username" name="username" required>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col">
                          <label for="password">Password :</label>
                          <input type="password" class="form-control" placeholder="Enter your new password" name="password" required>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col">
                          <label for="confirmpassword">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm your new passoword.." name="confirmpassword" required>
                        </div>
                      </div>
                      <div>
                        <div class="row form-group" style="margin-top: 40px;">
                        <div class="col">
                          <button type="submit" name="btn" class="btn btn-outline-success"value="Submit">Update Profile</button>
                      <a href="viewadmin.php" class="btn btn-outline-danger">Cancel</a>
                        <input type="hidden" name="id" value="<?php echo $userId ?>">
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </form>
        </div>
    </body>
</html>
