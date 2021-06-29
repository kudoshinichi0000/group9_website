<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Website Feedback</title>
    <style media="screen">
    *{
      background-color: #1c1b18;
      color: #4ecfa5;
      font-weight: bold;
      text-align: center;
    }
    </style>
  </head>
  <body>
      <?php

       include_once("../db.php");

       $query = "SELECT * FROM website_feedback ORDER BY datesubmitted DESC";
       $execQuery = mysqli_query($con, $query);
       while($userInfo = mysqli_fetch_assoc($execQuery)){
         $name = $userInfo["name"];
         $email = $userInfo["email"];
         $feedback = $userInfo["feedback"];
         $date = $userInfo["datesubmitted"];

         echo "Name: $name<br>
         Email: $email<br>
         Feedback: $feedback<br>
         Date: $date
         <br><br><br>
         ";
       }


        ?>
  </body>
</html>
