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
  $question = $_POST["IdenQuestion"];
  $answer = $_POST["IdenAnswer"];
  $typeOfQuiz = "Identification";
  //Hidden Input
  $quizC = $_POST["quizCode"];
  $quizId = $_POST["quizId"];

    $query = "UPDATE identification SET question = '$question', answer = '$answer', typeOfQuiz = '$typeOfQuiz' WHERE id = '$quizId'";
    $execQueryyy = mysqli_query($con, $query);
      if($execQueryyy){
        header("location: questions.php?quiz_code=$quizC");
      }else{
        echo "$quizId";
      }

 ?>
