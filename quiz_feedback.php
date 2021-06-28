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

      //Displaying all feedbacks
      $query = " SELECT * FROM quiz_feedback";
      $execQuery = mysqli_query($con, $query);
      while($fetchscores = mysqli_fetch_assoc($execQuery)){
      $name = $fetchscores["name"];
      $email = $fetchscores["email"];
      $quizCode = $fetchscores["quiz_code"];
      $score = $fetchscores["score"];
      $Feedback = $fetchscores["feedback"];

        echo "Name: $name<br>
              Email: $email<br>
              quiz_code: $quizCode<br>
              Score: $score<br>
              feedback: $Feedback

              <br><br><br>";
        }

  		 ?>
  </body>
</html>
