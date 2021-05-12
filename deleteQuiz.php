<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    include_once("db.php");
    $code = $_GET['quiz_code'];

      $query = "SELECT * FROM quiz_list WHERE quiz_code = '$code'";
      $execQuery = mysqli_query($con, $query);
      $fetchCodes = mysqli_fetch_assoc($execQuery);
        $codel = $fetchCodes["quiz_code"];
        $title = $fetchCodes["title"];

    echo "
    <form action='deleteQuizHandler.php' method='POST'>
      <table border='1' height='350px' width='25%' class='container1'>
        <tr>
          <th colspan='2'><h2>Are You Sure you want to delete this item?</h2>
        </tr>
        $code
        <tr>
          <th colspan='2'><input type='submit' name='Confirm' value='yes'>
          <input type='submit' name='Confirm' value='no'></th>
        </tr>

        <tr>
          <th colspan='2'><h4><i>$codel</i></h4></th>
        </tr>

          <th colspan='2'><a href='quiz_list.php'>Cancel</a></th>
        </tr>
      </table>
      <input type='hidden' name='quizCode' value='$codel'>
    </form>
    ";

     ?>

  </body>
</html>
