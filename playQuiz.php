<!DOCTYPE html>
<html>
<head>
	<title>Play Quiz</title>
	<link type="text/css" rel="stylesheet" href="css/navbar.css">
	<link type="text/css" rel="stylesheet" href="css/quizcard.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
</head>
<body>

	<?php
		//include_once("navbar.php");
	?><br><br><br><br><br><br>

		<!--displaying all Quiz--->
			<?php

			//Including Database
			include_once("db.php");

			$QuizCodee = $_GET['quiz_code'];

			//Prepare the query
			$queryy = "SELECT * FROM multiple_questions";

			//Perform the query
			$resultt = mysqli_query($con, $queryy);

			//Getting or fetching all rows from the executed query
			while ($Quiz = mysqli_fetch_assoc($resultt)) {
			$questions = $Quiz["question"];
			$A = $Quiz["option1"];
			$B = $Quiz["option2"];
			$C = $Quiz["option3"];
			$D = $Quiz["option4"];

			echo "
			$questions
			";
				}
			?>

</body>
	<?php include_once "footerr.php";?>
</html>
