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
    $code = rand();
    ?>
    <br><br><br><br><br><br><br><br>
    <div class="container1">
		<form action="quizTitleHandler.php" method="POST" enctype="multipart/form-data">
			<table border="1" height="350px" width="35%" class="container1">
        <tr>
					<th colspan="3"><h2>New Quiz</h2>
				</tr>

        <tr>
          <th colspan="2"><label for="title"><h3>title</h3></label></th>
          <th colspan="2"><input type="text" name="quiz_title" required></th>
        </tr>

				<tr>
          <th colspan="2"><label for="Desc"><h3>Description</h3></label></th>
          <th colspan="2"><input type="text" name="Desc" required></th>
				</tr>

        <tr>
          <th colspan="2"><label for="catg"><h3>Categories</h3></label></th>
            <th colspan="2">
              <select name="catg">
                <option value="Educational">Educational</option>
                <option value="Entertainment">Entertainment</option>
                <option value="Mix">Mix</option>
              </select>
          </th>
        </tr>

        <tr>
					<th colspan="2"><label for="ProfilePicture">Quiz Picture</label></th>
					<th colspan="2"><input type="file" name="ProfilePicture" required></th>
				</tr>

				<tr>
          <th colspan="2"><a href="quiz_list.php">Cancel</a></th>
					<th><input type="submit" name="submit" class="btn" placeholder="Save" ></th>
				</tr>


			</table>
      <input type="hidden" name="quizCode" value="<?php echo $code; ?>">
		</form>
	</div>

  </body>
</html>
