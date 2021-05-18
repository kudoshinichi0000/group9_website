<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>quiz Title</title>
    <link rel="stylesheet" type="text/css" href="css/createQuiz.css">
    <style media="screen">
    table {
      background-color: #fff;
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 40%;
      margin-left: auto;
      margin-right: auto;
      font-size: 0.8em;
      margin-bottom: 5em;

    }
    tr, th {
      border: 1px solid #000;
      text-align: center;
      align-items: center;
      padding: 8px;
    }
    </style>
  </head>
  <body>
    <?php
    include("db.php");
    include("functions.php");
    include_once("navbaradmin.php");
    $code = rand();
    ?>
    <br><br><br><br><br><br><br><br>
    <div class="container1">
		<form action="quizTitleHandler.php" method="POST" enctype="multipart/form-data">
      <div class="row">
          <span class="title" style="margin-left:40%;font-size:30px;"><b>Enter Quiz Details<b></span>
      </div>
        <div class="container">
          <div class="row formContainer">
            <div class="col-lg-12">
              <form action="quizTitleHandler.php" method="POST" enctype="multipart/form-data">
                <div class="row form-group">
                  <div clas="col">
                  <label for="title">Title:.....</label>
                  <input type="text" class="form-control" placeholder="Enter Quiz Title" name="quiz_title" required>
                </div>
              </div>
              <div class="row from-group" >
                <div class="col">
                <label for="Desc">Description:</label>
                <textarea class="form-control" rows="2" placeholder="Enter Quiz Description...." required>
                </div>
              </div>
              <div>
                <div class="row form-group">
                  <div class="col">
                    <label for="catg">Categories</label>
                    <select class="form-control" name="catg" required>
                      <option value="Educational"> Educational<option>
                      <option value="Entertainment"> Entertainment</option>
                      <option value="Mix">Mix</option>
                    </select>
                  </div>
              </div>
              <div class="row form-group">
                <div class="col">
                  <label for="ProfilePicture"> ProfilePicture</label>
                  <input type="file" accept="image/*" class="form-control" required>
                </div>
             </div>
             <div class="row form-group">
               <div class="col">
                 <a href="#" class="btn btn-outline-danger">Cancel</a>

               </div>
             </div>
             <div class="row form-group" style="margin-top:20px;">
               <div class="col">
                 <button type="submit" name="submit" class="btn btn-primary"> Save</button>
               </div>
             </div>

            </div>
          </form>
        </div>
        </div>
      </div>
    </div>
			<table border="1" height="350px" width="35%" class="container1">
        <tr>
					<th colspan="2"><h2>New Quiz</h2>
				</tr>

        <tr>
          <th colspan="2"><label for="title"><h3>Title</h3></label>
          <input type="text" name="quiz_title" placeholder="Enter Quiz Title..." required></th>
        </tr>

				<tr>
          <th colspan="2"><label for="Desc"><h3>Description</h3></label>
          <input type="text" name="Desc" placeholder="Enter Quiz Description..." required></th>
				</tr>

        <tr>
          <th colspan="2"><label for="catg"><h3>Categories</h3></label>
              <select name="catg">
                <option value="Educational">Educational</option>
                <option value="Entertainment">Entertainment</option>
                <option value="Mix">Mix</option>
              </select>
          </th>
        </tr>

        <tr>
					<th colspan="2"><label for="ProfilePicture"><h3>Quiz Picture</h3></label>
					<input type="file" name="ProfilePicture" required></th>
				</tr>

				<tr>
          <th colspan="2"><a href="quiz_list.php">Cancel</a>
					<input type="submit" name="submit" class="btn" placeholder="Save" ></th>
				</tr>
			</table>
      <input type="hidden" name="quizCode" value="<?php echo $code; ?>">
		</form>
	</div>

  </body>
</html>
