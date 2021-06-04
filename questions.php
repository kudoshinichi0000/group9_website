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
    <title>question</title>
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">
  </head>
  <body>
    <?php
    //Including navbar for admin
      include_once("navbaradmin.php");
    ?>
    <br><br><br><br><br>

  <?php

    //Step 1 Database Connectivity
    include_once "db.php";

    //This is for user id
    $userId = $_SESSION['userid'];

    //getting the Quiz_code
    $code = $_GET["quiz_code"];

    //Step 2 Prepare the query
    $query = " SELECT * FROM quiz_list WHERE admin_id = '$userId' AND quiz_code = '$code'";

    //Step 3 Perform the query
    $execQuery = mysqli_query($con, $query);

    //Getting/fetching all rows from the executed query
    $fetch = mysqli_fetch_assoc($execQuery);
    $title = $fetch['title'];
    $QuizPic = $fetch["picture"];
    $Cat = $fetch["categories"];
    $OS = $fetch["OverallScores"];
    $items = $fetch["items"];

    //This section will provide information about the quiz
    echo "
      <div class='Containerhead'>
        <div class='cont'>
          <img src='res/quizPicture/$QuizPic' width='250px' height='150px' alt='image not found' class='Prof' >
            <h4>Title: $title</h4>
            <h4>Categories: $Cat</h4>
            <h4>Total Points: $OS</h4>
            <h4>Items: $items</h4>
          </div>
        </div>";

    //displaying Buttons
    echo "
      <br><br>
        <a href='quiz_list.php' class='Goback'>Back</a>
        <a href='addMultipleQuestion.php?quiz_code=$code' class='addQ'>Add Multiple Question</a>
        <a href='TrueOrFalse.php?quiz_code=$code' class='addQ'>add True or False</a>
        <a href='Identification.php?quiz_code=$code' class='addQ'>Add Identification</a><br><br><br>
    ";

    ?>

    <!--In this area will displaying all questions created by the user-->
    <div class="SectionQ">

      <!---Labeling all Questions--->
       <div class="mid">
         <br><h2>Questions</h2><hr>
       </div>

       <?php

        // In this section we will get all multiple questions in table in database

        //Step 2 Prepare the query
     	  $query = " SELECT * FROM multiple_questions WHERE quiz_code = '$code'";

        //Step 3 Perform the query
        $execQuery = mysqli_query($con, $query);

        //Getting/fetching all rows from the executed query
      	while($fetchQuestion = mysqli_fetch_assoc($execQuery)){
         $questionId = $fetchQuestion['id'];
         $question = $fetchQuestion['question'];
         $points = $fetchQuestion['questionPoints'];
         $typeOfQuiz = $fetchQuestion['typeOfQuiz'];

           //Display all Multiple Question questions
           echo "
             <table class='cons' width='100%' height='1em' style='background-color: #dacb72;'>
               <tr>
                 <th colspan='5'>
                   <i style='float:left; margin-left: 1em; font-size: 1em;'> $typeOfQuiz </i>
                   <i style='float:left; margin-left: 1em; margin-right: 1em; font-size: 1em;'> Points: $points </i>
                   <i style='float:left; margin-left: 1em; font-size: 1em;'>Question: $question</i>
                   <a href='deleteQuestion.php?id=$questionId'><img src='res/logo/Delete.png' width='2%' style='border-radius: 25em;' alt='image not found' class='Prof' ></a>
                   <a href='MultiQEdit.php?id=$questionId'><img src='res/logo/Edit.png' width='2%' style='border-radius: 25em;' alt='image not found' class='Prof' ></a>
                 </th>
               </tr>
             </table>";
         }




              // In this section we will get all True or False question in table in database

              //Step 2 Prepare the query
              $queryy = " SELECT * FROM trueorfalse WHERE quiz_code = '$code'";

              //Step 3 Perform the query
              $execQuery = mysqli_query($con, $queryy);

               //Getting/fetching all rows from the executed query
               while($fetchtrueorfalse = mysqli_fetch_assoc($execQuery)){
               $questionnId = $fetchtrueorfalse['id'];
               $codee = $fetchtrueorfalse['quiz_code'];
               $questionn = $fetchtrueorfalse['question'];
               $answerr = $fetchtrueorfalse['answer'];
               $pointss = $fetchtrueorfalse['points'];
               $typeOfQuizz = $fetchtrueorfalse['typeOfQuiz'];

               //Display all True or false questions
               echo "
                 <table class='cons' width='100%' height='1em;' style='background-color: #dda3f1;'>
                   <tr>
                     <th colspan='5'>
                       <i style='float:left; margin-left: 1em; font-size: 1em;'> $typeOfQuizz </i>
                       <i style='float:left; margin-left: 1em; font-size: 1em;'> Points: $pointss </i>
                       <i style='float:left; margin-left: 1em; font-size: 1em;'>Question: $questionn</i>
                       <a href='deletetrueorfalse.php?id=$questionnId'><img src='res/logo/Delete.png' width='2%' style='border-radius: 25em;' alt='image not found' class='Prof' ></a>
                       <a href='ToFEdit.php?id=$questionnId'><img src='res/logo/Edit.png' width='2%' style='border-radius: 25em;' alt='image not found' class='Prof' ></a>
                    </th>
                   </tr>

                 </table>";
             }



             // In this section we will get all Identification question in table in database

             //Step 2 Prepare the query
             $queryy = " SELECT * FROM identification WHERE quiz_code = '$code'";

             //Step 3 Perform the query
             $execQuery = mysqli_query($con, $queryy);

              //Getting/fetching all rows from the executed query
              while($fetchtrueorfalse = mysqli_fetch_assoc($execQuery)){
              $questionnnId = $fetchtrueorfalse['id'];
              $codeee = $fetchtrueorfalse['quiz_code'];
              $questionnn = $fetchtrueorfalse['question'];
              $answerrr = $fetchtrueorfalse['answer'];
              $pointsss = $fetchtrueorfalse['points'];
              $typeOfQuizzz = $fetchtrueorfalse['typeOfQuiz'];

              //Display all Identification questions
              echo "
                <table class='cons' width='100%' height='1em;' style='background-color: #e55f5f;'>
                  <tr>
                    <th colspan='5'>
                       <i style='float:left; margin-left: 1em; font-size: 1em;'> $typeOfQuizzz </i>
                       <i style='float:left; margin-left: 1em; font-size: 1em;'> Points: $pointsss </i>
                       <i style='float:left; margin-left: 1em; font-size: 1em;'>Question: $questionnn</i>
                       <a href='IdenDelete.php?id=$questionnnId'><img src='res/logo/Delete.png' width='2%' style='border-radius: 25em;' alt='image not found' class='Prof' ></a>
                       <a href='IEdit.php?id=$questionnnId'><img src='res/logo/Edit.png' width='2%' style='border-radius: 25em;' alt='image not found' class='Prof' ></a>
                     </th>
                </table>";
            }


       ?>

   </div>
  </body>
</html>
