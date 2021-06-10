<?php

	//Step 1 Database Connectivity
	include_once "db.php";

	//Will check if the user try to access pages without logging in
	if(empty($_SESSION["userid"])){
		header("Location:login.php");
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
    include_once('db.php');
    $quizId = $_GET['id'];
    include_once("navbaradmin.php");
    ?>
    <br> <br><br><br><br>
    <?php

    $query = "SELECT * FROM multiple_questions WHERE id = '$quizId'";
    $execQuery = mysqli_query($con, $query);
    while ($Question = mysqli_fetch_assoc($execQuery)) {
      $question = $Question['question'];
      $code = $Question['quiz_code'];
      $points = $Question['questionPoints'];
      $option1 = $Question['option1'];
      $option2 = $Question['option2'];
      $option3 = $Question['option3'];
      $option4 = $Question['option4'];
      $answer = $Question['answer'];
      $typeOfQuiz = $Question['typeOfQuiz'];

				//Get Choices
				$query = "SELECT * FROM option WHERE question_number = $number";
				$choices = mysqli_query($con,$query);

				$query = "SELECT * FROM multiple_questions";
		 		$questions = mysqli_query($con,$query);
		 		$total = mysqli_num_rows($questions);
		 		$next = $total+1;

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
									<form action='addMultipleQuestion.php' method='POST'>
										<div class='row form-group'>
											<div class='col'>
												<label for='question_number'>Question Number:</label>
												<input type='number' class='form-control' name='question_number' value='<?php echo $next;  ?>'>
											</div>
										</div>
										<div class='row form-group'>
											<div class='col'>
												<label for='question'>Question:</label>
											 <input type='text' class='form-control' placeholder='Enter your question' name='question' required>
											</div>
										</div>
										<div class='row form-group'>
											<div class='col'>
												<label for='points'>Points:</label>
												<input type='number' class='form-control' placeholder='Enter points for this question...' name='points' required>
											</div>
										</div>
										<div class='row form-group'>
											<div class='col'>
												<label> Correct Answer Number:</label>
													<div class='form-outline mb-4'>
														<input type='number' class='form-control' placeholder='Enter the correct Number of the answer' name='correct_choice'  min='1' max='5' required></input>
													</div>
											</div>
										</div>
										<?php while($row = mysqli_fetch_assoc($choices)){ ?>
										<div class='row form-group'>
											<div class='col'>
												<label> Answer Options</label>
													<div class='form-outline mb-4'>
														<textarea class='form-control' rows='3' cols='40'  name='choice1' placeholder='Option[1]' value='$row['options']' required></textarea>
														</div>
														<div class='form-outline mb-4'>
														<textarea class='form-control' rows='3' cols='40'  name='choice2' placeholder='Option[2]' value='$row['options']' required></textarea>
														</div>
														<div class='form-outline mb-4'>
														<textarea  class='form-control' rows='3' cols='40' name='choice3' placeholder='Option[3]' value='$row['options']' required></textarea>
														</div>
														<div class='form-outline mb-4'>
														<textarea class='form-control' rows='3' cols='40'  name='choice4' placeholder='Option[4]' value='$row['options']' required></textarea>
													</div>
											</div>
										</div>

										<?php } ?>
										<div class='row form-group' style='margin-top: 40px;'>
											<div class='col'>
												<button type='submit' name='submit' class='btn btn-outline-info float-right' style='margin-left:15px;'value='Submit'>Submit</button>
												<a href='questions.php?quiz_code=$code' class='btn btn-outline-danger float-right'>Cancel</a>
											</div>
										</div>
										<input type='hidden' name='code' value='$code'>
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


		 <?php

		 	if(isset($_POST['Confirm'])){


			}



		  ?>
  </body>
</html>
