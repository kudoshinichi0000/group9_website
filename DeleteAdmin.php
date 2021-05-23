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
     <link rel="stylesheet" href="main.css">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
       crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
       crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
       crossorigin="anonymous"></script>

    <title>Delete</title>
  </head>
  <body>
    <div class="modal fade" id="DeleteModal">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title"> Delete Confirmation</h2>
              <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
              <form action="DelAdminHandler.php" id="form-delete-user">
                  <label><p>  Are you sure you want to delete your account  <?php echo $name ?>?</p></label>
              </form>
            </div>
            <div class="modal-footer">
                <button type="submit" name="choice" class="btn btn-secondary" value="yes">YES</button>
                <button type="submit" name="choice" class="btn btn-danger" value="no">NO</button>
                <!--<button type="submit" class="btn btn-secondary" data-dismiss="modal">YES</button>!-->
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
