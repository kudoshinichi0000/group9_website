<?php include_once("db.php");

if ($_SESSION["username"] == "mod") {
  header("location: viewadmin.php");
  exit();
}

$id = $_SESSION['userid'];
$query = "SELECT * FROM admin WHERE userid = $id";
$result = mysqli_query($con, $query);
$admin = mysqli_fetch_assoc($result);
$fetchname = $admin['username'];
$fetchid = $admin['userid'];
?>
<!DOCTYPE html>
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


    <title>View User</title>
  </head>
  <body>
  <!-- User Successfully Edited-->
  <?php include_once "db.php"; include_once "navbaradmin.php" ?><br><br>
  <?php if(isset($_SESSION['editsuccess'])): ?>
     <script type="text/javascript">
        alert('<?php echo $_SESSION['editsuccess']; ?>');
     </script>
     <?php unset($_SESSION['editsuccess']);
    endif;?>
  <!-- User Successfully Deleted -->
  <?php include_once "db.php"; include_once "navbaradmin.php" ?><br><br>
  <?php if(isset( $_SESSION['delsuccess'])): ?>
     <script type="text/javascript">
        alert('<?php echo $_SESSION['delsuccess']; ?>');
     </script>
     <?php unset($_SESSION['delsuccess']);
    endif;?>
    <div class="container">
      <div class="jumbotron">
        <div class="card">
          <div class="card-header">
              <h2><b>ADMIN'S PROFILE<b></h2>
          </div>
              <div class="card-body">
              <table class="table table-dark table-hover table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th class="text-right">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                    echo "
                          <tr>
                            <th scope='row'>  $fetchname</th>
                          <td>
                            <button type='button' data-toggle='modal' data-target='#DeleteModal'class='btn btn-danger badge-pill text-right float-right' style='width:80px; text-align:center; margin:5px;'>DELETE</button>
                            <a href='editadmin.php?id={$fetchid}' type='button' class='btn btn-info badge-pill text-centered float-right' style='width:80px; text-align: center; margin:5px;'>EDIT</a>
                            <div class='row'>
                              <div class='col'>
                                <button type='button'class='btn btn-primary' data-toggle='modal' data-target='#DeleteModal'> DELETEEEE</button>
                              </div>
                             </div
                          </td>
                          </tr>
                    "
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  <div class="modal fade" id="DeleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title"> Delete Confirmation</h2>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          </div>
          <div class="modal-body">
            <form action="DelAdminHandler.php" id="form-delete-user" method="post">
                <label><p>  Are you sure you want to delete your account: <?php echo $name ?>?</p></label>

          </div>
          <div class="modal-footer">
            <input type="submit" name="choice" class="btn" value="yes">
              <input type="submit" name="choice" class="btn" value="no">
                <input type="hidden" name="id" value=<?php echo $adminid ?>>
          </div>
          </form>
      </div>
    </div>
  </div>
  <script>
    $('.delete-btn').click((e) => {
      e.preventDefault();
      if(confirm(' Are you sure you want to delete your account?')){
        window.location.href = $(e.target).attr('href');
      }
    });
  </script>
  </body>
</html>
