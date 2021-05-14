<?php
  include_once("db.php");

  $id = $_POST["id"];
  $choice = $_POST["choice"];
if ($choice === "yes") {
  // User is gonna be deleted
  $deleteQuery = "DELETE FROM admin WHERE id = '$id'";

  $execQuery = mysqli_query($con, $deleteQuery);
  $_SESSION['delsuccess'] = "User Successfully Deleted!";
  header("Location: viewadmin.php");
  exit();
}
else{
  // User doesnt want to delete anymore
  header("Location: viewadmin.php");
  exit();
}
?>
