<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Question</title>
    <!--  css for the message alert delete button options, yes or no -->
    <style>
    .buttonnn{
      border:none;
      color:white;
      padding: 10px 30px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 18px;
      margin:4px 2px;
      transition-duration: 0.2s;
      cursor: pointer;

    }

    .button01{
      background-color: white;
      color:black;
      border: 2px solid #f44336
    }
    .button01:hover{
        background-color: #f44336;
        color: white;

      }
    .button1{
        background-color:white;
        color:black;
        border: 2px solid #555555;
      }
    .button1:hover{
          background-color: #555555;
          color: white;
      }
    </style>
  </head>
  <body>
    <?php

    include_once("db.php");
    $quizId = $_GET['id'];

    $query = "SELECT * FROM trueorfalse WHERE id = '$quizId'";

    $execQuery = mysqli_query($con, $query);

    $fetchCodes = mysqli_fetch_assoc($execQuery);
    $question = $fetchCodes["question"];
    $code = $fetchCodes["quiz_code"];
    $questionP = $fetchCodes["points"];

    echo "

    <div class='modal fade' id='DeleteModal'>
      <div class='modal-dialog'>
          <div class='modal-content'>
            <div class='modal-header'>
              <h2 class='modal-title'> Delete Confirmation</h2>
              <button type='button' class='close' data-dismiss='modal'><span>&times;</span></button>
            </div>
            <div class='modal-body'>
                <form action='deletetrueorfalseHandler.php' id='form-delete-user' method='POST'>
                  <label><p>  Are you sure you want to delete your account: <?php echo $question?>?</p></label>

            </div>
            <div class='modal-footer'>
              <input type='submit' name='Confirm' class='buttonnn button01' value='yes'>
                <input type='submit' name='Confirm' class='buttonnn button1' value='no'>
            </div>
            <input type='hidden' name='quizId' value='$quizId'>
            <input type='hidden' name='quizCode' value='$code'>
            <input type='hidden' name='quizP' value='$questionP'>
            </form>
        </div>
      </div>
    </div>
    <script>
      $('.delete-btn').click((e) => {
        e.preventDefault();
        if(confirm(' Are you sure you want to delete this item')){
          window.location.href = $(e.target).attr('href');
        }
      });
    </script>
    <form action='deletetrueorfalseHandler.php' method='POST'>
      <table border='1' height='350px' width='25%' class='container1'>
        <tr>
          <th colspan='2'><h2>Are You Sure you want to delete this item?</h2>
          <h2>$question</h2></th>
        </tr>
        <tr>
          <th colspan='2'><input type='submit' name='Confirm' value='yes'>
          <input type='submit' name='Confirm' value='no'></th>
        </tr>
        <tr>
          <th colspan='2'><a href='questions.php?quiz_code=$code'>Cancel</a></th>
        </tr>
      </table>
      <input type='hidden' name='quizId' value='$quizId'>
      <input type='hidden' name='quizCode' value='$code'>
      <input type='hidden' name='quizP' value='$questionP'>
    </form>
    ";

     ?>
  </body>
</html>
