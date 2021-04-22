<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">

	<!---this link is to design the font style --->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">

</head>
<body>

	<?php include_once "db.php"; include_once "navbar.php"; ?>

<!--- Lalagyan ng mga <picture> -->
<div class="Con">
	<div class="carousel-container">
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
</div>

<button id="prevBtn"> ⬅ </button>
<button id="nextBtn"> ➡ </button>

	<script src="app.js"></script>
	<!---Dito ididisplay yung mga quizes--->


</body>
	<?php include_once "footer.php";?>
</html>
