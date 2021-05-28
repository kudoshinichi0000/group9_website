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
     <?php
     include_once("navbaradmin.php");
     ?>
     <br> <br><br><br> <br><br>
     <div class="container">
       <div class="jumbotron">
         <div class="card">
           <div class="card-hearder">
             <h2><ba>Add True or False Question<b></h2>
           </div>
           <div class="card-body">
             <div class="row formContainer">
               <div class="col-lg-12">
                 <form action="TrueOrFalseHandler.php" method="POST">
                   <div class="row form-group">
                     <div class="col">
                       <label for="TorFQuestion">Question: </label>
                       <input type="text" class="form-control" placeholder="Enter your question" name="TorFQuestion" required>
                     </div>
                   </div>
                   <div class="row form-group">
                     <div class="col">
                       <label for="TorFAnswer">Answer:</label>
                       <label class="input-group-text" for="TorFAnswer">Answer:</label>
                        <select class="custom-select" name="TorFAnswer">
                        <option selected>Choose...</option>
                        <option value="True">True</option>
                        <op
                     </div>
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>

    <form action='TrueOrFalseHandler.php' method='POST'>
      <table border='1' height='350px' width='25%' class='container1'>

        <tr>
          <th colspan='3'><h2><label for="TorFQuestion">Question: </label> </h2>
          <h2><input type="text" name="TorFQuestion" required> </h2></th>
        </tr>

        <tr>
          <th colspan='3'><h2><label for="TorFAnswer">Answer: </label> </h2>
            <select class="" name="TorFAnswer">
                <option value="True">True</option>
                <option value="False">False</option>
            </select>
          </th>
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
  </body>
</html>
