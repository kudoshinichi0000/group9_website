<?php

	//Step 1 Database Connectivity
	include_once "db.php";

	//Will check if the user try to access pages without logging in
	if(empty($_SESSION["userid"])){
		header("Location:login.php");
	}

 ?>


		 <?php
		 if(isset($_POST['submit'])){
			//Vardump
			$question_number = $_POST['question_number'];
			$question = $_POST['question'];
			$correct_choice = $_POST['correct_choice'];
			$questionPoints = $_POST['points'];
			$quizCode = $_POST['code'];
			$quizId = $_POST['quizId'];

			// First Query for multiple_questions Table
			$query = "UPDATE multiple_questions
								SET question_number = '$question_number', question = '$question', questionPoints = '$questionPoints'
								WHERE id = '$quizId'";

			$result = mysqli_query($con,$query);

			if ($result) {
				//i made this to add a points in Overall scores in quiz_list, when you create questions the item will be added by 1
				//the item is the total number of all questions
				$queryy = " SELECT * FROM quiz_list WHERE id = '$quizId'";
				$execQueryy = mysqli_query($con, $queryy);
				while($fetchQuestion = mysqli_fetch_assoc($execQueryy)){
				$addscore = $fetchQuestion["OverallScores"];
				$OverallScores = $addscore + $questionPoints;
				 $addScore = "UPDATE quiz_list
											SET OverallScores = $questionPoints
											WHERE quiz_code = $quizCode";
				 $execaddScore = mysqli_query($con, $addScore);
			 }

		}
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
						$query = "UPDATE option
												SET question_number = '$question_number', answer = '$is_correct', options = '$value', questionPoints = '$questionPoints'
											WHERE id = '$quizId'";

						$insert_row = mysqli_query($con,$query);
						// Validate Insertion of Choices

					}
				}
				header("Location: questions.php?quiz_code=$quizCode");
			}
		 }
			?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Multiple Question</title>
    <link type="text/css" rel="stylesheet" href="css/card.css">
    <script src="js/bootstrap.bundle.min.js"> </script>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min4.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">

  </head>
  <body>

    <?php
		include_once("db.php");
		$quizId = $_GET['id'];
		//include_once("navbaradmin.php");

    $query = "SELECT * FROM multiple_questions WHERE id = $quizId";
    $execQuery = mysqli_query($con, $query);

    	while ($Question = mysqli_fetch_assoc($execQuery)) {
			$questionId = $Question['id'];
      $question = $Question['question'];
			$question_number = $Question['question_number'];
      $code = $Question['quiz_code'];
      $points = $Question['questionPoints'];
      $typeOfQuiz = $Question['typeOfQuiz'];
			$answer = $Question['answer'];

				//Get Choices
				$query = "SELECT * FROM option WHERE question_number = $question_number";
				$choices = mysqli_query($con,$query);

      echo "

			<div class='container'>
				<div class='card'>
					<div class='card-header'>
						<h2 style='margin-left:30%'><b> Add Mutiple Choice Item<b></h2>
					</div>
					<div class='card-body'>
						<div class='center'>
							<div class='row formContainer'>
								<div class='col-lg-12'>
									<form action='MultiQedit.php' method='POST'>
										<div class='row form-group'>
											<div class='col'>
												<label for='question_number'>Question Number:</label>
												<input type='number' class='form-control' name='question_number' value='$question_number'>
											</div>
										</div>
										<div class='row form-group'>
											<div class='col'>
												<label for='question'>Question:</label>
											 <input type='text' class='form-control' placeholder='Enter your question' name='question' value='$question' required>
											</div>
										</div>
										<div class='row form-group'>
											<div class='col'>
												<label for='points'>Points:</label>
												<input type='number' class='form-control' placeholder='Enter points for this question...' name='points' value='$points' required>
											</div>
										</div>
										<div class='row form-group'>
											<div class='col'>
												<label> Correct Answer Number:</label>
													<div class='form-outline mb-4'>
														<input type='number' class='form-control' placeholder='Enter the correct Number of the answer' name='correct_choice'  min='1' max='5' value='$answer' required></input>
													</div>
											</div>
										</div>
										<div class='row form-group'>
											<div class='col'>
												<label> Answer Options</label>
												";
												while($row = mysqli_fetch_assoc($choices)){?>
														<?php echo "
														<div class='form-outline mb-4'>
														<textarea class='form-control' rows='3' cols='40' required readonly name='choice' placeholder='Option[1]' value='";?><?php echo $row['id']; ?>'><?php echo $row['options'];?><?php echo "</textarea></div>";} ?>
													<?php  echo "
											</div>
										</div>
										<div class='row form-group' style='margin-top: 40px;'>
											<div class='col'>
												<button type='submit' name='submit' class='btn btn-outline-info float-right' style='margin-left:15px;'value='Submit'>Submit</button>
												<a href='questions.php?quiz_code=$code' class='btn btn-outline-danger float-right'>Cancel</a>
											</div>
										</div>
										<input type='hidden' name='code' value='$code'>
										<input type='hidden' name='quizId' value='$questionId'>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br><br><br><br> <br><br><br>
    ";
    }

     ?>
  </body>
</html>
