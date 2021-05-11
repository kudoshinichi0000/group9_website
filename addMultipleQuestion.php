<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container1">

    <form action="addMultipleQuestion.php" method="POST">
      <table border="1" height="350px" width="40%">
        <tr>
          <th colspan="2"><h2>New Question</h2>
        </tr>

        <!--inputing questions--->
        <tr>
          <th colspan="2"><label><h3>question</h3></label></th>
        </tr>

        <tr>
          <th colspan="2"><input type="text" name="question" required></th>
        </tr>

        <!---Inputing points--->
        <tr>
          <th colspan="2"><label><h3>Question Points</h3></label></th>
        </tr>

        <tr>
          <th colspan="2"><input type="number" name="points" required></th>
        </tr>

        <!---options--->
        <tr>
          <th colspan="2"><label><h3>Option</h3></label></th>
        </tr>

        <tr>
          <th colspan="2">
            <label for="A">A.</label>
            <input type="text" name="A" required><br>

            <label for="B">B.</label>
            <input type="text" name="B" required><br>

            <label for="C">C.</label>
            <input type="text" name="C" required><br>

            <label for="D">D.</label>
            <input type="text" name="D" required><br>

          </th>
        </tr>

        <!---Answer--->
        <tr>
          <th colspan="2"><label><h3>Answer: </h3></label></th>
        </tr>

        <tr>
          <th colspan="2"><input type="text" name="ans" maxlength="1" onkeypress="return /[a-d]/i.test(event.key)" oninput="this.value = this.value.toUpperCase()" required></th>
        </tr>

        <!--Submit--->
        <tr>
          <th><a href="questions.php">Cancel</a></th>
          <th colspan="2"><input type="submit" name="submit" class="btn" placeholder="Save" ></th>
        </tr>
      </table>
    </form>
  </div>

  <?php

  if($_SERVER['REQUEST_METHOD'] == "POST"){
 		//var_dump()
    include("db.php");
    include("functions.php");
    $userId = $_SESSION['userid'];

    //This is for user id
	  $query = " SELECT * FROM quiz_list WHERE admin_id = '$userId'";
   	$execQuery = mysqli_query($con, $query);
 	  $fetch = mysqli_fetch_assoc($execQuery);
    $code = $fetch['quiz_code'];

    echo "$code";
    //Vardump();
 		$question = $_POST["question"];
 		$points = $_POST["points"];
    $answer = $_POST["ans"];
    $optA = $_POST["A"];
    $optB = $_POST["B"];
    $optC = $_POST["C"];
    $optD = $_POST["D"];

 		$insertQuestion = "INSERT INTO multiple_questions(quiz_code, question, questionPoints, answer, option1, option2, option3, option4) VALUES('$code', '$question', '$points', '$answer', '$optA', '$optB', '$optC', '$optD' )";
 		$execInsert = mysqli_query($con, $insertQuestion);
    if($execInsert){
      header("location: questions.php");
    }
 	}

   ?>
  </body>
</html>
