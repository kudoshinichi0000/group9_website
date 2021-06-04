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
    <title></title>
  </head>
  <body>
    <?php

    include_once("db.php");
    $quizId = $_GET['id'];

    $query = "SELECT * FROM multiple_questions WHERE id = '$quizId'";

    $execQuery = mysqli_query($con, $query);

    $fetchCodes = mysqli_fetch_assoc($execQuery);
    $question = $fetchCodes["question"];
    $questionP = $fetchCodes["questionPoints"];
    $code = $fetchCodes["quiz_code"];

    echo "
    <form action='deleteQuestionHandler.php' method='POST'>
      <table border='1' height='350px' width='25%' class='container1'>
        <tr>
          <th colspan='2'><h2>Are You Sure you want to delete this item?</h2>
          <h2>$question</h2></th>
        </tr>
        <tr>
          <th colspan='2'><input type='submit' name='Confirm' value='no'>
          <input type='submit' name='Confirm' value='yes'></th>
        </tr>
        <tr>
          <th colspan='2'><a href='questions.php?quiz_code=$code'>Cancel</a></th>
        </tr>
      </table>
      <input type='hidden' name='quizId' value='$quizId'>
      <input type='hidden' name='quizCode' value='$code'>
      <input type='hidden' name='quizP' value='$questionP'>
    </form>
    ";

     ?>
  </body>
</html>
