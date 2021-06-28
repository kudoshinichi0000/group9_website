<?php
include_once ("../db.php");
  $id = $_GET['id'];
  $query = "DELETE FROM announcements WHERE id = '$id' ORDER BY anndate DESC";
  $execquery = mysqli_query($con, $query);
  header("Location: modlog.php");
  exit();
 ?>
