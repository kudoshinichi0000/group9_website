<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<!---Ito yung nag bibigay ng cursive font style sa header--->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
	<style media="screen">
	#dropbtn {
		margin-top: 4em;
		background-color: #4CAF50;
		color: white;
		padding: 16px;
		font-size: 16px;
		border: none;
		
	}

	#dropdown {
		position: relative;
		display: inline-block;
	}

	#dropdown-content {
		float: right;
		display: none;
		position: absolute;
		background-color: #f1f1f1;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}

	#dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}

	#dropdown-content a:hover {
		background-color: #ddd;
	}

	#dropdown:hover #dropdown-content {
		display: block;
	}

	#dropdown:hover #dropbtn {
		background-color: #3e8e41;
	}
	</style>
</head>
<body>
	<?php include_once "db.php";include_once "navbaradmin.php";?>

	<?php //echo $_SESSION['userid'];?>
	<div id="dropdown">
		<button id="dropbtn">Quiz</button>
			<div id="dropdown-content">
				<a href="#">Create </a>
				<a href="#">Link 2</a>
				<a href="#">Link 3</a>
			</div>
		</div>
</body>
	<?php include_once "footer.php";?>
</html>
