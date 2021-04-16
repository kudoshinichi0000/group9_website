<!DOCTYPE html>
<html>
<head>
	<title>Quiz Prototype</title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>

	<?php include_once "db.php"; //Kapag naayos na yung error paki tanggal tong comment iwan mo lang tong (include_once "navbar.php";)  ?>

	<div class="quiz">
		<?php 

		//DISPLAY QUIZ INFO
		$quizid = $_GET["id"];
		echo "$name";

		?>
		<div class="question-card">
			

				
			<div>
				<form method='POST' action='create-question-handle.php?id=<?php echo $quizid;?>' enctype='multipart/form-data'>
				<table>
					<tr>
						<?php //create question name?>
				        <td>Question:</td>
					        <td>
					          <input class='form-control' type='text' name='inputname' required>
					        </td>
				    </tr>

				    <tr>
						<?php //create question answer?>
				        <td>Answer:</td>
					        <td>
					          <input class='form-control' type='text' name='answer' required>
					        </td>
				    </tr>

				    <tr>
						<?php //create question choice?>
				        <td>Choice 1:</td>
					        <td>
					          <input class='form-control' type='text' name='choice2' required>
					        </td>
				    </tr>

				    <tr>
						<?php //create question choice?>
				        <td>Choice 2:</td>
					        <td>
					          <input class='form-control' type='text' name='choice3' required>
					        </td>
				    </tr>
				    <tr>
				    	<?php //go to handler ?>
				   		<td><input class="form-control" type="submit" value="Submit Question"></td>
					</tr>
					</table>
				</form>
				<a href="main.php">Back Home.</a>
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