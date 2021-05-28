<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Creating Multiple Question</title>
    <script src="js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">
  </head>
  <body>

    <?php
    include_once('db.php');
    $code = $_GET['quiz_code'];
    ?>
    <?php
    include_once("navbaradmin.php");
    ?>
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
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br> <br><br><br><br>
    <div class='containerTable'>
      <form action='addMultipleQuestionHandler.php' method='POST'>
        <table border='1' height='350px' width='100%' >
          <tr>
            <th colspan='2'><h2>New Question</h2>
          </tr>

          <tr>
            <th colspan='2'><label><h3>question</h3></label></th>
          </tr>

          <tr>
            <th colspan='2'><input type='text' name='question' required></th>
          </tr>

          <tr>
            <th colspan='2'><label for='typeOfQuiz'><h3>Type of quiz: Multiple Choices</h3></label></th>
          </tr>

          <tr>
            <th colspan='2'><label><h3>Question Points</h3></label></th>
          </tr>

          <tr>
            <th colspan='2'><input type='number' name='points' required></th>
          </tr>

          <tr>
            <th colspan='2'><label><h3>Option</h3></label><br>

            <textarea rows='2' cols='40' placeholder='Correct Answer' style='color:red;' name='ans' required></textarea><br><br>

            <textarea name='A' rows='2' cols='40' placeholder='Posible Answer (A)' required></textarea><br><br>

            <textarea name='B' rows='2' cols='40' placeholder='Posible Answer (B)' required></textarea><br><br>

            <textarea name='C' rows='2' cols='40' placeholder='Posible Answer (C)' required></textarea><br><br>

            <textarea name='D' rows='2' cols='40' placeholder='Posible Answer (D)' required></textarea><br><br>

            </th>
          </tr>

          <tr>
            <th><a href='questions.php?quiz_code=$code'>Cancel</a></th>
            <th colspan='2'><input type='submit' name='submit' class='btn' placeholder='Save' ></th>
          </tr>
        </table>
        <input type='hidden' name='hiencod' value='$code'>
      </form>
    </div>

    "; ?>
  </body>
</html>
