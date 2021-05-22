<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Multiple Question</title>
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">
  </head>
  <body>

    <?php
    include_once('db.php');
    $quizId = $_GET['id'];

    $query = "SELECT * FROM multiple_questions WHERE id = '$quizId'";
    $execQuery = mysqli_query($con, $query);
    while ($Question = mysqli_fetch_assoc($execQuery)) {
      $question = $Question['question'];
      $code = $Question['quiz_code'];
      $points = $Question['questionPoints'];
      $option1 = $Question['option1'];
      $option2 = $Question['option2'];
      $option3 = $Question['option3'];
      $option4 = $Question['option4'];
      $answer = $Question['answer'];
      $typeOfQuiz = $Question['typeOfQuiz'];


      echo "<br><br><br>
      <div class='containerTable'>
        <form action='MultiQEditHandler.php' method='POST'>
          <table border='1' height='350px' width='100%' >
            <tr>
              <th colspan='2'><h2>New Question</h2>
            </tr>

            <tr>
              <th colspan='2'><label><h3>question</h3></label></th>
            </tr>

            <tr>
              <th colspan='2'><input type='text' name='question' value='$question' required></th>
            </tr>

            <tr>
              <th colspan='2'><label for='typeOfQuiz'><h3>Type of quiz: Multiple Choices</h3></label></th>
            </tr>

            <tr>
              <th colspan='2'><label><h3>Option</h3></label></th>
            </tr>

            <tr>
              <th colspan='2'>
                <label for='A'>A.</label>
                <input type='text' name='A' value='$option1' required><br>

                <label for='B'>B.</label>
                <input type='text' name='B' value='$option2' required><br>

                <label for='C'>C.</label>
                <input type='text' name='C' value='$option3' required><br>

                <label for='D'>D.</label>
                <input type='text' name='D' value='$option4' required><br>
              </th>
            </tr>

            <tr>
              <th colspan='2'><label><h3>Answer: </h3></label></th>
            </tr>

            <tr>
              <th colspan='2'><input type='text' name='ans' maxlength='1' onkeypress='return /[a-d]/i.test(event.key)'' oninput='this.value = this.value.toUpperCase()' value='$answer' required></th>
            </tr>

            <tr>
              <th><a href='questions.php?quiz_code=$code'>Cancel</a></th>
              <th colspan='2'><input type='submit' name='submit' class='btn' placeholder='Save' ></th>
            </tr>
          </table>
          <input type='hidden' name='quizId' value='$quizId'>
          <input type='hidden' name='quizC' value='$code'>
        </form>
      </div>
    ";
    }
     ?>
  </body>
</html>
