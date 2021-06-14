<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
 <link type="text/css" rel="stylesheet" href="popup.css">
  <title>POPUP MODAL</title>
</head>
<body>
  <button class="view-modal">Click Me</button>
<div class="popup">
  <header>
    <span>Share Modal</span>
    <div class="close"><i class="uil uil-times"></i></div>
  </header>
  <div class="content">
    <p>Share this link</p>
    <ul class="icons">
      <a href="#">=<i class="bi bi-file-check-fill"></i></a>
      <a href="#"><i class="bi bi-dash-square"></i></a>
      <a href="#"><i class="bi bi-ui-checks-grid"></i></a>
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-github"></i></a>
    </ul>
    <p>Click to Copy</p>
    <div class="field">
      <i class="url-icon uil uil-link"></i>
      <input type ="text" readyonly value ="example.com/share-link">
      <button>Copy</button>
    </div>
  </div>
</div>


 <script src="popup.js"> </script>

</body>
</html>
