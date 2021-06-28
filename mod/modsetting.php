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
    <!-- Deleted all Announcements -->
    <?php include_once "../db.php";?>
    <?php if(isset($_SESSION['anndel'])): ?>
       <script type="text/javascript">
          alert('<?php echo $_SESSION['anndel']; ?>');
       </script>
       <?php unset($_SESSION['anndel']);
      endif;?>
    <center>
      <h1>MOD Settings</h1>
      <a href="../main.php"><h3>BACK</h3></a><hr>
      <h2>Show All Users</h2>
      <a href="modseeusers.php">HERE</a>
      <h2>Announce</h2>
      <a href="modlog.php">HERE</a>
      <h2>Reset Announcements</h2>
      <a href="moddelannall.php">HERE</a>
    </center>
  </body>
</html>
