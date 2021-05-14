<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?php
  include_once("db.php");
	//Var_dump
	$Confirm = $_POST["Confirm"];

	if ($Confirm == "yes") {//If admin click the Yes button, the information that he/she wants delete, will be deleted to the database

		//Hidden Input
		$quizId = $_POST["quizId"];
    $quizCode = $_POST["quizCode"];


	  $deleteuery = "DELETE FROM trueorfalse WHERE id = '$quizId'";
    $execquery = mysqli_query($con, $deleteuery);
      if ($execquery) {
        header("Location: questions.php?quiz_code=$quizCode");
      }
	}else{
		header("Location: questions.php?quiz_code=$quizCode");
		exit();

	}

 ?>

  </body>
</html>
