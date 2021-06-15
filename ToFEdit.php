<?php
/*
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
 	$question = $_POST['TorFQuestion'];
 	$correct_choice = $_POST['TorFAnswer'];
 	$questionPoints = $_POST['points'];
 	$quizCode = $_POST['quizCode'];
	$quizId = $_POST["questionId"];

  // First Query for multiple_questions Table
 	$query = "UPDATE questions
						SET quiz_code = $quizCode, question_number = $question_number, question = $question, questionPoints = $questionPoints, answer = $correct_choice
 	 					WHERE id = $quizId";

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
 	//Validate First Query
 	if($correct_choice == "True"){
 				//Second Query for Choices Table
 				$query = "UPDATE option
									SET quiz_code = $quizCode, question_number = $question_number, answer = '1', options = 'True', questionPoints = $questionPoints";

 				$insert_row = mysqli_query($con,$query);

				if($insert_row){
							//Second Query for Choices Table

							$query = "UPDATE option
												SET quiz_code = $quizCode, question_number = $question_number, answer = '0', options = 'False', questionPoints = $questionPoints";

							$insert_row = mysqli_query($con,$query);

							header("Location: questions.php?quiz_code=$quizCode");
				}
}

//Validate First Query
if($correct_choice == "False"){
			//Second Query for Choices Table
			$query = "UPDATE option
								SET quiz_code = $quizCode, question_number = $question_number, answer = '0', options = 'False', questionPoints = $questionPoints";

			$insert_row = mysqli_query($con,$query);
			if($insert_row){
				//Second Query for Choices Table
				$query = "UPDATE option
									SET quiz_code = $quizCode, question_number = $question_number, answer = '1', options = 'True', questionPoints = $questionPoints";

				$insert_row = mysqli_query($con,$query);
						header("Location: questions.php?quiz_code=$quizCode");
			}
}
 }

  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit True Or False Item</title>
    <script src="js/bootstrap.bundle.min.js"> </script>
    <link type="text/css" rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min4.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </head>
  <body>
    <?php
      include_once("db.php");
      $quizId = $_GET['id'];
      //include_once("navbaradmin.php");


      $queryy = " SELECT * FROM questions WHERE id = $quizId";
      $execQuery = mysqli_query($con, $queryy);

     while($fetchtrueorfalse = mysqli_fetch_assoc($execQuery)){
       $questionnId = $fetchtrueorfalse['id'];
       $code = $fetchtrueorfalse['quiz_code'];
			 $next = $fetchtrueorfalse['question_number'];
       $questionn = $fetchtrueorfalse['question'];
       $answerr = $fetchtrueorfalse['answer'];
       $pointss = $fetchtrueorfalse['questionPoints'];
       $typeOfQuizz = $fetchtrueorfalse['typeOfQuiz'];

      echo "
      <br> <br><br><br><br>

      <div class='container'>
          <div class='card'>
            <div class='card-header'>
              <h2 style='margin-left:30%'><b>Add True or False Question<b></h2>
            </div>
            <div class='card-body'>
              <div class='center'>
                <div class='row formContainer'>
                  <div class='col-lg-12'>
                  <form action='ToFEdit.php' method='POST'>
									<div class='row form-group'>
										<div class='col'>
											<label for='question_number'>Question Number:</label>
										 <input type='number' class='form-control' name='question_number' value='$next'>
										</div>
									</div>
                      <div class='row form-group'>
                        <div class='col'>
                          <label for='TorFQuestion'>Question: </label>
                          <input type='text' class='form-control' placeholder='Enter your question' name='TorFQuestion' value='$questionn' required>
                        </div>
                      </div>
                      <br>
                      <div class='row form-group'>
                        <div class='col'>
                          <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                             <label class='input-group-text' for='TorFAnswer'>Answer:</label>
                           </div>
                              <select class='custom-select' id='inputGroupSelect01' name='TorFAnswer'>
                             ";
                               if ($answerr == 'True') {
                                 echo "
                                   <option value='$answerr'>$answerr</option>
                                   <option value='False'>False</option>
                                 ";
                               }else{
                                 echo "
                                   <option value='$answerr'>$answerr</option>
                                   <option value='True'>True</option>
                                 ";
                               }echo "
                             </select>
                           </div>
                         </div>
                       </div>
                       <div class='row form-group'>
                         <div class='col'>
                           <label for='pointss'>Points:</label>
                           <input type='number' class='form-control' placeholder='input points for this question' name='points' value='$pointss' required>
                         </div>
                       </div>
                       <div>
                         <div class='row form-group' style='margin-top: 40px;'>
                         <div class='col'>
                           <button type='submit' name='submit' class='btn btn-outline-info float-right' style='margin-left:15px;' value='Submit'>Submit</button>
                           <a href='questions.php?quiz_code=$code' class='btn btn-outline-danger float-right'>Cancel</a>
                         </div>
                       </div>
                     </div>
                     <input type='hidden' name='quizCode' value='$code'>
                     <input type='hidden' name='questionId' value='$questionnId'>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    ";
  }
    */?>
	something went wrong!
  </body>
</html>
