<?php include_once("db.php");

$query = "SELECT * FROM admin";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min3.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="js/bootstrap.bundle.min.js"> </script>


    <title>ViewAdmin</title>
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
          <div="card-header">
            <h2><b> LIST OF ADMINS<b></h2>
          </div>
            <div class="card-body">
              <table class="table table dark table-hover table-bordered">
                <thead>
                  <tr>
                    <th scopre="col">NAME</th>
                    <th class="text-right">ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while($admin = mysqli_fetch_assoc($result))
                  {
                    echo "
                      <tr>
                        <th scope='row'>
                        {$admin['username']}<.th>
                        <td>
                        <a href='editadmin.pjp?id={$admin['userid']}' Type='button' class='btn btn-danger badge-pill text-right float-right' style='width:80px; text-align:center; margin:5px;'> DELETE</a>


                    "
                  }
                  ?>
            </div>
         </div>
      </div>
    </div>

          <?php
          while($admin = mysqli_fetch_assoc($result))
          {
            echo "
                <tr>
                  <td>
                    {$admin['username']}
                  </td>
                  <td>
                    <a class='link' href='editadmin.php?id={$admin['userid']}' type='button' class='btn btn-warning btn-sm'>Edit</a> | <a class='link' href='DeleteAdmin.php?id={$admin['userid']} '>Delete</a>
                  </td>
                </tr>
                ";
          }
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
