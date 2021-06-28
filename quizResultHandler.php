<?php
  //Including database
  include_once("db.php");

  // If the admin clicks the submit button, it will process here inside of f(isset($_POST['submit'])){
  // i will use this if statements instead of creating a new file handlers
  if(isset($_POST['submit'])){

    //Vardump
    $score = $_SESSION['score'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Feedback = $_POST['Feedback'];

    //Hidden input
    $quizCode = $_POST['code'];

    //Inserting feedback into quiz_feedback table
    $query = "INSERT INTO quiz_feedback (name, email, feedback, quiz_code, score )
    VALUES ('$name', '$email', '$Feedback', '$quizCode', '$score')";

    //perform the query
    $result = mysqli_query($con,$query);

        if ($result) {
          $Resultquery = "INSERT INTO logs (quiz_code, username, email, score )
          VALUES ('$quizCode', '$name', '$email', '$score')";

          //perform the query
          $execResult = mysqli_query($con, $Resultquery);

            if ($execResult) {
              unset($_SESSION['score']);
              header("Location: main.php");
              
            }
          }
  }
   ?>
