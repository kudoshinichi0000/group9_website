<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    #dropbtn {
      background-color: #4CAF50;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }

    #dropdown {
      position: relative;
      display: inline-block;
    }

    #dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    #dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    #dropdown-content a:hover {background-color: #ddd;}

    #dropdown:hover .dropdown-content {display: block;}

    #dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
  </head>
  <body>
<header>
    <div class="container">
      <img src="css/images/Logo.png" alt="" height="50" style="float: left; padding-top: 0.5em; ">
      <div class="TextDesign">Feedopedia</div>
      <nav>
        <ul>
          <li><div class="logout"><a href="logout.php"><b>Logout</b></a></div></li>
        </ul>
        <ul>
          <div id="dropdown">
        		<button id="dropbtn">Dropdown</button>
        			<div id="dropdown-content">
        				<a href="#">Link 1</a>
        				<a href="#">Link 2</a>
        				<a href="#">Link 3</a>
        			</div>
        		</div>
        </ul>


      </nav>
    </div>
</header><br><br>
</body>
</html>
