<?php

	//Step 1 Database Connectivity
	include_once "db.php";

	//Will check if the user try to access pages without logging in
	if(empty($_SESSION["userid"])){
		header("Location:login.php");
	}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Multiple Questions</title>
  </head>
  <body>

    <?php
		//Include database
    include_once("db.php");

		//Getting id
    $quizId = $_GET['id'];

		//Prepare the query
    $query = "SELECT * FROM multiple_questions WHERE id = '$quizId'";

		//Perform the query
    $execQuery = mysqli_query($con, $query);

		//Getting/Fetching all rows from the executed query
    $fetchCodes = mysqli_fetch_assoc($execQuery);
    $question = $fetchCodes["question"];
    $questionP = $fetchCodes["questionPoints"];
    $code = $fetchCodes["quiz_code"];

    echo "
    <form action='deleteQuestion.php' method='POST'>
      <table border='1' height='350px' width='25%' class='container1'>
        <tr>
          <th colspan='2'><h2>Are You Sure you want to delete this item?</h2>
          <h2>$question</h2></th>
        </tr>
        <tr>
          <th colspan='2'><input type='submit' name='Confirm' value='no'>
          <input type='submit' name='Confirm' value='yes'></th>
        </tr>
        <tr>
          <th colspan='2'><a href='questions.php?quiz_code=$code'>Cancel</a></th>
        </tr>
      </table>
      <input type='hidden' name='quizId' value='$quizId'>
      <input type='hidden' name='quizCode' value='$code'>
      <input type='hidden' name='quizP' value='$questionP'>
    </form>
    ";

     ?>

		 <?php

		 	 if(isset($_POST['Confirm'])){

				//Incuding database
				include_once("db.php");

			 	//Var_dump
			 	$Confirm = $_POST["Confirm"];

			 	if ($Confirm == "yes") {//If admin click the Yes button, the information that he/she wants delete, will be deleted to the database

			 		//Hidden Input
			 		$quizId = $_POST["quizId"];
			    $quizCode = $_POST["quizCode"];
			    $quizP = $_POST["quizP"];

					//Prepare the query
			 	  $deleteuery = "DELETE FROM multiple_questions WHERE id = '$quizId'";

					//perform the query
			    $execquery = mysqli_query($con, $deleteuery);

			     if ($execquery) {
			     //if I delete the question, the overallscores and items will deductible based on their points
			     $query = " SELECT * FROM quiz_list WHERE quiz_code = $quizCode";
			     $execQuery = mysqli_query($con, $query);
			     while($fetchQuestion = mysqli_fetch_assoc($execQuery)){
			     $addscore = $fetchQuestion["OverallScores"];
			     $items = $fetchQuestion["items"];
			     $OverallScores = $addscore - $quizP;
			     $iitem = $items - 1;
			      $addScore = "UPDATE quiz_list
			                   SET OverallScores = $OverallScores, items = $iitem
			                   WHERE quiz_code = $quizCode";
			      $execaddScore = mysqli_query($con, $addScore);

			       if ($execaddScore) {
			         header("Location: questions.php?quiz_code=$quizCode");
			       }
			     }
			 	}
			 }else{
			     $quizCode = $_POST["quizCode"];
			     header("Location: questions.php?quiz_code=$quizCode");
			 }
		 }

			  ?>

  </body>
</html>
