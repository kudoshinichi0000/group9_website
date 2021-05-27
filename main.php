<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/styles.css">
	<link type="text/css" rel="stylesheet" href="css/navbar.css">
  <script src="https://use.fontawesome.com/52b2061ad6.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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
	</div><br><br><br>

		<div id="Maincontainer">

			<b style="font-size: 4em;">BuzzFeed Quizzes</b>
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
					echo "
						<div class='row'>
						  <div class='section scrollspy'>
						    <div class='container'>
						      <div class='row'>
						        <div class='col s12 m4 l4'>
						          <div class='card'>
						            <div class='card-image waves-effect waves-block waves-light'>
						               <img class='activator' src='res/quizPicture/$pic' width='80px' height='150px' style=''>
						            </div>
						            <div class='card-content'>
						               <span class='card-title activator grey-text text-darken-4'>$title<i class='mdi-navigation-more-vert right material-icons'>more_vert</i></span>
						               <p><a href='#'>Website Link</a></p>
						            </div>
						            <div class='card-reveal'>
						                <span class='card-title grey-text text-darken-4'>$title<i class='mdi-navigation-close right material-icons'>close</i></span>
						                <p>$Desc</p>
						            </div>
						          </div>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>
					";
				}
			}
			?>

		</div>

        <script type="text/javascript" src="css/script/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="css/script/materialize.min.js"></script>

</body>
	<?php include_once "footerr.php";?>
</html>
