<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<link type="text/css" rel="stylesheet" href="css/navbar.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style media="screen">
		#Maincontainer{
			width: 80%;
			margin: auto;
		}

	form.Searchbtn input[type=text] {
		float: right;
	  padding: 10px;
	  font-size: 17px;
	  border: 1px solid grey;
	  width: 20%;
	  background: #f1f1f1;
	}

	/* Style the submit button */
	form.Searchbtn button {
		float: right;
	  width: 5%;
	  padding: 10px;
	  background: #2196F3;
	  color: white;
	  font-size: 17px;
	  border: 1px solid grey;
	  border-left: none; /* Prevent double borders */
	  cursor: pointer;
	}

	form.Searchbtn button:hover {
	  background: #0b7dda;
	}

	/* Clear floats */
	form.Searchbtn::after {
	  content: "";
	  clear: both;
	  display: table;
	}

	</style>
</head>
<body>

	<?php
		include_once("navbar.php");
	?><br><br><br><br><br><br>

		<!---Feedopedia introducing video--->
		<div id="VideoIntroCenter">
			<video width="600" controls>
	  		<source src="res/Video/IntroVideo.mp4" type="video/mp4">
			</video>
		</div>
	</div>

	<!---Welcoming text--->
	<div id="Maincontainer"><br>
		<b style="font-size: 4em; ">BuzzFeed Quizzes</b>
		<p>We've got all the quizzes you love to binge! Come on in and hunker down for the long haul.</p>

		<!---Categories--->
		<div class="Categories">
			<p style="text-align: center; align-items: center;">Our Categories</p><br>
			<a href="#">Educational</a>
			<a href="#">Entertainment</a>
			<a href="#">Mix</a>
		</div>

		<!---Search Button--->
		<form class="Searchbtn" action="main.php">
			<button type="submit" class="float: right;"><i class="fa fa-search"></i></button>
			<input type="text" placeholder="Search Title" name="search">
		</form>

		<!--displaying all Quiz--->
		<div class="centerBlack">News Feed</div><br>
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
								<img src='res/quizPicture/$pic' width='100%' height='150px' style='float: left; margin-right: 1em;' alt='image not found' >
								<div class='box'>
									<b style='font-size:2em;'>$Ftitle</b><br>
									<a href='takeQuizMultipleChoice.php?quiz_code=$QuizCode'>Play Quiz</a>
								</div>
					</div>
					";
				}
			}
			?>
		</div>


</body>
	<?php include_once "footerr.php";?>
</html>
