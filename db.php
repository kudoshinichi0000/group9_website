<?php   
	$dbhost = "localhost";
 	$dbusername = "root";
  	$dbpassword = "";
  	$dbname = "quizdb";

  	$con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname); 

  	session_start();
?>