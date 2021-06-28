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
	</style>
</head>
<body>
	<?php

	$id = $_GET["id"];
	include_once "db.php";
	include_once "navbar.php" ?>

	<div class="Rank">
		<?php

		$query = " SELECT * FROM quiz_list WHERE admin_id = $id";
		$execQuery = mysqli_query($con, $query);

		if ($execQuery ) {
			$queryy = " SELECT * FROM logs";
			$execQueryy = mysqli_query($con, $queryy);
			while($fetchscores = mysqli_fetch_assoc($execQueryy)){
			$name = $fetchscores["username"];
			$email = $fetchscores["email"];
			$quizCode = $fetchscores["quiz_code"];
			$score = $fetchscores["score"];
			$date = $fetchscores["date"];
			$newDate = date("m-d-Y", strtotime($date));

					$queryyy = " SELECT * FROM quiz_list WHERE quiz_code = $quizCode";
					$execQueryyy = mysqli_query($con, $queryyy);
					$fetchtitle = mysqli_fetch_assoc($execQueryyy);
					$title = $fetchtitle["title"];

			echo "Name: $name<br>
			 			Email: $email<br>
						quiz_code: $quizCode<br>
						title: $title<br>
						Score: $score<br>
						Date: $newDate

						<br><br><br>";
			}
		}

		 ?>
	</div>

</body>
	<?php include_once "footerr.php";?>
</html>
