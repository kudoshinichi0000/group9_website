<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container1">

    <form action="quiz_title.php" method="POST">
      <table border="1" height="350px" width="40%">
        <tr>
          <th colspan="2"><h2>New Question</h2>
        </tr>

        <!--inputing questions--->
        <tr>
          <th colspan="2"><label><h3>question</h3></label></th>
        </tr>

        <tr>
          <th colspan="2"><input type="text" name="question" required></th>
        </tr>

        <!---Inputing points--->
        <tr>
          <th colspan="2"><label><h3>Question Points</h3></label></th>
        </tr>

        <tr>
          <th colspan="2"><input type="text" name="points" required></th>
        </tr>

        <!---options--->
        <tr>
          <th colspan="2"><label><h3>Option</h3></label></th>
        </tr>

        <tr>
          <th colspan="2"><input type="text" name="option1" required></th>
          <tr>
            <th colspan="2"> <input type="radio" name="option1" value="">Question Anser</th>
          </tr>
        </tr>

        <tr>
          <th colspan="2"><input type="text" name="option2" required></th>
          <tr>
            <th colspan="2"> <input type="radio" name="option2" value="">Question Anser</th>
          </tr>
        </tr>

        <tr>
          <th colspan="2"><input type="text" name="option3" required></th>
          <tr>
            <th colspan="2"> <input type="radio" name="option3" value="">Question Anser</th>
          </tr>
        </tr>

        <tr>
          <th colspan="2"><input type="text" name="option4" required></th>
          <tr>
            <th colspan="2"> <input type="radio" name="option4" value="">Question Anser</th>
          </tr>

        </tr>

        <!--Submit--->
        <tr>
          <th><input type="submit" name="submit" class="btn" placeholder="Save" ></th>
          <th colspan="2"><a href="#">Cancel</a></th>
        </tr>
      </table>
    </form>
  </div>
  </body>
</html>
