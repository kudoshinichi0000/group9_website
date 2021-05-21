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

      $queryy = " SELECT * FROM trueorfalse WHERE id = $quizId";
      $execQuery = mysqli_query($con, $queryy);

     while($fetchtrueorfalse = mysqli_fetch_assoc($execQuery)){
       $questionnId = $fetchtrueorfalse['id'];
       $code = $fetchtrueorfalse['quiz_code'];
       $questionn = $fetchtrueorfalse['question'];
       $answerr = $fetchtrueorfalse['answer'];
       $pointss = $fetchtrueorfalse['points'];
       $typeOfQuizz = $fetchtrueorfalse['typeOfQuiz'];

      echo "
      <form action='ToREditHandler.php' method='POST'>
      <table border='1' height='350px' width='25%' class='container1'>

        <tr>
          <th colspan='3'><h2><label for='TorFQuestion'>Question: </label> </h2>
          <h2><input type='text' name='TorFQuestion' value='$questionn' required> </h2></th>
        </tr>

        <tr>
          <th colspan='3'><h2><label for='TorFAnswer'>Answer: </label> </h2>
            <select name='TorFAnswer'>
            ";
              if ($answerr == 'True') {
                echo "
                  <option value='$answerr'>$answerr</option>
                  <option value='False'>False</option>
                ";
              }else{
                echo "
                  <option value='$answerr'>$answerr</option>
                  <option value='True'>True</option>
                ";
              }echo "
            </select>
          </th>
        </tr>

        <tr>
          <th colspan='2'><a href='questions.php?quiz_code=$code'>Cancel</a></th>
          <th colspan='3'><input type='submit' name='submit' class='btn' placeholder='Save' ></th>
        </tr>
      </table>
      <input type='hidden' name='quizCode' value='$code'>
      <input type='hidden' name='questionId' value='$questionnId'>
    </form>
    ";
  }
    ?>
  </body>
</html>
