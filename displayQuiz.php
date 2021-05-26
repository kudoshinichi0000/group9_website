<?php
//Get method
$quizCode = $_GET["quiz_code"];
//Database Connectivity
include_once("db.php");

//Prepare the Query
$query = "SELECT * FROM quiz_list WHERE quiz_code=$quizCode";

//Perform the Query
$execQuery = mysqli_query($con, $query);

//Getting/fetching all rows from the executed Query
$fetchQuiz = mysqli_fetch_assoc($execQuery);
$title = $fetchQuiz["title"];
$desc = $fetchQuiz["description"];
$categories = $fetchQuiz["categories"];
$item = $fetchQuiz["items"];
$totalpoints = $fetchQuiz["OverallScores"];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/takeQuiz.css">
    <title>Quiz</title>
  </head>
  <body>
    <div class="">
      <table class="tab" width="70%">
      <tr>
        <th><?php echo "$title"; ?></th>
      </tr>
     </table>
    </div>
  </body>
</html>
