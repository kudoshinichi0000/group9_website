<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Quiz</title>
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    <style media="screen">
    table {
      background-color: #fff;
      font-family: arial, sans-serif;
      border-collapse: collapse;
      margin-top: 10em;
      margin-left: auto;
      margin-right: auto;
      font-size: 1em;
      margin-bottom: 5em;

    }
    tr, th {
      border: 1px solid #000;
      text-align: center;
      align-items: center;
      padding: 8px;

    }
    .but{
      padding-top: 1em;
      padding-bottom: 1em;
      padding-left: 3em;
      padding-right: 3em;

    }
    </style>
  </head>
  <body>
    <?php
    include_once("db.php");
    include_once("navbaradmin.php");
    $code = $_GET['quiz_code'];

      $query = "SELECT * FROM quiz_list WHERE quiz_code = '$code'";
      $execQuery = mysqli_query($con, $query);
      $fetchCodes = mysqli_fetch_assoc($execQuery);
        $codel = $fetchCodes["quiz_code"];
        $title = $fetchCodes["title"];

        echo "

        <!--TRY KO LANG TO PARA SA MODAL DELETE, SA DELETE ADMIN MAY GANITO DIN NAG EEXPLORE PA ME -->
        <div class='modal fade' id='DeleteModal'>
        <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h2 class='modal-title'> Delete Confirmation</h2>
                <button type='button' class='close' data-dismiss='modal'><span>&times;</span></button>
              </div>
              <div class='modal-body'>
                <form action='DeleteQuizHandler.php' id='form-delete-user' method='post'>
                    <label><p>  Are you sure you want to delete this quiz: <?php echo $Ftitle?>?</p></label>

              </div>
              <div class='modal-footer'>
                <input type='submit' name='Confirm' class='buttonnn button01'value='yes'>
                  <input type='submit' name='Confirm' class='' buttonnn button1' value='no'>
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
        <form action='deleteQuizHandler.php' method='POST'>
          <table height='250px' width='25%'>
            <tr>
              <th colspan='2'><h1>Delete Quiz</h1>
              <h4>Are You Sure you want to delete this quiz?</h4>
              <input type='submit' name='Confirm' value='no' class='but'>
              <input type='submit' name='Confirm' value='yes' class='but' ></th>
            </tr>

          </table>
          <input type='hidden' name='quizCode' value='$code'>
        </form>
        ";

     ?>

  </body>
</html>
