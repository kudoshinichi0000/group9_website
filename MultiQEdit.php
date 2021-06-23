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
    <title>Edit Multiple Question</title>
    <link type="text/css" rel="stylesheet" href="css/card.css">
    <script src="js/bootstrap.bundle.min.js"> </script>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min4.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">

  </head>
  <body>

    <?php
    include_once('db.php');
    $quizId = $_GET['id'];
    //include_once("navbaradmin.php");
    ?>
    <br> <br><br><br><br>
    <?php


    $query = "SELECT * FROM multiple_questions WHERE id = '$quizId'";
    $execQuery = mysqli_query($con, $query);
    while ($Question = mysqli_fetch_assoc($execQuery)) {
      $question = $Question['question'];
      $code = $Question['quiz_code'];
      $points = $Question['questionPoints'];
      $option1 = $Question['option1'];
      $option2 = $Question['option2'];
      $option3 = $Question['option3'];
      $option4 = $Question['option4'];
      $answer = $Question['answer'];
      $typeOfQuiz = $Question['typeOfQuiz'];

      echo "

              <div class='container'>
                <div class='card'>
                  <div class='card-header'>
                    <br>
                    <h2 style='margin-left:30%;'><b> Edit Mutiple Choice Item<b></h2>
                  </div>
                  <div class='card-body'>
                    <div class='center'>
                      <div class='row formContainer'>
                        <div class='col-lg-12'>
                          <form action='MultiQEdit.php' method='POST'>
                            <div class='row form-group'>
                              <div class='col'>
                                <label for='question'>Question:</label>
                               <textarea class='form-control' placeholder='Enter your question' name='question' required>$question</textarea>
                              </div>
                            </div>
                            <div class='row form-group'>
                              <div class='col'>
                                <label for='points'>Points:</label>
                               <textarea type='text' class='form-control' readonly>$points</textarea>
                              </div>
                            </div>
                            <div class='row form-group'>
                              <div class='col'>
                                <label for='answer'> Correct Answer</label>
                                  <div class='form-outline mb-4'>
                                    <textarea  class='form-control' rows='1' placeholder='Enter the correct letter of the answer' name='answer' maxlength='1' onkeypress='return /[a-d]/i.test(event.key)' oninput='this.value = this.value.toUpperCase()' required>$answer</textarea>
                                  </div>
                              </div>
                            </div>
                            <div class='row form-group'>
                              <div class='col'>
                                <label> Answer Options</label>
                                  <div class='form-outline mb-4'>
                                    <textarea  class='form-control' rows='1' name='A' placeholder='Possible answer (A)' required>$option1</textarea>
                                  </div>
                                  <div class='form-outline mb-4'>
                                    <textarea  class='form-control' rows='1' name='B' placeholder='Possible answer (B)' required>$option2</textarea>
                                  </div>
                                  <div class='form-outline mb-4'>
                                    <textarea  class='form-control' rows='1' name='C' placeholder='Possible answer (C)' required>$option3</textarea>
                                  </div>
                                  <div class='form-outline mb-4'>
                                    <textarea  class='form-control' rows='1'   name='D' placeholder='Possible answer (D)' required>$option4</textarea>
                                  </div>
                              </div>
                            </div>
                            <div class='row form-group' style='margin-top: 40px;'>
                              <div class='col'>
                                <button type='submit' name='submit' class='btn btn-outline-info float-right' style='margin-left:15px;'value='Submit'>Submit</button>
                                <a href='questions.php?quiz_code=$code' class='btn btn-outline-danger float-right'>Cancel</a>
                              </div>
                            </div>
                            <input type='hidden' name='quizId' value='$quizId'>
                            <input type='hidden' name='quizC' value='$code'>
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

<?php
if(isset($_POST['submit'])){
  //Database Connectivity
 include_once("db.php");

 //Var_dump();
 $question = $_POST["question"];
 $answer = $_POST["answer"];
 $optA = $_POST["A"];
 $optB = $_POST["B"];
 $optC = $_POST["C"];
 $optD = $_POST["D"];
 $quizC = $_POST["quizC"];
 $typeOfQuiz = "Multiple Questions";
 //Hidden Input
 $quizId = $_POST["quizId"];

   $query = "UPDATE multiple_questions SET question = '$question', answer = '$answer', option1 = '$optA', option2 = '$optB', option3 = '$optC', option4 = '$optD', typeOfQuiz = '$typeOfQuiz' WHERE id = '$quizId'";
   $execQueryyy = mysqli_query($con, $query);
     if($execQueryyy){
       header("location: questions.php?quiz_code=$quizC");
     }else{
       echo "$quizId";
     }
   }
 ?>
