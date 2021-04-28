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
		include_once ("navbar.php");

	?>

	<div class="Greet">
		Hello, Welcome To Feedopedia!
	</div><br>

	<div id="VideoIntroCenter">
		<video width="600" controls>
  		<source src="css/Video/IntroVideo.mp4" type="video/mp4">
		</video>
	</div>

	<div class="leftNavCategories">
		<table border="2" style="border:1px solid black; height: 10em;">

					<tr bgcolor="black" >
						<th id="cent">Categories</th>
					</tr>

					<tr>
						<th id="cent">
							<a href="#" class="catnav">Educational</a>
						</th>
					</tr>

					<tr >
						<th id="cent">
							<a href="#" class="catnav2">Entertainment</a>
							</th>
					</tr>

				</table>
	</div>

	<!---Dito ialalgay yung calendar--->

	<div class="centerBlack">News Feed</div>
		<div class="DisplayQuestions">
			<!---Dito i didisplay ang mga questions--->

		</div>

</body>
	<?php include_once "footerr.php";?>
</html>
