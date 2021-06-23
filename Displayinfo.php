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
  $adminId = $fetchQuiz["admin_id"];
  $pic = $fetchQuiz["picture"];
  $title = $fetchQuiz['title'];
  $Desc = $fetchQuiz["description"];
  $Cat = $fetchQuiz["categories"];
  $Pub = $fetchQuiz["publish"];
  $item = $fetchQuiz["items"];
  $Os = $fetchQuiz["OverallScores"];

      //Prepare the query
      $queryid = "SELECT * FROM admin WHERE userid = $adminId";

      //Perform the query
      $execQueryid = mysqli_query($con, $queryid);

      //Fetch all exectued querries
      $fetchadmin = mysqli_fetch_assoc($execQueryid);
      $Userid = $fetchadmin["userid"];

  //it change the format of date
  $newDate = date("m-d-Y", strtotime($Pub));


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Diplay Info</title>
    <link type="text/css" rel="stylesheet" href="css/quizcard.css">
    <link type="text/css" rel="stylesheet" href="css/navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
  	<link rel="preconnect" href="https://fonts.gstatic.com">
    <style media="screen">

    </style>

  </head>
  <body>

    <?php
      //Include the navbar for public
      include_once("navbar.php");
     ?><br><br><br><br><br><br>

     <a class="Backbtton" href="main.php" >Back</a><br><br>
     <div class="Displayinfo">

       <!---Display Title--->
       <div class="info">
         <h1 style="float: left; margin-bottom:1em;">Quiz Status<h1>
         <table width="100%" class="tayble">
           <tr>
             <td><h2>Title:</h2></td>
             <td><h2><?php echo " $title "; ?></h2></td>
           </tr>

           <tr>
             <td><h2>Description:</h2></td>
             <td><h2><?php echo " $Desc "; ?></h2></td>
           </tr>

           <tr>
             <td><h2>Categories:</h2></td>
             <td><h2><?php echo " $Cat "; ?></h2></td>
           </tr>

           <tr>
             <td><h2>Quiz Code:</h2></td>
             <td><h2><?php echo " $QuizCode "; ?></h2></td>
           </tr>

           <tr>
             <td><h2>Items:</h2></td>
             <td><h2><?php echo " $item "; ?></h2></td>
           </tr>

           <tr>
             <td><h2>Overall Scores:</h2></td>
             <td><h2><h2><?php echo " $Os "; ?></h2></h2></td>
           </tr>

           <tr>
             <td><h2>Date Crerated:</h2></td>
             <td><h2><?php echo " $newDate "; ?></h2></td>
           </tr>

           <tr>
             <td><h2>Created By:</h2></td>
             <td><h2>
               <?php
               if ($Userid == $adminId) {
               $username = $fetchadmin["username"];
               echo " $username ";
                }
              ?></h2></td>
           </tr>

         </table>
          <td colspan="2"><?php echo " <br><br><h2><a class='PlayQuiz' href='playQuiz.php?n=1&quiz_code=$QuizCode'>Play Quiz</a></h2>";?></td>
       </div><br><br><br><br>


     </div>

  </body>
  <?php include_once("footerr.php"); ?>
</html>
