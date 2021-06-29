<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search</title>
    <link type="text/css" rel="stylesheet" href="css/navbar.css">
  	<link type="text/css" rel="stylesheet" href="css/quizcard.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
  	<link rel="preconnect" href="https://fonts.gstatic.com">
  	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
  	<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" crossorigin="anonymous">

    <style media="screen">
    body{
      background-image: linear-gradient(to left top, #87eda1, #82f0b5, #82f3c8, #87f5d8, #90f7e6, #90f7e6, #90f7e6, #90f7e6, #87f5d8, #82f3c8, #82f0b5, #87eda1);
    }
    .announcement{
  		align-items: center;
  		align-content: center;
  	  float: left;
  		font-weight: bold;
  		margin-left: 200px;
  		padding: 30px;
  		padding-left: 50px;
  		height: 350px;
  		width: 500px;
  	  border-radius: 5px;
  	  -moz-border-radius:5px;
  	  -webkit-border-radius:5px;
  	  background: -webkit-linear-gradient(to bottom, #fff 70%, #fff6e9);
  	  background: linear-gradient(to bottom, #fff 70%, #fff6e9);
  	  overflow: auto;
  		color: #080707;
  	}
  	.announcement h1{
  		color: black;
  		font-weight: bold;
  	}
    </style>
  </head>

  <body>
    <?php
  		include_once("navbar.php");
  		include_once("db.php");
  	?><br><br><br><br><br><br>

    <!-- Announcements -->
  		<aside class="announcement">
  		<h1>Announcements</h1><br>
  			<?php
  						$selquery = "SELECT * FROM announcements ORDER BY anndate DESC limit 15";
  						$execselquery = mysqli_query($con, $selquery);

  						while ($fetch = mysqli_fetch_assoc($execselquery)) {
  							$announcementid = $fetch['id'];
  							$adminid = $fetch['adminid'];

  							$query = "SELECT * FROM admin WHERE userid = '$adminid'";
  							$execquery = mysqli_query($con, $query);
  							while($fetchid = mysqli_fetch_assoc($execquery)){
  								$username = $fetchid['username'];
  							}


  							$content = $fetch['content'];
  							$date = $fetch['anndate'];

  							echo "Announcement No: ".$announcementid."<br>";
  							echo "ID: ".$adminid."<br>";
  							echo "User: ".$username."<br>";
  							echo "Content: ".$content."<br>";
  							echo "Date: ".$date."<br><br>";
  						}
  			 ?>
  		</aside>

  		<!---Feedopedia introducing video--->
  		<div id="VideoIntroCenter">
  			<video width="600" controls>
  	  		<source src="res/Video/IntroVideo.mp4" type="video/mp4">
  			</video>
  		</div>
  	</div>

	<!---Welcoming text--->
	<div class="Maincontainer"><br>
		<b style="font-size: 3em; margin-left: 0.5em;">Feedopedia Quizzes</b>
		<p>We've got all the quizzes you love to binge! Come on in and hunker down for the long haul.</p>

		<!---Search Button--->
		<form class="Searchbtn" action="Search.php" method="POST">
			<button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
			<input type="text" placeholder="Search..." name="search">
		</form>

		<!---Categories--->
		<div class="Categories">
			<h4>Categories</h4><br>
			<a href="main.php" class='catH'>Latest</a>
			<a href="Educational.php" class='cat'>Educational</a>
			<a href="Entertainment.php" class='cat'>Entertainment</a>
			<a href="Mix.php" class='cat'>Mix</a>
		</div>

    <!---here will appear the searches-->
    <div class="card">
    <?php
      if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($con, $_POST['search']);

        //This search button can search title and quiz_code
        $sql = "SELECT * FROM quiz_list WHERE title = '$search' OR quiz_code = '$search'";

        $result = mysqli_query($con, $sql);
        $queryResult = mysqli_num_rows($result);

        //displaying number of results
        echo "<br><br><h2 style='color: #000;'>There are ".$queryResult." Results: </h2><br><br>";

        if ($queryResult > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            if($Ftitle = wordwrap($row["title"], 25, "<br>")) {

            $QuizCode = $row["quiz_code"];

              //Displaying Quiz
              echo "
                  <div class='align'>
                    <div class='card-container'>
                      <div class='card-horizontal'>
                        <div class='card-front'>
                          <article class='card-front-content'>
                            <img src='res/quizPicture/$row[picture]' width='100%' height='175px' alt='' class='card-pic'>
                            <h2 style='color:#fff;'>$Ftitle</h2>
                          </article>
                        </div>

                        <div class='card-back card-back-hr'>
                          <article class='card-back-content'>
                            <h2>Title: $Ftitle</h2>
                            <p style='color:#fff;'>Category: $row[categories]</p>
                            <p style='color:#fff;'>Items: $row[items]</p>
                            <p style='color:#fff;'>Overall Scores: $row[OverallScores]</p>
                            <a class='PlayButton' href='Displayinfo.php?quiz_code=$QuizCode'>Play Quiz</a>
                          </article>
                        </div>
                      </div>
                    </div>
                  </div>
                ";
              }
            }
          }else {
            echo "There are no Results Matching in your Search!";
          }
        }
       ?></div><br>
 </div>
</body>
  <?php include_once("footerr.php"); ?>
</html>
