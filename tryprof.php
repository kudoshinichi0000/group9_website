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
    .action .profile{

      overflow: hidden;
      cursor: pointer;
      padding-left: 1.2em;
      padding-top: 0.6em;
    }


    .action .menu{ /*size of the container of icons*/
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
    .action .menu.active{
      visibility: visible;
      opacity: 1;

    }
    .action .menu::before{ /*maliit na3white sa taas --diamond--*/
      content: '';
      position: absolute;
      top: -6px;
      right: 55px; /*adjustposition*/
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
      font-size: 20px;
      color: #420264;
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
    font-size: 35px; /* icon size*/
    margin: 2px 8px; /*space bet icons and its text*/
    text-decoration: none;
    border: 1.4px solid transparent;
    color:#420264;;
    padding: 0;


    }
    .action .menu .iconsss i:hover{
    font-size: 35px;
    margin: 2px 8px;
    text-decoration: none;
    border: 1.4px solid transparent;
    color: #01949A;
    padding: 0;


    }

    .action .menu ul li{
      list-style: none;
      padding: 2px 0;
      direction: flex;
      padding: 0 0;
      margin: 0 0;
      float: none;

    }
    .action .menu ul li  a{ /* text icon */
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
    .action .menu ul li:hover a{ /* text icon when hovered*/
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

.btn-danger{
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

}
.btn-edit {
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
.btn-danger:hover {
background-color: #0497ae;;

}
.btn-edit:hover {
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

.modal-header h2,
.modal-footer h3 {
margin: 0;
}

.modal-header {
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

.close {
color: #ccc;
float: right;
font-size: 30px;
color: #fff;
}

.close:hover,
.close:focus {
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


    </style>
  </head>
  <body>

      <nav>
  <div class="wrapperr">
    <div class="container">
      <img src="res/images/Logo.png" alt="" height="70" style="float: left; padding-top: 0.5em; padding-left:6em; padding-bottom: 0.3em;">
        <div class="TextDesign">Feedopedia</div>
        <div class="action">

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
<div id="my-modal" class="modal">
  <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h2>Manage Profile</h2>
      </div>
      <div class="modal-body">
        <p>SAPAK O GAGANA KA?</p>
        <p>	<i class='fas fa-user-circle'></i>
					Username: angekl mfnds sndad nerymskds <br>
				  <i class='fas fa-id-badge'></i>
					UserId:</p>
      </div>
      <div class="modal-footer">
        <h3>
          <button type='button' data-toggle='modal' data-target='#DeleteModal'class='btn-danger'>DELETE</button>
          <a href='editadmin.php?id={$fetchid}' type='button' class=' btn-edit'>EDIT</a></h3>
      </div>
    </div>
  </div>
  <script src="script/main.js"></script>

<script>
  function menuToggle(){
    const toggleMenu = document.querySelector('.menu');
    toggleMenu.classList.toggle('active')
  }
</script>
</body>
</html>
