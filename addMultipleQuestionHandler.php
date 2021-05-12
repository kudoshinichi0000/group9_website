<?php

  //var_dump()
  include("db.php");
  include("functions.php");

  //Vardump();
  $question = $_POST["question"];
  $points = $_POST["points"];
  $answer = $_POST["ans"];
  $optA = $_POST["A"];
  $optB = $_POST["B"];
  $optC = $_POST["C"];
  $optD = $_POST["D"];

  $adminId = $_SESSION["userid"];
  //Hidden Input
  $Codee = $_POST["Codee"];

  $query = " SELECT * FROM quiz_list WHERE admin_id = '$adminId' AND quiz_code = '$Codee' ";
    $execQuery = mysqli_query($con, $query);
    if ($execQuery) {
      $insertQuestion = "INSERT INTO multiple_questions (quiz_code, question, questionPoints, answer, option1, option2, option3, option4, typeOfQuiz) VALUES('$Codee', '$question', '$points', '$answer', '$optA', '$optB', '$optC', '$optD', 'Multiple Questions')";
      $execInsert = mysqli_query($con, $insertQuestion);
      if($execInsert){
        echo "error nanaman tangina code: $Codee";
      }else{
        echo "error nanaman tangina code: $Codee";
      }
    }
 ?>
