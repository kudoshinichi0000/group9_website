<?php
  //Databae connectivity
  include_once("db.php");

  //dumpfile()
  $userid = $_SESSION["userid"];
  $quizTitle = $_POST['quiz_title'];

  //Hidden Input
  $quizCode = $_POST["quizCode"];

  $query = " SELECT * FROM quiz_list WHERE admin_id = '$userid' AND quiz_code = '$quizCode'";
    $execQuery = mysqli_query($con, $query);
    if ($execQuery) {
      $insertQuestion = "INSERT INTO quiz_list (admin_id, quiz_code, title) VALUES('$userid', '$quizCode', '$quizTitle')";
      $execInsert = mysqli_query($con, $insertQuestion);
      if($execInsert){
        header("location: quiz_list.php");
      }else{
        echo "error nanaman!!! AYOKO NANG MABUHAY PA code: $code";
      }
    }

 ?>
