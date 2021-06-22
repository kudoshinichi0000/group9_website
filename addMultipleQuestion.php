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
    <title>Creating Multiple Question</title>
    <link type="text/css" rel="stylesheet" href="css/card.css">
    <script src="js/bootstrap.bundle.min.js"> </script>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min4.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">
  </head>
  <body>

		<?php
    include_once('db.php');
    $code = $_GET['quiz_code'];
    include_once("navbaradmin.php");
    ?>

    <br> <br><br><br><br>
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h2 style="margin-left:30%"><b> Add Mutiple Choice Item<b></h2>
        </div>
        <div class="card-body">
          <div class="center">
            <div class="row formContainer">
              <div class="col-lg-12">
                <form action="addMultipleQuestion.php" method="POST">
                  <div class="row form-group">
                    <div class="col">
                      <label for="question">Question:</label>
                     <input type='text' class="form-control"  placeholder="Enter your question" name='question' required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col">
                      <label for="points>">Points:</label>
                      <input type="number" class="form-control" placeholder="enter points for this question..." name="points" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col">
                      <label> Correct Answer</label>
                        <div class="form-outline mb-4">
                          <textarea  class="form-control" rows="3" cols="4" placeholder="Enter the correct letter of the answer" name="ans"  maxlength='1' onkeypress='return /[a-d]/i.test(event.key)' oninput='this.value = this.value.toUpperCase()' required></textarea>
                        </div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col">
                      <label> Answer Options</label>
                        <div class="form-outline mb-4">
                          <textarea  class="form-control" rows="3" cols="40"  name="A" placeholder="Possible answer (A)" required></textarea>
                          </div>
                          <div class="form-outline mb-4">
                          <textarea  class="form-control" rows="3" cols="40"  name="B" placeholder="Possible answer (B)" required></textarea>
                          </div>
                          <div class="form-outline mb-4">
                          <textarea  class="form-control" rows="3" cols="40"  name="C" placeholder="Possible answer (C)" required></textarea>
                          </div>
                          <div class="form-outline mb-4">
                          <textarea  class="form-control" rows="3" cols="40"  name="D" placeholder="Possible answer (D)" required></textarea>
                        </div>
                    </div>
                  </div>
                  <div class="row form-group" style="margin-top: 40px;">
                    <div class="col">
                      <button type="submit" name="submit" class="btn btn-outline-info float-right" style='margin-left:15px;'value="Submit">Submit</button>
                        <?php echo "<a href='questions.php?quiz_code=$code' class='btn btn-outline-danger float-right'>Cancel</a>";?>
                    </div>
                  </div>
                  <input type='hidden' name='hiencod' value='<?php echo $code?>'>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br> <br><br><br>
  </body>
</html>

<?php
//If the user/admin click the submit button, all of the informations in inputbox will process here, to put in database
if(isset($_POST['submit'])){

	//Var_dump();
	$question = $_POST["question"];
	$points = $_POST["points"];
	$answer = $_POST["ans"];
	$optA = $_POST["A"];
	$optB = $_POST["B"];
	$optC = $_POST["C"];
	$optD = $_POST["D"];

	//Hidden Input
	$quizC = $_POST["hiencod"];

		//inserting in multiple question
		$query = "INSERT INTO multiple_questions (quiz_code, question, questionPoints, answer, option1, option2, option3, option4, typeOfQuiz)
								VALUES('$quizC', '$question', '$points', '$answer', '$optA', '$optB', '$optC', '$optD', 'Multiple Questions')";
		$execQuery = mysqli_query($con, $query);
			if($execQuery){

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
											WHERE quiz_code = $quizC";
				 $execaddScore = mysqli_query($con, $addScore);
				 }
			}
			if($execQuery){
			header("location: questions.php?quiz_code=$quizC");
		}
		}
?>
