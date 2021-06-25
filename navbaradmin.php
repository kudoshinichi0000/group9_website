<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Navbar</title>
    <!--<link rel="stylesheet" type="text/css" href="css/navbar.css"--->
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


  	<!---this link is to design the font style <link rel="stylesheet" type="text/css" href="css/profile.css">--->
  	<link rel="preconnect" href="https://fonts.gstatic.com">
  	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
  	<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,900');

    *{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'Poppins', san-serif;

    }

    body{
      background-color:#F5F5F5;
    }
    nav{
      background: #420264;
    }
    nav::after{
      content: '';
      clear: both;
      display: table;
    }
    nav ul{
      float: right;
      list-style: none;
      margin-right: 40px;
      position: relative;
      margin: 0 95px; /*adjust the position of the home eme*/
    }
    nav ul li a{
      color: white;
      text-align: none;
      line-height: 72px; /*gaano kakapal yung header mue*/
      font-size: 20px;
      padding: 9px 35px;
      text-decoration: none;
    }
    nav ul li a:hover{
      border-radius: 5px;
      box-shadow: 0 0 5px #33ffff,
                  0 0 5px #66ffff;
    }
    /*nav ul li .profile:hover{
      border-radius: 5px;
      box-shadow: 0 0 5px #33ffff,
                  0 0 5px #66ffff;
     padding: 3px 5px;
    }*/
    nav ul li {
      float: left;
      display: inline-block;
    }
    nav .TextDesign{
      float: left;
      color: white;
      font-size: 28px;
      margin-top: 0.6em;
      margin-bottom: 0.1em;
      margin-left: 0.6em;
      font-weight: 600;

    }
    .menu{/*iadjust san mapupunta yung dropdown*/
      margin-left: 20px;
    }
    .actionn .profile{

      overflow: hidden;
      cursor: pointer;
      padding-left: 1.2em;
      padding-top: 0.6em;
    }


    .actionn .menu{ /*size of the container of icons*/
      position: absolute;
      top: 80px;
      margin-top: -18px;
      margin-left: -230px;
      height: 10em;
      width: 9em;
      padding: 4px 5px; /*size nung container*/
      background: white;
      box-sizing:  0 1px 5px rgba(0, 0, 0, 0.1);
      border-radius: 15px;
      transition: 0.5s;
      visibility: hidden;
      opacity: 0;
      display: none;
      z-index: 1;

    }
    .actionn .menu.active{
      visibility: visible;
      opacity: 1;

    }
    .actionn .menu::before{ /*maliit na3white sa taas --diamond--*/
      content: '';
      position: absolute;
      top: -6px;
      right: 55px; /*adjustposition*/
      width: 20px;
      height: 20px;
      background: #fff;
      transform: rotate(45deg);
    }
    .actionn .menu h3{
      width: 100%;
      text-align: center;
      font-size: 18px;
      padding: 20px 0;
      font-weight: 500;
      color: #555;
      line-height: 1.2em;
    }
    .actionn .menu h3 span{
      font-size: 20px;
      color: #420264;
      font-weight: 400;

    }
    .actionn .profile:hover .menu{
      display: block;
    }

    .actionn .menu ul li a{
      float: none;
      display: block;
      text-align: left;
      text-decoration: none;

    }
    .actionn .menu .iconsss i{
    /*height: 10px; pwede rin to lakihan  yung sa white na popup
    width: 10px; all about icons*/
    font-size: 35px; /* icon size*/
    margin: 2px 8px; /*space bet icons and its text*/
    text-decoration: none;
    border: 1.4px solid transparent;
    color:#420264;;
    padding: 0;


    }
    .actionn .menu .iconsss i:hover{
    font-size: 35px;
    margin: 2px 8px;
    text-decoration: none;
    border: 1.4px solid transparent;
    color: #01949A;
    padding: 0;


    }

    .actionn .menu ul li{
      list-style: none;
      padding: 2px 0;
      direction: flex;
      padding: 0 0;
      margin: 0 0;
      float: none;

    }
    .actionn .menu ul li  a{ /* text icon */
      display: contents;
      text-decoration:none ;
      color:#555;
      font-size: 15px;
      font-weight: 600;
      transition: 0.5s;
      margin-top: 0;
      margin-bottom: 0;
      padding-left: 40px;
      margin-right: 40px;

    }
    .actionn .menu ul li:hover a{ /* text icon when hovered*/
      color: #016367;
      border-radius: none;
      box-shadow: none;
      line-height: none;
    }


    :root {
--modal-duration: 1s;
--modal-color:linear-gradient(to right, #69008e, #2e4ebc, #0077d3, #009ad8, #00b9d5);
}

body {
font-family: Arial, Helvetica, sans-serif;
background: #f4f4f4;
font-size: 17px;
line-height: 1.6;s
display: flex;
height: 100vh;
align-items: center;
justify-content: center;
}

.btnn-dangerr{
  position: relative;
  display: inline-block;
  padding:5px 30px;
  margin: 10px 30px;
  cursor:pointer;
  color:#fff;
  text-decoration: none;
  font-size: 18px;
  border-radius: 40px;
   background-color:#420264;
   border: 1px solid linear-gradient(to right bottom, #202425, #2a3233, #344042, #3e4f52, #495e62);

}
.btnn-editt {
  position: relative;
  display: inline-block;
  padding:5px 30px;
  margin: 10px 10px;
  cursor:pointer;
  color:#fff;
  text-decoration: none;
  font-size: 18px;
  border-radius: 40px;
  background-color:#420264;
  border: 1.5px solid #fff;

}
.btnn-editt a{
  text-decoration:none;
}
.btnn-dangerr:hover {
background-color: #0497ae;;

}
.btnn-editt:hover {
background-color:#9D31E3;

}


.modal {
display: none;
position: fixed;
z-index: 1;
left: 0;
top: 0;
height: 100%;
width: 100%;
overflow: auto;
background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
margin: 10% auto;
width: 35%;
padding:3px;
box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.17);
animation-name: modalopen;
animation-duration: var(--modal-duration);
}

.modal-headerrr h2,
.modal-footer h3 {
margin: 0;
}

.modal-headerrr {
background: var(--modal-color);
padding: 15px;
color: #fff;
border-top-left-radius: 5px;
border-top-right-radius: 5px;
}

.modal-body {
padding: 10px 20px;
background: #fff;
}

.modal-footer {
background: var(--modal-color);
padding: 2px;
color: #fff;
text-align: center;
border-bottom-left-radius: 5px;
border-bottom-right-radius: 5px;
}

.closeee {
color: #ccc;
float: right;
font-size: 30px;
color: #fff;
}

.closeee:hover,
.closeee:focus {
color: #000;
text-decoration: none;
cursor: pointer;
}

@keyframes modalopen {
from {
opacity: 0;
}
to {
opacity: 1;
}
}
/*css for the message alert delete button options, yes or no */
.buttonnn{
  border:none;
  color:white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin:4px 2px;
  transition-duration: 0.2s;
  cursor: pointer;

}

.button01{
  background-color: white;
  color:black;
  border: 2px solid #f44336
}
.button01:hover{
    background-color: #f44336;
    color: white;

  }
.button1{
    background-color:white;
    color:black;
    border: 2px solid #555555;
  }
.button1:hover{
      background-color: #555555;
      color: white;
  }

    </style>
  </head>
  <body>

      <nav>
  <div class="wrapperrr">
    <div class="containerr">
      <img src="res/images/Logo.png" alt="" height="70" style="float: left; padding-top: 0.5em; padding-left:6em; padding-bottom: 0.3em;">
        <div class="TextDesign">Feedopedia</div>
        <div class="actionn">

              <ul>
                <li><div class=""><a href="viewadminuser.php">View User</a></div></li>
                <li><div class=""><a href="resultsadmin.php">Results</a></div></li>
                <li><div class=""><a href="quiz_list.php">Create Quiz</a></div></li>
                <li><div class="profile" onclick="menuToggle();" style=" font-size: 35px;color: white; margin:-10px;"><i class="far fa-user-circle"></i>
                    <div class="menu">
                        <h3>Welcome to BUZZFEED!<br><span><br> Hello User!</span></h3>
                          <ul class="iconsss">
                            <li><i class="fas fa-user-alt"></i><a href="resultsadmin.php">Profile</a></li>
                            <li id="modal-btn" class="button"><i class="fas fa-user-edit"></i><a href="#">Edit</a></li>
                            <li><i class="fas fa-sign-out-alt"></i><a href="logout.php">Logout</a></li>

                          </ul>
                    </div>
                </div>
                </li>
                        </ul>
            </nav>
        </div>
    </div>
  </div>
</nav>
<?php

	//Step 1 Database Connectivity
	include_once "db.php";

	//Will check if the user try to access pages without logging in
	if(empty($_SESSION["userid"])){
		header("Location:login.php");
	}

 ?>

<?php include_once("db.php");

if ($_SESSION["username"] == "mod") {
  header("location: viewadmin.php");
  exit();
}

$id = $_SESSION['userid'];
$query = "SELECT * FROM admin WHERE userid = $id";
$result = mysqli_query($con, $query);
$admin = mysqli_fetch_assoc($result);
$fetchname = $admin['username'];
$fetchid = $admin['userid'];
?>
<?php
include_once "db.php";
include_once "navbaradmin.php";
$userId = $_SESSION['userid'];


//This is for user id
//Step 2 Prepare the query
$query = " SELECT * FROM admin WHERE userid = '$userId'";

//Step 3 Perform the query
$execQuery = mysqli_query($con, $query);

//Getting/fetching all rows from the executed query
$fetch = mysqli_fetch_assoc($execQuery);
$username = $fetch['username'];

?>
<!-- User Successfully Edited-->
<?php include_once "db.php"; include_once "navbaradmin.php" ?><br><br>
<?php if(isset($_SESSION['editsuccess'])): ?>
   <script type="text/javascript">
      alert('<?php echo $_SESSION['editsuccess']; ?>');
   </script>
   <?php unset($_SESSION['editsuccess']);
  endif;?>
<!-- User Successfully Deleted -->
<?php include_once "db.php"; include_once "navbaradmin.php" ?><br><br>
<?php if(isset( $_SESSION['delsuccess'])): ?>
   <script type="text/javascript">
      alert('<?php echo $_SESSION['delsuccess']; ?>');
   </script>
   <?php unset($_SESSION['delsuccess']);
  endif;?>

<?php echo "
<div id='my-modal' class='modal'>
  <div class='modal-content'>
      <div class='modal-headerrr'>
        <span class='closeee'>&times;</span>
        <h2>Manage Profile</h2>
      </div>
      <div class='modal-body'>
        <p>SAPAK O GAGANA KA?</p>
        <p>	<i class='fas fa-user-circle'></i>
					Username: angekl mfnds sndad nerymskds <br>
				  <i class='fas fa-id-badge'></i>
					UserId:</p>
      </div>
      <div class='modal-footer'>
        <h3>
          <button type='button' data-toggle='modal' data-target='#DeleteModal'class='btnn-dangerr'>DELETE</button>
          <a href='editadmin.php?id={$fetchid}' type='button' class=' btnn-editt'>EDIT</a></h3>
      </div>
    </div>
  </div>
  "; ?>



  <!--TRY KO LANG TO PARA SA MODAL DELETE, SA DELETE ADMIN MAY GANITO DIN NAG EEXPLORE PA ME -->
<div class="modal fade" id="DeleteModal">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title"> Delete Confirmation</h2>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form action="DelAdminHandler.php" id="form-delete-user" method="post">
              <label><p>  Are you sure you want to delete your account: <?php echo $fetchname?>?</p></label>

        </div>
        <div class="modal-footer">
          <input type="submit" name="choice" class="buttonnn button01" value="yes">
            <input type="submit" name="choice" class=" buttonnn button1" value="no">
        </div>
        </form>
    </div>
  </div>
</div>
<script>
  $('.delete-btn').click((e) => {
    e.preventDefault();
    if(confirm(' Are you sure you want to delete your account?')){
      window.location.href = $(e.target).attr('href');
    }
  });
</script>
  <script src="script/main.js"></script>

<script>
  function menuToggle(){
    const toggleMenu = document.querySelector('.menu');
    toggleMenu.classList.toggle('active')
  }
</script>
</body>
</html>
