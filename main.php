<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<link type="text/css" rel="stylesheet" href="css/styles.css">
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

		#Maincontainer{

			width: 80%;
			margin: auto;
		}
		.DisplayQuestions{
			margin-left: 2em;
			border: 1px solid black;
			width: 50%;
			height: 11em;
			color: black;
		}
	</style>
</head>
<body>
	<?php
		include_once("navbar.php");
	?><br><br><br><br><br><br>

	<br><br><br>
		<div id="VideoIntroCenter">
			<video width="600" controls>
	  		<source src="res/Video/IntroVideo.mp4" type="video/mp4">
			</video>
		</div>
	</div>

		<div id="Maincontainer">

			<b style="font-size: 4em;">Feedopedia Quizzes</b>
			<p>We've got all the quizzes you love to binge! Come on in and hunker down for the long haul.</p>

			<div class="Categories">
				<p style="text-align: center; align-items: center;">Our Categories</p><br>
				<a href="#">Educational</a>
				<a href="#">Entertainment</a>
				<a href="#">Mix</a>
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

				include_once("DisplayQuiz.php");


				}
			}
			?>

		</div>


</body>
	<?php include_once "footerr.php";?>
</html>
