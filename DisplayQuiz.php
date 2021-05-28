<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class='row'>
          <div class='section scrollspy'>
              <div class='container'>
                  <div class='row'>
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

            if ($Cat == "Educational") {
            echo "
                <div class='col s12 m4 l4'>
                  <div class='card'>
                    <div class='card-image waves-effect waves-block waves-light'>
                      <img class='activator' src='res/quizPicture/$pic' height='200px'>
                    </div>

                    <div class='card-content'>
                      <span class='card-title activator grey-text text-darken-4'>$title<i class='mdi-navigation-more-vert right material-icons'>more_vert</i></span>
                      <p><a href='#'>Play quiz</a></p>
                    </div>

                    <div class='card-reveal'>
                      <span class='card-title grey-text text-darken-4'>$title<i class='mdi-navigation-close right material-icons'>close</i></span>
                        <p>Description: $Desc</p>
                        <p>Date: $newDate</p>
                        <p>Category: $Cat</p>
                    </div>
                  </div>
                </div>
            ";
            }

        if ($Cat == "Entertainment") {

        echo "
        <div class='col s12 m4 l4'>
            <div class='card'>
                <div class='card-image waves-effect waves-block waves-light'>
                    <img class='activator' src='res/quizPicture/$pic' height='200px'>
                </div>
                <div class='card-content'>
                    <span class='card-title activator grey-text text-darken-4'>$title<i class='mdi-navigation-more-vert right material-icons'>more_vert</i></span>
                    <p><a href='#'>Play quiz</a></p>
                </div>
                <div class='card-reveal'>
                    <span class='card-title grey-text text-darken-4'>$title<i class='mdi-navigation-close right material-icons'>close</i></span>
                    <p>Description: $Desc</p>
                    <p>Date: $newDate</p>
                    <p>Category: $Cat</p>
                </div>
            </div>
        </div>

        ";
        }

        if ($Cat == "Mix") {
        echo "
        <div class='col s12 m4 l4'>
          <div class='card'>
            <div class='card-image waves-effect waves-block waves-light'>
              <img class='activator' src='res/quizPicture/$pic' height='200px'>
            </div>

            <div class='card-content'>
              <span class='card-title activator grey-text text-darken-4'>$title<i class='mdi-navigation-more-vert right material-icons'>more_vert</i></span>
                <p><a href='#'>Play Quiz</a></p>
            </div>

            <div class='card-reveal'>
              <span class='card-title grey-text text-darken-4'>$title<i class='mdi-navigation-close right material-icons'>close</i></span>
              <p>Description: $Desc</p>
              <p>Date: $newDate</p>
              <p>Category: $Cat</p>
            </div>
          </div>
      </div>

        ";
      }
      }
    }
     ?>

   </div>
</div>
</div>
</div>
  <script type="text/javascript" src="css/script/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="css/script/materialize.min.js"></script>
  </body>
</html>
