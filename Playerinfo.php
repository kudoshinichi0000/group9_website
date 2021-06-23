<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $QuizCode = $_GET["quiz_code"];
     ?>

    <form action="Displayinfo.php" method="POST">
  		<label for="name">Full name: </label>
  		<input type="text" name="name" required><br>

  		<input type="submit" name="submit" >

      <input type="hidden" name="QuizCode" value="<?php echo $QuizCode; ?>">
    </form>
  </body>
</html>
