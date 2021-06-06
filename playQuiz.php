<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<link type="text/css" rel="stylesheet" href="css/navbar.css">
	<link type="text/css" rel="stylesheet" href="css/quizcard.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" crossorigin="anonymous">
</head>
<body>

	<?php
		include_once("navbar.php");
		include_once("db.php");
	?><br><br><br><br><br><br>

		<!--displaying all Quiz--->
			<?php

			//Including Database
			include_once("db.php");

			//this is the maximum number that the quiz can display in main.php
			$record_per_page = 5;

			$page = '';

			if (isset($_GET["page"])) {
			    $page = $_GET["page"];
			} else {
			    $page = 1;
			}

			$start_from = ($page - 1) * $record_per_page;

			//Prepare the query
			$query = "SELECT * FROM multiple_questions rand() LIMIT $start_from, $record_per_page";

			//Perform the query
			$result = mysqli_query($con, $query);

			//Getting or fetching all rows from the executed query
			while ($row = mysqli_fetch_array($result)) {

			if($Ftitle = wordwrap($row["title"], 25, "<br>")) {

			$QuizCode = $row["quiz_code"];


				}
			}
			 ?>
		 </div>

		 <?php
		 //Prepare the query
		 $page_query = "SELECT * FROM quiz_list ORDER BY publish DESC";

		 //Perform the query
		 $page_result = mysqli_query($con, $page_query);

		 //Fetch all rows
		 $total_records = mysqli_num_rows($page_result);

		 //Compute
		 $total_pages = ceil($total_records / $record_per_page);
		 $start_loop = $page;
		 $difference = $total_pages - $page;
		 if ($difference < 1) {
				 $start_loop = $total_pages + -1;
		 }
		 $end_loop = $start_loop + 1;

		 //Pagination for Previous botton
		 if ($page > 1) {
				 echo "<a class='pagButtonPrev' href='main.php?page=" . ($page - 1) . "'>Previous</a>";
		 }

		 //Pagination for Previous botton
		 if ($page < $end_loop) {
			 echo "<a class='pagButtonNext' href='main.php?page=" . ($page + 1) . "'>Next</a>";
		 }
		  ?>

</body>
	<?php include_once "footerr.php";?>
</html>
