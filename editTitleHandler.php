<?php

    include("db.php");

    $code = $_GET["quiz_code"];
    $quizTitle = $_POST["quiz_title"];
    $Codee = $_POST["Codee"];

    $query = "UPDATE quiz_list
            SET title = '$quizTitle'
            WHERE quiz_code = '$Codee'";

    $execQuery = mysqli_query($con, $query);
      if ($execQuery) {
        header("location: quiz_list.php");
      }
      else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
        header("location: editTitle.php");
}




 ?>
