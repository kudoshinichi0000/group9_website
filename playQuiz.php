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
<html>
<head>
	<title>Feedopedia Play Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
</head>
<body>
	</main>

<div class="wrapper">
      <div class="quiz">
        <div class="quiz_header">
          <div class="quiz_user">
          	<div class="current"><h4><span class="name">Question <?php echo $number; ?> of <?php echo $total_questions; ?></span></h4> </div>
          </div>
          <div class="quiz_timer">
            <span class="time">goodluck</span>
          </div>
        </div>
        <div class="quiz_body">
          <div id="questions">



				<!---Questions--->
				<p class="question">Question: <?php echo $question['question']; ?> </p>

				<form method="POST" action="process.php">
					<ul class="choicess">
