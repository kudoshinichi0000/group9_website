<!DOCTYPE html>
<html>
<head>
	<title>Main</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" crossorigin="anonymous">
	<style media="screen">
		.wel{
			text-align: center;
			margin-left: auto;
			margin-right: auto;
			color: #fff;
			background-color: red;
			padding:1em;
			font-size:1.2em;
			width: 80%;
			border-radius: 5em;
		}
	</style>
</head>
<body>
	<?php
		include_once("navbar.php");
	?>
	<br><br><br><br><br><br>
		<div class="wel">
			Hello, Welcome To Feedopedia!
		</div>
	<br><br><br>
		<div id="VideoIntroCenter">
			<video width="600" controls>
	  		<source src="res/Video/IntroVideo.mp4" type="video/mp4">
			</video>
		</div>
	</div>

	<!--displaying all Quiz--->
	<div class="centerBlack">News Feed</div>
			<?php
				include_once("db.php");
				$query = "SELECT * FROM quiz_list";
				$execQuery = mysqli_query($con, $query);
				while ($fetchQuiz = mysqli_fetch_assoc($execQuery)) {
					$QuizCode = $fetchQuiz["quiz_code"];
					$pic = $fetchQuiz["picture"];
					$title = $fetchQuiz['title'];
	        $Desc = $fetchQuiz["description"];
	        $Cat = $fetchQuiz["categories"];
	        $Pub = $fetchQuiz["publish"];
	        $newDate = date("m-d-Y", strtotime($Pub));

					if(strlen($title) >= 1){
		            $Ftitle = substr($title,0,25) . "...";
					echo "
					<div class='DisplayQuestions'>
						<a href='takeQuizMultipleChoice.php?quiz_code=$QuizCode'
							style='
									color: black;
									text-decoration: none;
									'>
								<img src='res/quizPicture/$pic' width='250px' height='150px' style='float: left; margin-right: 1em;' alt='image not found' >
								<b style='font-size:2em;'>$Ftitle</b>
								<h5>Description: $Desc</h5>
								<h5>Categories: $Cat</h5>
								<h5>Publication Date: $newDate</h5><br><br>
						</a>
					</div><br>
					";
				}
			}
			 ?>

</body>
	<?php include_once "footerr.php";?>
</html>
