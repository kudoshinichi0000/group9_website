<?php
include_once ("db.php");
  $id = $_GET['id'];
  $query = "DELETE FROM announcements WHERE id = '$id'";
  $execquery = mysqli_query($con, $query);
  header("Location: logs.php");
  exit();
 ?>
