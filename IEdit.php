<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="js/bootstrap.bundle.min.js"> </script>
    <link type="text/css" rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Edit Identification Item</title>
  </head>
  <body>
    <?php
      include_once("db.php");
      $Quizid = $_GET["id"];
      include_once("navbaradmin.php");

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
