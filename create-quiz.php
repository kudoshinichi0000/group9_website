<!DOCTYPE html>
<html>
<head>
	<title>Quiz Prototype</title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>

	<?php include_once "db.php"; //include_once "navbar.php";  ?>

		<form method='POST' action='create-quiz-handle.php' enctype='multipart/form-data'>
			<table class="CreateQuiz" style="border-radius: 1em;">
				<tr>
					<th><br><h4>Name Your Quiz!</h4></th>
				</tr>
				<tr>
					<td><input type='text' class="btnon" name='inputname' placeholder="Input quiz Name: " required> </td>
				</tr>

				<tr>
					<th><br><h4>Question:</h4></th>
				</tr>
				<tr>
					<!---Create Question Name--->
					<td><input class='btnon' type='text' name='questionName' placeholder="Input Question Name: " required></td>
				</tr>
				<tr>
					<!---Create Question Answer--->
					<td><br><input class='btnon' type='text' name='answer' placeholder="Input Question Answer: " required></td>
				</tr>
				<tr>
					<!---Create Question Choice--->
					<td><br><input class='btnon' type='text' name='choice1' placeholder="Choice 1: " required></td>
				</tr>
				<tr>
					<!---Create Question Choice--->
					<td><br><input class='btnon' type='text' name='choice2' placeholder="Choice 2: " required></td>
				</tr>
				<tr>
						<td colspan="2">
							<br><input type="submit" value="submit">
						</td>
				</tr>
						<tr>
								<td><br><a href="main.php" class="main">Go back</a></td>
						</tr>
			</table>
		</form>
		</div>
	</div>

	
</body>
	<?php include_once "footerr.php"; ?>
</html>
