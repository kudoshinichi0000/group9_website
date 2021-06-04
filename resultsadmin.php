<?php

	//Step 1 Database Connectivity
	include_once "db.php";

	//Will check if the user try to access pages without logging in
	if(empty($_SESSION["userid"])){
		header("Location:login.php");
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<!---Ito yung nag bibigay ng cursive font style sa header--->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
</head>
<body>
	<?php
	include_once "db.php";
	include_once "navbaradmin.php";
	$userId = $_SESSION['userid'];


	//This is for user id
	//Step 2 Prepare the query
	$query = " SELECT * FROM admin WHERE userid = '$userId'";

	//Step 3 Perform the query
	$execQuery = mysqli_query($con, $query);

	//Getting/fetching all rows from the executed query
	$fetch = mysqli_fetch_assoc($execQuery);
	$username = $fetch['username'];

	?>
	<br><br><br><br><br><br><br><br>

	<?php echo "Username: $username <br>
	 						UserId: $userId"; ?>
</body>
	<?php include_once "footerr.php";?>
</html>
