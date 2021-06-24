<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Navbar</title>
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


  	<!---this link is to design the font style <link rel="stylesheet" type="text/css" href="css/profile.css">--->
  	<link rel="preconnect" href="https://fonts.gstatic.com">
  	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
  	<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,900');
    /*
    *{
    margin:0;
    padding:0;
    font-family: 'Poppins', san-serif;
    }
    */
    body{
      background-color:white;
    }
    .menu{/*iadjust san mapupunta yung dropdown*/
      margin-left: 20px;
    }
    .action .profile{
      float: right;
      overflow: hidden;
      cursor: pointer;
    }
    .action .profile:hover{
      color: orange:
    }

    .action .menu{ /*size of the container of icons*/
      position: absolute;
      top: 80px;
      margin-top: -30px;
      margin-left: -230px;
      padding: 10px 5px; /*size nung container*/
      background: #fff;
      box-sizing:  0 5px 5px rgba(0, 0, 0, 0.1);
      border-radius: 15px;
      transition: 0.5s;
      visibility: hidden;
      opacity: 0;
      display: none;
      z-index: 1;

    }
    .action .menu.active{
      visibility: visible;
      opacity: 1;

    }
    .action .menu::before{ /*maliit na3white sa taas --diamond--*/
      content: '';
      position: absolute;
      top: -5px;
      right: 8px;
      width: 20px;
      height: 20px;
      background: #fff;
      transform: rotate(45deg);
    }
    .action .menu h3{
      width: 100%;
      text-align: center;
      font-size: 18px;
      padding: 20px 0;
      font-weight: 500;
      color: #555;
      line-height: 1.2em;
    }
    .action .menu h3 span{
      font-size: 14px;
      color: #cecece;
      font-weight: 400;

    }
    .action .profile:hover .menu{
      display: block;
    }
    .action .menu ul li a{
      float: none;
      display: block;
      text-align: left;
    }
    .action .menu .iconsss i{
    /*height: 10px; pwede rin to lakihan  yung sa white na popup
    width: 10px; all about icons*/
    font-size: 42px; /* icon size*/
    margin: 10px 10px; /*space bet icons and its text*/
    text-decoration: none;
    border: 1.4px solid transparent;
    color:#420264;;


    }

    .action .menu ul li{
      list-style: none;
      padding: 5px 0;
      direction: flex;

    }
    .action .menu ul li a{ /* text icon */
      display: inline-block;
      text-decoration: none;
      color:#555;
      font-size: 13px;
      font-weight: 900;
      transition: 0.5s
    }
    .action .menu ul li:hover a{ /* text icon when hovered*/
      color:#0f4ce4;
    }

    </style>
  </head>
  <body>
    <header>
  <div class="wrapperr">
    <div class="container">
      <img src="res/images/Logo.png" alt="" height="50" style="float: left; padding-top: 0.5em;">
        <div class="TextDesign">Feedopedia</div>
        <div class="action">
            <nav>
              <ul>
                <li><div class=""><a href="viewadminuser.php">View User</a></div></li>
                <li><div class=""><a href="resultsadmin.php">results</a></div></li>
                <li><div class=""><a href="quiz_list.php">Create Quiz</a></div></li>
                <li><div class="profile" onclick="menuToggle();" style="float: right; font-size: 35px;color: white; margin:-10px;"><i class="far fa-user-circle"></i>
                    <div class="menu">
                        <h3>Welcome to BUZZFEED!<br><span>HELOO User!</span></h3>
                          <ul class="iconsss">
                            <li><i class="fas fa-user-alt"></i><a href="viewadminuser.php">My Profile</a></li>
                            <li><i class="fas fa-user-edit"></i><a href="#">Edit Profile</a></li>
                            <li><i class="fas fa-user-cog"></i><a href="#">Settings</a></li>
                            <li><i class="fas fa-sign-out-alt"></i><a href="logout.php"><br>Logout</a></li>

                          </ul>
                    </div>
                </div>
                </li>
                        </ul>
            </nav>
        </div>
    </div>
  </div>
</header>
<script>
  function menuToggle(){
    const toggleMenu = document.querySelector('.menu');
    toggleMenu.classList.toggle('active')
  }
</script>
</body>
</html>
