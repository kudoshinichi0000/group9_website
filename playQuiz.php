<?php

	//Including Database
	include_once('db.php');

	//Set Question Number
	$number = $_GET['n'];
	$code = $_GET['quiz_code'];

	//Query for the Question
	$query = "SELECT * FROM questions WHERE question_number = $number AND quiz_code = $code";
	$result = mysqli_query($con,$query);
	$question = mysqli_fetch_assoc($result);
	$typeOfQuiz = $question["typeOfQuiz"];

	//Get Choices
	$query = "SELECT * FROM option WHERE question_number = $number AND quiz_code = $code";
	$choices = mysqli_query($con,$query);

	// Get Total questions
	$query = "SELECT * FROM questions WHERE quiz_code = $code";
	$total_questions = mysqli_num_rows(mysqli_query($con,$query));
 include_once "navbar2.php"
?>
