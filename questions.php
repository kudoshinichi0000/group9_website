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
  <br><br><br><br>
		<div class='container01'>
			<button class='view-modaal'>Type Questions</button>
				<div class='popuup'>
  				<div class='headerMod'>
    				<span>Quiz Editor</span>
    				<div class='close'><i class='uil uil-times'></i></div>
  			  </div>

  					<div class='content'><br><br>
							<ul class='icons'>
								<a href='addMultipleQuestion.php?quiz_code=$code'><i class='fas fa-comments'></i></a></li>
								<a href='TrueOrFalse.php?quiz_code=$code'><i class='fas fa-check-square'></i></a>
								<a href='Identification.php?quiz_code=$code'><i class='fas fa-minus-square'></i></a>
							</ul>

    						<div class='field'>
			 						<p> MULTIPLE CHOICE</p>
			 						<p> TRUE OR FALSE</p>
									<p> IDENTIFICATION</p>
    						</div>
  						</div>
						</div>
					</div>
				</div>
			</div>

			<div class='icongb'>
        <a href='quiz_list.php'<i class='fas fa-arrow-alt-circle-left'></i></a>
			</div><br><br><br>
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
     	  $query = " SELECT * FROM questions WHERE quiz_code = '$code' ORDER BY question_number ASC";

        //Step 3 Perform the query
        $execQuery = mysqli_query($con, $query);

        //Getting/fetching all rows from the executed query
      	while($fetchQuestion = mysqli_fetch_assoc($execQuery)){
         $questionId = $fetchQuestion['id'];
         $question = $fetchQuestion['question'];
         $points = $fetchQuestion['questionPoints'];
         $typeOfQuiz = $fetchQuestion['typeOfQuiz'];
				 if(strlen($question) >= 0){
            $questionn = substr($question,0,40) . " ...";

           //Display all Multiple Question questions
           echo "
             <table class='cons' width='100%' height='1em' style='background-color: #cce5ff;'>
               <tr>
                 <th colspan='5'>";

									 if ($typeOfQuiz == "Multiple Questions") {
                   		echo "
											<i style='float:left; margin-left: 2em; font-size: 1em;'> $typeOfQuiz </i>
	                    <i style='float:left; margin-left: 1.5em; margin-right: 1em; font-size: 1em;'> Points: $points </i>
	                    <i style='float:left; margin-left: 1em; font-size: 1em;'>Question:  <colspan style='margin-left:0.5em;'>$questionn</colspan></i>
											<a href='MultiQEdit.php?id=$questionId'><img src='res/logo/view.gif' width='3.9%' style='border-radius: 25em;' alt='image not found' class='Prof' ></a>
											";
									 }
									 if ($typeOfQuiz == "True or False") {
                   		echo "
											<i style='float:left; margin-left: 3em; font-size: 1em;'> $typeOfQuiz </i>
	                    <i style='float:left; margin-left: 3em; margin-right: 1em; font-size: 1em;'> Points: $points </i>
	                    <i style='float:left; margin-left: 1.2em; font-size: 1em;'>Question: <colspan style='margin-left:0.5em;'>$questionn</colspan></i>
											<a href='ToFEdit.php?id=$questionId'><img src='res/logo/view.gif' width='3.9%' style='border-radius: 25em;' alt='image not found' class='Prof' ></a>";
                   }
									 if ($typeOfQuiz == "Identification") {
									 		echo "
											<i style='float:left; margin-left: 3em; font-size: 1em;'> $typeOfQuiz </i>
	                    <i style='float:left; margin-left: 2.5em; margin-right: 1em; font-size: 1em;'> Points: $points </i>
	                    <i style='float:left; margin-left: 1.5em; font-size: 1em;'>Question:  <colspan style='margin-left:0.5em;'>$questionn</colspan></i>
											<a href='IEdit.php?id=$questionId'><img src='res/logo/view.gif' width='3.9%' style='border-radius: 25em;' alt='image not found' class='Prof' ></a>";
									 }
									 echo "
								 </th>
               </tr>
             </table>";
         }
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
               <label><p>  Are you sure you want to delete this item: <?php //echo $questionn?>?</p></label>

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
               <label><p>  Are you sure you want to delete this item: <?php //echo $questionnn?>?</p></label>

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
<<<<<<< HEAD
 -->
  </body>
</html>
