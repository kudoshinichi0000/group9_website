<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Navbar</title>
    <style media="screen">
    .container {
      width: 80%;
      margin: 0 auto;
    }

    .TextDesign{
      font-family: 'Orelega One', cursive;
      color: black;
      font-size: 2.5em;
      margin-top: 7px;
      margin-bottom: auto;
      margin-left: 1em;
      float: left;
      padding: 12px 0px;
    }

    header {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      background-color: #fff;
      height: 4em;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      overflow: hidden;
      z-index: 1;
      width: 100%;
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
      color: #000;
      text-decoration: none;
      text-transform: uppercase;
      font-size: 14px;
    }

    nav a:hover {
      color: #feab02;
    }

    .admin{
      background-color: #ff5e2b;
      padding: 0.5em 1em;
      border-radius: 25px;
    }

    .admin a{
      color: #000;
    }

    </style>
  </head>
  <body>
<header>
  <div id="container">
    <img src="css/images/Logo.png" alt="" height="50" style="float: left; padding-top: 0.5em;">
      <div class="TextDesign"><h3>Feedopedia</h3></div>
        <nav>
          <ul>
            <li>
              <div class="home"><a href="main.php">Home</a></div>
            </li>
            <li>
              <div class="about"><a href"About.php">About</a></div>
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
