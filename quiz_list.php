<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include_once("navbaradmin.php"); ?>

    <br><br><br><br><br><br><br>
    <?php
    include_once "db.php";
    include_once "navbaradmin.php";
    echo $_SESSION['userid'];

    ?>
    <br><br><br><br>
    <a href="quiz_title.php" class="addquiz">Add Quiz</a><br><br>

    <?php

    $query = "SELECT * FROM quiz_list";
    $execQuery = mysqli_query($con, $query);
    while ($fetchTitle = mysqli_fetch_assoc($execQuery)) {
      $title = $fetchTitle["title"];
      $code = $fetchTitle['quiz_code'];

      echo "<br>
      title: $title
      Quiz Code: $code
      <a href='editTitle.php'>edit</a>
      <a href='questions.php'>manage</a>
      <a href='deleteQuiz.php'>delete</a>

      ";
    }
     ?>
  </body>
</html>
