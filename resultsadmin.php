<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<!---Ito yung nag bibigay ng cursive font style sa header--->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
</head>
<body>
	<?php include_once "db.php";include_once "navbaradmin.php" ?>

	<?php echo $_SESSION['userid'];?>

</body>
	<?php include_once "footer.php";?>
</html>
