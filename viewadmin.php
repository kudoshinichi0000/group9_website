<?php include_once("db.php");

$query = "SELECT * FROM admin";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ViewAdmin</title>
  </head>
  <body>
    <h1>Admins: </h1>
    <table align="center">
                    <thead>
                        <tr>
                            <th>Name</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($admin = mysqli_fetch_assoc($result))
                            {
                                echo "
                                <tr>
                                    <td>
                                        {$admin['username']}
                                    </td>

                                    <td>
                                        <a class='link' href='editadmin.php?id={$admin['id']}'>Edit</a> | <a class='link' href='deladminquestion.php?id={$admin['id']}'>Delete</a>
                                    </td>
                                </tr>
                                ";
                            }
                          ?>
                    </tbody>
                </table>
  </body>
</html>
