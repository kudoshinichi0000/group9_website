<?php

	//Step 1 Database Connectivity
	include_once "db.php";

	//Will check if the user try to access pages without logging in
	if(empty($_SESSION["userid"])){
		header("Location:login.php");
	}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  include_once("db.php");
	//Var_dump

	$Confirm = $_POST["Confirm"];

	if ($Confirm == "yes") {//If admin click the Yes button, the information that he/she wants delete, will be deleted to the database

		//Hidden Input
    $quizId = $_POST["quizId"];
    $quizCode = $_POST["code"];
    $quizP = $_POST["questionP"];


	  $deleteuery = "DELETE FROM identification WHERE id = '$quizId'";
    $execquery = mysqli_query($con, $deleteuery);
      if ($execquery) {
        //i made this to add a points in Overall scores in quiz_list
        $query = " SELECT * FROM quiz_list WHERE quiz_code = $quizCode";
        $execQuery = mysqli_query($con, $query);
        while($fetchQuestion = mysqli_fetch_assoc($execQuery)){
        $addscore = $fetchQuestion["OverallScores"];
        $items = $fetchQuestion["items"];
        $OverallScores = $addscore - $quizP;
        $iitem = $items - 1;
         $addScore = "UPDATE quiz_list
                      SET OverallScores = $OverallScores, items = $iitem
                      WHERE quiz_code = $quizCode";
         $execaddScore = mysqli_query($con, $addScore);
         if ($execaddScore) {
           header("Location: questions.php?quiz_code=$quizCode");
         }
      }
	}
  else{
    //if no
    header("Location: quiz_list.php");
    exit();
  }

}


 ?>

  </body>
</html>
