<!DOCTYPE html>
<html>
<head>
<title> Feedopedia</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style media="screen">
    footer{
      background-color: #000;
    }
    p{
      color:#a6a6a6;
      line-height: 27px;

    }
    h2,h3{
      color: white;
      font-size: 16px;
    }
    .footer-top{
      background: #000000;
      padding: 10px 0;
    }
    .segment-one h3{
      font-family: courgette;
      color: #fff;
      letter-spacing: 3px;
      margin: 10px 0;
    }
    .segment-two h2{
      color: #fff;
      font-family: Poppins;
      text-transform: uppercase;
    }
    .segment-two h2::before{
      content: '|';
      color: green;
      padding-right: 10px;
    }
    .segment-two ul{
      margin: 0;
      padding: 0;
      list-style: none;

    }
    .segment-two ul li{
      border-bottom: 1px solid rgba(255, 255, 255, 0.3);
      line-height: 40px;
      font size: 25px;
      -webkit-transition: .5s all ease;
      -moz-transition: 1s all ease;
      transition: 1s all ease;
    }
    .segment-two ul li:hover{
      color: #feab02;
      padding: 3px 0;
      margin-left: 5px;
      font-weight: 600;

    }
    .segment-two ul li a{
      color: #999;
      text-decoration: none;
    }
    .segment-three h2{
      color: #fff;
      font-family: Poppins;
      text-transform: uppercase;
    }
    .segment-three h2:before{
      content: '|'
      color: #c65039;
      padding-right: 10px;
    }
    .segment-three a{
      width: 50px;
      height: 50px;
      display: inline-block;
      border-radius:50%;
      background: #494848;
    }
    .segment-three a i{
      color: #fff;
      font-size:20px;
      padding:10px 12px;
    }
    .segment-four h2{
      color: #fff;
      font-family: Poppins;
      text-transform: uppercase;
    }
    .segment-four h2:before;{
      content: '|';
      color: #c65039;
      padding-right: 10px;
    }
    .segment-four form input[type=submit]{
      background:#feab02;
      border: none;
      color:#fff;
      padding: 3px 10px;
      margin-left: -10px;
      text-transform: uppercase;
    }
    .footer-bottom{
      color: black;
      text-align: center;
      line-height: 30px;
      background: #808080;
    }
@media only screen and (min-width: 768px) and (max-width: 991px){
  .md-mb-30{
    margin-bottom: 30px;
  }
}
@media only screen and(max-width: 767px){
  .sm-mb-30{
    margin-bottom: 30px;
  }
  .footer-top{
    padding: 50px 0;
  }
}


    }

  </style>
</head>
<body>
    <footer>
        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
                  <h3> Feedopedia</h3>
                  <p> Feedopedia is an entertainment and educatioal websites.....</p>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
                  <h2> LINKS LINKS</h2>
                  <ul>
                      <li><a href="#"></a> Services</li>
                      <li><a href="#"></a> Contacts</li>
                      <li><a href="#"></a> Policy</li>
                  </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 segment-three md-mb-30 sm-mb-30">
                  <h2> Contacts</h2>
                  <p> You can visit out social media accounts for transactions</p>
                  <a href="#"><i class="fa fa-facebook"></i></a>
              </div>
              <div class=" col-md-3 col-sm-6 col-xs-12 segment-four md-mb-30 sm-mb-30">
                  <h2> Di ko pa alam ilalagay</h2>
                  <p> HAHAHAHAHAH WALAYAA NAMAN INEE</p>
                    <form action="">
                      <input type="email">
                      <input type="submit" value="CLICK ME!">
                  </form>
              </div>
            </div>
          </div>
        </div>
        <p class="footer-bottom">Copyright ©2021 GROUP9</p>
    </footer>
</body>

</html>
