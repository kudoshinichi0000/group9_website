<?php
  include_once("db.php");
	//Var_dump
  $code = $_POST['quiz_code'];
	$Confirm = $_POST["Confirm"];

	if ($Confirm == "yes") {//If admin click the Yes button, the information that he/she wants delete, will be deleted to the database

		//Hidden Input
		//$delGetid = $_POST["quizCode"];

		//Prepare The Query
		$deleteQuery = "DELETE FROM quiz_list WHERE quiz_code = '$delGetid'";

		//Perform the query
		$execQuery = mysqli_query($con, $deleteQuery);

        if ($execQuery) {
      		$deleteuery = "DELETE FROM multiple_questions WHERE quiz_code = '$delGetid'";
      		$execquery = mysqli_query($con, $deleteuery);

          if ($execquery) {
            $deleteuery = "DELETE FROM trueorfalse WHERE quiz_code = '$delGetid'";
            $execqueryy = mysqli_query($con, $deleteuery);

            if ($execqueryy) {
              $deleteuery = "DELETE FROM identification WHERE quiz_code = '$delGetid'";

              $execqueryy = mysqli_query($con, $deleteuery);
              header("Location: quiz_list.php");
              exit();
            }
          }
        }
      }
	}else{
		header("Location: quiz_list.php");
		exit();
	}

 ?>
