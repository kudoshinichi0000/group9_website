<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Creating Multiple Question</title>
    <script src="js/bootstrap.bundle.min.js"> </script>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min4.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
  </head>
  <body>

    <?php
    include_once('db.php');
    $code = $_GET['quiz_code'];
    ?>
    <?php
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
                <form action="addMultipleQuestionHandler.php" method="POST">
                  <div class="row form-group">
                    <div class="col">
                      <label for="question">Question:</label>
                     <input type='text' class="form-control"  placeholder="Enter your question" name='question' required>
                    </div>
                  </div>
                  <div class="ro form-group">
                    <div class="col">
                        <label for="typrOfQuiz">Type of Quiz: Multiple Choices</label>
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
                          <textarea  class="form-control" rows="3" cols="4" placeholder="Enter the correct letter of the answer" name="ans" required></textarea>
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
                      <button type="submit" name="btn" class="btn btn-outline-info float-right" style='margin-left:15px;'value="Submit">Submit</button>
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
