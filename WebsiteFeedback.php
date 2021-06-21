<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Feedback Form</title>
  </head>
  <body>
    <div class="feedback-title">
      <div>
        <h1>Give Your Feedback </h1>
        <link type="text/css" rel="stylesheet" href="css/feedback.css">
        <h2>We are always to give the best to serve you! </h2>
      </div>
    <form class="" action="WebsiteFeedback.php" method="post">
      <label for="name">Full name: </label>
      <input type="text" name="name" required><br>

      <label for="email">email: </label>
      <input type="email" name="email" required><br>

      <label for="Feedback">Feedback: </label>
      <textarea  name="Feedback" required></textarea><br>

      <input type="submit" name="submit" >
    </form>

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
