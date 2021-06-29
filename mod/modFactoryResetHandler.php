<html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>MOD</title>
     <style>
     *{
       background-color: #1c1b18;
       color: #4ecfa5;
       font-weight: bold;
     }
     </style>
   </head>
   <body>
       <center>
         <?php

         //Include Database
         include_once("../db.php");

         //Vardump
         $confirmation = $_POST['confirmation'];
         if($_SERVER['REQUEST_METHOD'] == "POST"){

           if ($confirmation == "CONFIRMDELETEDATA") {
             //Deleting all data in database
             mysqli_query($con, "TRUNCATE TABLE admin");
             mysqli_query($con, "TRUNCATE TABLE announcements");
             mysqli_query($con, "TRUNCATE TABLE logs");
             mysqli_query($con, "TRUNCATE TABLE option");
             mysqli_query($con, "TRUNCATE TABLE questions");
             mysqli_query($con, "TRUNCATE TABLE quiz_feedback");
             mysqli_query($con, "TRUNCATE TABLE quiz_list");
             mysqli_query($con, "TRUNCATE TABLE website_feedback");
               echo "<br><br><br>
                 Successfully Deleted all data in database<br><br>
                 <a href='modsetting.php' style='color: #fff; text-decoration: underline;'>Go Back</a>
               ";
               }
           }else{
               header("Location: modsetting.php");
           }
          ?>
       </center>

   </body>
 </html>
