<?php

	include_once('db.php');

	//For first question, score will not be there.
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}

	if($_POST){
		$code = $_POST['code'];

	//We need total question in process file too
 	$query = "SELECT * FROM questions WHERE quiz_code = $code";
	$total_questions = mysqli_num_rows(mysqli_query($con,$query));

	//We need to capture the question number from where form was submitted
 	$number = $_POST['number'];


	//Here we are storing the selected option by user
 	$selected_choice = $_POST['choice'];

	//What will be the next question number
 	$next = $number+1;

	$identiAns = $_POST['identiAns'];


	if ($identiAns) {
		//Determine the correct choice for current question
	 	$query = "SELECT * FROM questions WHERE question_number = $number AND quiz_code = $code";
	 	 $result = mysqli_query($con,$query);
	 	 $row = mysqli_fetch_assoc($result);
		 $answer = $row["answer"];

		 $points = $row["questionPoints"];
	 	 $correct_choice = $row['id'];


		//Increase the score if selected cohice is correct
	 	 if($identiAns == $answer){
	 	 	$score = $_SESSION['score'] + $points;
			$_SESSION['score'] = $score;
	 	 }
			//Redirect to next question or final score page.
	 	 if($number == $total_questions){
	 	 	header("LOCATION: quizResult.php");
	 	 }else{
	 	 	header("LOCATION: playQuiz.php?quiz_code=$code&n=".$next);
	 	 }
	}else{

	//Determine the correct choice for current question
 	$query = "SELECT * FROM option WHERE question_number = $number AND answer = 1 AND quiz_code = $code";
 	 $result = mysqli_query($con,$query);
 	 $row = mysqli_fetch_assoc($result);
	 $points = $row["questionPoints"];
 	 $correct_choice = $row['id'];

	//Increase the score if selected cohice is correct
 	 if($selected_choice == $correct_choice){
 	 	$score = $_SESSION['score'] + $points;
		$_SESSION['score'] = $score;
 	 }
		//Redirect to next question or final score page.
 	 if($number == $total_questions){
 	 	header("LOCATION: quizResult.php");
 	 }else{
 	 	header("LOCATION: playQuiz.php?quiz_code=$code&n=".$next);
 	 }

 }

}
?>
