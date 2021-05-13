<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Quiz list</title>
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">
  </head>
  <body>

    <?php include_once "navbaradmin.php"; ?>

    <br><br><br><br>
      <table border='1' height='50px' width='50%' class="list">

        <tr>
          <th colspan='2'><h2><label>title: </label></h2>
          <th colspan='2'><h2><label>Quiz Code: </label></h2>
          <th colspan='3'><h2><label>Action: </label></h2>
        </tr>
        <br>
        <a href='quiz_title.php' class='addquiz'>Add Quiz</a>

    <?php
    //Step 1 Database Connectivity
    include_once "db.php";
    $userid = $_SESSION['userid'];

    $query = "SELECT * FROM quiz_list";
    $execQuery = mysqli_query($con, $query);
    while ($fetchId = mysqli_fetch_assoc($execQuery)) {
    $admin_id = $fetchId["admin_id"];

    if ($userid == $admin_id) {
      $query = "SELECT * FROM quiz_list WHERE admin_id = $admin_id ";
      $execQuery = mysqli_query($con, $query);
      while ($fetchTitle = mysqli_fetch_assoc($execQuery)) {
      $title = $fetchTitle["title"];
      $code = $fetchTitle['quiz_code'];

      echo "
          <tr>
            <br><br>
            <th colspan='2'><h2>$title</h2></th>
            <th colspan='2'><h2>$code</h2></th>
            <th colspan='3'>
              <a href='editTitle.php?quiz_code=$code' class='action'>edit title</a>
              <a href='questions.php?quiz_code=$code' class='action'>edit/add questions</a>
              <a href='deleteQuiz.php?quiz_code=$code' class='action'>delete</a>
            </th>
          </tr>

      ";
    }
  }
    }
     ?>

   </table>
  </body>
</html>
