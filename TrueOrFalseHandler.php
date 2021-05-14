<?php
  include_once("db.php");

	//Var_dump
	$Questions = $_POST["TorFQuestion"];
  $TrueorFalse = $_POST["TorFAnswer"];
  $points = $_POST["points"];
  //Hidden Input
	$quizcode = $_POST["quizCode"];
  $typeOfQuiz = "True or False";


	//Prepare The Query
	$Query = "INSERT INTO trueorfalse(quiz_code, question, answer, points, typeOfQuiz)
  VALUES('$quizcode', '$Questions', '$TrueorFalse', '$points', '$typeOfQuiz')";

	//Perform the query
	$execQuery = mysqli_query($con, $Query);

    if ($execQuery) {
      header("Location: questions.php?quiz_code=$quizcode");
    }else{
		header("Location: quiz_list.php");
		exit();
	}

 ?>
