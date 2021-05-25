<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Quiz</title>
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
    <!--TRY KO LANG TO PARA SA MODAL DELETE, SA DELETE ADMIN MAY GANITO DIN NAG EEXPLORE PA ME -->
    <div class='modal fade' id='DeleteModal'>
    <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h2 class='modal-title'> Delete Confirmation</h2>
            <button type='button' class='close' data-dismiss='modal'><span>&times;</span></button>
          </div>
          <div class='modal-body'>
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
                <form action='DeleteQuizHandler.php' id='form-delete-user' method='post'>
                    <label><p>  Are you sure you want to delete this quiz: <?php echo $Ftitle?>?</p></label>

              </div>
              <div class='modal-footer'>
                <input type='submit' name='Confirm' class='buttonnn button01'value='yes'>
                  <input type='submit' name='Confirm' class='' buttonnn button1' value='no'>
              </div>
            </form>

    "
     ?>
   </div>
 </div>
</div>
     <script>
       $('.delete-btn').click((e) => {
         e.preventDefault();
         if(confirm(' Are you sure you want to delete this quiz?')){
           window.location.href = $(e.target).attr('href');
         }
       });
     </script>

  </body>
</html>
