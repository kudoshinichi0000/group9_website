<?php
	/*$dbhost = "localhost";
 	$dbusername = "root";
  	$dbpassword = "";
  	$dbname = "quizdb";

  	$con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

  	session_start();
		*/

		$conn= new mysqli('localhost','root','','quizdb')or die("Could not connect to mysql".mysqli_error($con));
?>
