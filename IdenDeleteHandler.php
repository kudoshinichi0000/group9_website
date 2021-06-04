<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?php
  $quizId = $_GET['id'];

  $query = "SELECT * FROM identification WHERE id = '$quizId'";

  $execQuery = mysqli_query($con, $query);

  $fetchCodes = mysqli_fetch_assoc($execQuery);
  $question = $fetchCodes["question"];
  $code = $fetchCodes["quiz_code"];
  $questionP = $fetchCodes["points"];

  echo"
  <div class='modal fade' id='DeleteModalIden'>
    <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h2 class='modal-title'> Delete Confirmation</h2>
            <button type='button' class='close' data-dismiss='modal'><span>&times;</span></button>
          </div>
          <div class='modal-body'>
              <form action='IdenDeleteHandler.php' id='form-delete-user' method='POST'>
                <label><p>  Are you sure you want to delete your account: <?php echo $question?>?</p></label>

          </div>
          <div class='modal-footer'>
            <input type='submit' name='Confirm' class='buttonnn button01' value='yes'>
              <input type='submit' name='Confirm' class='buttonnn button1' value='no'>
          </div>
          <input type='hidden' name='quizId' value='$quizId'>
          <input type='hidden' name='quizCode' value='$code'>
          <input type='hidden' name='quizP' value='$questionP'>
          </form>
      </div>
    </div>
  </div>
  <script>
    $('.delete-btn').click((e) => {
      e.preventDefault();
      if(confirm(' Are you sure you want to delete this item')){
        window.location.href = $(e.target).attr('href');
      }
    });
  </script>
  "
?>
  <?php
  include_once("db.php");
	//Var_dump
  $quizId = $_POST["quizId"];
	$Confirm = $_POST["Confirm"];

	if ($Confirm == "yes") {//If admin click the Yes button, the information that he/she wants delete, will be deleted to the database

		//Hidden Input

    $quizCode = $_POST["quizCode"];
    $quizP = $_POST["quizP"];


	  $deleteuery = "DELETE FROM identification WHERE id = '$quizId'";
    $execquery = mysqli_query($con, $deleteuery);
      if ($execquery) {
        //i made this to add a points in Overall scores in quiz_list
        $query = " SELECT * FROM quiz_list WHERE quiz_code = $quizCode";
        $execQuery = mysqli_query($con, $query);
        while($fetchQuestion = mysqli_fetch_assoc($execQuery)){
        $addscore = $fetchQuestion["OverallScores"];
        $items = $fetchQuestion["items"];
        $OverallScores = $addscore - $quizP;
        $iitem = $items - 1;
         $addScore = "UPDATE quiz_list
                      SET OverallScores = $OverallScores, items = $iitem
                      WHERE quiz_code = $quizCode";
         $execaddScore = mysqli_query($con, $addScore);
         if ($execaddScore) {
           header("Location: questions.php?quiz_code=$quizCode");
         }
      }
	}

}
else{
  //if no
  header("Location: quiz_list.php");
  exit();
}

 ?>

  </body>
</html>
