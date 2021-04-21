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

		include_once "db.php"; include_once "navbar.php";

		$quizname = $_POST["inputname"];

		$query = "INSERT INTO quizzes(name) VALUES('$quizname')";

		$insertClient = mysqli_query($con, $query);

			if($insertClient){
				echo "<h1>Success! Quiz set up</h1>";
				echo "<hr>";

					//GET current QUIZID from db to continue working on the same quiz.
					//Recommendation: Give SESSION DATA to quiz making.
					$query = "SELECT * FROM quizzes WHERE name = '$quizname'";
					$exQuery = mysqli_query($con, $query);
					$result = mysqli_fetch_assoc($exQuery);
					$quizid = $result["quizid"];
					//ADD quizid to URL
				header("Location: create-question.php?id=$quizid");
			}
			else{
				/*echo "<h1>ERROR! Something went wrong!</h1>";
				echo mysqli_error($con);*/
			}

	?>




</body>
</html>
