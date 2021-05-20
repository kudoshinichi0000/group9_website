<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
	<!---this link is to design the font style --->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" crossorigin="anonymous">
</head>
<body>

	<?php
		include_once("navbar.php");
	?>

	<div class="Greet">
		Hello, Welcome To Feedopedia!
	</div><br>
	<br><br><br><br><br>
	<div id="VideoIntroCenter">
		<video width="600" controls>
  		<source src="res/Video/IntroVideo.mp4" type="video/mp4">
		</video>
	</div>

	<!--<div id="dropdown">
		<option id="cat">Categories</option>
		<div id="content">
			<a href="#">Educational</a>
			<a href="#">Entertainment</a>
		</div>--->

	<div class="centerBlack">News Feed</div>
		<div class="DisplayQuestions">

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

					echo "
						<a href='takeQuiz.php?quiz_code=$QuizCode' class='quizzes'
							style='
									color: black;
									text-decoration: none;
									font-size: 0.5em;
									'>
								<img src='res/quizPicture/$pic' width='140px' height='140px;' style='border-radius:25em; float: left; margin-left: 1em; margin-right: 1em;' alt='image not found' >
								<h5>Title: $title</h5>
								<h5>Description: $Desc</h5>
								<h5>Categories: $Cat</h5>
								<h5>Publication Date: $newDate</h5><br><br>
						</a>
					";
				}
			 ?>

		</div>
</body>
	<?php include_once "footerr.php";?>
</html>
