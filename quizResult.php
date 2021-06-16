<?php

include_once("db.php");

?>

<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="container">
		</div>
	</header>

	<main>
			<div class="container">
				<h2>Your Result</h2>
				<p>Congratulation You have completed this test succesfully.</p>
				<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?>  </p>
			</div>
	</main>

	<form class="" action="quizResult.php" method="post">
		<label for="name">Full name: </label>
		<input type="text" name="name" required><br>

		<label for="email">email: </label>
		<input type="email" name="email" required><br>

		<label for="Feedback">Feedback: </label>
		<textarea  name="Feedback" required></textarea><br>

		<input type="submit" name="submit" >
	</form>


</body>
</html>

<?php
//Including database
include_once("db.php");

	//If the user/admin click the submit button, all of the informations in inputbox will process here, to put in database
	if(isset($_POST['submit'])){

		//Vardump
		$score = $_SESSION['score'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$Feedback = $_POST['Feedback'];

		//Inserting feedback into website_feedback table
		$query = "INSERT INTO quiz_feedback (name, email, feedback, score)
		VALUES ('$name', '$email','$Feedback', '$score')";

		//perform the query
		$result = mysqli_query($con,$query);

		if ($result) {
			unset($_SESSION['score']);
			echo "<br><br>Successfuly added to database
				<a href='main.php'>Back</a>
			";

		}
	}
	 ?>
