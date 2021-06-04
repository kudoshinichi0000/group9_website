<?php

  //Database Connectivity
  include_once("db.php");

  //Getting quiz_code from the main.php
  $QuizCode = $_GET['quiz_code'];

  //Prepare the query
  $query = "SELECT * FROM quiz_list WHERE quiz_code = $QuizCode";

  //Perform the query
  $execQuery = mysqli_query($con, $query);

  //Fetch all exectued querries
  $fetchQuiz = mysqli_fetch_assoc($execQuery);
  $QuizCode = $fetchQuiz["quiz_code"];
  $pic = $fetchQuiz["picture"];
  $title = $fetchQuiz['title'];
  $Desc = $fetchQuiz["description"];
  $Cat = $fetchQuiz["categories"];
  $Pub = $fetchQuiz["publish"];
  $item = $fetchQuiz["items"];
  $Os = $fetchQuiz["OverallScores"];

  //it change the format of date
  $newDate = date("m-d-Y", strtotime($Pub));


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SiplayInfo</title>
    <link type="text/css" rel="stylesheet" href="css/quizcard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
  	<link rel="preconnect" href="https://fonts.gstatic.com">
  	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
  	<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">
    .Displayinfo{
      margin-top: 10em;
      width: 70%;
      border: 1px solid black;
      height: auto;
      margin-left: auto;
      margin-right: auto;
    }
    .info h2{
      color: black;
    }
    .info{
      text-align: center;
      margin-left: auto;
      margin-right: auto;
      padding-top: 50px;
    }
    </style>
  </head>
  <body>

    <?php
      //Include the navbar for public
      include_once("navbar.php");
     ?>

     <div class="Displayinfo">

       <!---Display Title--->
       <div class="info">
         <h2>Title: <?php echo " $title "; ?></h2>
           <h2>Description: <?php echo " $Desc "; ?></h2>
           <h2>Categories: <?php echo " $Cat "; ?></h2>
           <h2>Items: <?php echo " $item "; ?></h2>
           <h2>Overall Scores: <?php echo " $Os "; ?></h2>
           <h2>Date Crerated: <?php echo " $newDate "; ?></h2>
           <br><br>

           <?php
            echo "
              <a href='PlayQuiz.php?quiz_code=$QuizCode'>Play Quiz</a>
            ";
           ?>

       </div><br><br><br><br>

       <!---Info--->


     </div>
     <!--
     $fetchQuiz = mysqli_fetch_assoc($execQuery);
     $QuizCode = $fetchQuiz["quiz_code"];
     $pic = $fetchQuiz["picture"];
     $title = $fetchQuiz['title'];
     $Desc = $fetchQuiz["description"];
     $Cat = $fetchQuiz["categories"];
     $Pub = $fetchQuiz["publish"];
     $item = $fetchQuiz["items"];
     $Os = $fetchQuiz["OverallScores"];

     --->
  </body>
  <?php include_once("footerr.php"); ?>
</html>
