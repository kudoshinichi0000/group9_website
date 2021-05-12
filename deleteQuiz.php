<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    include_once("db.php");
    $code = $_GET['quiz_code'];

      $query = "SELECT * FROM quiz_list WHERE quiz_code = '$code'";
      $execQuery = mysqli_query($con, $query);
      $fetchCodes = mysqli_fetch_assoc($execQuery);
        $codel = $fetchCodes["quiz_code"];
        $title = $fetchCodes["title"];

    echo "
    <form action='deleteQuiz.php' method='POST'>
      <table border='1' height='350px' width='25%' class='container1'>
        <tr>
          <th colspan='2'><h2>Are You Sure you want to delete this item?</h2>
        </tr>
        $code
        <tr>
          <th colspan='2'><input type='submit' name='Confirm' value='yes'>
          <input type='submit' name='Confirm' value='no'></th>
        </tr>

        <tr>
          <th colspan='2'><h4><i>$codel</i></h4></th>
        </tr>

          <th colspan='2'><a href='quiz_list.php'>Cancel</a></th>
        </tr>
      </table>
      <input type='hidden' name='quizCode' value='$codel'>
    </form>
    ";

    if(isset($_POST["form"]))
    {
      //Var_dump
    	$Confirm = $_POST["Confirm"];

    	if ($Confirm == "yes") {//If admin click the Yes button, the information that he/she wants delete, will be deleted to the database

        	//Hidden Input
        	$quizCode = $_POST["quizCode"];

        	$deletequizcode = "DELETE FROM quiz_list WHERE quiz_code = '$quizCode'";
        	$execQuery = mysqli_query($con, $deletequizcode);
          if ($execQuery) {
            $deleteQuery = "DELETE FROM multiple_questions WHERE quiz_code = '$quizCode'";
            $execQuery = mysqli_query($con, $deleteQuery);
            header("Location: quiz_list.php");
          }
    	}else{
    		header("Location: quiz_list.php");
    		exit();
    	}
    }
     ?>

  </body>
</html>
