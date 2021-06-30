<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
    <!-- Video Source -->
    <!-- https://www.pexels.com/video/aerial-view-of-beautiful-resort-2169880/ -->
      <section class="showcase">
        <header>
              <h2 class="logo"><img src="res/images/Logo.png" alt="" height="50" style="padding-top: 0.5em; margin-bottom: -0.4em; margin-right: 1em;">Feedopedia </h2>
              <div class="toggle"></div>
            </header>
            <video muted loop autoplay>
              <source src="res/Video/backgroundVideo.mp4" type="video/mp4">
              <source src="res/Video/backgroundVideo.mp4" type="video/ogg">
            </video>

            <div class="overlay"></div>
            <div class="text">
              <h2>Discover The </h2>
              <h3>World Of Feedopedia</h3>
              <p>Feedopedia is Recreation of knowledgeable and fun buzzfeed quizzes Activities for all ages, It improves your creativity and test your understanding while sharing your knowledge and having fun.</p>
              <a href="main.php">Explore</a>
            </div>
            <ul class="social">
              <li><a href="https://www.facebook.com/JezreelAgapito27/"><img src="https://i.ibb.co/x7P24fL/facebook.png" alt=""></a></li>
              <li><a href="https://twitter.com/btsissogaywtf/"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png" alt=""></a></li>
              <li><a href="https://www.facebook.com/JezreelAgapito27/"><img src="https://i.ibb.co/ySwtH4B/instagram.png" alt=""></a></li>
            </ul>
          </section>
          <div class="menu">
            <ul>
              <li><a href="main.php">Home</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="WebsiteFeedback.php">Feedback</a></li>
            </ul>
          </div>
          <script type="text/javascript">
             const menuToggle = document.querySelector('.toggle');
              const showcase = document.querySelector('.showcase');

              menuToggle.addEventListener('click', () => {
                menuToggle.classList.toggle('active');
                showcase.classList.toggle('active');
               });

          </script>
</body>
</html>
