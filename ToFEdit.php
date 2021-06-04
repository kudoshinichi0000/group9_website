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
    <title>Edit True Or False Item</title>
    <script src="js/bootstrap.bundle.min.js"> </script>
    <link type="text/css" rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min4.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </head>
  <body>
    <?php
      include_once("db.php");
      $quizId = $_GET['id'];
      include_once("navbaradmin.php");


      $queryy = " SELECT * FROM trueorfalse WHERE id = $quizId";
      $execQuery = mysqli_query($con, $queryy);

     while($fetchtrueorfalse = mysqli_fetch_assoc($execQuery)){
       $questionnId = $fetchtrueorfalse['id'];
       $code = $fetchtrueorfalse['quiz_code'];
       $questionn = $fetchtrueorfalse['question'];
       $answerr = $fetchtrueorfalse['answer'];
       $pointss = $fetchtrueorfalse['points'];
       $typeOfQuizz = $fetchtrueorfalse['typeOfQuiz'];

      echo "
      <br> <br><br><br><br>

      <div class='container'>
          <div class='card'>
            <div class='card-header'>
              <h2 style='margin-left:30%'><b>Add True or False Question<b></h2>
            </div>
            <div class='card-body'>
              <div class='center'>
                <div class='row formContainer'>
                  <div class='col-lg-12'>
                  <form action='ToREditHandler.php' method='POST'>
                      <div class='row form-group'>
                        <div class='col'>
                          <label for='TorFQuestion'>Question: </label>
                          <input type='text' class='form-control' placeholder='Enter your question' name='TorFQuestion' value='$questionn' required>
                        </div>
                      </div>
                      <br>
                      <div class='row form-group'>
                        <div class='col'>
                          <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                             <label class='input-group-text' for='TorFAnswer'>Answer:</label>
                           </div>
                              <select class='custom-select' id='inputGroupSelect01' name='TorFAnswer'>
                             ";
                               if ($answerr == 'True') {
                                 echo "
                                   <option value='$answerr'>$answerr</option>
                                   <option value='False'>False</option>
                                 ";
                               }else{
                                 echo "
                                   <option value='$answerr'>$answerr</option>
                                   <option value='True'>True</option>
                                 ";
                               }echo "
                             </select>
                           </div>
                         </div>
                       </div>
                       <div class='row form-group'>
                         <div class='col'>
                           <label for='pointss'>Points:</label>
                           <input type='number' class='form-control' placeholder='input points for this question' name='points' value='$pointss' required>
                         </div>
                       </div>
                       <div>
                         <div class='row form-group' style='margin-top: 40px;'>
                         <div class='col'>
                           <button type='submit' name='btn' class='btn btn-outline-info float-right' style='margin-left:15px;' value='Submit'>Submit</button>
                           <a href='questions.php?quiz_code=$code' class='btn btn-outline-danger float-right'>Cancel</a>
                         </div>
                       </div>
                     </div>
                     <input type='hidden' name='quizCode' value='$code'>
                     <input type='hidden' name='questionId' value='$questionnId'>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    ";
  }
    ?>
  </body>
</html>
