<?php

  //Database Connectivity
  include_once("db.php");

  //Var_dump();
  $question = $_POST["IdenQuestion"];
  $points = $_POST["points"];
  $answer = $_POST["IdenAnswer"];
  $typeOfQuiz = "Identification";
  //Hidden Input
  $quizC = $_POST["quizCode"];
  $quizId = $_POST["quizId"];

    $query = "UPDATE identification SET question = '$question', points = '$points', answer = '$answer', typeOfQuiz = '$typeOfQuiz' WHERE id = '$quizId'";
    $execQueryyy = mysqli_query($con, $query);
      if($execQueryyy){
        header("location: questions.php?quiz_code=$quizC");
      }else{
        echo "$quizId";
      }

 ?>