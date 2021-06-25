<?php

	//Step 1 Database Connectivity
	include_once "db.php";

	//Will check if the user try to access pages without logging in
	if(empty($_SESSION["userid"])){
		header("Location:login.php");
	}

 ?>

 <?php

 /*

 Hello po miss, dapat ito po yung Edit page for Identification kaso dahil nga po binago ko yung mga methods
 Sa pag gawa ng questions sa add multiple questions, add true or false at add identifications ngayong 90% completion
 Hindi ko na po sya magawa/debug kaya ang ginawa ko nilagyan ko nalang po syang attribute na readonly kaya
 parang naging view question nalang po sya

 pero naman po nung 50-75% completion ng website meron po talaga syang edit and delete button at gumagana
 naman po dati yung edit and delete questions po namin, dahil lang po sa few changes ngayong 90% hindi ko na po ma debug
 */



 /*

	 if(isset($_POST['submit'])){
		 //Database Connectivity
	   include_once("db.php");

	   //Var_dump();
	   $question = $_POST["IdenQuestion"];
		 $question_number = $_POST["question_number"];
	   $option = $_POST["IdenAnswer"];
	 	$points = $_POST["points"];

	   //Hidden Input
	   $quizC = $_POST["quizCode"];
	   $quizId = $_POST["quizId"];
		 $answer = "1";

		 	$query = "SELECT * FROM questions WHERE id = $quizId ";
			$execQuery = mysqli_query($con, $query);
			if ($execQuery) {


	     $query = "UPDATE questions
			 SET question = '$question', question_number = $question_number, answer = '$option', questionPoints = '$points'
			 WHERE id = $quizId";
	     $execQueryyy = mysqli_query($con, $query);

	       if($execQueryyy){
				  		//Second Query for Choices Table
							$queryy = "UPDATE option
												SET question_number = $question_number, answer = $answer, options = $option, questionPoints = $points
												WHERE id = $quizId";

				  		$insert_row = mysqli_query($con,$queryy);
				  			// Validate Insertion of Choices
}

									header("location: questions.php?quiz_code=$quizC");
}

	 }

*/
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
    <title>Edit Identification Item</title>
  </head>
  <body>
    <?php

    include_once("db.php");
    $Quizid = $_GET["id"];

      include_once("navbaradmin.php");
			echo "<br><br>";

      //Getting or fetching all rows from Identification
      $queryy = " SELECT * FROM questions WHERE id = '$Quizid'";

      $execQuery = mysqli_query($con, $queryy);

     while($fetchtrueorfalse = mysqli_fetch_assoc($execQuery)){
       $questionnnId = $fetchtrueorfalse['id'];
       $code = $fetchtrueorfalse['quiz_code'];
			 $next = $fetchtrueorfalse['question_number'];
       $question = $fetchtrueorfalse['question'];
       $answer = $fetchtrueorfalse['answer'];
       $points = $fetchtrueorfalse['questionPoints'];
       $typeOfQuiz = $fetchtrueorfalse['typeOfQuiz'];
      echo "
            <br><br><br><br>
            <div class='container'>
              <div class='card'>
                <div class='card-header'>
                <h2 style='margin-left:30%'><b>Editing Identification Item<b></h2>
                </div>
                  <div class='card-body'>
                    <div class='center'>
                      <div class='row formContainer'>
                        <div class='col-lg-12'>
                        <form action='IEdit.php' method='POST'>
												<div class='row form-group'>
													<div class='col'>
														<label for='question_number'>Question Number:</label>
													 <input type='number' class='form-control' name='question_number' value='$next' min='1' readonly>
													</div>
												</div>
                          <div class='row form-group'>
                            <div class='col'>
                            <label for='IdenQuestion'>Question:</label>
                            <input type='text' class='form-control' placeholder='Enter your question' name='IdenQuestion' value='$question' readonly>
                            </div>
                          </div>
                          <div class='row form-group'>
                            <div class='col'>
                            <label for='IdenAnswer'>Answer:</label>
                            <input type='text' class='form-control'  name='IdenAnswer' value='$answer' readonly>
                            </div>
                          </div>
                        <div class='row form-group'>
                          <div class='col'>
                          <label for='points'>Points:</label>
                          <input type='number' class='form-control' placeholder='Enter numbers only' name='points'  value='$points' readonly>
                         </div>
                       </div>
                       <div>
                       <div class='row form-group'style='margin-top: 40px;''>
                        <div class='col'>";
                        //<button type='submit' name='submit' class='btn btn-outline-info float-right' style='margin-left:15px;' value='submit'>Submit</button>
                        //<a href='questions.php?quiz_code=$code' class='btn btn-outline-danger float-right'>Cancel</a>
                        echo "<a href='questions.php?quiz_code=$code' class='btn btn-outline-danger float-right'>Go Back</a>
                        <input type='hidden' name='quizCode' value='$code'>
                        <input type='hidden' name='quizId' value='$questionnnId'>
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
    ";
  }
    ?>

  </body>
</html>
