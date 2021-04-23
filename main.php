<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<.meta name="viewport" content="width=device-width, initial-scale=1.0;">
	<!---this link is to design the font style --->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" crossorigin="anonymous">

</head>
<body>

	<?php include_once "db.php"; include_once "navbar.php"; ?><br><br><br>

	<div class="topNavCategories">
		<!--Paki delete tong div classBlack kapag literal na ilalagay na yung mga categories-->
		<div class="centerBlack">
			<h5>Dito i lalagay yung mga ibat ibang categories</h5>
		</div>

		<!---Dito ilalagay yung mga different kinds of categories ng mga questions--->

	</div><br>
<!-- Gagawin ko nalang tong every seconds magpapalit ng pictures para wala ng i cli click
	<div class="centerBlack">Welcome to Feedopedia</div><br>
	<div class="Con">
		<div class="carousel-container">
			<i class="fas fa-arrow-left" id="PrevBtn"></i>
			<i class="fas fa-arrow-right" id="nextBtn"></i>
			<div class="carousel-slide">
				<img src="css/images/Pic10.jpeg" id="lastClone" alt="" style="width: 105%">
				<img src="css/images/Pic1.jpg" alt="" style="width: 105%">
				<img src="css/images/Pic2.jpg" alt="" style="width: 105%">
				<img src="css/images/Pic3.jpg" alt="" style="width: 105%">
				<img src="css/images/Pic4.jpg" alt="" style="width: 105%">
				<img src="css/images/Pic5.jpeg" alt="" style="width: 107%">
				<img src="css/images/Pic6.jpg" alt="" style="width: 105%">
				<img src="css/images/Pic7.jpg" alt="" style="width: 107%">
				<img src="css/images/Pic8.jpg" alt="" style="width: 107%">
				<img src="css/images/Pic9.jpg" alt="" style="width: 107%">
				<img src="css/images/Pic10.jpeg" alt="" style="width: 107%">
				<img src="css/images/Pic1.jpg" id="firstClone" alt="" style="width: 105%">
			</div>
		</div>
	</div><br>
-->
	<div class="centerBlack">News Feed</div>


	<div class="DisplayQuestions">
		<!---Dito i didisplay ang mga questions--->

	</div>

	<script src="app.js"></script>
</body>
	<?php include_once "footer.php";?>
</html>
