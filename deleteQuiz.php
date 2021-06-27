<?php

	//Step 1 Database Connectivity
	include_once "db.php";

	//Will check if the user try to access pages without logging in
	if(empty($_SESSION["userid"])){
		header("Location:login.php");
	}

 ?>

<!DOCTYPE html>
<?php ob_start(); ?>
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

	<?php

	/*
		 Hello po maam, dapat po itong delete quiz ay isang alert sa quiz_list.php, like kapag pinindot
	   po yung delete button for quiz dapat may lalabas na alert na confirmation ng delete quiz
		 kaso po may bug at medyo lack po kami sa information sa pag gawa ng alert kaya hiniwalay nalang namin
		 po ng file

		 pero nung 50-75% meron po kaming alert for delete quiz, nakakapag delete din po sya ng quiz kaso may bug,
		 hindi ko na po ma debug kase i spend 2 or 3 whole days para sa pag debug
		 kaso hindi ko na po talaga kaya hindi na po kaya ng powers ko, kaya hiniwalay nalang po namin
	*/

	//Database Connectivity
  include_once("db.php");

	//Navbar for admin
	//include_once("navbar2.php");

	//Getting quizcode
  $code = $_GET["quiz_code"];

	?><br><br><br>

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
						<h4>Are you sure want to delete this Quiz?</h4>
						<br><br>
								<input type="submit" class="btn btn-outline-danger" name="Confirm" value="No" >
								<input type="submit"  class="btn btn-outline-success" name="Confirm" value="Yes">

							<!--Hidden Input-->
							<input type="hidden" name="code" value="<?php echo $code; ?>">
						</form>
					</p>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

  <?php
		//If admin clicks the button it will process here in the if statement
		// i will use this if statement instead of creating a new php file handler
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
