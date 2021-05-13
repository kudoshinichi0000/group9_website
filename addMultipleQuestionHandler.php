<?php

  //Database Connectivity
  include_once("db.php");

  //Var_dump();
  $question = $_POST["question"];
  $points = $_POST["points"];
  $answer = $_POST["ans"];
  $optA = $_POST["A"];
  $optB = $_POST["B"];
  $optC = $_POST["C"];
  $optD = $_POST["D"];
  //Hidden Input
  $quizC = $_POST["hiencod"];

    $queryyy = "INSERT INTO multiple_questions (quiz_code, question, questionPoints, answer, option1, option2, option3, option4, typeOfQuiz)
                VALUES('$quizC', '$question', '$points', '$answer', '$optA', '$optB', '$optC', '$optD', 'Multiple Questions')";
    $execQueryyy = mysqli_query($con, $queryyy);
      if($execQueryyy){
        header("location: questions.php?quiz_code=$quizC");
      }else{
        echo "$quizC";
      }

 ?>
