<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    include_once("db.php");
    $quizId = $_GET['id'];

    $query = "SELECT * FROM trueorfalse WHERE id = '$quizId'";

    $execQuery = mysqli_query($con, $query);

    $fetchCodes = mysqli_fetch_assoc($execQuery);
    $question = $fetchCodes["question"];
    $code = $fetchCodes["quiz_code"];
    $questionP = $fetchCodes["points"];

    echo "
    <form action='deletetrueorfalseHandler.php' method='POST'>
      <table border='1' height='350px' width='25%' class='container1'>
        <tr>
          <th colspan='2'><h2>Are You Sure you want to delete this item?</h2>
          <h2>$question</h2></th>
        </tr>
        <tr>
          <th colspan='2'><input type='submit' name='Confirm' value='yes'>
          <input type='submit' name='Confirm' value='no'></th>
        </tr>
        <tr>
          <th colspan='2'><a href='questions.php?quiz_code=$code'>Cancel</a></th>
        </tr>
      </table>
      <input type='hidden' name='quizId' value='$quizId'>
      <input type='hidden' name='quizCode' value='$code'>
      <input type='hidden' name='quizP' value='$questionP'>
    </form>
    ";

     ?>
  </body>
</html>
