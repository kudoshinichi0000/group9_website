<?php
// Cant figure out how to put the name while inputting a log
  // if($_SERVER['REQUEST_METHOD'] == "POST"){
  // include_once ("../db.php");
  //
  // $userid = "";
  // $content = $_POST['content'];
  //
  // $query = "SELECT * FROM admin WHERE userid = 8";
  // $execquery = mysqli_query($con, $query);
  //
  // $fetchusermod = mysqli_fetch_assoc($execquery)
  //
  // $query = "INSERT INTO announcements(adminid, content) VALUES ('$userid', '$content')";
  // $execquery = mysqli_query($con, $query);

 ?>
<!DOCTYPE html>
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
    hr{
      color: #4ecfa5;
    }
      .container{
        display: inline-block;
        overflow: auto;
        width: 250px;
        height: 300px;
      }
      *{
        font-weight: bold;
      }

    </style>
  </head>
  <body>
    <center><h1>Announcement</h1>
    <a href="modsetting.php"><h3>BACK</h3> </a> <hr>
    <!-- <form method="post">
        <textarea cols="50" rows="5" name="content" placeholder="Announce"></textarea>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <br>
    <a href="modsetting.php"><h3>BACK</h3></a>
    <hr> -->
    <h4>LOGS</h4>
    <!-- SHOW ALL USERS LOGS, CAN DELETE -->
    <?php
    include_once "../db.php";
        $selquery = "SELECT * FROM announcements";
        $execselquery = mysqli_query($con, $selquery);

        while ($fetch = mysqli_fetch_assoc($execselquery)) {
          $announcementid = $fetch['id'];
          $adminid = $fetch['adminid'];

          $query = "SELECT * FROM admin WHERE userid = '$adminid'";
          $execquery = mysqli_query($con, $query);
          while($fetchid = mysqli_fetch_assoc($execquery)){
            $username = $fetchid['username'];
          }
          $content = $fetch['content'];
          $date = $fetch['anndate'];
          echo "<div class='container'><hr>";
          echo "<h4>Announcement No ".$announcementid."<br><hr></h4>";
          echo "adminid ".$adminid."<br>";
          echo "name ".$username."<br>";
          echo "content ".$content."<br>";
          echo "date ".$date."<br>";
          ?>
            <br>
            <a href="modlogdel.php?id=<?php echo $announcementid ?>">Delete</a><br><br>
            <?php echo "</div>"; ?>
            <?php
        }
     ?>
     </center>
  </body>
</html>
