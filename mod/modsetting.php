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
      <!-- MOD SETTINGS -->
      <h1>MOD Settings</h1>
      <a href="../main.php"><h3>BACK</h3></a><hr>
      <!-- SHOW ALL USERS -->
      <h2>Show All Users</h2>
      <a href="modseeusers.php">HERE</a>
      <!-- SHOW ALL USERS ANNOUNCEMENTS -->
      <h2>Announcements</h2>
      <a href="modlog.php">HERE</a>
      <!-- DELETE ALL ANNOUNCEMENTS -->
      <h2>Reset Announcements</h2>
      <a href="moddelannall.php">HERE</a>
      <!-- WEBSITE FEEDBACK -->
      <h2>View Website Feedback</h2>
      <a href="modWebsiteFeedback.php">HERE</a>
    </center>
  </body>
</html>
