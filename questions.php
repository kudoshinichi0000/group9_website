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
    include_once("navbaradmin.php");
    include_once "db.php";
    $userId = $_SESSION['userid'];
    $code = $_GET["quiz_code"];

    //Step 2 Prepare the query
	  $query = " SELECT * FROM admin WHERE userid = '$userId'";

    //Step 3 Perform the query
   	$execQuery = mysqli_query($con, $query);

    //Getting/fetching all rows from the executed query
 	  $fetch = mysqli_fetch_assoc($execQuery);
    $username = $fetch['username'];

        //This is for user id
        //Step 2 Prepare the query
    	  $query = " SELECT * FROM quiz_list WHERE admin_id = '$userId' AND quiz_code = '$code'";

        //Step 3 Perform the query
       	$execQuery = mysqli_query($con, $query);

        //Getting/fetching all rows from the executed query
     	  $fetch = mysqli_fetch_assoc($execQuery);
        $title = $fetch['title'];
        $QuizPic = $fetch["picture"];
        $Desc = $fetch["description"];
        $Cat = $fetch["categories"];
        $Pub = $fetch["publish"];
        $newDate = date("m-d-Y", strtotime($Pub));
          //This section will provide information about the quiz
          echo "
          <div class='Containerhead'>
            <div class='cont'>
            <img src='res/quizPicture/$QuizPic' width='15%' style='border-radius: 25em;' alt='image not found' class='Prof' >
              <h4>Title: $title</h4>
              <h4>Description: $Desc</h4>
              <h4>Categories: $Cat</h4>
              <h4>Publication Date: $newDate</h4>
            </div>
          </div>";

        echo "

          <br><br>
          <a href='quiz_list.php' class='Goback'>Back</a>
          <a href='addMultipleQuestion.php?quiz_code=$code' class='addQ'>Add Multiple Question</a>
          <a href='TrueOrFalse.php?quiz_code=$code' class='addQ'>add True or False</a>
          <a href='Identification.php?quiz_code=$code' class='addQ'>Add Identification</a><br><br><br>

        ";
    ?>

     <div class="SectionQ">

       <div class="mid">
         <br><h2>Questions</h2><hr>
       </div>

       <?php
         //This is for user id
     	  $query = " SELECT * FROM multiple_questions WHERE quiz_code = '$code'";

        $execQuery = mysqli_query($con, $query);

      	while($fetchQuestion = mysqli_fetch_assoc($execQuery)){
         $questionId = $fetchQuestion['id'];
         $question = $fetchQuestion['question'];
         $points = $fetchQuestion['questionPoints'];
         $typeOfQuiz = $fetchQuestion['typeOfQuiz'];

           //This section will provide information about the quiz
           echo "
             <table class='cons' width='100%' height='1em;'>
               <tr>
                 <th colspan='5'>
                   <i style='float:left; margin-left: 1em; font-size: 1em;'> Type of Quiz: $typeOfQuiz </i>
                   <i style='float:left; margin-left: 1em; font-size: 1em;'> Points: $points </i>
                   <i style='float:left; margin-left: 1em; font-size: 1em;'>Question: $question</i>
                   <a href='deleteQuestion.php?id=$questionId'><img src='res/logo/Delete.png' width='2%' style='border-radius: 25em;' alt='image not found' class='Prof' ></a>
                   <a href='MultiQEdit.php?id=$questionId'><img src='res/logo/Edit.png' width='2%' style='border-radius: 25em;' alt='image not found' class='Prof' ></a>
                 </th>
               </tr>
             </table>";


        //Getting or fetching all rows from true or false
        $queryy = " SELECT * FROM trueorfalse WHERE quiz_code = '$code'";

        $execQuery = mysqli_query($con, $queryy);

       while($fetchtrueorfalse = mysqli_fetch_assoc($execQuery)){
         $questionnId = $fetchtrueorfalse['id'];
         $codee = $fetchtrueorfalse['quiz_code'];
         $questionn = $fetchtrueorfalse['question'];
         $answerr = $fetchtrueorfalse['answer'];
         $pointss = $fetchtrueorfalse['points'];
         $typeOfQuizz = $fetchtrueorfalse['typeOfQuiz'];

         //This section will provide information about the quiz
         echo "
         <div class='cons2'>
           <table width='100%'>
             <tr>
               <th colspan='2'><label><h3>Question: $questionn</h3></label><hr></th>
             </tr>

             <tr>
                <th colspan='2'><a href='deletetrueorfalse.php?id=$questionnId'>Delete</a>
                <a href='ToFEdit.php?id=$questionnId'>Edit</a></th>
             </tr>
             <tr>
               <th colspan='2'><label style='float:left; margin-left: 1em; font-size: 1em;'><i> Points: $pointss </i></label></th>
             </tr>

             <tr>
               <th colspan='2'><label style='float:left; margin-left: 1em; font-size: 1em;'><i> Type of Quiz: $typeOfQuizz </i></label></th>
             </tr>

             <tr>
               <th colspan='2'><label style='float: left; margin-left: 4em;'><h3>Option: </h3></label></th>
             </tr>

             <tr>
               <th colspan='2'>
                 <label for='True'>True</label><br>
                 <label for='False'>False</label><br>
               </th>
             </tr>

             <tr>
               <th colspan='2'><label style='float:left; margin-left: 1em; font-size: 1em;'><h3>Answer: $answerr</h3></label></th>
             </tr>
           </table>
         </div>";


       //Getting or fetching all rows from Identification
       $queryy = " SELECT * FROM identification WHERE quiz_code = '$code'";

       $execQuery = mysqli_query($con, $queryy);

      while($fetchtrueorfalse = mysqli_fetch_assoc($execQuery)){
        $questionnnId = $fetchtrueorfalse['id'];
        $codeee = $fetchtrueorfalse['quiz_code'];
        $questionnn = $fetchtrueorfalse['question'];
        $answerrr = $fetchtrueorfalse['answer'];
        $pointsss = $fetchtrueorfalse['points'];
        $typeOfQuizzz = $fetchtrueorfalse['typeOfQuiz'];

        //This section will provide information about the quiz
        echo "
        <div class='cons3'>
          <table width='100%'>
            <tr>
              <th colspan='2'><label><h3>Question: $questionnn</h3></label><hr></th>
            </tr>

            <tr>
               <th colspan='2'><a href='IdenDelete.php?id=$questionnnId'>Delete</a>
               <a href='IEdit.php?id=$questionnnId'>Edit</a></th>
            </tr>
            <tr>
              <th colspan='2'><label style='float:left; margin-left: 1em; font-size: 1em;'><i> Points: $pointsss </i></label></th>
            </tr>

            <tr>
              <th colspan='2'><label style='float:left; margin-left: 1em; font-size: 1em;'><i> Type of Quiz: $typeOfQuizzz </i></label></th>
            </tr>

            <tr>
              <th colspan='2'><label style='float:left; margin-left: 1em; font-size: 1em;'><i> Answer: $answerrr </i></label></th>
            </tr>
          </table>
        </div>";

      }
    }
  }
       ?>
   </div>

  </body>
</html>
