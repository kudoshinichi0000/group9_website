<?php

  //Database Connectivity
  include_once("db.php");

  //Var_dump();
  $question = $_POST["TorFQuestion"];
  $answer = $_POST["TorFAnswer"];
  $typeOfQuiz = "True or False";
  //Hidden Input
  $quizC = $_POST["quizCode"];
  $quizId = $_POST["questionId"];

    $query = "UPDATE trueorfalse SET question = '$question', answer = '$answer', typeOfQuiz = '$typeOfQuiz' WHERE id = '$quizId'";
    $execQueryyy = mysqli_query($con, $query);
      if($execQueryyy){
        header("location: questions.php?quiz_code=$quizC");
      }else{
        echo "$quizId";
      }

 ?>
