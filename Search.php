<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search</title>
    <link type="text/css" rel="stylesheet" href="css/navbar.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
  	<link rel="preconnect" href="https://fonts.gstatic.com">
  	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
  	<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<style media="screen">
  	#Maincontainer{
  			width: 80%;
  			margin: auto;
  		}

  	form.Searchbtn input[type=text] {
  		float: right;
  	  padding: 10px;
  	  font-size: 17px;
  	  border: 1px solid grey;
  	  width: 20%;
  	  background: #f1f1f1;
  	}

  	form.Searchbtn button {
  		float: right;
  	  width: 5%;
  	  padding: 10px;
  	  background: #2196F3;
  	  color: white;
  	  font-size: 17px;
  	  border: 1px solid grey;
  	  border-left: none;
  	  cursor: pointer;
  	}

  	form.Searchbtn button:hover {
  	  background: #0b7dda;
  	}

  	form.Searchbtn::after {
  	  content: "";
  	  clear: both;
  	  display: table;
  	}
    .centerBlack2{
      font-family: 'Orelega One', cursive;
    	color: #523A28;
    	font-size: 2.5em;
    	margin-bottom: auto;
    	text-align: center;
    }
    .card{
      display: block;
      float: left;
      width: 100%;
      margin-bottom: 5em;
    }
    .cat{
  		padding-top: 0.8em;
  		padding-bottom: 0.8em;
  		padding-left: 1em;
  		padding-right: 1em;
  		margin-left: auto;
  		margin-right: auto;
  		color: #000;
  		border-radius: 8px;
      border: 1px solid black;
  	}
  	.cat:hover{
  		background-color: #007bff;
  		color: #fff;
  		cursor: pointer;
  	}
    .catH{
      padding-top: 0.8em;
  		padding-bottom: 0.8em;
  		padding-left: 1em;
  		padding-right: 1em;
  		margin-left: auto;
  		margin-right: auto;
  		color: #fff;
  		text-decoration: none;
  		border-radius: 8px;
      background-color: #007bff;
      cursor: pointer;
    }
    .Categories{
    	margin-top: 2em;
    	margin-left: auto;
    	margin-right: auto;
    }
  	</style>
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
  	<div id="Maincontainer"><br>
  		<b style="font-size: 4em; ">BuzzFeed Quizzes</b>
  		<p>We've got all the quizzes you love to binge! Come on in and hunker down for the long haul.</p>

  		<!---Categories--->
  		<div class="Categories">
  			<h4>Categories</h4><br>
        <a href="main.php" class='catH'>Latest</a>
        <a href="#" class='cat'>Educational</a>
  			<a href="#" class='cat'>Entertainment</a>
  			<a href="#" class='cat'>Mix</a>
  		</div><br><br>

  		<!---Search Button--->
  		<form class="Searchbtn" action="Search.php" method="POST">
  			<button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
  			<input type="text" placeholder="Search Title" name="search">
  		</form>

    <!--Go back to main button--->
    <a href="main.php">Go back</a>

    <!---here will appear the searches-->
    <div class="card">
    <?php
      if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($con, $_POST['search']);

        //title, categories, description, quiz_code
        $sql = "SELECT * FROM quiz_list WHERE title = '$search' OR quiz_code = '$search'";

        $result = mysqli_query($con, $sql);
        $queryResult = mysqli_num_rows($result);

        echo "<h1>There are ".$queryResult." Results: </h1><br><br>";

        if ($queryResult > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
      				$QuizCode = $row["quiz_code"];
      				$pic = $row["picture"];
      				$title = $row['title'];
      	       $Desc = $row["description"];
      	       $Cat = $row["categories"];
      	       $Pub = $row["publish"];
      	       $newDate = date("m-d-Y", strtotime($Pub));

      		     echo "
      				 <div class='DisplayQuestions'>
      					 <img src='res/quizPicture/$pic' width='100%' height='150px' style='float: left; margin-right: 1em;' alt='image not found' >
      						 <div class='box'>
      				        <b style='font-size:2em;'>$title</b><br>
      							  <a href='takeQuizMultipleChoice.php?quiz_code=$QuizCode' style='position: absolute; width: 50%; bottom: 10px;'>Play Quiz</a>
      						 </div>
              </div>";
            }
          }else {
            echo "There are no Results Matching in your Search!";
          }
        }
       ?></div><br>

       <!--displaying all Quiz--->
       <div class="centerBlack2">News Feed</div>
         <?php
           $query = "SELECT * FROM quiz_list";
           $execQuery = mysqli_query($con, $query);
           while ($fetchQuiz = mysqli_fetch_assoc($execQuery)) {
             $QuizCode = $fetchQuiz["quiz_code"];
             $pic = $fetchQuiz["picture"];
             $title = $fetchQuiz['title'];
             $Desc = $fetchQuiz["description"];
             $Cat = $fetchQuiz["categories"];
             $Pub = $fetchQuiz["publish"];
             $newDate = date("m-d-Y", strtotime($Pub));
             echo "
             <div class='DisplayQuestions'>
                   <img src='res/quizPicture/$pic' width='100%' height='150px' style='float: left; margin-right: 1em;' alt='image not found' >
                   <div class='box'>
                     <b style='font-size:2em;'>$title</b><br>
                     <a href='takeQuizMultipleChoice.php?quiz_code=$QuizCode'>Play Quiz</a>
                   </div>
             </div>
             ";
         }
         ?>
 </div>
</body>
  <?php include_once("footerr.php"); ?>
</html>
