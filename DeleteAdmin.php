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
    <link rel="stylesheet" href="css/bootstrap.min3.css">

    <script src="js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
