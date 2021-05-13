<?php
//Step 1 Database Connectivity
include_once "db.php";
$userId = $_SESSION['userid'];

//Step 2 Prepare the query
$query = " SELECT * FROM quiz_list WHERE admin_id = '$userId' ";
//Step 3 Perform the query
$execQuery = mysqli_query($con, $query);
//Getting or Fetching all rows from the executed query

  while ($fetchTitle = mysqli_fetch_assoc($execQuery)) {
    $code = $fetchTitle['quiz_code'];
    $title = $fetchTitle["title"];

        $query = " SELECT * FROM quiz_list WHERE admin_id = '$userId' AND quiz_code = '$code'";
        $execQuery = mysqli_query($con, $query);
        if ($execQuery) {
          header("location: questions.php");
        }
  }

 ?>
