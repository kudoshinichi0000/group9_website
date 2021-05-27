<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include_once("db.php");
      $code = $_GET["quiz_code"];
     ?>
     <div class="container">
       <div class="jumbotron">
         <div class="card-header">
           <h2><b> Adding Identification Question<b></h2>
         </div>
         <div class="card-body">
           <form action='IdentificationHandler.php' method='POST'>
             <table border='1' height='350px' width='25%' class='container1'>

               <tr>
                 <th colspan='3'><h2><label for="IdenQuestion">Question: </label> </h2>
                 <h2><input type="text" name="IdenQuestion" required> </h2></th>
               </tr>

               <tr>
                 <th colspan='3'><h2><label for="IdenAnswer">Answer: </label> </h2>
                   <input type="text" name="IdenAnswer" required></th>
               </tr>

                 <tr>
                   <th colspan='3'><h2><label for="points">points: </label> </h2>
                   <h2><input type="number" name="points" required> </h2></th>
               </tr>
               <tr>
                 <?php echo "<th colspan='2'><a href='questions.php?quiz_code=$code'>Cancel</a></th>"; ?>
                 <th colspan='3'><input type='submit' name='submit' class='btn' placeholder='Save' ></th>
               </tr>
             </table>
             <input type='hidden' name='quizCode' value='<?php echo $code ?>'>
           </form>

         </div>
       </div>
     </div>

  </body>
</html>
