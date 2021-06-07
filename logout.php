<?php
include_once "db.php";

if (isset($_SESSION['userid'])) {
	unset($_SESSION['userid']);
}

if (isset($_SESSION['username'])) {
	unset($_SESSION['username']);
}

header("Location: main.php")
?>
