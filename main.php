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

	<?php include_once "db.php"; include_once "navbar.php"; ?><br><br><br>

	<div class="topNavCategories">
			<?php include_once("Categories.php"); ?>
		<!---Dito ilalagay yung mga different kinds of categories ng mga questions--->
	</div><br>

<!---->
	<div id="VideoIntroCenter">
		<video width="600" controls>
  		<source src="css/Video/IntroVideo.mp4" type="video/mp4">
		</video>
	</div>

	<div class="centerBlack">News Feed</div>

	<div class="DisplayQuestions">
		<!---Dito i didisplay ang mga questions--->

	</div>

	<script src="app.js"></script>
</body>
	<?php include_once "footerr.php";?>
</html>
