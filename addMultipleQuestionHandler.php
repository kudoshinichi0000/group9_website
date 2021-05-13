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
  $Codee = $_POST["Codee"];

  $insertQ = " INSERT INTO multiple_questions (quiz_code, question, questionPoints, answer, option1, option2, option3, option4, typeOfQuiz) VALUES('$Codee', '$question', '$points', '$answer', '$optA', '$optB', '$optC', '$optD', Multiple Questions)";
          $execIn = mysqli_query($con, $insertQ);
            if($execIn){
              header("location: quiz_list.php");
            }else{
              echo "maliii error nanaman tangina code: $Codee";

    }
 ?>
