<?php

function check_login($con)
{

	if(isset($_SESSION['userid']))
	{

		$id = $_SESSION['userid'];
		$query = "select * from admin where userid = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) {
		# code...

		$text .= rand(0,9);
	}

	return $text;
}
?>
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
				if(isset($_SESSION['status']))
				{
					echo $_SESSION['status'];
					unset($_SESSION['status']);
				}
				?>
			</div>
		</div>
	</div>
	</section>
