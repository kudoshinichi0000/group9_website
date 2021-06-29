<?php
// DELETE ALL ANNNOUNCEMENTS
  include_once("../db.php");
  $choice = $_POST["choice"];
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if ($choice === "yes") {
      $deleteQuery = "DELETE FROM announcements";

      $execQuery = mysqli_query($con, $deleteQuery);
      $_SESSION['anndel'] = "All Announcements Are Deleted";
      header("Location: modsetting.php");
      exit();
    }
    else {
      header("Location: modsetting.php");
      exit();
    }
  }
 ?>
