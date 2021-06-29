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
 	<title>Admin Startup Page</title>
 	<!---Ito yung nag bibigay ng cursive font style sa header--->
 	<link rel="preconnect" href="https://fonts.gstatic.com">
 	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
 	</style>
 </head>
 <style>
 body, html {
   height: 100%;
   margin: 0;
   font: 400 15px/1.8 "Lato", sans-serif;
   color: #777;
 }

 .bgimg-1, .bgimg-2, .bgimg-3 {
   position: relative;
   opacity: 0.9;
   background-position: center;
   background-repeat: no-repeat;
   background-size: cover;

 }
 .bgimg-1 {
   background-image: url("res/images/Admin.jpg");
   height: 150%;
	 background-size: cover;
	 margin-top: -3em;
	 margin-bottom: -40em;
 }

 .caption {
   position: absolute;
   left: 0;
   top: 50%;
   width: 100%;
   text-align: center;
   color: #000;
 }

 .caption span.border {
   background-color: #111;
   color: #fff;
   padding: 18px;
   font-size: 25px;
   letter-spacing: 10px;
 }

 h3 {
   letter-spacing: 5px;
   text-transform: uppercase;
   font: 20px "Lato", sans-serif;
   color: #111;
 }
 </style>
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
<div class="bgimg-1">
  <div class="caption">
    <span class="border">Welcome Back <?php echo "$username"; ?>!</span><br><br><br>
    <span class="border"><a href="quiz_list.php">Let's get started</a> </span>
  </div>
</div>

</body>
	<?php include_once "footerr.php";?>
</html>
