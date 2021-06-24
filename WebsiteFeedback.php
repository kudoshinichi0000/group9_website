<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Feedback Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link type="text/css" rel="stylesheet" href="css/feedback.css">
      <style>
      body{
        margin: 0;
        padding:0;
        text-align: center;
        font-family: sans-serif;
        background-image: url("res/images/fb10.png");
      	height:auto;
      	width: auto;
      	background-position: center;
      	background-repeat: no-repeat;
      	background-size: cover;
      	text-align: center;
      	padding:10px;
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
      ::placeholder {
        color: #ffffff;
        opacity: 1; /* Firefox */
      }
      ::-webkit-input-placeholder{ /*Safari, Google Chrome, Opera 15+) and Microsoft Edge*/
        color: #ffffff;
        opacity: 1;
      }
      ::-moz-placeholder{ /* mozilla Firefox */
        color: #ffffff;
        opacity: 1;
      }
      :-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: #ffffff;
        opacity: 1;
      }

      ::-ms-input-placeholder { /* Microsoft Edge */
        color: #ffffff;
        opacity: 1;
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
      input{
        height: 45px;
      }
      form .submit{
        background: #8F00FF;
        border-color: transparent;
        border: 1px solid white;
        color: #fff;
        width: 340px;
        font-size: 20px;
        font-weight: bold;
        letter-spacing: 3px;
        margin-top: 35px;
      }
      form .submit:hover{
        background-color: #420264;
        cursor: pointer;

      }
      a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
}
a:link, a:visited {
  background-color: #ff5722;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border: 1px solid white;
}

a:hover, a:active {
  background-color: red;
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

          <input type="text" name="name" class="form-control" placeholder="Your Full Name" required><br>


          <input type="email" name="email" class="form-control" placeholder="Enter your email" required><br>


          <textarea  name="Feedback" class="form-control" placeholder="Enter your feedback"  required></textarea><br><br>

          <input type="submit" class="form-control submit" name="submit" value="SEND FEEDBACK">
        </form>
  </div>
    <a href="1. Startup Page.php">GO BACK</a>
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
     	VALUES ('$name', '$email','$Feedback')"

    	//perform the query
     	$result = mysqli_query($con,$query);

      if ($result) {
        echo "<br><br>Successfuly added to database";
      }
    }
     ?>
