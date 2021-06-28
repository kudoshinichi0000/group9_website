<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include_once("db.php");
  	include_once("navbaradmin.php")?>

  	<div class="Rank">
  		<?php
  		$query = " SELECT * FROM logs";
  		$execQuery = mysqli_query($con, $query);
  		while($fetchscores = mysqli_fetch_assoc($execQuery)){
  		$name = $fetchscores["username"];
  		$email = $fetchscores["email"];
  		$quizCode = $fetchscores["quiz_code"];
  		$score = $fetchscores["score"];
  		$date = $fetchscores["date"];
  		$newDate = date("m-d-Y", strtotime($date));

  				$queryy = " SELECT * FROM quiz_list WHERE quiz_code = $quizCode";
  				$execQueryy = mysqli_query($con, $queryy);
  				$fetchtitle = mysqli_fetch_assoc($execQueryy);
  				$title = $fetchtitle["title"];

  		echo "Name: $name<br>
  		 			Email: $email<br>
  					quiz_code: $quizCode<br>
  					title: $title<br>
  					Score: $score<br>
  					Date: $newDate

  					<br><br><br>";
  		}
  		 ?>
  </body>
</html>
