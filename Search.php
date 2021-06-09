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
  </head>
  </head>
  <body>
    <?php
  		include_once("navbar.php");
  		include_once("db.php");
  	?><br><br><br><br><br><br>

  		<!---Feedopedia introducing video--->
  		<div id="VideoIntroCenter">
  			<video width="600" controls>
  	  		<source src="res/Video/IntroVideo.mp4" type="video/mp4">
  			</video>
  		</div>
  	</div>

  	<!---Welcoming text--->
  	<div class="Maincontainer"><br>
  		<b style="font-size: 4em; ">BuzzFeed Quizzes</b>
  		<p>We've got all the quizzes you love to binge! Come on in and hunker down for the long haul.</p>

  		<!---Categories--->
  		<div class="Categories">
  			<h4>Categories</h4><br>
        <a href="main.php" class='catH'>Latest</a>
  			<a href="Educational.php" class='cat'>Educational</a>
  			<a href="Entertainment.php" class='cat'>Entertainment</a>
  			<a href="Mix.php" class='cat'>Mix</a>
  		</div><br><br>

  		<!---Search Button--->
  		<form class="Searchbtn" action="Search.php" method="POST">
  			<button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
  			<input type="text" placeholder="Search..." name="search">
  		</form>

    <!--Go back to main button--->
    <a href="main.php" class="backmain">Go back</a>

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
        echo "<h1>There are ".$queryResult." Results: </h1><br><br>";

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
