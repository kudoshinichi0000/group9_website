<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include_once("db.php");
  	include_once("navbaradmin.php")?>

  	<div class="Rank">
  		<?php

      //Step 1 Database Connectivity
      include_once("db.php");

      //Session id
      $userid = $_SESSION['userid'];

      //Prepare the query
      $query = "SELECT * FROM quiz_list WHERE admin_id = $userid";

      //Perform the query
      $execQuery = mysqli_query($con, $query);

      //Getting or fethcing all rows from the executed query
      while ($fetchId = mysqli_fetch_assoc($execQuery)) {
      $admin_id = $fetchId["admin_id"];

          //displaying all quizzes made by the admin user
          if ($userid == $admin_id) {
            $query = " SELECT * FROM quiz_feedback";
            $execQuery = mysqli_query($con, $query);
            while($fetchscores = mysqli_fetch_assoc($execQuery)){
            $name = $fetchscores["name"];
            $email = $fetchscores["email"];
            $quizCode = $fetchscores["quiz_code"];
            $score = $fetchscores["score"];
            $Feedback = $fetchscores["feedback"];

              $queryy = " SELECT * FROM quiz_list WHERE admin_id = $admin_id";
              $execQueryy = mysqli_query($con, $queryy);
              $fetchtitle = mysqli_fetch_assoc($execQueryy);
              $title = $fetchtitle["title"];

          echo "Name: $name<br>
                Email: $email<br>
                quiz_code: $quizCode<br>
                title: $title<br>
                Score: $score<br>
                feedback: $Feedback

                <br><br><br>";
          }
        }
      }

  		 ?>
  </body>
</html>
