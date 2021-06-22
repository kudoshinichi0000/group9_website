<html>
<head>
	<title>Feedopedia Play Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php //Including Database
	include_once('db.php');

	//Set Question Number
	$quiz_code = $_POST['QuizCode'];
	$name = $_POST['name'];

	echo "$name";
	
	//Query for the Question
	$query = "SELECT * FROM multiple_questions WHERE quiz_code = $quiz_code LIMIT 1";
	$result = mysqli_query($con,$query);

	while($question = mysqli_fetch_assoc($result)){
		$option1 = $question["option1"];
		$option2 = $question["option2"];
		$option3 = $question["option3"];
		$option4 = $question["option4"];
	$question = $question["question"];


	echo "
			<div class='container'>
				<div class='current'>$question  </div>
				<p class='question'> </p>
				<form method='POST' action='process.php'>
					<ul class='choicess'>

										<li><input type='radio' name='choice'>$option1</li>
										<li><input type='radio' name='choice'>$option2</li>
										<li><input type='radio' name='choice'>$option3</li>
										<li><input type='radio' name='choice'>$option4</li>
					</ul>
				</form>
			</div>
			";
		}
			?>
			<input type='hidden' name='choice'>
			<input type='submit' name='submit' value='Submit'>


</body>
</html>
