<?php
  include_once("db.php");

  $id = $_POST["id"];
  $choice = $_POST["choice"];

if ($choice === "yes") {
  // User is gonna be deleted
  $deleteQuery = "DELETE FROM admin WHERE userid = '$id'";

  $execQuery = mysqli_query($con, $deleteQuery);
  if ($id == $_SESSION['userid']) {
    $deleteQuery = "DELETE FROM admin WHERE userid = '$id'";

    $execQuery = mysqli_query($con, $deleteQuery);
    header("location: logout.php");
    exit();
  }
  $_SESSION['delsuccess'] = "User Successfully Deleted!";
  header("Location: viewadminuser.php");
  exit();
}
else{
  // User doesnt want to delete anymore
  header("Location: viewadminuser.php");
  exit();
}
?>
