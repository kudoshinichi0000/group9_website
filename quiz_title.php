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
          <th colspan="2"><a href="#">Cancel</a></th>
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
    if(!empty($quizTitle) && !is_numeric($quizTitle))
    {

      $sql = "INSERT INTO quiz_list (title, admin_id) VALUES ( '$quizTitle', '$userId')";
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

<?php
  /*//Vardump();
  $quizList = $_POST["quiz_list"];

  //Step1: Database Connectivity
  include_once("db.php");

  //Step 2: Prepare The Query (Insert/Inserting)
  $query = "INSERT INTO quiz_list(title) VALUES('$quiz_list')";

  //Step 3: Execute the query!
  $insertTitle = mysqli_query($con, $query);

  if ($insertTitle) {
    echo "Title was sucessfully added to database";
  }else{
    echo "Error occured";
  }*/
 ?>
  </body>
</html>
