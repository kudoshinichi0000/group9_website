<?php

	//Step 1 Database Connectivity
	include_once "db.php";

	//Will check if the user try to access pages without logging in
	if(empty($_SESSION["userid"])){
		header("Location:login.php");
	}

 ?>

<?php include_once("db.php");

if ($_SESSION["username"] == "mod") {
  header("location: viewadmin.php");
  exit();
}

$id = $_SESSION['userid'];
$query = "SELECT * FROM admin WHERE userid = $id";
$result = mysqli_query($con, $query);
$admin = mysqli_fetch_assoc($result);
$fetchname = $admin['username'];
$fetchid = $admin['userid'];
?>
<?php
include_once "db.php";
include_once "navbaradmin.php";
$userId = $_SESSION['userid'];


//This is for user id
//Step 2 Prepare the query
$query = " SELECT * FROM admin WHERE userid = '$userId'";

//Step 3 Perform the query
$execQuery = mysqli_query($con, $query);

//Getting/fetching all rows from the executed query
$fetch = mysqli_fetch_assoc($execQuery);
$username = $fetch['username'];

?>

<?php echo "
	<div class='cont'>
		<div class='head'>
			<h1></h1>
		</div>
		<div class='rows'>
			<div class='cardd'>
				<div class='card-headerr'>
					<h1> My Profile</h1>
				</div>
				<div class='card-bodyy'>
					<p>
					<i class='fas fa-user-circle'></i>
					Username: $username <br>
				  <i class='fas fa-id-badge'></i>
					UserId: $userId

					</p>
				</div>
			</div>
	  </div>
	</div>

	"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/profile.css">
		<!-- icons--> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<title>My Profile</title>

  </head>
  <body>
  </body>
</html>
