<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">
  </head>
  <body>
    <?php
    include("db.php");
    include("functions.php");
    include_once("navbaradmin.php");

     ?>
    <br><br><br><br><br><br><br><br>

  	<?php
      $code = rand();
    ?>

    <div class="container1">
		<form action="quizTitleHandler.php" method="POST">
			<table border="1" height="350px" width="25%" class="container1">
        <tr>
					<th colspan="2"><h2>New Quiz</h2>
				</tr>

        <tr>
          <th colspan="2"><label for="title"><h3>title</h3></label></th>
        </tr>

				<tr>
					<th colspan="2"><input type="text" name="quiz_title" required></th>
				</tr>

				<tr>
					<th><input type="submit" name="submit" class="btn" placeholder="Save" ></th>
          <th colspan="2"><a href="quiz_list.php">Cancel</a></th>
				</tr>
			</table>
      <input type="hidden" name="quizCode" value="<?php echo $code; ?>">
		</form>
	</div>

  </body>
</html>
