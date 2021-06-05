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
      margin-left: auto;
      margin-right: auto;
      height: auto;
    }
    .info h2{
      color: black;
    }
    .info{
      margin-left: 3em;
      padding-top: 50px;
    }
    .tayble{
      margin-left: auto;
      margin-right: auto;
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;

    }


    tr:nth-child(even){
      background-color: #f2f2f2;
    }

    tr:hover{
      background-color: #ddd;
    }

    th {
    padding-top: 5px;
    padding-bottom: 12px;
    text-align: left;
    padding-left: 12px;
    color: white;
    }
    </style>
  </head>
  <body>

    <?php
      //Include the navbar for public
      //include_once("navbar.php");
     ?>

     <div class="Displayinfo">

       <!---Display Title--->
       <div class="info">
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
              ?>
           </h2></td>
           </tr>

         </table>

       </div><br><br><br><br>


     </div>
     <?php echo " <a class='PlayQuiz' href='PlayQuiz.php?quiz_code=$QuizCode'>Play Quiz</a>";?>
     <a href="main.php">Back</a>
  </body>
  <?php include_once("footerr.php"); ?>
</html>
