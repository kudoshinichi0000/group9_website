<?php
  include_once("navbaradmin.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Announce</title>
    <style media="screen">
    *{
      font-family: ARIAl;
    }
      .annbox{
        display: inline-block;
        overflow: auto;
        width: 250px;
        height: 300px;
      }
    </style>
  </head>
<!-- This is where all announcements are made -->
  <body>

    <center><h1>Announcement</h1><br>
    <form class="" action="logsHandler.php" method="post">
        <textarea cols="50" rows="5" name="content" placeholder="Announce" required></textarea>
        <br><br>
        <h2><input type="submit" name="submit" value="submit"></h2>
    </form>
    <h2><b>LOGS</b></h2>
    <?php
    include_once "db.php";
        $id = $_SESSION['userid'];
        if ($_SESSION["username"] == "mod") {
          $selquery = "SELECT * FROM announcements";
        }
        else {
          $selquery = "SELECT * FROM announcements WHERE adminid = $id ORDER BY anndate DESC limit 100";
        }
        $execselquery = mysqli_query($con, $selquery);
        // show all logs of the user with a limit of 100
        while ($fetch = mysqli_fetch_assoc($execselquery)) {
          $announcementid = $fetch['id'];
          $adminid = $fetch['adminid'];
          // Show name from the admin table
          $query = "SELECT * FROM admin WHERE userid = '$adminid'";
          $execquery = mysqli_query($con, $query);
          while($fetchid = mysqli_fetch_assoc($execquery)){
            $username = $fetchid['username'];
          }

          $content = $fetch['content'];
          $date = $fetch['anndate'];
          echo "<div class='annbox'><hr>";
          echo "<h4>Announcement No: ".$announcementid."<br><hr></h4>";
          echo "AdminId: ".$adminid."<br>";
          echo "Name ".$username."<br>";
          echo "Content: ".$content."<br>";
          echo "Date: ".$date."<br>";
          ?>
            <br>
            <a href="deleteAnnouncement.php?id=<?php echo $announcementid ?>">Delete</a><br><br>
            <?php echo "</div>"; ?>
            <?php
        }
     ?>
     </center>
  </body>
</html>
