<!DOCTYPE html>
<html>
<head>
	<title>Delete User Confirmation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/profile.css">
	<link rel="stylesheet" href="css/stle.css">
	<link rel="stylesheet" href="css/bootstrap.min2.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<style>
*{
    font-family: 'Poppins', sans-serif;
		padding: 0;
		margin:
	}
nav ul{
	padding-top: -10px;
	margin-top: -4px;
}
nav a {
    display: inline-block;
    color: white;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 18px;
    border-radius: 15px;
}

</style>
</head>
<body>

	<!--Include Header-->
	<?php
  include_once("db.php");

  $code = $_GET["quiz_code"];

  //include_once("navbaradmin.php"); ?>
	<?php
	include_once("navbar2.php"); ?>
	<br><br><br>
	<!---Delete User Confirmation-->
	<div class="cont">
		<div class="head">
			<h1></h1>
		</div>
		<div class="rows">
			<div class="cardd">
				<div class="card-headerr">
					<h3> Delete Quiz Data</h3>
				</div>
				<div class="card-bodyy">
					<p>
						<form action="deleteQuiz.php" method="POST">
						<h4>Are you sure want to delete this Quiz <?php echo $code; ?>?</h4>
						<br><br>
								<input type="submit" class="btn btn-outline-danger" name="Confirm" value="No" >
								<input type="submit"  class="btn btn-outline-success" name="Confirm" value="Yes">
							<!--Hidden Input-->
							<input type="hidden" name="code" value="<?php echo $code ?>">
						</form>
					</p>
				</div>
			</div>
		</div>
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
