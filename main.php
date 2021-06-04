<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<link type="text/css" rel="stylesheet" href="css/navbar.css">
	<link type="text/css" rel="stylesheet" href="css/quizcard.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

	<?php
		include_once("navbar.php");
		include_once("db.php");
	?><br><br><br><br><br><br>

		<!---Feedopedia introducing video--->
		<div id="VideoIntroCenter">
			<video width="600" controls>
	  		<source src="res/Video/IntroVideo.mp4" type="video/mp4">
			</video>
		</div>
	</div>

	<!---Welcoming text--->
	<div class="Maincontainer"><br>
		<b style="font-size: 4em; ">BuzzFeed Quizzes</b>
		<p>We've got all the quizzes you love to binge! Come on in and hunker down for the long haul.</p>

		<!---Search Button--->
		<form class="Searchbtn" action="Search.php" method="POST">
			<button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
			<input type="text" placeholder="Search..." name="search">
		</form>

		<!---Categories--->
		<div class="Categories">
			<h4>Categories</h4><br>
			<a href="main.php" class='catH'>Latest</a>
			<a href="Educational.php" class='cat'>Educational</a>
			<a href="Entertainment.php" class='cat'>Entertainment</a>
			<a href="Mix.php" class='cat'>Mix</a>
		</div>

		<!--displaying all Quiz--->
		<div class="centerBlack">News Feed</div><br>
			<?php
				include_once("db.php");
				$query = "SELECT * FROM quiz_list ORDER BY publish DESC";
				$execQuery = mysqli_query($con, $query);
				while ($fetchQuiz = mysqli_fetch_assoc($execQuery)) {
					$QuizCode = $fetchQuiz["quiz_code"];
					$pic = $fetchQuiz["picture"];
					$title = $fetchQuiz['title'];
	        $Desc = $fetchQuiz["description"];
	        $Cat = $fetchQuiz["categories"];
	        $Pub = $fetchQuiz["publish"];
	        $newDate = date("m-d-Y", strtotime($Pub));

					if($Ftitle = wordwrap($title, 25, "<br>")) {

					echo "
					<div class='align'>
					<div class='card-container'>
						<div class='card-horizontal'>
							<div class='card-front'>
								<article class='card-front-content'>
								<img src='res/quizPicture/$pic' width='100%' height='175px' alt='' class='card-pic'>
								<h2 style='color:#000;'>$Ftitle</h2>
									</article>
							</div>
							<div class='card-back card-back-hr'>
								<article class='card-back-content'>
								<h2>Title: $Ftitle</h2>
								<p>Description: $Desc</p>
								<p>Category: $Cat</p>

								<p>$newDate</p>
								<a style='color:#fff;' href='takeQuizMultipleChoice.php?quiz_code=$QuizCode'>Play Quiz</a>
									</article>

							</div>
						</div>
					</div>
			</div>


					";
			}
		} //<a href='takeQuizMultipleChoice.php?quiz_code=$QuizCode'>Play Quiz
			?>
		</div>



</body>
	<?php include_once "footerr.php";?>
</html>
