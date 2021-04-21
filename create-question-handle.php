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

		//INSERT question data
		$query = "INSERT INTO quizzes(name) VALUES('$quizname')";

		$insertClient = mysqli_query($con, $query);

			if($insertClient){
				//GET current ID from URL to continue working on the same quiz.
				//Recommendation: Give SESSION DATA to quiz making.
				$quizid = $_GET["id"];
				echo "<h1>Success! Question is set up</h1>";
				echo "<hr>";
				echo "<a href=create-question.php?id=$quizid> Create more question.</a>";
				echo "<a href=main.php> Finish.</a>";
			}
			else{
				/*echo "<h1>ERROR! Something went wrong!</h1>";
				echo mysqli_error($con);*/
			}

	?>

</body>
</html>
