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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
    <?php
      //Including Database
      include_once("db.php");

      //Getting Quiz_code from the previous webpage
      $code = $_GET["quiz_code"];

      //Including Navar for admin
      include_once("navbaradmin.php");
        ?>
      <br><br><br><br>
     <div class="container">
       <div class="jumbotron">
         <div class="card">
           <div class="card-header">
             <h2><b> Adding Identification Question<b></h2>
           </div>
           <div class="card-body">
              <div class="container">
                <div class="row formContainer">
                  <div class="col-lg-12">
                    <form action='IdentificationHandler.php' method="POST">
                    <div class="row form-group">
                      <div class="col">
                        <label for="IdenQuestion">Question:</label>
                        <input type="text" class="form-control" placeholder="Enter your question"name="IdenQuestion" required>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col">
                        <label for="IdenAnswer">Anwer:</label>
                        <input type="text" class="form-control" name="IdenAnswer" required>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col">
                        <label for="points">Points:</label>
                        <input type="number" class="form-control" placeholder="Enter numbers only"name="points" required>
                      </div>
                    </div>
                    <div>
                      <div class="row form-group" style="margin-top: 40px;">
                      <div class="col">
                        <button type="submit" name="btn" class="btn btn-outline-info float-right" style='margin-left:15px;'value="Submit">Submit</button>
                        <?php echo "<a href='questions.php?quiz_code=$code' class='btn btn-outline-danger float-right'>Cancel</a>";?>
                        <input type='hidden' name='quizCode' value='<?php echo $code ?>'>
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
  </body>
</html>
