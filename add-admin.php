<?php
  include_once "db.php";
  include_once "functions.php";

    $name = "admin";
    $password = "admin";
  	$userid = rand();


    $sql = "INSERT INTO admin (userid, username, password) VALUES ( '$userid', '$name', '$password')";
    if (mysqli_query($con, $sql)) {
      echo "New admin created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
 ?>
