<?php
  include_once("navbar.php");
?><br><br>>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Announce</title>
  </head>

  <body>
    <center><h1><==========================Announcement==========================></h1>
    <form class="" action="logsHandler.php" method="post">
        <textarea cols="50" rows="5" name="content" placeholder="Announce"></textarea>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <br>
    <a href="resultsadmin.php">Return</a>
    <hr>
    <h4>LOGS</h4>
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
            <a href="deleteAnnouncement.php?id=<?php echo $announcementid ?>">Delete</a><br><br>
            <?php echo "</div>"; ?>
            <?php
        }
     ?>
     </center>
  </body>
</html>
