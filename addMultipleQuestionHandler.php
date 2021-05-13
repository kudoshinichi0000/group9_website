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
  $typeOfQuiz = "Multiple Questions";
  //Hidden Input
  $quizC = $_POST["hiencod"];

  //Session id
  $userid = $_SESSION["userid"];

  //Prepare the query
  $query = "SELECT * FROM quiz_list WHERE admin_id = '$userid' AND quiz_code = '$quizC'";

  //Perform the query
  $execQuery = mysqli_query($con, $query);

    if($execQuery) {
    $queryyy = "INSERT INTO multiple_questions (quiz_code, question, questionPoints, answer, option1, option2, option3, option4, typeOfQuiz) VALUES('$quizC', '$question', '$points', '$answer', '$optA', '$optB', '$optC', '$optD', '$typeOfQuiz')";
    $execQueryyy = mysqli_query($con, $queryyy);
      if($execQueryyy){
        header("location: questions.php");
      }else{
        echo "$quizC";
      }
    }
 ?>
