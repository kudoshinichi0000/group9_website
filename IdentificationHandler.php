<?php
  include_once("db.php");

	//Var_dump
	$IdenQuestion = $_POST["IdenQuestion"];
  $IdenAnswer = $_POST["IdenAnswer"];
  $points = $_POST["points"];
  //Hidden Input
	$quizcode = $_POST["quizCode"];
  $typeOfQuiz = "Identification";

	//Prepare The Query
	$Query = "INSERT INTO identification(quiz_code, question, answer, points, typeOfQuiz)
  VALUES('$quizcode', '$IdenQuestion', '$IdenAnswer', '$points', '$typeOfQuiz')";

	//Perform the query
	$execQuery = mysqli_query($con, $Query);

    if ($execQuery) {
      header("Location: questions.php?quiz_code=$quizcode");
    }else{
		header("Location: quiz_list.php");
		exit();
	}

 ?>
