<?php

	//Step 1 Database Connectivity
	include_once "db.php";

	//Will check if the user try to access pages without logging in
	if(empty($_SESSION["userid"])){
		header("Location:login.php");
	}

 ?>

<?php
include_once("db.php");


	//Var_dump
	$IdenQuestion = $_POST["IdenQuestion"];
	$IdenAnswer = $_POST["IdenAnswer"];
	$points = $_POST["points"];
	$question_number = $_POST["question_number"];

	//Hidden Input
	$quizcode = $_POST["quizCode"];

	//Creating new variable
	$typeOfQuiz = "Identification";

	//Inserting the variables
	$Query = "INSERT INTO identification(quiz_code, question_number, question, answer, points, typeOfQuiz)
	VALUES('$quizcode', '$question_number', '$IdenQuestion', '$IdenAnswer', '$points', '$typeOfQuiz')";

	//Perform the query
	$execQuery = mysqli_query($con, $Query);

		if ($execQuery) {
			//i made this to add a points in Overall scores in quiz_list, when you create questions the item will be added by 1
			//the item is the total number of all questions
			$queryy = " SELECT * FROM quiz_list";
			$execQueryy = mysqli_query($con, $queryy);
			while($fetch = mysqli_fetch_assoc($execQueryy)){
			$addscore = $fetch["OverallScores"];
			$items = $fetch["items"];
			$OverallScores = $addscore + $points;
			$iitem = $items + 1;

			 $addScore = "UPDATE quiz_list
										SET OverallScores = $OverallScores, items = $iitem
										WHERE quiz_code = $quizcode";

			 $execaddScore = mysqli_query($con, $addScore);

				 if ($execQuery) {
					 //Second Query for Choices Table
						$query = "INSERT INTO option (quiz_code, question_number, answer, options, questionPoints)
						VALUES ('$quizcode', '$question_number', '1', '$value', '$questionPoints')";
						$insert_row = mysqli_query($con,$query);
						// Validate Insertion of Choices
				 }
				 header("Location: questions.php?quiz_code=$quizcode");
		 }
		}


 ?>
