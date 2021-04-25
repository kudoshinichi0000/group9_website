<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<!---Ito yung nag bibigay ng cursive font style sa header--->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
	<style media="screen">
	#quiz{
		margin-top: 4em;
		background-color: #4CAF50;
		color: white;
		padding: 16px;
		font-size: 16px;
		border: none;
		position: fixed;
	  top: 0;
		left: 0;
		right: 0;
	  overflow: hidden;
		z-index: 1;
	}

	#Create {
		position: relative;
		display: inline-block;
	}

	#Create-drop{
		float: right;
		display: none;
		position: absolute;
		background-color: #f1f1f1;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}

	#Create-dropt a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}

	#Create-drop a:hover {
		background-color: #ddd;
	}

	#Create:hover #Create-drop {
		display: block;
	}

	#Create:hover #quiz{
		background-color: #3e8e41;
	}
	</style>
</head>
<body>
	<?php include_once "db.php";include_once "navbaradmin.php";?>

	<?php //echo $_SESSION['userid'];?>

	<!---Left Side Navigator for creating quiz--->
	<div id="Create">
		<button id="quiz">Quiz</button>
			<div id="Create-drop">
				<a href="#">Create Quiz</a>
				<a href="#">Link 2</a>
				<a href="#">Link 3</a>
			</div>
		</div>
</body>
	<?php include_once "footer.php";?>
</html>
