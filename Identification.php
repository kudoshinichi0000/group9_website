<?php

	//Step 1 Database Connectivity
	include_once "db.php";

	//Will check if the user try to access pages without logging in
	if(empty($_SESSION["userid"])){
		header("Location:login.php");
	}

 ?>

 <?php
 //Including database
 include_once "db.php";

 //Getting quiz_code from questions.php
 $code = $_GET['quiz_code'];

 //If the user/admin click the submit button, all of the informations in inputbox will process here, to put in database
 if(isset($_POST['submit'])){

 	//Vardump
 	$question_number = $_POST['question_number'];
 	$question = $_POST['IdenQuestion'];
 	$correct_choice = $_POST['IdenAnswer'];
 	$questionPoints = $_POST['points'];

	//Hidden input for quiz_code
 	$quizCode = $_POST['code'];

 	//New variable for type of quiz
 	$type = "Identification";

  // First Query for questions Table
 	$query = "INSERT INTO questions (quiz_code, question_number, question, questionPoints,typeOFQuiz, answer)
 	VALUES ('$quizCode', '$question_number','$question', '$questionPoints','$type','$correct_choice')";

	//Perform the query
 	$result = mysqli_query($con,$query);

	if ($result) {
		//i made this to add a points in Overall scores in quiz_list, when you create questions the item will be added by 1
		//the item is the total number of all questions
		$queryy = " SELECT * FROM quiz_list";
		$execQueryy = mysqli_query($con, $queryy);
		while($fetchQuestion = mysqli_fetch_assoc($execQueryy)){
		$addscore = $fetchQuestion["OverallScores"];
		$items = $fetchQuestion["items"];
		$OverallScores = $addscore + $questionPoints;
		$iitem = $items + 1;
		 $addScore = "UPDATE quiz_list
									SET OverallScores = $OverallScores, items = $iitem
									WHERE quiz_code = $quizCode";
		 $execaddScore = mysqli_query($con, $addScore);
	 }
	}


 	if($result){

 				//Second Query for option Table
 				$query = "INSERT INTO option (quiz_code, question_number, answer, options, questionPoints)
 				VALUES ('$quizCode', '$question_number', '1', '$correct_choice', '$questionPoints')";

				//Perform the query
 				$insert_row = mysqli_query($con,$query);
			}

		//If sucessfull, it will redirect in questions.php
 		header("Location: questions.php?quiz_code=$quizCode");

 }

 //This query is for question Number
 $query = "SELECT * FROM questions WHERE quiz_code = $code";
 $questions = mysqli_query($con,$query);
 $total = mysqli_num_rows($questions);
 $next = $total+1;

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="js/bootstrap.bundle.min.js"> </script>
    <link type="text/css" rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
    <?php
      //Including Navarbar for admin
      include_once("navbaradmin.php");
        ?>
      <br><br><br><br>
     <div class="container">
       <div class="jumbotron">
         <div class="card">
           <div class="card-header">
             <h2><b> Adding Identification Question<b></h2>
           </div>
           <div class="card-body">
              <div class="container">
                <div class="row formContainer">
                  <div class="col-lg-12">
                    <form action='Identification.php' method="POST">
											<div class="row form-group">
		                    <div class="col">
		                      <label for="question_number">Question Number:</label>
													<input type="number" class="form-control" name="question_number" value="<?php echo $next;  ?>" >
		                    </div>
		                  </div>
                    <div class="row form-group">
                      <div class="col">
                        <label for="IdenQuestion">Question:</label>
                        <input type="text" class="form-control" placeholder="Enter your question" name="IdenQuestion" required>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col">
                        <label for="IdenAnswer">Anwer:</label>
                        <input type="text" class="form-control" name="IdenAnswer" oninput="this.value = this.value.toUpperCase()" placeholder="Capital Letter*" required>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col">
                        <label for="points">Points:</label>
                        <input type="number" class="form-control" placeholder="Enter numbers only" name="points" required>
                      </div>
                    </div>
                    <div>
                      <div class="row form-group" style="margin-top: 40px;">
                      <div class="col">
                        <button type="submit" name="submit" class="btn btn-outline-info float-right" style='margin-left:15px;' value="submit">Submit</button>
                        <?php echo "<a href='questions.php?quiz_code=$code' class='btn btn-outline-danger float-right'>Cancel</a>";?>
                        <input type="hidden" name="code" value="<?php echo "$code"; ?>">
                  </form>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>
       </div>
     </div>
  </body>
</html>
