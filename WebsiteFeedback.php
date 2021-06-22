<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Feedback Form</title>
      <link type="text/css" rel="stylesheet" href="css/feedback.css">
      <style>
      body{
        margin: 0;
        padding:0;
        text-align: center;
        font-family: sans-serif;
        background-image: url("res/images/fb4.jpg");
      	height:auto;
      	width: auto;
      	background-position: center;
      	background-repeat: no-repeat;
      	background-size: cover;
      	text-align: center;
      	padding:60px;
      }
      .feedback-title{
        margin-top: 95px;
        color:#fff;
        text-transform: uppercase;
        transition: all 4s ease-in-out;
      }
      .feedback-title h1{

      font-size: 40px;
      line-height: 10px;
      }
      .feedback-title h2{
      font-size: 16px;
      }
      form{
        margin-top: 50px;
        transition: all 4s ease-in-out;
      }
      .form-control{
        width: 600px;
        background: transparent;
        border: none;
        outline: none;
        border-bottom: 1px solid #ffffff;
        color: #ffffff;
        font-size: 18px;
        margin-bottom: 16px;
      }
      </style>
  </head>

  <body>

    <div class="feedback-title">
        <h1>Give Your Feedback </h1>

        <h2>We are always to give the best to serve you! </h2>
    </div>
    <div class="feedback-form">
        <form id=" feedback-form" action="WebsiteFeedback.php" method="post">
          <label for="name">Full name: </label>
          <input type="text" name="name" class="form-control" placeholder="Your Full Name" required><br>

          <label for="email">email: </label>
          <input type="email" name="email" class="form-control" placeholder="Enter your email" required><br>

          <label for="Feedback">Feedback: </label>
          <textarea  name="Feedback" class="form-control" placeholder="Enter your feedback" required></textarea><br><br><br>

          <input type="submit" class="form-control submit" name="SEND FEEDBACK">

        </form>
  </div>
  <a href="index.php">Go back</a>
  </body>
</html>

    <?php
    //Including database
    include_once("db.php");

    //If the user/admin click the submit button, all of the informations in inputbox will process here, to put in database
    if(isset($_POST['submit'])){

      //Vardump
     	$name = $_POST['name'];
     	$email = $_POST['email'];
     	$Feedback = $_POST['Feedback'];

      //Inserting feedback into website_feedback table
      $query = "INSERT INTO website_feedback (name, email, feedback)
     	VALUES ('$name', '$email','$Feedback')";

    	//perform the query
     	$result = mysqli_query($con,$query);

      if ($result) {
        echo "<br><br>Successfuly added to database";
      }
    }
     ?>
