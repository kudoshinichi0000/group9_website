<?php
  include_once("db.php");

	//Var_dump
	$Questions = $_POST["TorFQuestion"];
  $TrueorFalse = $_POST["TorFAnswer"];
  $points = $_POST["points"];
  //Hidden Input
	$quizcode = $_POST["quizCode"];
  $typeOfQuiz = "True or False";


	//Prepare The Query
	$Query = "INSERT INTO trueorfalse(quiz_code, question, answer, points, typeOfQuiz)
  VALUES('$quizcode', '$Questions', '$TrueorFalse', '$points', '$typeOfQuiz')";

	//Perform the query
	$execQuery = mysqli_query($con, $Query);

    if ($execQuery) {
      //i made this to add a points in Overall scores in quiz_list
      $queryy = " SELECT * FROM quiz_list";
      $execQueryy = mysqli_query($con, $queryy);
      while($fetchQuestion = mysqli_fetch_assoc($execQueryy)){
      $addscore = $fetchQuestion["OverallScores"];
      $items = $fetchQuestion["items"];
      $OverallScores = $addscore + $points;
      $iitem = $items + 1;
       $addScore = "UPDATE quiz_list
                    SET OverallScores = $OverallScores, items = $iitem
                    WHERE quiz_code = $quizcode";
       $execaddScore = mysqli_query($con, $addScore);
       if ($execaddScore) {
         header("Location: questions.php?quiz_code=$quizcode");
       }
    }
	}

 ?>
