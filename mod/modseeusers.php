<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MOD</title>
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
    <!-- Status -->
    <?php include_once "../db.php";?>
    <?php if(isset($_SESSION['status'])): ?>
       <script type="text/javascript">
          alert('<?php echo $_SESSION['status']; ?>');
       </script>
       <?php unset($_SESSION['status']);
      endif;?>
    <center>
    <!-- This is where all users are shown, has the option to delete, or edit -->
    <h1>All Users</h1>
    <a href="modsetting.php"><h3>BACK</h3></a><hr>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include_once("../db.php");

        $query = "SELECT * FROM admin";
        $result = mysqli_query($con, $query);


        while($admin = mysqli_fetch_assoc($result))
        {
          echo "

            <tr>
              <td scope='row'>{$admin['username']}</td>
              <td><h3>
              <a href='moddel.php?id={$admin['userid']}' Type='button' class='btn btn-danger badge-pill text-right float-right' style='width:80px; text-align:center; margin:5px;'> Delete</a>
              <a href='modedit.php?id={$admin['userid']}' type='button' class='btn btn-info badge-pill text-centered float-right' style='width:80px; text-align: center;  margin:5px;'> Edit</a>
              </td></h3>
              </tr>
          ";
        }
        ?>
      </tbody>
    </table>
  </center>
  </body>
</html>
