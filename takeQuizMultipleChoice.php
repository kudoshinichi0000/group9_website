<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/takeQuiz.css">
    <title></title>

  </head>
  <body>

    <?php include_once("navbar.php"); ?>

    <div class="Container">

    <?php
    include_once "db.php";
    $code = $_GET["quiz_code"];
    echo "<br><div style='text-align:center; font-size: 2em;'>Multiple Question</div>";
    //This is for user id
    $query = " SELECT * FROM multiple_questions WHERE quiz_code = '$code'";

    $execQuery = mysqli_query($con, $query);

    while($fetchQuestion = mysqli_fetch_assoc($execQuery)){
    $question = $fetchQuestion['question'];
    $points = $fetchQuestion['questionPoints'];
    $option1 = $fetchQuestion['option1'];
    $option2 = $fetchQuestion['option2'];
    $option3 = $fetchQuestion['option3'];
    $option4 = $fetchQuestion['option4'];
    $answer = $fetchQuestion['answer'];
    $typeOfQuiz = $fetchQuestion['typeOfQuiz'];

      //This section will provide information about the quiz

      echo "<br>
      <div class='cons'>
      <form action='takeQuizMultipleChoice.php?quiz_code=$code' method='post'>

          <label><h3>$question</h3></label>

              <label for='A'>
                <input type='radio' name='A' value=''> A. $option1</label><br>

              <label for='B'>
                <input type='radio' name='B' value=''> B. $option2 </label><br>

              <label for='C'>
                <input type='radio' name='C' value=''> C. $option3 </label><br>

              <label for='D'>
                <input type='radio' name='D' value=''> D. $option4
              </label><br><br>
        </div>";
        }
           echo "
              <label for='Submit'>
                <input type='submit' name='submit'>
              </label><br><br>
        </form>
      ";
     ?>

     <?php
     if(isset($_POST["form"])){
           header("location: main.php");

     } ?>
  </body>
</html>
