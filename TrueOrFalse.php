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
    <script src="js/bootstrap.bundle.min.js"> </script>
    <link type="text/css" rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min4.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>

		<?php
      //Including Database
      include_once("db.php");

      //Getiing code
      $code = $_GET["quiz_code"];

      //Including navbar for admin
      include_once("navbaradmin.php");
     ?>
     <br> <br><br><br><br>
     <div class="container">
         <div class="card">
           <div class="card-header">
             <h2 style="margin-left:30%"><b>Add True or False Question<b></h2>
           </div>
           <div class="card-body">
             <div class="center">
               <div class="row formContainer">
                 <div class="col-lg-12">
                   <form action="TrueOrFalse.php" method="POST">
                     <div class="row form-group">
                       <div class="col">
                         <label for="TorFQuestion">Question: </label>
                         <input type="text" class="form-control" placeholder="Enter your question" name="TorFQuestion" required>
                       </div>
                     </div>
                     <br>
                     <div class="row form-group">
                       <div class="col">
                         <div class="input-group mb-3">
                           <div class="input-group-prepend">
                            <label class="input-group-text" for="TorFAnswer">Answer:</label>
                          </div>
                            <select class="custom-select" id="inputGroupSelect01" name="TorFAnswer">
                                <option selected>Choose...</option>
                                <option value="True">True</option>
                                <option value="False">False</option>
                              </select>
                          </div>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col">
                          <label for="points">Points:</label>
                          <input type="number" class="form-control" placeholder="input points for this question" name="points" required>
                        </div>
                      </div>
                      <div>
                        <div class="row form-group" style="margin-top: 40px;">
                        <div class="col">
                          <button type="submit" name="submit" class="btn btn-outline-info float-right" style="margin-left:15px;"value="Submit">Submit</button>
                          <?php echo "<a href='questions.php?quiz_code=$code' class='btn btn-outline-danger float-right'>Cancel</a>";?>
                        </div>
                      </div>
                    </div>
                        <input type='hidden'name='quizCode' value='<?php echo $code ?>'>
                   </form>
                 </div>
               </div>
             </div>
           </div>
         </div>
     </div>
  </body>
</html>

	<?php
	//If the user/admin click the submit button, all of the informations in inputbox will process here, to put in database
	if(isset($_POST['submit'])){
		include_once("db.php");

	//Var_dump
	$Questions = $_POST["TorFQuestion"];
  $TrueorFalse = $_POST["TorFAnswer"];
  $points = $_POST["points"];

  //Hidden Input
	$quizcode = $_POST["quizCode"];

  //Creating new variable for the identity of this quiz
  $typeOfQuiz = "True or False";


	//Inserting all variables in Database
	$Query = "INSERT INTO trueorfalse(quiz_code, question, answer, points, typeOfQuiz)
  VALUES('$quizcode', '$Questions', '$TrueorFalse', '$points', '$typeOfQuiz')";

	//Perform the query
	$execQuery = mysqli_query($con, $Query);

    if ($execQuery) {
      //i made this to add a points in Overall scores in quiz_list, when you create questions the item will be added by 1
      //the item is the total number of all questions
      $queryy = " SELECT * FROM quiz_list";
      $execQueryy = mysqli_query($con, $queryy);
      while($fetchQuestion = mysqli_fetch_assoc($execQueryy)){
      $addscore = $fetchQuestion["OverallScores"];
      $items = $fetchQuestion["items"];
      $OverallScores = $addscore + $points;
      $iitem = $items + 1;
       $addScore = "UPDATE quiz_list
                    SET OverallScores = $OverallScores, items = $iitem
                    WHERE quiz_code = $quizcode";
       $execaddScore = mysqli_query($con, $addScore);
       if ($execaddScore) {
         header("Location: questions.php?quiz_code=$quizcode");
       }
    }
	}
	}
	?>
