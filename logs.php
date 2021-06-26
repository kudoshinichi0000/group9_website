<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Announce</title>

  </head>
  <body>

    <form class="" action="logsHandler.php" method="post">
        <textarea name="content" placeholder="Announce"></textarea>
        <input type="submit" name="submit" value="submit">
    </form>

    <hr>
    <h4>LOGS</h4>
    <?php
    include_once "db.php";
        $id = $_SESSION['userid'];
        if ($_SESSION["username"] == "mod") {
          $selquery = "SELECT * FROM announcements";
        }
        else {
          $selquery = "SELECT * FROM announcements WHERE adminid = $id";
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

          echo "announcement ".$announcementid."<br>";
          echo "adminid ".$adminid."<br>";
          echo "name ".$username."<br>";
          echo "content ".$content."<br>";
          echo "date ".$date."<br>";
          ?>
            <a href="deleteAnnouncement.php?id=<?php echo $announcementid ?>">Delete</a><br><br>
            <?php
        }
     ?>
  </body>
</html>
