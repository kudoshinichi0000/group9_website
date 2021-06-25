<!DOCTYPE html>
<html>
<head>
	<title>Delete User Confirmation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<!--Include Header-->
	<?php
  include_once("db.php");

  $code = $_GET["quiz_code"];

  //include_once("navbaradmin.php"); ?>

	<!---Delete User Confirmation-->
	<div class="containER">
		<form action="deleteQuiz.php" method="POST">
			<table border="2"  width="50%" >

				<tr>
					<th colspan="2"><h2>Are you sure want to delete this Quiz <?php echo $code; ?>?</h2></th>
				</tr>
			</table>

				<input type="submit" name="Confirm" value="No" >
				<input type="submit" name="Confirm" value="Yes">

			<!--Hidden Input-->
			<input type="hidden" name="code" value="<?php echo $code ?>">
		</form>
	</div>
</body>
</html>

  <?php
    if(isset($_POST['Confirm'])){
      include_once("db.php");
    	//Var_dump
      $code = $_POST['code'];
    	$Confirm = $_POST["Confirm"];

    	if ($Confirm == "Yes") {//If admin click the Yes button, the information that he/she wants delete, will be deleted to the database

    		//Prepare The Query
    		$deleteQuery = "DELETE FROM quiz_list WHERE quiz_code = '$code'";

    		//Perform the query
    		$execQuery = mysqli_query($con, $deleteQuery);

            if ($execQuery) {
          		$deleteuery = "DELETE FROM questions WHERE quiz_code = '$code'";
          		$execquery = mysqli_query($con, $deleteuery);

              if ($execquery) {
                $deleteuery = "DELETE FROM option WHERE quiz_code = '$code'";
                $execqueryy = mysqli_query($con, $deleteuery);
                  header("Location: quiz_list.php");
              }
            }

    	}else{
    		header("Location: quiz_list.php");
    		exit();
    	}

    }
   ?>
