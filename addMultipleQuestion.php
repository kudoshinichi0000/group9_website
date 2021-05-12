<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Creating Multiple Question</title>
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">
  </head>
  <body>
    <?php
    include_once("db.php");
    $code = $_GET['quiz_code'];
     ?>
    <br><br><br>
    <div class="containerTable">
      <form action="addMultipleQuestionHandler.php" method="POST">
        <table border="1" height="350px" width="100%" >
          <tr>
            <th colspan="2"><h2>New Question</h2>
          </tr>

          <!--inputing questions--->
          <tr>
            <th colspan="2"><label><h3>question</h3></label></th>
          </tr>

          <tr>
            <th colspan="2"><input type="text" name="question" required></th>
          </tr>

          <!---Type of quiz--->
          <tr>
            <th colspan="2"><label for="typeOfQuiz"><h3>Type of quiz: Multiple Choices</h3></label></th>
          </tr>

          <!---Inputing points--->
          <tr>
            <th colspan="2"><label><h3>Question Points</h3></label></th>
          </tr>

          <tr>
            <th colspan="2"><input type="number" name="points" required></th>
          </tr>

          <!---options--->
          <tr>
            <th colspan="2"><label><h3>Option</h3></label></th>
          </tr>

          <tr>
            <th colspan="2">
              <label for="A">A.</label>
              <input type="text" name="A" required><br>

              <label for="B">B.</label>
              <input type="text" name="B" required><br>

              <label for="C">C.</label>
              <input type="text" name="C" required><br>

              <label for="D">D.</label>
              <input type="text" name="D" required><br>

            </th>
          </tr>

          <!---Answer--->
          <tr>
            <th colspan="2"><label><h3>Answer: </h3></label></th>
          </tr>

          <tr>
            <th colspan="2"><input type="text" name="ans" maxlength="1" onkeypress="return /[a-d]/i.test(event.key)" oninput="this.value = this.value.toUpperCase()" required></th>
          </tr>

          <!--Submit--->
          <tr>
            <th><a href="questions.php">Cancel</a></th>
            <th colspan="2"><input type="submit" name="submit" class="btn" placeholder="Save" ></th>
          </tr>
        </table>
        <input type="hidden" name="Codee" value="<?php $code ?>">
      </form>
    </div>
  </body>
</html>
