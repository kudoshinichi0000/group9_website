<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include_once("db.php");
      $Quizid = $_GET["id"];

      //Getting or fetching all rows from Identification
      $queryy = " SELECT * FROM identification WHERE id = '$Quizid'";

      $execQuery = mysqli_query($con, $queryy);

     while($fetchtrueorfalse = mysqli_fetch_assoc($execQuery)){
       $questionnnId = $fetchtrueorfalse['id'];
       $code = $fetchtrueorfalse['quiz_code'];
       $question = $fetchtrueorfalse['question'];
       $answer = $fetchtrueorfalse['answer'];
       $points = $fetchtrueorfalse['points'];
       $typeOfQuiz = $fetchtrueorfalse['typeOfQuiz'];
      echo "

    <form action='IEditHandler.php' method='POST'>
      <table border='1' height='350px' width='25%' class='container1'>
        <tr>
          <th colspan='3'><h2><label for='IdenQuestion'>Question: </label> </h2>
          <h2><input type='text' name='IdenQuestion' value='$question' required> </h2></th>
        </tr>

        <tr>
          <th colspan='3'><h2><label for='IdenAnswer'>Answer: </label> </h2>
            <input type='text' name='IdenAnswer' value='$answer' required></th>
        </tr>

          <tr>
            <th colspan='3'><h2><label for='points'>points: </label> </h2>
            <h2><input type='number' name='points' value='$points' required> </h2></th>
        </tr>
        <tr>
          <th colspan='2'><a href='questions.php?quiz_code=$code'>Cancel</a></th>
          <th colspan='3'><input type='submit' name='submit' class='btn' placeholder='Save' ></th>
        </tr>
      </table>
      <input type='hidden' name='quizCode' value='$code'>
        <input type='hidden' name='quizId' value='$Quizid'>
    </form>
    ";
  }
    ?>
  </body>
</html>
