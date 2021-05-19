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
					$pic = $fetchQuiz["picture"];
					$title = $fetchQuiz['title'];
	        $Desc = $fetchQuiz["description"];
	        $Cat = $fetchQuiz["categories"];
	        $Pub = $fetchQuiz["publish"];
	        $newDate = date("m-d-Y", strtotime($Pub));

					echo "
						<a href='#' class='quizzes'>
							<img src='res/quizPicture/$pic' width='140px' height='140px;' style='border-radius:25em; float: left; margin-left: 1em; margin-right: 1em;' alt='image not found' >
							<h4>Title: $title</h4>
							<h4>Description: $Desc</h4>
							<h4>Categories: $Cat</h4>
							<h4>Publication Date: $newDate</h4><br><br>
						</a>
					";
				}
			 ?>

		</div>
</body>
	<?php include_once "footerr.php";?>
</html>
