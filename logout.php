<?php 
include_once "db.php";

if (isset($_SESSION['userid'])) {
	unset($_SESSION['userid']);
}

header("Location: main.php")
?>