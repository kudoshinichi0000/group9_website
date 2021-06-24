<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Navbar</title>
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    <style>
    body {
    	background-color: #EDF1F2; /*#e7dfdd*/
    }

    .containerrr {
    	width: 80%;
    	margin: 0 auto;
    }

    .container1 {
    	width: 80%;
    	margin: auto;
    }

    .TextDesign{
    	font-family: 'Orelega One', cursive;
    	color: white;
    	font-size: 2.22em;
      margin-top: -4px;
      margin-bottom: auto;
      margin-left: 1em;
    	float: left;
      padding: 12px 0px;
    }

    header {
    	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      background-color: #420264;
      height: 4.5em;
      position: fixed;
      top: 0;
    	left: 0;
    	right: 0;
      overflow: hidden;
    	z-index: 1;
      width: 100%;
    	color: white;
    }

    header::after {
      content: '';
      display: table;
      clear: both;
    }

    nav {
      float: right;
    }

    nav ul {
    	margin top: 0;
      padding: 0;
      list-style: none;
    }

    nav li {
      display: inline-block;
      margin-left: 70px;
      padding-top: 19px;
      position: relative;
    }

    nav a {
    	display: inline-block;
      color: white;
      text-decoration: none;
      text-transform: uppercase;
      font-size: 18px;
    	border-radius: 15px;

    }

    nav a:hover {
      color: white ;
    }

    .admin{
      background-color: #228280;
      padding: 0.5em 1em;
      border-radius: 25px;
    }

    .admin a{
    	color: white;
    }

    #login{
    	opacity: 2;
      background-color: #228280;
      padding: 0.5em 1em;
      border-radius: 25px;
    	color: white;
    }

    #login :hover{
    	background-color: #84BE6A
    	opacity: 1;
      cursor: pointer;
    }


    .logout{
      background-color:#228280;
      padding: 0.5em 1em;
      border-radius: 25px;
    	opacity: 2;
    }

    .logout a{
    	color: #000;
    	color:white;
    }
    .logout :hover {
    	color: #523A28;
    }

    </style>
  </head>
  <body>
<header>
  <div class="containerrr">
    <img src="res/images/Logo.png" alt="" height="50" style="float: left; padding-top: 0.5em;">
      <div class="TextDesign">Feedopedia</div>
        <nav>
          <ul>
            <li>
              <div class="home"><a href="main.php">Home</a></div>
            </li>
            <li>
              <div class="results"><a href="results.php">History</a></div>
            </li>
            <li>
              <div class="admin"><a href="login.php">Admin</a></div>
            </li>
          </ul>
    </nav>
  </div>
</header>
</body>
</html>
