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
		include_once "db.php";
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

	<!---<div id="dropdown">
		<option id="cat">Categories</option>
		<div id="content">
			<a href="#">Educational</a>
			<a href="#">Entertainment</a>
		</div>
	</div>--->

	<div class="centerBlack">News Feed</div>
		<div class="DisplayQuestions">

		</div>
</body>
	<?php include_once "footerr.php";?>
</html>
