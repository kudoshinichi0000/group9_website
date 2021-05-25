<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Quiz list</title>
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">
    <script src="js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <style media="screen">
    table {
      background-color: #fff;
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 85%;
      margin-left: auto;
      margin-right: auto;
      font-size: 0.8em;
      margin-bottom: 5em;
    }
    tr, th {
      border: 1px solid #dddddd;
      text-align: center;
      align-items: center;
      padding: 8px;
    }
    </style>
  </head>
  <body>

    <?php include_once("navbaradmin.php"); ?>


    <br><br><br><br>
    <div class="container">
      <div class="jumbotron">
        <div class="card">
          <div class="card-header">
            <h2><b>QUIZ DETAILS<b></h2>
    <a href='quiz_title.php' class='addquiz'>Add Quiz</a><br><br>
      <table height='50px' width='85%'>
        <tr>
          <th colspan='2'><h2><label>Title: </label></h2>
          <th colspan='2'><h2><label>Items: </label></h2>
          <th colspan='2'><h2><label>Total Points: </label></h2>
          <th colspan='2'><h2><label>Categories: </label></h2>
          <th colspan='2'><h2><label>Quiz Code: </label></h2>
          <th colspan='3'><h2><label>Action: </label></h2>
        </tr>
        <br>

    <?php
    //Step 1 Database Connectivity
    include_once "db.php";
    $userid = $_SESSION['userid'];

    $query = "SELECT * FROM quiz_list";
    $execQuery = mysqli_query($con, $query);
    while ($fetchId = mysqli_fetch_assoc($execQuery)) {
    $admin_id = $fetchId["admin_id"];

    if ($userid == $admin_id) {
      $query = "SELECT * FROM quiz_list WHERE admin_id = $admin_id ";
      $execQuery = mysqli_query($con, $query);
      while ($fetchTitle = mysqli_fetch_assoc($execQuery)) {
      $title = $fetchTitle["title"];
      $code = $fetchTitle['quiz_code'];
      $items = $fetchTitle['items'];
      $OS = $fetchTitle['OverallScores'];
      $Cat= $fetchTitle['categories'];

      if(strlen($title) >= 1){
            $Ftitle = substr($title,0,20) . "...";

            echo "
              <tr>
                <br><br>
                <th colspan='2'><h2>$Ftitle</h2></th>
                <th colspan='2'><h2>$items</h2></th>
                <th colspan='2'><h2>$OS</h2></th>
                <th colspan='2'><h2>$Cat</h2></th>
                <th colspan='2'><h2>$code</h2></th>

                <th colspan='3'>
                  <a href='editTitle.php?quiz_code=$code' class='action'>edit title</a>
                  <a href='questions.php?quiz_code=$code' class='action'>edit/add questions</a>
                  <a href='deleteQuiz.php?quiz_code=$code' class='action'>delete</a>
                </th>
              </tr>

              ";
            }
          }
        }
      }
     ?>

   </table>
  </body>
</html>
