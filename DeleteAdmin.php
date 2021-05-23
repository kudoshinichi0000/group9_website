<?php
  include_once("db.php");
  $adminid = $_GET["id"];
  $query = "SELECT * FROM admin WHERE userid = '$adminid'";
  $execQuery = mysqli_query($con, $query);

  $userInfo = mysqli_fetch_assoc($execQuery);

  $name = $userInfo["username"];
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete</title>
  </head>
  <body>
    <div class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title"> Delete Confirmation</h2>
            s<button><span></span></button>
          </div>
        </div>
      </div>
    </div>

    <form action="DelAdminHandler.php" method="post">
      <label>Do you want to delete this user: <?php echo $name ?>?</label>
      <input type="submit" name="choice" value="yes">
      <input type="submit" name="choice" value="no">

      <input type="hidden" name="id" value=<?php echo $adminid ?>>
    </form>
  </body>
</html>
