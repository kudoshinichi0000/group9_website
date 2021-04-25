<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    #adminnav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
      position: fixed; /* Safari */
      position: sticky;
      top: 0;
}

  #adminnav li {
    float: left;
}

  #adminnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

  #adminnav li a:hover {
    background-color: #111;
}

  #adminnav .active {
  background-color: #4CAF50;
}
    </style>
  </head>
  <body>
    <div id="adminnav">
      <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>

  </body>
</html>
