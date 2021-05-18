<?php
  include_once "db.php";
  include_once "functions.php";

    $name = "mod";
    $password = "mod";
  	$userid = rand();

    $pass = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO admin (userid, username, password) VALUES ( '$userid', '$name', '$password')";
    if (mysqli_query($con, $sql)) {
      echo "Moderator Created";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
 ?>
