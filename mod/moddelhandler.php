 <?php
  include_once("../db.php");

  $id = $_POST["id"];
  $choice = $_POST["choice"];

if ($choice === "yes") {
  // User is gonna be deleted
  $deleteQuery = "DELETE FROM admin WHERE userid = '$id'";

  $execQuery = mysqli_query($con, $deleteQuery);
  if ($id == $_SESSION['userid']) {
    $deleteQuery = "DELETE FROM admin WHERE userid = '$id'";

    $execQuery = mysqli_query($con, $deleteQuery);
    header("location: modseeusers.php");
    exit();
  }
  $_SESSION['status'] = "User Deleted";
  header("Location: modseeusers.php");
  exit();
}
else{
  // User doesnt want to delete anymore
  header("Location: modseeusers.php");
  exit();
}
?>
