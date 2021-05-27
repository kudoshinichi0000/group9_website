<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
    <?php
      include_once("db.php");
      include_once("navbaradmin.php");
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
