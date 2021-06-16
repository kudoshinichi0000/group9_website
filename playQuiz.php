<?php

	//Including Database
	include_once('db.php');

	//Set Question Number
	$number = $_GET['n'];

	//Query for the Question
	$query = "SELECT * FROM questions WHERE question_number = $number";
	$result = mysqli_query($con,$query);
	$question = mysqli_fetch_assoc($result);
	$typeOfQuiz = $question["typeOfQuiz"];
	$typeOfQuiz = $question["typeOfQuiz"];
	$typeOfQuiz = $question["typeOfQuiz"];

	//Get Choices
	$query = "SELECT * FROM option WHERE question_number = $number";
	$choices = mysqli_query($con,$query);



	// Get Total questions
	$query = "SELECT * FROM questions";
	$total_questions = mysqli_num_rows(mysqli_query($con,$query));


?>
<html>
<head>
	<title>Feedopedia Play Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<main>
			<div class="container">

				<!---Getting total number--->
				<div class="current">Question <?php echo $number; ?> of <?php echo $total_questions; ?> </div>


				<!---Questions--->
				<p class="question"><?php echo $question['question']; ?> </p>

				<form method="POST" action="process.php">
					<ul class="choicess">

						<?php
							while($row=mysqli_fetch_assoc($choices)){
								if ($typeOfQuiz == "Multiple Questions") {
									echo "
										<li><input type='radio' name='choice' value=' ";?><?php echo $row['id']; ?>'><?php echo $row['options']; echo "</li>
						 			";
					 			}
								if ($typeOfQuiz == "True or False") {
									echo "
										<li><input type='radio' name='choice' value=' ";?><?php echo $row['id']; ?>'><?php echo $row['options']; echo "</li>
						 			";
					 			}
								if ($typeOfQuiz == "Identification") {
									echo "
										<li><input type='text' name='choice' value=' ";?><?php echo $row['id']; ?>'><?php echo $row['options']; echo "</li>
						 			";
					 			}

					 } ?>


					</ul>
					<input type="hidden" name="number" value="<?php echo $number; ?>">
					<input type="submit" name="submit" value="Submit">


				</form>


			</div>

	</main>




</body>
</html>
