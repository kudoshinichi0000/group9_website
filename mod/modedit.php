<?php
    /*Access the database*/
    include_once("../db.php");

    /*Preparing query*/
    $userId = $_GET["id"];
    $query = "SELECT * FROM admin WHERE userid = '$userId'";
    $execQuery = mysqli_query($con, $query);

    $userInfo = mysqli_fetch_assoc($execQuery);

?>
<html>
    <head>
        <title>MOD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style media="screen">
        *{
          background-color: #1c1b18;
          color: #4ecfa5;
          font-weight: bold;
        }
        hr{
          color: #4ecfa5;
        }
        </style>
    </head>
    <body>
      <center>
      <!-- Password not match message -->
      <?php include_once "../db.php";?>
    	<?php if(isset($_SESSION['passwrong'])): ?>
    		 <script type="text/javascript">
    		 		alert('<?php echo $_SESSION['passwrong']; ?>');
    		 </script>
    		 <?php unset($_SESSION['passwrong']);
    	 	endif;?>
      <!-- Matched Username Exists -->
      <?php include_once "../db.php";?>
    	<?php if(isset($_SESSION['userexist'])): ?>
    		 <script type="text/javascript">
    		 		alert('<?php echo $_SESSION['userexist']; ?>');
    		 </script>
    		 <?php unset($_SESSION['userexist']);
    	 	endif;?>
        <!-- EDIT USERS -->
                <h1>Edit Profile</h2>
                <a href="modseeusers.php"><h3>BACK</h3></a><hr>
                <form action="modedithandler.php" method="post" enctype="multipart/form-data">
                  <div>
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" placeholder="Enter New Username" name="username" required>
                  </div><br>
                  <div >
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" placeholder="Enter your new password" name="password" required>
                  </div><br>
                  <div>
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm your new passoword.." name="confirmpassword" required>
                  </div><br>
                  <br>
                  <button type="submit" name="btn" class="btn btn-outline-success"value="Submit">UPDATE</button>
                  <input type="hidden" name="id" value="<?php echo $userId ?>">
                  </form>
</center>
    </body>
</html>
