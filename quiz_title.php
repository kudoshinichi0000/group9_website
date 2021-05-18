<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>quiz Title</title>
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">
    <style media="screen">
    table {
      background-color: #fff;
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 40%;
      margin-left: auto;
      margin-right: auto;
      font-size: 0.8em;
      margin-bottom: 5em;

    }
    tr, th {
      border: 1px solid #000;
      text-align: center;
      align-items: center;
      padding: 8px;
    }
    </style>
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
      <div class="row">
          <span class="title" style="margin-left:40%;font-size:30px;"><b>Enter Quiz Details<b></span>
      </div>
			<table border="1" height="350px" width="35%" class="container1">
        <tr>
					<th colspan="2"><h2>New Quiz</h2>
				</tr>

        <tr>
          <th colspan="2"><label for="title"><h3>Title</h3></label>
          <input type="text" name="quiz_title" placeholder="Enter Quiz Title..." required></th>
        </tr>

				<tr>
          <th colspan="2"><label for="Desc"><h3>Description</h3></label>
          <input type="text" name="Desc" placeholder="Enter Quiz Description..." required></th>
				</tr>

        <tr>
          <th colspan="2"><label for="catg"><h3>Categories</h3></label>
              <select name="catg">
                <option value="Educational">Educational</option>
                <option value="Entertainment">Entertainment</option>
                <option value="Mix">Mix</option>
              </select>
          </th>
        </tr>

        <tr>
					<th colspan="2"><label for="ProfilePicture"><h3>Quiz Picture</h3></label>
					<input type="file" name="ProfilePicture" required></th>
				</tr>

				<tr>
          <th colspan="2"><a href="quiz_list.php">Cancel</a>
					<input type="submit" name="submit" class="btn" placeholder="Save" ></th>
				</tr>
			</table>
      <input type="hidden" name="quizCode" value="<?php echo $code; ?>">
		</form>
	</div>

  </body>
</html>
