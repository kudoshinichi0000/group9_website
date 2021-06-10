<?php
include_once("db.php");

if(isset($_POST['submit'])){

	//Vardump
	$question_number = $_POST['question_number'];
	$question = $_POST['question'];
	$correct_choice = $_POST['correct_choice'];
	$questionPoints = $_POST['questionPoints'];
	//New variable for type of quiz
	$type = "Multiple Questions";

	// Choice Array
	$choice = array();
	$choice[1] = $_POST['choice1'];
	$choice[2] = $_POST['choice2'];
	$choice[3] = $_POST['choice3'];
	$choice[4] = $_POST['choice4'];

 // First Query for multiple_questions Table
	$query = "INSERT INTO multiple_questions (question_number, question, typeOFQuiz)
	VALUES ('$question_number','$question', '$type')";


	$result = mysqli_query($con,$query);

	//Validate First Query
	if($result){
		foreach($choice as $option => $value){
			if($value != ""){
				if($correct_choice == $option){
					$is_correct = 1;
				}else{
					$is_correct = 0;
				}

				//Second Query for Choices Table
				$query = "INSERT INTO option (question_number, answer, options, questionPoints)
				VALUES ('$question_number', '$is_correct','$value', '$questionPoints')";

				$insert_row = mysqli_query($con,$query);
				// Validate Insertion of Choices

				if($insert_row){
					continue;
				}else{
					die("2nd Query for Choices could not be executed" . $query);

				}

			}
		}
		$message = "Question has been added successfully";
	}

}

		$query = "SELECT * FROM multiple_questions";
		$questions = mysqli_query($con,$query);
		$total = mysqli_num_rows($questions);
		$next = $total+1;


?>
<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="container">
			<p>PHP Quizer</p>
		</div>
	</header>

	<main>
			<div class="container">
				<h2>Add A Question</h2>
				<?php if(isset($message)){
					echo "<h4>" . $message . "</h4>";
				} ?>

				<form method='POST' action='addMultipleQuestion.php'>
						<p>
							<label>Question Number:</label>
							<input type="number" name="question_number" value="<?php echo $next;  ?>">
						</p>
						<p>
							<label>Question Text:</label>
							<input type="text" name="question">
						</p>
						<p>
							<label>Choice 1:</label>
							<input type="text" name="choice1">
						</p>
						<p>
							<label>Choice 2:</label>
							<input type="text" name="choice2">
						</p>
						<p>
							<label>Choice 3:</label>
							<input type="text" name="choice3">
						</p>
						<p>
							<label>Choice 4:</label>
							<input type="text" name="choice4">
						</p>
						<p>
							<label>Correct Option Number</label>
							<input type="number" name="correct_choice" min="1" max="5">
						</p>
						<p>
							<label>Question points</label>
							<input type="number" name="questionPoints">
						</p>
						<input type="submit" name="submit" value ="submit">


				</form>
			</div>

	</main>


	<footer>
			<div class="container">
				Copyright &copy; IT SERIES TUTOR
			</div>


	</footer>
</body>
</html>
