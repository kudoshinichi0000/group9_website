<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
	<style media="screen">
		.Rank{
			margin-top: 10em;
			margin-bottom: 30em;
		}
		body{
			background-image: linear-gradient(to left top, #87eda1, #82f0b5, #82f3c8, #87f5d8, #90f7e6, #90f7e6, #90f7e6, #90f7e6, #87f5d8, #82f3c8, #82f0b5, #87eda1);
		}
	</style>
</head>
<body>
	<?php
	include_once "db.php";
	include_once "navbar.php" ?>

	<div class="Rank">
		<?php

		//In this page we will displaying all quiz result

			//getting all data in logs table
			$query = " SELECT * FROM logs";
			$execQuery = mysqli_query($con, $query);
			while($fetchscores = mysqli_fetch_assoc($execQuery)){
			$name = $fetchscores["username"];
			$email = $fetchscores["email"];
			$quizCode = $fetchscores["quiz_code"];
			$score = $fetchscores["score"];
			$date = $fetchscores["date"];
			$newDate = date("m-d-Y", strtotime($date));

					//Getting the title
					$queryy = " SELECT * FROM quiz_list WHERE quiz_code = $quizCode";
					$execQueryy = mysqli_query($con, $queryy);
					$fetchtitle = mysqli_fetch_assoc($execQueryy);
					$title = $fetchtitle["title"];

			echo "Name: $name<br>
			 			Email: $email<br>
						quiz_code: $quizCode<br>
						title: $title<br>
						Score: $score<br>
						Date: $newDate
						<br><br><br>";
			}


		 ?>
	</div>

</body>
	<?php include_once "footerr.php";?>
</html>
