<?php
    /*Access the database*/
    include_once("db.php");

    /*Preparing query*/
    $userId = $_GET["id"];
    $query = "SELECT * FROM admin WHERE id = '$userId'";
    $execQuery = mysqli_query($con, $query);

    $userInfo = mysqli_fetch_assoc($execQuery);

?>
<html>
    <head>
        <title>EditAdmin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <form action="editAdminHandler.php" method="post" enctype="multipart/form-data">
                <h1>Edit Profile</h1>
                <div class="formAdjust">
                    <label >Username: </label>
                    <input type="text" name="username" required>
                </div>
                <br>
                <div>
                    <label>Password: </label>
                    <input type="password" name="password" required>
                </div>
                <br>
                <div>
                    <label>Confirm Password: </label>
                    <input type="password" name="confirmpassword" required>
                </div>
                <input type="hidden" name="id" value="<?php echo $userId ?>">
                <input class="submitButton" type="submit" name="btn" value="Submit">
                <br><br>
                <!-- Go back -->
                <a href="viewadmin.php">Go Back</a>
            </form>
        </div>
    </body>
</html>
