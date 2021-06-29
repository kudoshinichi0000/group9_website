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
      <h2><label><span style="color: red;">Warning resetting the website may lose all data in the database,
        including admins, quizzes, announcements, feedbacks, etc..<br><br></span>
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
          echo "
          <form action='modFactoryResetHandler.php' method='post'><br><br><br><br>
          <center>
            <span>If you want to Still Continue, Please Type the Word ";?> <label for="CONFIRMDELETEDATA">"CONFIRMDELETEDATA"</label>
              <?php echo " in the Text box.</span><br><br>

            <input type='text' name='confirmation' value='' style='background-color: #fff; color: #000;' required>
            <input type='submit' name='submit' >
            </center>
          </form>
          ";
        }else{
          header("location: modsetting.php");
        }
      }
     ?>




  </body>
</html>
