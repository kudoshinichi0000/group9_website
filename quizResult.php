<?php

include_once("db.php");


?>

<html>
<head>>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	 <style>
      body{
        margin: 0;
        padding:0;
        text-align: center;
        font-family: sans-serif;
        /*background-image: url("res/images/fb10.png");*/
        background-image: linear-gradient(to left top, #1a8e74, #148d6e, #0f8c68, #0d8b61, #0e8a5a, #008d6e, #008f7f, #00908d, #0091b4, #008ddf, #007ef8, #9a5bed);
      	height:auto;
      	width: auto;
      	background-position: center;
      	background-repeat: no-repeat;
      	background-size: cover;
      	text-align: center;
      	padding:10px;
      }
      .container-feedback-title{
        margin-top: 95px;
        color:#fff;
        text-transform: uppercase;
        transition: all 4s ease-in-out;
      }
      .conatiner-feedback-title h1{

      font-size: 40px;
      line-height: 10px;
      }
      .container-feedback-title h2{
      font-size: 20px;
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
      .form-control-e{
        width: 990px;
        background: transparent;
        border: none;
        outline: none;
        border-bottom: 1px solid #ffffff;
        color: #ffffff;
        font-size: 18px;
        margin-bottom: 16px;
      }
      .form-control-text{
        width: 400px;
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
      input{
        height: 45px;
      }
      form .submit{
        background: #8F00FF;
        border-color: transparent;
        border: 1px solid white;
        color: #fff;
        width: 340px;
        font-size: 18px;
        font-weight: bold;
        letter-spacing: 3px;
        margin-top: 35px;
      }
      form .submit:hover{
        background-color: #420264;
        cursor: pointer;

      }
			.notif{
      position: absolute;
      top: 90px;
      left: 300px;
      font-size: 25px;
      color: #fff;
      border: 2px solid #fff;
      background-image: linear-gradient(to left, #2e0294, #41019b, #5201a2, #6300a9, #7200af, #7503b4, #7706b9, #7a0abe, #7011c3, #6418c9, #551dce, #4122d3);
      border-color:white;

      width: 340px;
      font-size: 20px;
      font-weight: bold;
      letter-spacing: 3px;

      }
      .notif:hover{
        background-image: linear-gradient(to left, #2e0294, #41019b, #5201a2, #6300a9, #7200af, #7503b4, #7706b9, #7a0abe, #7011c3, #6418c9, #551dce, #4122d3);
        cursor: pointer;
        border: 2px solid #white;
        color: #fff;

      }

      .notif a{
        text-decoration: none;
        color: #fff;
        font-size: 25px;
      }
      .notif a:hover{
        text-decoration: none;
        color: #19FBF1;
      }

  </style>
</head>
<body>
	<?php
	include_once ("navbar2.php");

?>
<br>
	<main>
		<div id="contr">
		<div id="img">
			<img src="res/images/feed1.svg" style="width: 600px;height: 600px; flex: wrap; padding-top: 7rem;">
		</div>
			<div class="container-feedback-title">
				<h1>Your Result</h1>
				<p>Congratulation You have completed this test succesfully.</p>
				<h2>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?> </h2>

	<form class="result-form" action="quizResult.php" method="post">

		<input type="text"  class="form-control-e"name="name" placeholder="Your Full Name" required><br>

		<input type="email"  class="form-control-e" name="email" placeholder="Email" required><br>

		<textarea   class="form-control-text" name="Feedback" placeholder="Feedback" required></textarea><br>

		<input type="submit"class="form-control submit" name="submit" >
	</form>
</div>

	</div>
	</main>



</body>
</html>

<?php
//Including database
include_once("db.php");

	//If the user/admin click the submit button, all of the informations in inputbox will process here, to put in database
	if(isset($_POST['submit'])){

		//Vardump
		$score = $_SESSION['score'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$Feedback = $_POST['Feedback'];

		//Inserting feedback into website_feedback table
		$query = "INSERT INTO quiz_feedback (name, email, feedback, score)
		VALUES ('$name', '$email','$Feedback', '$score')";

		//perform the query
		$result = mysqli_query($con,$query);

		if ($result) {
			unset($_SESSION['score']);
			echo "<div class='notif'>Successfuly added to database<br>
				<a href='main.php'>Back</a></div>
			";

		}
	}
	 ?>
