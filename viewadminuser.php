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
    <meta name="viewport" content="width=device-width,"
    <link rel="stylesheet" href="css/bootstrap.min3.css">

    <script src="js/bootstrap.bundle.min.js"> </script>


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
      <h1>Admins: </h1>
      <h1>AHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH</h1>
        <table class="table table-hover" align="center">
            <thead>
              <tr>
                <th>Name</th>
              </tr>
            </thead>
        <tbody>
          <?php

            echo "
                <tr>
                  <td>
                    $fetchname
                  </td>

                  <td>
                    <a class='link' href='editadmin.php?id={$fetchid}' type='button' class='btn btn-warning btn-sm'>Edit</a> | <a class='link' href='DeleteAdmin.php?id={$fetchid} '>Delete</a>

                  </td>
                </tr>
                ";

            ?>
          </tbody>
      </table>
  </div>
  <script>
    $('.delete-btn').click((e) => {
      e.preventDefault();
      if(confirm('Do you want to delete user?')){
        window.location.href = $(e.target).attr('href');
      }
    });
  </script>
  </body>
</html>
