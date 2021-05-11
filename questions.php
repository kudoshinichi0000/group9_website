<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<style media="screen">
.Containerhead{
  width: 100%;
  border: 1px solid black;
  height: 15em;
  background-color: yellow;
  color: black;
}
</style>
  </head>
  <body>
    <?php
    include("db.php");
    include("functions.php");
    $code = rand();
    $userId = $_SESSION['userid'];

    //This is for user id
	  $query = " SELECT * FROM quiz_list WHERE admin_id = '$userId'";
   	$execQuery = mysqli_query($con, $query);
 	  $fetch = mysqli_fetch_assoc($execQuery);
    $code = $fetch['quiz_code'];
    $title = $fetch['title'];
      //This section will provide information about the quiz
      echo "
      <div class='Containerhead'>
      <h2>title: $title</h2>
        <h2>admin id:  $userId </h2>
        <h2>Quiz Code: $code </h2>
        <h2>Status: pending</h2>
      </div>";


     ?>
     <a href="addQuestion.php">Add Question</a>


  </body>
</html>
