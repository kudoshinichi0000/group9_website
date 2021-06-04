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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<style media="screen">
	.paginate{
		margin: auto;
	}

	.pagination > li > a{
		text-decoration: none;
		display: block;
		margin: auto;
		border: 4px solid #663300;
		color: #000;
		font-weight: 400;
		font-size: 1.6em;
		border-radius: 10px;
		width: 10em;
		height: auto;
		padding: 8px;
	}
	</style>
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
			$connect = mysqli_connect("localhost", "root", "", "quizdb");
			$record_per_page = 1;
			$page = '';
			if (isset($_GET["page"])) {
			    $page = $_GET["page"];
			} else {
			    $page = 1;
			}

			$start_from = ($page - 1) * $record_per_page;

			$query = "SELECT * FROM quiz_list order by publish DESC LIMIT $start_from, $record_per_page";
			$result = mysqli_query($connect, $query);
			while ($row = mysqli_fetch_array($result)) {

			//if($Ftitle = wordwrap($articles["title"], 25, "<br>")) {


				$QuizCode = $row["quiz_code"];

				//Displaying Quiz
				echo "
						<div class='align'>
							<div class='card-container'>
								<div class='card-horizontal'>
									<div class='card-front'>
										<article class='card-front-content'>
											<img src='res/quizPicture/$row[picture]' width='100%' height='175px' alt='' class='card-pic'>
											<h2 style='color:#fff;'>$row[title]</h2>
										</article>
									</div>

									<div class='card-back card-back-hr'>
										<article class='card-back-content'>
											<h2>Title: $row[title]e</h2>
											<p style='color:#fff;'>Category:	$row[categories]</p>
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

			 ?>

			 </div>

			 <div align="center">
                 <br />
                 <?php
                 $page_query = "SELECT * FROM quiz_list ORDER BY publish DESC";
                 $page_result = mysqli_query($connect, $page_query);
                 $total_records = mysqli_num_rows($page_result);
                 $total_pages = ceil($total_records / $record_per_page);
                 $start_loop = $page;
                 $difference = $total_pages - $page;
                 if ($difference <= 5) {
                     $start_loop = $total_pages + 1;
                 }
                 $end_loop = $start_loop + 4;
                 if ($page > 1) {
                     echo "<a href='main.php?page=1'>First</a>";
                     echo "<a href='main.php?page=" . ($page - 1) . "'><<</a>";
                 }
                 for ($i = $start_loop; $i <= $end_loop; $i++) {
                     echo "<a href='main.php?page=" . $i . "'>" . $i . "</a>";
                 }
                 if ($page <= $end_loop) {
                     echo "<a href='main.php?page=" . ($page + 1) . "'>>></a>";
                     echo "<a href='main.php?page=" . $total_pages . "'>Last</a>";
                 }
                 ?>
             </div>
             <br /><br />
         </div>
     </div>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</body>
	<?php include_once "footerr.php";?>
</html>
