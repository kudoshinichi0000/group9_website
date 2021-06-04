<?php

	//Step 1 Database Connectivity
	include_once "db.php";

	//Will check if the user try to access pages without logging in
	if(empty($_SESSION["userid"])){
		header("Location:login.php");
	}

 ?>

<?php
  //Database Connectivity
  include_once("db.php");

  //var_dump()
  $userid = $_SESSION["userid"];
  $quizTitle = $_POST['quiz_title'];
  $Desc = $_POST["Desc"];
  $Catg = $_POST["catg"];

  //Hidden Input
  $quizCode = $_POST["quizCode"];

  //Prepare the query
  $query = " SELECT * FROM quiz_list WHERE admin_id = '$userid' AND quiz_code = '$quizCode'";

  //Perform the query
  $execQuery = mysqli_query($con, $query);

    if ($execQuery) {
      //If true the information will insert to database
      $insertQuestion = "INSERT INTO quiz_list (admin_id, quiz_code, title, categories ,description,items, OverallScores) VALUES('$userid', '$quizCode', '$quizTitle', '$Catg' ,'$Desc', 0, 0)";
      $execInsert = mysqli_query($con, $insertQuestion);
        if($execInsert){
          //This is for inserting picture in database
          $targetDirectory = "res/quizPicture/";
          $fileName	= $_FILES["ProfilePicture"]["name"];

            $check = getimagesize($_FILES["ProfilePicture"]["tmp_name"]);
            if($check){
              $newFilename = $quizCode . "_" . $fileName;
              $destination = $targetDirectory . $newFilename;

              $upload = move_uploaded_file($_FILES["ProfilePicture"]["tmp_name"], $destination);

              if($upload){
                $queryUpdatePic = "UPDATE quiz_list SET picture = '$newFilename'WHERE quiz_code = '$quizCode'";
                  $execUpdatePic = mysqli_query($con, $queryUpdatePic);
                }
            }
          header("location: quiz_list.php");
        }
    }

 ?>
