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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <title>Delete</title>
  </head>
  <body>
    <div class="modal" id="DeleteModal">
      <div class="modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title"> Delete Confirmation</h2>
              <button type="button" class="close"><span></span></button>
            </div>
            <div class="modal-body">
              <p> Do you want to delete your account?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"></button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <form action="DelAdminHandler.php" method="post">
      <label>Do you want to delete this user: <?php echo $name ?>?</label>
      <input type="submit" name="choice" value="yes">
      <input type="submit" name="choice" value="no">

      <input type="hidden" name="id" value=<?php echo $adminid ?>>
<div class="row">
  <div class="col">
    <button type="button"class="btn btn-primary" data-toggle="modal" data-target="#DeleteModal"> DELETEEEE</button>
  </div>
 </div

    </form>
  </body>
</html>
