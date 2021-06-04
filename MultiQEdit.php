<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Multiple Question</title>
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
    $quizId = $_GET['id'];
    include_once("navbaradmin.php");
    ?>
    <br> <br><br><br><br>
    <?php


    $query = "SELECT * FROM multiple_questions WHERE id = '$quizId'";
    $execQuery = mysqli_query($con, $query);
    while ($Question = mysqli_fetch_assoc($execQuery)) {
      $question = $Question['question'];
      $code = $Question['quiz_code'];
      $points = $Question['questionPoints'];
      $option1 = $Question['option1'];
      $option2 = $Question['option2'];
      $option3 = $Question['option3'];
      $option4 = $Question['option4'];
      $answer = $Question['answer'];
      $typeOfQuiz = $Question['typeOfQuiz'];


      echo "

              <div class='container'>
                <div class='card'>
                  <div class='card-header'>
                    <br>
                    <h2 style='margin-left:30%;'><b> Edit Mutiple Choice Item<b></h2>
                  </div>
                  <div class='card-body'>
                    <div class='center'>
                      <div class='row formContainer'>
                        <div class='col-lg-12'>
                          <form action='MultiQEditHandler.php' method='POST'>
                            <div class='row form-group'>
                              <div class='col'>
                                <label for='question'>Question:</label>
                               <input type='text' class='form-control'  placeholder='Enter your question' name='question' value='$question' required>
                              </div>
                            </div>
                            <div class='row form-group'>
                              <div class='col'>
                                <label for='points>'Points:</label>
                                <label for='typeOfQuiz' value='$typeOfQuiz'>Type of quiz:<h5>Multiple Choices</h5></label>
                              </div>
                            </div>
                            <div class='row form-group'>
                              <div class='col'>
                                <label> Correct Answer</label>
                                  <div class='form-outline mb-4'>
                                    <textarea  class='form-control' rows='1'  placeholder='Enter the correct letter of the answer' name='answer' maxlength='1' onkeypress='return /[a-d]/i.test(event.key)'' oninput='this.value = this.value.toUpperCase()' value='$answer' required></textarea>
                                  </div>
                              </div>
                            </div>
                            <div class='row form-group'>
                              <div class='col'>
                                <label> Answer Options</label>
                                  <div class='form-outline mb-4'>
                                    <textarea  class='form-control' rows='1'   name='A' placeholder='Possible answer (A)' value='$option1'required></textarea>
                                  </div>
                                  <div class='form-outline mb-4'>
                                      <textarea  class='form-control' rows='1'  name='B' placeholder='Possible answer (B)' value='$option2'required></textarea>
                                  </div>
                                  <div class='form-outline mb-4'>
                                        <textarea  class='form-control' rows='1'   name='C' placeholder='Possible answer (C)'value='$option3' required></textarea>
                                  </div>
                                  <div class='form-outline mb-4'>
                                        <textarea  class='form-control' rows='1'   name='D' placeholder='Possible answer (D)' value='$option4' required></textarea>
                                  </div>
                              </div>
                            </div>
                            <div class='row form-group' style='margin-top: 40px;'>
                              <div class='col'>
                                <button type='submit' name='btn' class='btn btn-outline-info float-right' style='margin-left:15px;'value='Submit'>Submit</button>
                                <a href='questions.php?quiz_code=$code' class='btn btn-outline-danger float-right'>Cancel</a>
                              </div>
                            </div>
                            <input type='hidden' name='quizId' value='$quizId'>
                            <input type='hidden' name='quizC' value='$code'>
                          </form>
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
