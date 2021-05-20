<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/takeQuiz.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
  </head>
  <body>
<?php

//Step 1 Database Connectivity

include_once "db.php";
$code = $_GET["quiz_code"];

//Step 2 Prepare the query
$query = " SELECT * FROM quiz_list WHERE quiz_code = '$code'";

//Step 3 Perform the query
$execQuery = mysqli_query($con, $query);

//Getting/fetching all rows from the executed query
$fetch = mysqli_fetch_assoc($execQuery);
$title = $fetch['title'];

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo "$title"; ?></title>
  </head>
  <body>
    <?php

    include_once("navbar.php");
    echo "<br><br><br><br><br><br>
          <div class='quiz'> $title </div><br><br><br>";

    ?>
    <div class="Container">

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
      
      echo "<br><br>
      <div class='cons'>
        <table width='100%'>
          <tr>
            <th colspan='2'><label><h3>Question: $question</h3></label></th>
          </tr>

          <tr>
            <th colspan='2'>

              <label for='A'>
                <input type='radio' name='A' value=''> A. $option1
              </label><br><br>


              <label for='A'>
                <input type='radio' name='A' value=''> B. $option2
              </label><br><br>

              <label for='A'>
                <input type='radio' name='A' value=''> C. $option3
              </label><br><br>

              <label for='A'>
                <input type='radio' name='A' value=''> D. $option4
              </label><br><br>
            </th>
          </tr>

        </table>
      </div><br><br>";
    }

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

     echo "<br><br>
     <div class='cons2'>
       <table width='100%'>
         <tr>
           <th colspan='2'><label><h3>Question: $questionn</h3></label></th>
         </tr>

         <tr>
           <th colspan='2'>
             <label for='True'>
               <input type='radio' name='True' value=''>  True
             </label><br><br>

             <label for='True'>
               <input type='radio' name='True' value=''>  False
             </label><br><br>
           </th>
         </tr>

       </table>
     </div><br><br>";
   }
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
    echo "<br><br>
    <div class='cons3'>
      <table width='100%'>
        <tr>
          <th colspan='2'><label><h3>Question: $questionnn</h3></label></th>
        </tr>

        <tr>
          <th colspan='2'><input type='text' name='identification'></th>
        </tr>
      </table>
    </div><br><br>";

  }
     ?>
     </div>
  </body>
</html>
