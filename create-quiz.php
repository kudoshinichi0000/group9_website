<!DOCTYPE html>
<html>
<head>
	<title>Quiz Prototype</title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
</head>
<body>

	<?php include_once "db.php"; include_once "navbaradmin.php"; ?>

	<!---
	Hello po,may suggesstion ako.. pwede bang gawin nyo nalang isang php file yung sa paggawa ng quiz?
	ipag sama nyo nalang yung create quiz at create questions para maging convinient sa users para hindi
	na sila mag pipipindot at komunti yung mga php files naten....tsaka gumawa din kayo dito ng radio button
	para sa categories tapos ang option doon is educational at entertainment
	 tsaka categories din sa database.... kaylangan ko po kase yun para sa categories.php

	so ang silbi po ng categories.php pinag hihiwalay nya yung pang educational at pang entertanment
	na mga questions...
	--->


	<div class="quiz">
		<div id="box">
			<form method="POST">
				<table class="form child" style="border-radius: 1em;">
					<tr>
						<th><br><h4>Name Your Quiz!</h4></th>
					</tr>
					<tr>
						<td><input type='text' class="btnon" name='inputname' required> </td>
					</tr>
					<tr>
						<td><br><input class="Subbotton" type="submit" value="Add Question"> </td>
					</tr>
	        		<tr>
	          			<td><br><a href="main.php" class="main">Go Home</a></td>
	          	</tr>
				</table>
			</form>
		</div>
	</div>
</body>
	<!---Footer---->
	<footer>
		<br><br>
		<?php include_once("footerr.php") ?>
	</footer>
</html>
