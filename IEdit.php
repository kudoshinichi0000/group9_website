<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="js/bootstrap.bundle.min.js"> </script>
    <link type="text/css" rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Edit Identification Item</title>
  </head>
  <body>
    <?php
      include_once("db.php");
      $Quizid = $_GET["id"];
      include_once("navbaradmin.php");

      //Getting or fetching all rows from Identification
      $queryy = " SELECT * FROM identification WHERE id = '$Quizid'";

      $execQuery = mysqli_query($con, $queryy);

     while($fetchtrueorfalse = mysqli_fetch_assoc($execQuery)){
       $questionnnId = $fetchtrueorfalse['id'];
       $code = $fetchtrueorfalse['quiz_code'];
       $question = $fetchtrueorfalse['question'];
       $answer = $fetchtrueorfalse['answer'];
       $points = $fetchtrueorfalse['points'];
       $typeOfQuiz = $fetchtrueorfalse['typeOfQuiz'];
      echo "
            <br><br><br><br>
            <div class='container'>
              <div class='card'>
                <div class='card-header'>
                <h2 style='margin-left:30%'><b>Editing Identification Item<b></h2>
                </div>
                  <div class='card-body'>
                    <div class='center'>
                      <div class='row formContainer'>
                        <div class='col-lg-12'>
                        <form action='IEditHandler.php' method='POST'>
                          <div class='row form-group'>
                            <div class='col'>
                            <label for='IdenQuestion'>Question:</label>
                            <input type='text' class='form-control' placeholder='Enter your question' name='IdenQuestion' value='$question' required>
                            </div>
                          </div>
                          <div class='row form-group'>
                            <div class='col'>
                            <label for='IdenAnswer'>Anwer:</label>
                            <input type='text' class='form-control'  name='IdenAnswer' value='$answer' required>
                            </div>
                          </div>
                        <div class='row form-group'>
                          <div class='col'>
                          <label for='points'>Points:</label>
                          <input type='number' class='form-control' placeholder='Enter numbers only' name='points'  value='$points' required>
                         </div>
                       </div>
                       <div>
                       <div class='row form-group'style='margin-top: 40px;''>
                        <div class='col'>
                        <button type='submit' name='btn' class='btn btn-outline-info float-right' style='margin-left:15px;'value='Submit'>Submit</button>
                        <a href='questions.php?quiz_code=$code' class='btn btn-outline-danger float-right'>Cancel</a>
                        <input type='hidden' name='quizCode' value='$code'>
                        <input type='hidden' name='quizId' value='$Quizid'>
                      </form>
                       </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>
       </div>
     </div>
    ";
  }
    ?>
  </body>
</html>
