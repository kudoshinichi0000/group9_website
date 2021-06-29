<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" crossorigin="anonymous">
	<style media="screen">
		.Rank{
			margin-top: 10em;
			margin-bottom: 30em;
		}
		body{
			background-image: linear-gradient(to left top, #87eda1, #82f0b5, #82f3c8, #87f5d8, #90f7e6, #90f7e6, #90f7e6, #90f7e6, #87f5d8, #82f3c8, #82f0b5, #87eda1);
		}
		.align{
		  padding-top:20px;
		  display: inline-block;
		  flex-flow:row wrap;
		  justify-content:space-around;
		  align-items:space-around;
		  margin-left: 3em;
		  margin-bottom: 4em;
		  color:#fff;
		}
		.card-container{
		  -webkit-perspective:1200;
		  -moz-perspective:1200;
		  perspective:1200;
		}
		.card-horizontal{
		  height:250px;
		  width:250px;
		  box-shadow: 0 6px 8px #bbb;

		 }
		.card-front{
		  color:#fff;
		  height:100%;
		  width:100%;
		  position:absolute;
		  background:#7d9da8;
		 }
		.card-front-content{
		  box-sizing:border-box;
		  text-align:left;
		  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
			line-height: 2.0;
			padding-top: 3em;
			text-align: center;
		}
		.card-pic{
		  margin-bottom:0.5em;
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
					$OverallScores = $fetchtitle["OverallScores"];

			echo "
									<div class='align'>
										<div class='card-container'>
											<div class='card-horizontal'>
												<div class='card-front'>
													<article class='card-front-content'>
													<div style='color:#fff;'>Title: $title</div>
													<div style='color:#fff;'>Name: $name</div>
													<div style='color:#fff;'>Email: $email</div>
													<div style='color:#fff;'>Score: $score / $OverallScores</div>
													<div style='color:#fff;'>Date of Response: $newDate</div>
													</article>
												</div>
											</div>
										</div>
									</div>
							";


			}


		 ?>
	</div>

</body>
	<?php include_once "footerr.php";?>
</html>
