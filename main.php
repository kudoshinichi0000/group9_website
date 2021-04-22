<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">

	<!--- In this website i will use 2 font style --->

	<!---this link is to design the font style --->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">

</head>
<body>

	<?php include_once "db.php"; include_once "navbar.php"; ?>

<!--- Lalagyan ng mga <picture> -->
	<div class="carousel-container">
		<div class="carousel-slide">
			<img src="images/Pic1.jpg" alt="img">
			<img src="images/Pic2.jpg" alt="">
			<img src="images/Pic3.jpg" alt="">
			<img src="images/Pic4.jpg" alt="">
			<img src="images/Pic5.jpeg" alt="">
			<img src="images/Pic6.jpg" alt="">
			<img src="images/Pic7.jpg" alt="">
			<img src="images/Pic8.jpg" alt="">
			<img src="images/Pic9.jpg" alt="">
			<img src="images/Pic10.jpeg" alt="">
		</div>
	</div>

	<button id="prevBtn">Prev</button>
	<button id="nextBtn">Next</button>
	<!---Dito ididisplay yung mga quizes--->


</body>
	<?php include_once "footer.php";?>
</html>
