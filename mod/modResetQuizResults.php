<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MOD</title>
    <style>
    *{
      background-color: #1c1b18;
      color: #4ecfa5;
      font-weight: bold;
    }
    </style>
  </head>
  <body>
<center>
  <h1>Delete User</h1>
  <hr>

  <!-- DELETE ALL DATA's CONFIRMATION -->
<form action="modFactoryReset.php" method="post">
      <h2><label><span style="color: red;">Warning resetting the Quiz Results may lose all data in the database,
        including Logs And quiz Feedbacks<br><br></span>
        Do you Want still to reset this Website?</label><br></h2>

      <input type="submit" name="submit" value="no">
      <input type="submit" name="submit" value="yes">
</center>
    </form>

    <?php
      if (isset($_POST['submit'])) {

        //Var_dump
      	$Confirm = $_POST["submit"];

        //If the superadmin submit yes, it will ask again another confirmation and require's a word "CONFIRMDELETEDATA" before deleting the data
      	if ($Confirm == "yes") {
          //Include Database
          include_once("../db.php");

          //Vardump
          $confirmation = $_POST['confirmation'];
          if($_SERVER['REQUEST_METHOD'] == "POST"){

            if ($confirmation == "CONFIRMDELETEDATA") {
              //Deleting all data in database
              mysqli_query($con, "TRUNCATE TABLE logs");
              mysqli_query($con, "TRUNCATE TABLE quiz_feedback");
                echo "<br><br><br>
                  Successfully Deleted all data in database<br><br>
                  <a href='modsetting.php' style='color: #fff; text-decoration: underline;'>Go Back</a>
                ";
                }
        }else{
          header("location: modsetting.php");
        }
      }
    }
     ?>




  </body>
</html>
