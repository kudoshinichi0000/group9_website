<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Creating Multiple Question</title>
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">
  </head>
  <body>

    <?php
    include_once('db.php');
    $code = $_GET['quiz_code'];
    ?>
    <?php
    include_once("navbaradmin.php");
    ?>

    <br><br><br>
    <div class='containerTable'>
      <form action='addMultipleQuestionHandler.php' method='POST'>
        <table border='1' height='350px' width='100%' >
          <tr>
            <th colspan='2'><h2>New Question</h2>
          </tr>

          <tr>
            <th colspan='2'><label><h3>question</h3></label></th>
          </tr>

          <tr>
            <th colspan='2'><input type='text' name='question' required></th>
          </tr>

          <tr>
            <th colspan='2'><label for='typeOfQuiz'><h3>Type of quiz: Multiple Choices</h3></label></th>
          </tr>

          <tr>
            <th colspan='2'><label><h3>Question Points</h3></label></th>
          </tr>

          <tr>
            <th colspan='2'><input type='number' name='points' required></th>
          </tr>

          <tr>
            <th colspan='2'><label><h3>Option</h3></label><br>

            <textarea rows='2' cols='40' placeholder='Correct Answer' style='color:red;' name='ans' required></textarea><br><br>

            <textarea name='A' rows='2' cols='40' placeholder='Posible Answer (A)' required></textarea><br><br>

            <textarea name='B' rows='2' cols='40' placeholder='Posible Answer (B)' required></textarea><br><br>

            <textarea name='C' rows='2' cols='40' placeholder='Posible Answer (C)' required></textarea><br><br>

            <textarea name='D' rows='2' cols='40' placeholder='Posible Answer (D)' required></textarea><br><br>

            </th>
          </tr>

          <tr>
            <th><a href='questions.php?quiz_code=$code'>Cancel</a></th>
            <th colspan='2'><input type='submit' name='submit' class='btn' placeholder='Save' ></th>
          </tr>
        </table>
        <input type='hidden' name='hiencod' value='$code'>
      </form>
    </div>

    "; ?>
  </body>
</html>
