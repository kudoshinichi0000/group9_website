<!DOCTYPE html>
<html>
<head>
	<title>Quiz Prototype</title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
</head>
<body>

	<?php include_once "db.php"; include_once "navbar.php";  ?>

	<div id="box">
		<form method='POST' action='create-question-handle.php?id=<?php echo $quizid;?>' enctype='multipart/form-data'>
			<table class="form child" style="border-radius: 1em;">
				<tr>
					<th><br><h4>Question:</h4></th>
				</tr>
				<tr>
					<!---Create Question Name--->
					<td><input class='btnon' type='text' name='inputname' placeholder="Input Question Name: " required></td>
				</tr>
				<tr>
					<!---Create Question Answer--->
					<td><br><input class='btnon' type='text' name='answer' placeholder="Input Question Answer: " required></td>
				</tr>
				<tr>
					<!---Create Question Choice--->
					<td><br><input class='btnon' type='text' name='choice2' placeholder="Choice 1: " required></td>
				</tr>
				<tr>
					<!---Create Question Choice--->
					<td><br><input class='btnon' type='text' name='choice3' placeholder="Choice 2: " required></td>
				</tr>
				<tr>
						<td colspan="2">
							<br><input type="submit" value="LOGIN">
						</td>
				</tr>
						<tr>
								<td><br><a href="main.php" class="main">Go back</a></td>
						</tr>
			</table>
		</form>
	</div>
		</div>
	</div>

</body>
	<!---Footer---->
	<footer>
		<br><br>
		<div class="Centeredtext">
			<a href="#">Home</a>
			<a href="#">About</a>
			<a href="#">Services</a>
			<a href="#">Contact</a>
			<a href="#">Terms</a>
			<a href="#">Data Policy</a>
			<a href="#">Cookies Policy</a>
		<br>
		</div>
		<div class="cenocolor"><h5>Copyright © 2021 GROUP9</h5></div>
	</footer>
</html>
