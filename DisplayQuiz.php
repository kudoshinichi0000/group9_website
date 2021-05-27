<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/script/materialize.min.css">

    <script src="https://use.fontawesome.com/52b2061ad6.js"></script>
  </head>
  <body>

    <?php
    include_once("db.php");
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

      if(strlen($title) >= 1){
            $Ftitle = substr($title,0,25) . "...";

            echo "
            <div class='row'>
                  <div class='section scrollspy'>
                      <div class='container'>
                          <div class='row'>
                              <div class='col s12 m4 l4'>
                                  <div class='card'>
                                      <div class='card-image waves-effect waves-block waves-light'>
                                          <img class='activator' src='res/quizPicture/$pic' width='250px' height='150px'>
                                      </div>
                                      <div class='card-content'>
                                          <span class='card-title activator grey-text text-darken-4'>$title<i class='mdi-navigation-more-vert right material-icons'>more_vert</i></span>
                                          <p><a href=''>Website Link</a></p>
                                      </div>
                                      <div class='card-reveal'>
                                          <span class='card-title grey-text text-darken-4'>My news feed<i class='mdi-navigation-close right material-icons'>close</i></span>
                                          <p>A web app that displays up-to-date news headlines from popular media outlets</p>
                                      </div>
                                  </div>
                              </div>

                              <div class='col s12 m4 l4'>
                                  <div class='card'>
                                      <div class='card-image waves-effect waves-block waves-light'>
                                          <img class='activator' src='images/newsfeed.png'>
                                      </div>
                                      <div class='card-content'>
                                          <span class='card-title activator grey-text text-darken-4'>Lorem<i class='mdi-navigation-more-vert right material-icons'>more_vert</i></span>
                                          <p><a href=''>Website Link</a></p>
                                      </div>
                                      <div class='card-reveal'>
                                          <span class='card-title grey-text text-darken-4'>My news feed<i class='mdi-navigation-close right material-icons'>close</i></span>
                                          <p>A web app that displays up-to-date news headlines from popular media outlets</p>
                                      </div>
                                  </div>
                              </div>

                              <div class='col s12 m4 l4'>
                                  <div class='card'>
                                      <div class='card-image waves-effect waves-block waves-light'>
                                          <img class='activator' src='images/newsfeed.png'>
                                      </div>
                                      <div class='card-content'>
                                          <span class='card-title activator grey-text text-darken-4'>Lorem<i class='mdi-navigation-more-vert right material-icons'>more_vert</i></span>
                                          <p><a href=''>Website Link</a></p>
                                      </div>
                                      <div class='card-reveal'>
                                          <span class='card-title grey-text text-darken-4'>My news feed<i class='mdi-navigation-close right material-icons'>close</i></span>
                                          <p>A web app that displays up-to-date news headlines from popular media outlets</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>



            ";
          }
        }

     ?>


  <script type="text/javascript" src="css/script/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="css/script/materialize.min.js"></script>
  </body>
</html>
