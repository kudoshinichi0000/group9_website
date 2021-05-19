<?php include_once("db.php");
if(isset($_POST['btn']))
{
    $userId = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confpass=$_POST['confirmpassword'];

    $queryString = "SELECT count(*) as countusers FROM admin WHERE username = '$username'";
    $result = mysqli_query($con, $queryString);
    while($row = mysqli_fetch_assoc($result))
    {
      if($row["countusers"] != 0){
        // if user exists
        $_SESSION['userexist'] = "Username Exists!";
        header("location: register.php");
        exit;
      }
      else {// if no user exists, therefore, success
        if($password != $confpass)
        { //password doesnt match with confirmation password
          $_SESSION['passwrong'] = "Password doesn't match!";
          header("location: register.php");
          exit;
        }
        else
        {//Edit success
            $pass = password_hash($password, PASSWORD_DEFAULT);
            $update = "UPDATE admin SET username='$username', password='$pass' WHERE userid='$userId'";
            $runQueryUpdateUser = mysqli_query($con, $update);
            $_SESSION['editsuccess'] = "User Successfully Edited!";
            header("Location: viewadminuser.php");
            exit();
        }
      }
    }
}
?>
