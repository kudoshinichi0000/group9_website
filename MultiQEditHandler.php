<?php

	//Step 1 Database Connectivity
	include_once "db.php";

	//Will check if the user try to access pages without logging in
	if(empty($_SESSION["userid"])){
		header("Location:login.php");
	}

 ?>
 
<?php

  //Database Connectivity
  include_once("db.php");

  //Var_dump();
  $question = $_POST["question"];
  $answer = $_POST["ans"];
  $optA = $_POST["A"];
  $optB = $_POST["B"];
  $optC = $_POST["C"];
  $optD = $_POST["D"];
  $quizC = $_POST["quizC"];
  $typeOfQuiz = "Multiple Questions";
  //Hidden Input
  $quizId = $_POST["quizId"];

    $query = "UPDATE multiple_questions SET question = '$question', answer = '$answer', option1 = '$optA', option2 = '$optB', option3 = '$optC', option4 = '$optD', typeOfQuiz = '$typeOfQuiz' WHERE id = '$quizId'";
    $execQueryyy = mysqli_query($con, $query);
      if($execQueryyy){
        header("location: questions.php?quiz_code=$quizC");
      }else{
        echo "$quizId";
      }

 ?>
