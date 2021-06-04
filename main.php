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
			$db = new PDO( 'mysql:dbname=quizdb;host=127.0.0.1','root','' );

			// user input
			$page 	 = isset( $_GET['page'] ) ? (int) $_GET['page'] : 1;
			$perPage = isset( $_GET['per-page'] ) && $_GET['per-page'] <= 50 ? (int) $_GET['per-page'] : 1;

			// positioning
			$start = ( $page > 1 ) ? ( $page * $perPage ) - $perPage : 0;

			// query
			$articles = $db->prepare( "SELECT SQL_CALC_FOUND_ROWS * FROM quiz_list LIMIT {$start}, {$perPage}" );
			$articles->execute();
			$articles = $articles->fetchAll( PDO::FETCH_ASSOC );

			// pages
			$total = $db->query( "SELECT FOUND_ROWS() as total" )->fetch()['total'];
			$pages = ceil( $total / $perPage );


			//if($Ftitle = wordwrap($articles["title"], 25, "<br>")) {
			foreach ( $articles as $article ):
			$QuizCode = $article["quiz_code"];

			//Displaying Quiz
					echo "
					<div class='align'>
					<div class='card-container'>
						<div class='card-horizontal'>
							<div class='card-front'>
								<article class='card-front-content'>
								<img src='res/quizPicture/$article[picture]' width='100%' height='175px' alt='' class='card-pic'>
								<h2 style='color:#fff;'>$article[title]</h2>
									</article>
							</div>
							<div class='card-back card-back-hr'>
								<article class='card-back-content'>
									<h2>Title: $article[title]e</h2>
									<p style='color:#fff;'>Category:	$article[categories]</p>
									<p style='color:#fff;'>Items: $article[items]</p>
									<p style='color:#fff;'>Overall Scores: $article[OverallScores]</p>
									<a class='PlayButton' href='Displayinfo.php?quiz_code=$QuizCode'>Play Quiz</a>
								</article>
							</div>
						</div>
					</div>
			</div>
					";
			 endforeach;

			 ?>

			 </div>

			 <?php
			 //Pagination

				 echo "
				 <div class='col-md-12'>
					 <div class='well well-sm'>
						 <div class='paginate'>
							 <ul class='pagination'>
								 <li>
										<a href='#'>&laquo;</a>
								 </li>
							 </ul>";
							 		for ( $x=1; $x <= $pages; $x++ ):
										 echo "
									 		<ul class='pagination'>
										 		<li>
											 		<a href='?page=$x; &per-page=$perPage'>$x</a>
										 		</li>
									 		</ul>";
									endfor;
								echo "
									<ul class='pagination'>
			 				 			<li>
			 								<a href='#'>&raquo;</a>
			 				 			</li>
			 					</ul>
						 </div>
					 </div>
				 </div>";

			//}

			?>



</body>
	<?php include_once "footerr.php";?>
</html>
