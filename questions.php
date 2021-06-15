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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min3.css">
    <link type="text/css" rel="stylesheet" href="css/card.css">
		<link type="text/css" rel="stylesheet" href="css/popup.css">
    <script src="js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
		<title>question</title>
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">

    <!--  css for the message alert delete button options, yes or no -->
    <style>
    .buttonnn{
      border:none;
      color:white;
      padding: 10px 30px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 18px;
      margin:4px 2px;
      transition-duration: 0.2s;
      cursor: pointer;

    }

    .button01{
      background-color: white;
      color:black;
      border: 2px solid #f44336
    }
    .button01:hover{
        background-color: #f44336;
        color: white;

      }
    .button1{
        background-color:white;
        color:black;
        border: 2px solid #555555;
      }
    .button1:hover{
          background-color: #555555;
          color: white;
      }
    </style>
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
			<br><br>

			<div class='container01'>
			<button class='view-modaal'>Type Questions</button>
<div class='popuup'>
  <div class='headerMod'>
    <span>Quiz Editor</span>
    <div class='close'><i class='uil uil-times'></i></div>
  </div>
  <div class='content'>
    <p>Choose type of quiz</p>
    <ul class='icons'>
			<a href='#'><i class='fas fa-comments'></i></a></li>
				<a href='#'><i class='fas fa-check-square'></i></a>
			 <a href='#'='><i class='fas fa-minus-square'></i></a>
    </ul>
		
  </div>
</div>
			</div>




			</div>
			</div>
        <a href='quiz_list.php' class='Goback'>Back</a>
        <a href='addMultipleQuestion.php?quiz_code=$code' class='addQ'>Add Multiple Question</a>
        <a href='TrueOrFalse.php?quiz_code=$code' class='addQ'>add True or False</a>
        <a href='Identification.php?quiz_code=$code' class='addQ'>Add Identification</a><br><br><br>
    ";

    ?>
		<script src="script/popup.js"> </script>



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

                      <a href='IdenDelete.php?id=$questionnnId'><img src='res/logo/Delete.png' width='2%' style='border-radius: 25em;' alt='image not found'' class='Prof' ></a>
                       <a href='IEdit.php?id=$questionnnId'><img src='res/logo/Edit.png' width='2%' style='border-radius: 25em;' alt='image not found' class='Prof' ></a>
                     </th>
                </table>";
            }


       ?>

   </div>
   <!-- PARA SA MODAL DELETE SA TRUE OR FLASE KASO DIPAKO SURE HAHA
 <div class="modal fade" id="DeleteModaltrue">
   <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h2 class="modal-title"> Delete Confirmation</h2>
           <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
         </div>
         <div class="modal-body">
           <form action="IdenDeleteHandler.php" id="form-delete-user" method="post">
               <label><p>  Are you sure you want to delete this item: <?php echo $questionn?>?</p></label>

         </div>
         <div class="modal-footer">
           <input type="submit" name="Connfirm" class="buttonnn button01" value="yes">
             <input type="submit" name="Confirm" class=" buttonnn button1" value="no">
         </div>
         <input type="hidden" name="quizId" value="$quizId">
         <input type="hidden" name="quizCode" value="$code">
         <input type="hidden" name="quizP" value="$questionP">
         </form>
     </div>
   </div>
 </div>
 <script>
   $('.delete-btn').click((e) => {
     e.preventDefault();
     if(confirm(' Are you sure you want to \to delete this item?')){
       window.location.href = $(e.target).attr('href');
     }
   });
 </script>
   <!-- PARA SA MODAL DELETE SA IDENTIFICATION
 <div class="modal fade" id="DeleteModalIden">
   <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h2 class="modal-title"> Delete Confirmation</h2>
           <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
         </div>
         <div class="modal-body">
           <form action="IdenDeleteHandler.php" id="form-delete-user" method="post">
               <label><p>  Are you sure you want to delete this item: <?php echo $questionnn?>?</p></label>

         </div>
         <div class="modal-footer">
           <input type="submit" name="Choice" class="buttonnn button01" value="yes">
             <input type="submit" name="Choice" class=" buttonnn button1" value="no">
         </div>
         <input type="hidden" name="quizId" value="$quizId">
         <input type="hidden" name="quizCode" value="$code">
         <input type="hidden" name="quizP" value="$questionP">
         </form>
     </div>
   </div>
 </div>
 <script>
   $('.delete-btn').click((e) => {
     e.preventDefault();
     if(confirm(' Are you sure you want to \to delete this item?')){
       window.location.href = $(e.target).attr('href');
     }
   });
 </script>
 -->

  </body>
</html>
