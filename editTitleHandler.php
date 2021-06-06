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

  //var_dump()
  $userid = $_SESSION["userid"];
  $quizTitle = $_POST['title'];
  $Desc = $_POST["Desc"];
  $Catg = $_POST["catg"];

  //Hidden Input
  $quizCode = $_POST["quizCode"];

  $query = " SELECT * FROM quiz_list WHERE admin_id = '$userid' AND quiz_code = '$quizCode'";
  $execQuery = mysqli_query($con, $query);
    if ($execQuery) {
      $insertQuestion = "UPDATE quiz_list
      SET quiz_code = '$quizCode', title = '$quizTitle', categories = '$Catg' ,description = '$Desc'
      WHERE quiz_code = '$quizCode'";

      $execInsert = mysqli_query($con, $insertQuestion);
        if($execInsert){
          header("location: quiz_list.php");
        }
    }

 ?>
