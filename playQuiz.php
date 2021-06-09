<!DOCTYPE html>
<html>
<head>
	<title>Play Quiz</title>
	<link type="text/css" rel="stylesheet" href="css/navbar.css">
	<link type="text/css" rel="stylesheet" href="css/quizcard.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
</head>
<body>

	<?php
		//include_once("navbar.php");
	?><br><br><br><br><br><br>


			<?php
			//Including Database
			include_once("db.php");

			//Getting quiz_code from displayInfo
			$QuizCode = $_GET['quiz_code'];

			//Getting Multiple questions
			//Prepare the query
			$MQquery = "SELECT * FROM multiple_questions WHERE quiz_code = $QuizCode";

			//Perform the query
			$MQresult = mysqli_query($con, $MQquery);

				echo "<h1>Multiple Questions</h1>";
				//Getting or fetching all rows from the executed query
				while ($MQ = mysqli_fetch_assoc($MQresult)) {
				$questions = $MQ["question"];
				$A = $MQ["option1"];
				$B = $MQ["option2"];
				$C = $MQ["option3"];
				$D = $MQ["option4"];

				echo "
				<label>$questions</label><br>
				<input type='radio' name='MQans' value='$A'>$A<br>
				<input type='radio' name='MQans' value='$B'>$B<br>
				<input type='radio' name='MQans' value='$C'>$C<br>
				<input type='radio' name='MQans' value='$D'>$D<br>
				<br><br>
				";

	 }
	
			  ?><br><br><br>

				<h1>True or false</h1>
				<?php
				//Including Database
				include_once("db.php");

				//Getting quiz_code from displayInfo
				$QuizCode = $_GET['quiz_code'];

				//Getting True or false
				//Prepare the query
				$TFquery = "SELECT * FROM trueorfalse WHERE quiz_code = $QuizCode ";

				//Perform the query
				$TFresult = mysqli_query($con, $TFquery);

					//Getting or fetching all rows from the executed query
					while ($TF = mysqli_fetch_assoc($TFresult)) {
					$questions = $TF["question"];
					echo "
					<label>$questions</label><br>
					<input type='radio' name='trueorfalse' value='true'>True<br>
					<input type='radio' name='trueorfalse' value='False'>False<br>

					<br><br>
					";

		 }
				  ?>

					<h1>Identification</h1>
					<?php
					//Including Database
					include_once("db.php");

					//Getting quiz_code from displayInfo
					$QuizCode = $_GET['quiz_code'];

					//Getting True or false
					//Prepare the query
					$INquery = "SELECT * FROM identification WHERE quiz_code = $QuizCode";

					//Perform the query
					$INresult = mysqli_query($con, $INquery);

						//Getting or fetching all rows from the executed query
						while ($IN = mysqli_fetch_assoc($INresult)) {
						$questions = $IN["question"];
						echo "
						<label>$questions</label><br>
						<input type='text' name='ans' >


						<br><br>
						";

			 }
					  ?>

</body>
	<?php include_once "footerr.php";?>
</html>
