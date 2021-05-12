<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include("db.php");
    include("functions.php");
    include_once("navbaradmin.php");

     ?>
    <br><br><br><br><br><br><br><br>
  	<?php
    //get the id from the url
  	$code = $_GET['quiz_code'];

    $query = "SELECT * FROM quiz_list WHERE quiz_code = '$code' ";
    $execQuery = mysqli_query($con, $query);
    while($fetchCodes = mysqli_fetch_assoc($execQuery)){
    $admin_id = $fetchCodes["admin_id"];
    $code = $fetchCodes["quiz_code"];
    $title = $fetchCodes["title"];

        echo "
        <div class='container1'>
        <form action='quiz_title.php' method='POST'>
          <table border='1' height='350px' width='25%' class='container1'>
            <tr>
              <th colspan='2'><h2>New Quiz</h2>
            </tr>

            <tr>
              <th colspan='2'><label for='title'><h3>title</h3></label></th>
            </tr>

            <tr>
              <th colspan='2'><input type='text' name='quiz_title' value='$title' required></th>
            </tr>

            <tr>
              <th colspan='2'><h4><i>$code</i></h4></th>
            </tr>

            <tr>
              <th><input type='submit' name='submit' class='btn' placeholder='Save' ></th>
              <th colspan='2'><a href='quiz_list.php'>Cancel</a></th>
            </tr>
          </table>
        </form>
      </div>

    $code
        ";

  if(isset($_POST["form"])){
    $code = $_GET['quiz_code'];
    $quizTitle = $_POST['quiz_title'];
    $sql = "UPDATE quiz_list
            SET title = '$quizTitle'
            WHERE quiz_code = '$code'";

      if (mysqli_query($con, $sql)) {
  			header("location: quiz_list.php");
  			exit;
      }
      else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }
    }
  }

  ?>
  </body>
</html>
