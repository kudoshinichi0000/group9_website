<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>question</title>
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">
  </head>
  <body>

    <br><br><br><br><br>

  <?php
    //Step 1 Database Connectivity
    include("db.php");
    include("functions.php");
    $userId = $_SESSION['userid'];

    //This is for user id
    //Step 2 Prepare the query
	  $query = " SELECT * FROM quiz_list WHERE admin_id = '$userId'";

    //Step 3 Perform the query
   	$execQuery = mysqli_query($con, $query);

    //Getting/fetching all rows from the executed query
 	  $fetch = mysqli_fetch_assoc($execQuery);
      $code = $fetch['quiz_code'];
      $title = $fetch['title'];

      //This section will provide information about the quiz
      echo "
      <div class='Containerhead'>
        <div class='cont'>
          <h4>Quiz title: $title</h4>
          <h4>Quiz Code: $code </h4>
          <h4>admin id: $userId </h4>
          <h4>Status: pending</h4>
        </div>
      </div>";

  ?>

  <br><br><a href="addMultipleQuestion.php" class="addMultipleQuestion">Add Multiple Question</a>
  <a href="quiz_list.php" class="Goback">Back</a><br><br><br>
     <div class="question-card">

       <div class="mid">
         <br><h2>Questions</h2><hr>
       </div>

       <?php

         //This is for user id
     	  $query = " SELECT * FROM multiple_questions WHERE quiz_code = '$code'";

        $execQuery = mysqli_query($con, $query);

      	while($fetchQuestion = mysqli_fetch_assoc($execQuery)){

         $question = $fetchQuestion['question'];
         $points = $fetchQuestion['questionPoints'];
         $option1 = $fetchQuestion['option1'];
         $option2 = $fetchQuestion['option2'];
         $option3 = $fetchQuestion['option3'];
         $option4 = $fetchQuestion['option4'];
         $answer = $fetchQuestion['answer'];
         $typeOfQuiz = $fetchQuestion['typeOfQuiz'];

           //This section will provide information about the quiz
           echo "
           <div class='cons'>
             <table width='100%'>
               <tr>
                 <th colspan='2'><label><h3>Question: $question</h3></label><hr></th>
               </tr>

               <tr>
                 <th colspan='2'><label style='float:left; margin-left: 1em; font-size: 1em;'><i> Points: $points </i></label></th>
               </tr>

               <tr>
                 <th colspan='2'><label style='float:left; margin-left: 1em; font-size: 1em;'><i> Type of Quiz: $typeOfQuiz </i></label></th>
               </tr>

               <tr>
                 <th colspan='2'><label style='float: left; margin-left: 4em;'><h3>Option: </h3></label></th>
               </tr>

               <tr>
                 <th colspan='2'>

                   <label for='A'>A. $option1</label><br>
                   <label for='B'>B. $option2</label><br>
                   <label for='C'>C. $option3</label><br>
                   <label for='D'>D. $option4</label>
                 </th>
               </tr>

               <tr>
                 <th colspan='2'><label style='float:left; margin-left: 1em; font-size: 1em;'><h3>Answer: $answer</h3></label></th>
               </tr>
             </table>
           </div>";
         }
       ?>
   </div>

  </body>
</html>
