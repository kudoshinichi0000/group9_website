<!DOCTYPE html>
<html>
<head>
	<title>Quiz Prototype</title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
</head>
<body>

	<?php

		include_once "navbar.php";

		//CRUD
		//Step 1: Database Connectivity
		include_once "db.php";

		//Vardump
		$quizname = $_POST["inputname"];
		$Questionname = $_POST["questionName"];
		$Answer = $_POST["answer"];
		$Choice1 = $_POST["choice1"];
		$Choice2 = $_POST["choice2"];

		//Step 2: Prepare the query(Insert)
		$query = "INSERT INTO quizzes($quizname, $Questionname, $Answer, $Choice1, $Choice2)
						 VALUES('quiz_name', 'question', 'answer' , 'choices1', 'choices2')";

		//Step 3: Execute the query
		$execQuery = mysqli_query($con, query);

		if ($execQuery) {
			<p style="margin: auto;">Create Quiz is Successfully insert in database</p>
		}else{
			<p style="margin: auto;">Error!</p>
		}
				//header("Location: create-question.php?id=$quizid");
	?>
</body>
</html>
