<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include_once("db.php");
      $code = $_GET["quiz_code"];
      echo "$code";
     ?>
    <form action='TrueOrFalseHandler.php' method='POST'>
      <table border='1' height='350px' width='25%' class='container1'>

        <tr>
          <th colspan='3'><h2><label for="TorFQuestion">Question: </label> </h2>
          <h2><input type="text" name="TorFQuestion" required> </h2></th>
        </tr>

        <tr>
          <th colspan='3'><h2><label for="TorFAnswer">Answer: </label> </h2>
            <select class="" name="TorFAnswer">
                <option value="True">True</option>
                <option value="False">False</option>
            </select>
          </th>
        </tr>

          <tr>
            <th colspan='3'><h2><label for="points">points: </label> </h2>
            <h2><input type="number" name="points" required> </h2></th>
        </tr>
        <tr>
          <?php echo "<th colspan='2'><a href='questions.php?quiz_code=$code'>Cancel</a></th>"; ?>
          <th colspan='3'><input type='submit' name='submit' class='btn' placeholder='Save' ></th>
        </tr>
      </table>
      <input type='hidden' name='quizCode' value='<?php echo $code ?>'>
    </form>
  </body>
</html>