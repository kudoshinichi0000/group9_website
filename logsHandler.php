<?php
  include_once ("db.php");
// Insert announcement 
  $userid = $_SESSION['userid'];
  $content = $_POST['content'];

  $query = "INSERT INTO announcements(adminid, content) VALUES ('$userid', '$content')";
  $execquery = mysqli_query($con, $query);

  header("Location: logs.php");
  exit();
 ?>
