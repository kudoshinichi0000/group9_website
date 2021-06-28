<?php
  include_once("../db.php");
  $adminid = $_GET["id"];
  $query = "SELECT * FROM admin WHERE userid = '$adminid'";
  $execQuery = mysqli_query($con, $query);

  $userInfo = mysqli_fetch_assoc($execQuery);

  $name = $userInfo["username"];
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MOD</title>
    <style>
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
  <h1>Delete User</h1>
  <hr>
<form action="moddelhandler.php" method="post">
      <h2><label>Do you want to delete this user: <?php echo $name ?>?</label>
      <input type="submit" name="choice" value="yes">
      <input type="submit" name="choice" value="no"></h2>

      <input type="hidden" name="id" value=<?php echo $adminid ?>>
</center>
    </form>
  </body>
</html>
