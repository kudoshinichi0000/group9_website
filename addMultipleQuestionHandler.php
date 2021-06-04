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
  $points = $_POST["points"];
  $answer = $_POST["ans"];
  $optA = $_POST["A"];
  $optB = $_POST["B"];
  $optC = $_POST["C"];
  $optD = $_POST["D"];

  //Hidden Input
  $quizC = $_POST["hiencod"];

    //inserting in multiple question
    $query = "INSERT INTO multiple_questions (quiz_code, question, questionPoints, answer, option1, option2, option3, option4, typeOfQuiz)
                VALUES('$quizC', '$question', '$points', '$answer', '$optA', '$optB', '$optC', '$optD', 'Multiple Questions')";
    $execQuery = mysqli_query($con, $query);
      if($execQuery){

        //i made this to add a points in Overall scores in quiz_list, when you create questions the item will be added by 1
        //the item is the total number of all questions
        $queryy = " SELECT * FROM quiz_list";
        $execQueryy = mysqli_query($con, $queryy);
        while($fetchQuestion = mysqli_fetch_assoc($execQueryy)){
        $addscore = $fetchQuestion["OverallScores"];
        $items = $fetchQuestion["items"];
        $OverallScores = $addscore + $points;
        $iitem = $items + 1;
         $addScore = "UPDATE quiz_list
                      SET OverallScores = $OverallScores, items = $iitem
                      WHERE quiz_code = $quizC";
         $execaddScore = mysqli_query($con, $addScore);

         if($execaddScore){
           header("location: questions.php?quiz_code=$quizC");
         }
       }
      }

 ?>
