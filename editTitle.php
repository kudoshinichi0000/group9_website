<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include("db.php");
    include("functions.php");
    include_once("navbaradmin.php");

     ?>
    <br><br><br><br><br><br><br><br>
  	<?php
    //get the id from the url
  	$code = $_GET['quiz_code'];

    $query = "SELECT * FROM quiz_list WHERE quiz_code = '$code' ";
    $execQuery = mysqli_query($con, $query);
    while($fetchCodes = mysqli_fetch_assoc($execQuery)){
    $admin_id = $fetchCodes["admin_id"];
    $title = $fetchCodes["title"];
    $Desc = $fetchCodes["description"];
    $categories = $fetchCodes["categories"];
    $picture = $fetchCodes["picture"];

        echo "
        <div class='container1'>
    		<form action='editTitleHandler.php' method='POST' enctype='multipart/form-data'>
    			<table border='1' height='350px' width='35%' class='container1'>
            <tr>
    					<th colspan='3'><h2>New Quiz</h2>
    				</tr>

            <tr>
              <th colspan='2'><label for='title'><h3>title</h3></label></th>
              <th colspan='2'><input type='text' name='quiz_title' value='$title' required></th>
            </tr>

    				<tr>
              <th colspan='2'><label for='Desc'><h3>Description</h3></label></th>
              <th colspan='2'><input type='text' name='Desc' value='$Desc' required></th>
    				</tr>

            <tr>
              <th colspan='2'><label for='catg'><h3>Categories</h3></label></th>
                <th colspan='2'>
                  <select name='catg'>
                  ";
                  ?>
                  <?php
                    if ($categories == 'Educational') {
                      echo "
                      <option value='$categories'>$categories</option>
                      <option value='Entertainment'>Entertainment</option>
                      <option value='Mix'>Mix</option>
                      ";
                    }elseif ($categories == 'Entertainment') {
                      echo "
                      <option value='$categories'>$categories</option>
                      <option value='Educational'>Educational</option>
                      <option value='Mix'>Mix</option>
                      ";
                    }else {
                      echo "
                      <option value='$categories'>$categories</option>
                      <option value='Educational'>Educational</option>
                      <option value='Entertainment'>Entertainment</option>
                      ";
                    }
                  ?>
                <?php  echo "
                  </select>
              </th>
            </tr>

            <tr>
    					<th colspan='2'><label for='ProfilePicture'>Profile Picture</label></th>
    					<th colspan='2'><input type='file' name='ProfilePicture' required></th>
    				</tr>

    				<tr>
              <th colspan='2'><a href='quiz_list.php'>Cancel</a></th>
    					<th><input type='submit' name='submit' class='btn' placeholder='Save' ></th>
    				</tr>

    			</table>
          <input type='hidden' name='quizCode' value='$code'>
    		</form>
    	</div>
        ";
      }
  ?>
  </body>
</html>
