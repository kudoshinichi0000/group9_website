<?php

	//Step 1 Database Connectivity
	include_once "db.php";

	//Will check if the user try to access pages without logging in
	if(empty($_SESSION["userid"])){
		header("Location:login.php");
	}

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>quiz Title</title>
    <link rel="stylesheet" href="css/bootstrap.min2.css">
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">
    <link rel="stylesheet" type="text/css" href="css/main2.css"
    <style media="screen">
    </style>
  </head>
  <body>

    <?php

      include("functions.php");

      //inserting navbar for admin
      include_once("navbaradmin.php");

      //This rand() will generate random numbers, this numbers will be the quiz_code
      //Quiz_code is like a quiz_id, it mades from random and unique numbers
      $code = rand();
    ?><br><br><br><br>


    <div class="container1">
      <div class="row">
          <span class="title" style="margin-left:40%;font-size:30px;"><b>Enter Quiz Details<b></span>
      </div>
        <div class="container">
          <div class="row formContainer">
            <div class="col-lg-12">
              <form action="quizTitleHandler.php" method="POST" enctype="multipart/form-data">
                <div class="row form-group">
                  <div clas="col">
                  <label for="title">Title:</label>
                  <input type="text" class="form-control" placeholder="Enter Quiz Title" name="quiz_title" required>
                </div>
              </div>
              <div class="row from-group" >
                <div class="col">
                <label for="Desc">Description:</label>
                <textarea class="form-control" rows="2" name="Desc" placeholder="Enter Quiz Description...." required></textarea>
                </div>
              </div>
              <div>
                <div class="row form-group">
                  <div class="col">
                    <label for="catg">Categories</label>
                    <select class="form-control" name="catg" required>
                      <option value="Educational"> Educational</option>
                      <option value="Entertainment"> Entertainment</option>
                      <option value="Mix">Mix</option>
                    </select>
                  </div>
              </div>
              <div class="row form-group">
                <div class="col">
                  <label for="ProfilePicture"> ProfilePicture</label>
                  <input type="file" accept="image/*" class="form-control" name="ProfilePicture" required>
                </div>
             </div>
             <div class="row form-group" style="margin-top: 40px;">
               <div class="col">
                 <a href="quiz_list.php" class="btn btn-outline-danger">Cancel</a>
                 <button type="submit" name="button" class="btn btn-outline-success">Save Details</button>
               </div>
             </div>
            </div>
        </div>
        </div>
      </div>
    </div>
      <input type="hidden" name="quizCode" value="<?php echo $code; ?>">
		</form>
	</div>
  </body>
</html>
