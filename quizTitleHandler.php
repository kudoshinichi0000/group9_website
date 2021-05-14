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


  $query = " SELECT * FROM quiz_list WHERE admin_id = '$userid' AND quiz_code = '$quizCode'";
  $execQuery = mysqli_query($con, $query);
    if ($execQuery) {
      $insertQuestion = "INSERT INTO quiz_list (admin_id, quiz_code, title, categories ,description) VALUES('$userid', '$quizCode', '$quizTitle', '$Catg' ,'$Desc')";
      $execInsert = mysqli_query($con, $insertQuestion);
        if($execInsert){
          $targetDirectory = "res/quizPic/";
      		$fileName	= $_FILES["ProfilePicture"]["name"];

      			$check = getimagesize($_FILES["ProfilePicture"]["tmp_name"]);
      			if($check){
      				$newFilename = $quizCode . "_" . $fileName;
      				$destination = $targetDirectory . $newFilename;

      				$upload = move_uploaded_file($_FILES["ProfilePicture"]["tmp_name"], $destination);

      				if($upload){
      					$queryUpdatePic = "UPDATE quiz_list
      						SET picture = '$newFilename'
      						WHERE quiz_code = '$quizCode'";
      					  $execUpdatePic = mysqli_query($con, $queryUpdatePic);
      					}
      			}
          header("location: quiz_list.php");
        }
    }

 ?>
