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
		//including navbar for admin
    //include_once("navbaradmin.php");
		?>

		<?php
		//Including database
		include_once("db.php");

		//Geting Quizcode from questions.php
		$id = $_GET['id'];

		//$code = $_GET['quiz_code'];

		//query for Getting the value of the questions
		$query = "SELECT * FROM questions WHERE id = $id";
		$questions = mysqli_query($con,$query);
		$fetch = mysqli_fetch_assoc($questions);
		$next = $fetch["question_number"];
		$question = $fetch["question"];
		$points = $fetch["questionPoints"];
		$answer = $fetch["answer"];
		$code = $fetch["quiz_code"];

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
                <form action="MultiQEdit.php" method="POST">
									<div class="row form-group">
                    <div class="col">
                      <label for="question_number">Question Number:</label>
											<input type="number" class="form-control" name="question_number" value="<?php echo $next;  ?>" min="1" readonly>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col">
                      <label for="question">Question:</label>
                     <input type='text' class="form-control"  placeholder="Enter your question" name='question' value="<?php echo $question; ?>" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col">
                      <label for="points>">Points:</label>
                      <input type="number" class="form-control" placeholder="Enter points for this question..." value="<?php echo $points; ?>" readonly>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col">
                      <label> Correct Answer Number:</label>
                        <div class="form-outline mb-4">
                          <input type="number" class="form-control" placeholder="Enter the correct Number of the answer" readonly min="1" max="4" value="<?php echo $answer; ?>" required></input>
                        </div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col">
                      <label> Answer Options</label>

											<?php
												//query for Getting the value of the questions
												$queryy = "SELECT * FROM option WHERE id = $id";
												$questionss = mysqli_query($con,$queryy);
											  while($fetchh = mysqli_fetch_assoc($questionss)){
												$options = $fetchh["options"];

														echo "
			                        <div class='form-outline mb-4'>
			                          <textarea  class='form-control' rows='3' cols='40' readonly value=' ";?> <?php echo $options; ?> <?php echo"' required>$options</textarea>
			                          </div>
														";
													}
												?>
                    </div>
                  </div>
                  <div class="row form-group" style="margin-top: 40px;">
                    <div class="col">
                      <button type="submit" name="submit" class="btn btn-outline-info float-right" style='margin-left:15px;'value="Submit">Submit</button>
                        <?php echo "<a href='questions.php?quiz_code=$code' class='btn btn-outline-danger float-right'>Cancel</a>";?>
                    </div>
                  </div>
                  <input type="hidden" name="code" value="<?php echo "$code"; ?>">
									<input type="hidden" name="id" value="<?php echo "$id"; ?>">
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

	//Vardump
	$question = $_POST['question'];

//Hidden input
	$quizCode = $_POST['code'];
$id = $_POST['id'];

 // First Query for questions Table
	$query = "UPDATE questions
						SET question = $question
						WHERE id = $id";

//perform the query
	$result = mysqli_query($con,$query);

	//If sucessfull, it will redirect in questions.php
		header("Location: questions.php?quiz_code=$quizCode");
	}


?>
