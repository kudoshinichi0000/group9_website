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
    <link type="text/css" rel="stylesheet" href="css/card.css">
    <script src="js/bootstrap.bundle.min.js"> </script>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min4.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Edit Title</title>
  </head>
  <body>
    <?php
    include("functions.php");
    include_once("navbaradmin.php");
     ?> <br><br><br><br><br>


  	<?php

    //get the id from the url
  	$code = $_GET['quiz_code'];

		//Prepare the query
    $query = "SELECT * FROM quiz_list WHERE quiz_code = $code";

		//Perform the query
    $execQuery = mysqli_query($con, $query);

		//Getting/Fetching all rows from the executed query
    while($fetchCodes = mysqli_fetch_assoc($execQuery)){
    $admin_id = $fetchCodes["admin_id"];
    $title = $fetchCodes["title"];
    $Desc = $fetchCodes["description"];
    $categories = $fetchCodes["categories"];
    $picture = $fetchCodes["picture"];

        echo "
        <div style='width: 80%; margin-left:9rem;' class='container>
          <div class='jumbotron'>
          <div class='card'>
            <div class='card-header'>
              <h2 style='margin-left:40%'><b> Edit Title Quiz<b></h2>
            </div>
            <div class='card-body'>
              <div class='center'>
                <div class='row formContainer'>
                  <div class='col-lg-12'>
                    <form action='editTitle.php' method='POST' enctype='multipart/form-data'>
                      <div class='row form-group'>
                        <div class='col'>
                          <label for='title'>Title: </label>
                          <input type='text' class='form-control' placeholder='Enter new Title' name='title' value='$title' required>
                        </div>
                      </div>
                      <div class='row form-group'>
                        <div class='col'>
                          <label for='Desc'>Description: </label>
                          <input type='text' class='form-control' placeholder='Enter new Description' name='Desc' value='$Desc' required>
                        </div>
                      </div>
                      <br>
                      <div class='row form-group'>
                        <div class='col'>
                          <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                              <label class='input-group-text' for='catg'>Categories: </label>
                            </div>
                              <select class='custom-select' id='inputGroupSelect01' name='catg'>
                            ";
                            ?>
                            <?php
                              if ($categories == 'Educational') {
                                echo "
                                <option value='$categories'>$categories</option>
                                <option value='Entertainment'>Entertainment</option>
                                <option value='Mix'>Mix</option>
                                ";
                              }elseif ($categories == 'Entertainment') {
                                echo "
                                <option value='$categories'>$categories</option>
                                <option value='Educational'>Educational</option>
                                <option value='Mix'>Mix</option>
                                ";
                              }else {
                                echo "
                                <option value='$categories'>$categories</option>
                                <option value='Educational'>Educational</option>
                                <option value='Entertainment'>Entertainment</option>
                                ";
                              }
                            }
                            ?>
                            </select>
                          </div>
                          </div>
                          </div>
					<?php echo "
                      <br>
                      <div>
                        <div class='row form-group' style='margin-top: 40px;'>
                        <div class='col'>
                          <button type='submit' name='submit' class='btn btn-outline-info float-right' style='margin-left:15px;'value='Submit'>Save</button>
                          <a href='quiz_list.php' class='btn btn-outline-danger float-right'>Cancel</a>
                        </div>
                      </div>
                    </div>
                        <input type='hidden' name='quizCode' value='$code'>
                    </form>
										";
										?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>

				<?php

				// If the admin clicks the submit button, it will process here inside of f(isset($_POST['submit'])){
				// i will use this if statements instead of creating a new file handlers
				if(isset($_POST['submit'])){

				//Database Connectivity
				include_once("db.php");

				//var_dump()
				$userid = $_SESSION["userid"];
				$quizTitle = $_POST['title'];
				$Desc = $_POST["Desc"];
				$Catg = $_POST["catg"];

				//Hidden Input
				$quizCode = $_POST["quizCode"];

				//prepare the query
				$query = " SELECT * FROM quiz_list WHERE admin_id = '$userid' AND quiz_code = '$quizCode'";

				//Perform the query
				$execQuery = mysqli_query($con, $query);
					if ($execQuery) {

						$insertQuestion = "UPDATE quiz_list
															 SET quiz_code = '$quizCode', title = '$quizTitle', categories = '$Catg' ,description = '$Desc'
															 WHERE quiz_code = '$quizCode'";

						$execInsert = mysqli_query($con, $insertQuestion);
							if($execInsert){

								//if successfull it will redirect into quiz_list
								header("location: quiz_list.php");
							}
					}
				}
				 ?>
  </body>
</html>
