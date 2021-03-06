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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
      <!-- you can adjust the size of the table here through padding and margin-->
      <div class="jumbotron" style="width:118%; padding: 3rem 1rem; margin-left:-5.5rem;">
        <div class="card">
          <div class="card-header">
            <h2><b>QUIZ DETAILS<b></h2>
          </div>
            <div class="card-body">
                <a href='quiz_title.php' class='addquiz'>Add Quiz</a><br><br>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                  <tr>
                    <th scope="col"><h4><label>Title: </label></h4></th>
                    <th scope="col"><h4><label>Items: </label></h4></th>
                    <th scope="col"><h4><label>Total Points: </label></h4></th>
                    <th scope="col"><h4><label>Categories: </label></h4></th>
                    <th scope="col"><h4><label>Quiz Code: </label></h4></th>
                    <th scope="col"><h4><label>Action: </label></h4></th>
                  </tr>
              </thead>

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
                          <th scope='row'>$Ftitle</th>
                          <th scope='row'>$items</th>
                          <th scope='row'>$OS</th>
                          <th scope='row'>$Cat</th>
                          <th scope='row'>$code</th>

                          <td scope='row'>
                            <button type='button' data-toggle='modal' data-target='#DeleteModal' class='btn btn-danger badge-pill text-right float-right' style='text-align:center; margin:5px;'>Delete</button>
                            <a href='deleteQuiz.php?quiz_code=$code' class='action'>delete</a>
                            <a href='editTitle.php?quiz_code=$code' type='button' class='btn btn-info badge-pill text-centered float-right' text-right style='width:80px; text-align:center; margin: 5px;'>Edit Title</a>
                            <a href='questions.php?quiz_code=$code' type='button'class='btn btn-info badge-pill text-centered float-right' style=' text-align:center; margin: 5px;'>+ Questions</a>


                          </td>
                        </tr>

                        ";
                      }
                    }
                  }
                }
               ?>
                </table>
            </div>
          </div>
        </div>
      </div>
      <!--MODAL MESSAGE ALERT FOR DELETING QUIZ KASO DI GUMAGANA SA BACKEND D QALAM AYUSIN. RED DELETE BUTTON YUNG GINAWA -->
      <div class="modal fade" id="DeleteModal">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title"> Delete Confirmation</h2>
              <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
              <form action="DeleteQuizHandler.php" id="form-delete-user" method="post">
                  <label><p>  Are you sure you want to delete this quiz: <?php echo $Ftitle?>?</p></label>

            </div>
            <div class="modal-footer">
              <input type="submit" name="Confirm" class="buttonnn button01" value="yes">
                <input type="submit" name="Confirm" class=" buttonnn button1" value="no">
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
      $('.delete-btn').click((e) => {
        e.preventDefault();
        if(confirm(' Are you sure you want to delete your account?')){
          window.location.href = $(e.target).attr('href');
        }
      });
    </script>
  </body>
</html>
