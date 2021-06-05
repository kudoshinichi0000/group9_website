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
		<b style="font-size: 4em; ">Feedopedia Quizzes</b>
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

		//Including Database
		include_once("db.php");

		//this is the maximum number that the quiz can display in main.php
		$record_per_page = 8;

		$page = '';

		if (isset($_GET["page"])) {
				$page = $_GET["page"];
		} else {
				$page = 1;
		}

		$start_from = ($page - 1) * $record_per_page;

		//Prepare the query
		$query = "SELECT * FROM quiz_list order by publish DESC LIMIT $start_from, $record_per_page";

		//Perform the query
		$result = mysqli_query($con, $query);

		//Getting or fetching all rows from the executed query
		while ($row = mysqli_fetch_array($result)) {

		if($Ftitle = wordwrap($row["title"], 25, "<br>")) {

		$QuizCode = $row["quiz_code"];

			//Displaying Quiz
			//Getting Educational category in database
			if ($row["categories"] == "Educational") {

			echo "
					<div class='align'>
						<div class='card-container'>
							<div class='card-horizontal'>
								<div class='card-front'>
									<article class='card-front-content'>
										<img src='res/quizPicture/$row[picture]' width='100%' height='175px' alt='' class='card-pic'>
										<h2 style='color:#fff;'>$Ftitle</h2>
									</article>
								</div>

								<div class='card-back card-back-hr'>
									<article class='card-back-content'>
										<h2>Title: $Ftitle</h2>
										<p style='color:#fff;'>Category: $row[categories]</p>
										<p style='color:#fff;'>Items: $row[items]</p>
										<p style='color:#fff;'>Overall Scores: $row[OverallScores]</p>
										<a class='PlayButton' href='Displayinfo.php?quiz_code=$QuizCode'>Play Quiz</a>
									</article>
								</div>
							</div>
						</div>
					</div>
				";
			}
		}
	}
		 ?>
	 </div>

	 <?php
	 //Prepare the query
	 $page_query = "SELECT * FROM quiz_list ORDER BY publish DESC";

	 //Perform the query
	 $page_result = mysqli_query($con, $page_query);

	 //Fetch all rows
	 $total_records = mysqli_num_rows($page_result);

	 //Compute
	 $total_pages = ceil($total_records / $record_per_page);
	 $start_loop = $page;
	 $difference = $total_pages - $page;
	 if ($difference < 1) {
			 $start_loop = $total_pages + -1;
	 }
	 $end_loop = $start_loop + 1;

	 //Pagination for Previous botton
	 if ($page > 1) {
			 echo "<a class='pagButtonPrev' href='main.php?page=" . ($page - 1) . "'>Previous</a>";
	 }

	 //Pagination for Previous botton
	 if ($page < $end_loop) {
		 echo "<a class='pagButtonNext' href='main.php?page=" . ($page + 1) . "'>Next</a>";
	 }
		?>

</body>
	<?php include_once "footerr.php";?>
</html>
