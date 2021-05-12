<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    include("db.php");
    include("functions.php");
    include_once("navbaradmin.php");

     ?>
    <br><br><br><br><br><br><br><br>
  	<?php echo $_SESSION['userid'];?>
    <div class="container1">

		<form action="quiz_title.php" method="POST">
			<table border="1" height="350px" width="25%">
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
		</form>
	</div>

  <?php
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $quizTitle = $_POST['quiz_title'];
    $userId = $_SESSION['userid'];
    $code = rand();
    if(!empty($quizTitle) && !is_numeric($quizTitle))
    {

      $sql = "INSERT INTO quiz_list (title, admin_id, quiz_code) VALUES ( '$quizTitle', '$userId', '$code')";
      if (mysqli_query($con, $sql)) {
        $_SESSION['titleinsertsuccess'] = "title Added!";
  			header("location: questions.php");
  			exit;
      }
      else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }
    }
    else{
      $_SESSION['titleinserterror'] = "login first";
      header("location: login.php");
      exit;
    }
  }
  ?>

  </body>
</html>
