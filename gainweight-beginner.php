<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PlanFit - Gain weight</title>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
  <link rel="stylesheet" type="text/css" href="style.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>
<body>
  <section id="hero">
    <header>
      <div class="container">
        <div id="header-logo-mobile" class="plan-fit-logo">
          <a href="welcome.php">Plan<br/>Fit</a>
        </div>

        <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>

        <nav>
          <ul class="flex">
            <li><a href="welcome.php">Home</a></li>
            <li><a href="loseweight.php">Lose weight</a></li>
            <li><a href="gainweight.php">Gain weight</a></li>
            <li id="header-logo" class="plan-fit-logo"><a href="welcome.php">Plan<br/>Fit</a></li>
            <li><a href="buildmuscle.php">Build muscle</a></li>
            <li><a href="equipment.php">Equipment</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>

        <button id="hamburger-menu">
          <span class="strip"></span>
          <span class="strip"></span>
          <span class="strip"></span>
        </button>
      </div>
    </header>

    <div id="hero-slider">
      <div class="hero-slide-item" style="background-image:url(images/healthy-eating.jpg);">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>PlanFit.Lose Weight</h2>
          <button>Useful Info Below</button>
        </div>
      </div>

      <div class="hero-slide-item" style="background-image:url(images/stretch.jpg);">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>PlanFit.Build Muscle</h2>
          <button>Useful Info Below</button>
        </div>
      </div>

      <div class="hero-slide-item" style="background-image:url(images/old-man.jpg);">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>PlanFit.Gain Weight</h2>
          <button>Useful Info Below</button>
        </div>
      </div>
    </div>
  </section>

  <section id="workouts-beginner">
  

<h1>Beginner workout for gaining weight</h1>

<h2 class="beginner-header">Pull ups</h2>


<img class="beginner-images" src="images/pull-ups.gif" alt="woman-warmup" style="float:left" height="400px" width="500px">

<p class="beginner-workout">
Pull-ups, particularly with weights, are an excellent method to bulk up your muscles. If you're a novice, start with basic pull-ups and progress to weighted pull-ups as your strength improves.
 You may use a pull-up bar if you're practising this weight gain workout at home. With your palms facing away from you and arms shoulder-width apart, grab the pull-up bar with both your hands.
 Pull yourself up to the point where your feet aren't touching the ground, and keep going until your chin is clear of the bar.
 Slowly lower yourself until your arms are straight once again.

</p>
<br></br>
<h2 class="beginner-header">Side Plank</h2>

<img class="beginner-images" src="images/side-plank.jpg" alt="woman-warmup" style="float:right" height="390px" width="530px">

<p class="beginner-workout">
Start by lying on your side, legs straight, feet stacked. Straighten bottom arm, keeping it in line below shoulder, and place free hand on your hip.
Flex feet and balance on sides of feet (feet are stacked). Use abs to keep hips lifted. Hold for 30 seconds. Work up to 1-3 minutes. Don't allow hips to drop to the ground. Keep breathing steady.
</p>
<br></br>
<br></br>
<h2 class="beginner-header">Dumbbell squat & press</h2>

<img class="beginner-images" src="images/dumbbellsquatandpress.gif" alt="woman-warmup" style="float:left" height="420px" width="520px">

<p class="beginner-workout">
Stand tall with back and legs straight, feet hip-distance apart, toes pointing forward.
 Hold dumbbells in front of shoulders, elbows bent, palms facing outward.
 Bend knees and hips to squat down, keeping chest lifted, back straight and knees behind your toes.
 Straighten legs to starting position. Press weights overhead in line with shoulders to straighten (but not lock) the arms, palms facing outward.
 Slowly lower weights back down in front of shoulders to complete one rep. Keep shoulders relaxed away from your ears on overhead press. Try to avoid leaning forward during squat.
  

</p>

<br></br>

<h2 class="beginner-header">Video help for gaining weight</h2>

<div class="iframe-container">
<iframe width="700" height="400" src="https://www.youtube.com/embed/1Q6ij1qSrrw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<br></br>

<h1>Mental health book recommendations</h1>
<br></br>

<h2 class="beginner-header">Mental Fitness by Ant Middleton</h2>
<img class="beginner-images" src="images/ant-middleton.jpg" alt="woman-warmup" style="float:left" height="350px" width="400px">
<p class="beginner-workout">
The brilliant new book from the multiple Sunday Times bestselling author that will explain the principles behind maintaining a healthy mind and body.
The mind and body are often talked about as separate entities, but it’s only when they work in harmony with one another that one can truly push oneself to the highest heights.
In his new book, Ant Middleton lays out and explains the principles that he lives by to best keep his mindset and body as strong as they can possibly be.
</p>
<br></br>
<button class="btn1" onclick="window.open('https:www.amazon.co.uk/Mental-Fitness-Rules-Strengthen-Your/dp/B097NB6JWD/ref=sr_1_1?keywords=ant+middleton+mental+fitness&qid=1650205193&sprefix=ant+middleton+men%2Caps%2C75&sr=8-1', '_blank')">Get it here</button>

<br></br>

<h2 class="beginner-header">Intelligent Fitness by Simon Waterson</h2>
<img class="beginner-images" src="images/simon.jpg" alt="woman-warmup" style="float:left" height="370px" width="280px">
<p class="beginner-workout">
The brilliant new book from the multiple Sunday Times bestselling author that will explain the principles behind maintaining a healthy mind and body.
The mind and body are often talked about as separate entities, but it’s only when they work in harmony with one another that one can truly push oneself to the highest heights.
In his new book, Ant Middleton lays out and explains the principles that he lives by to best keep his mindset and body as strong as they can possibly be.
</p>
<br></br>
<button class="btn1" onclick="window.open('https:www.amazon.co.uk/Intelligent-Fitness-Reboot-foreword-Daniel/dp/178929388X', '_blank')">Get it here</button>

<br></br>
<button class="btn1" onclick="window.location.href='loseweight.php'">Go back</button>




</section>


  <section id="trainers">
    <h5>Get advice and inspiration from</h5>
    <h3>Professional athletes</h3>
    <div class="container">
      <div id="trainers-slider">
        <div class="trainer-slider-item">
          <img src="images/arnold-motivation.jpg" alt="arnold inspiration" />
          <h4>Arnold Schwarzenegger</h4>
          <p>Former Mr Olympia bodybuilder</p>
        </div>

        <div class="trainer-slider-item">
          <img src="images/jeff-cavaliere.jpg" alt="jeff youtuber" />
          <h4>Jeff Cavaliere</h4>
          <p>Youtube professional trainer</p>
        </div>

        <div class="trainer-slider-item">
          <img src="images/david-goggins.jpg" alt="motivation david goggins" />
          <h4>David Goggins</h4>
          <p>Ultra marathon runner</p>
        </div>

        <div class="trainer-slider-item">
          <img src="images/arnold-motivation.jpg" alt="arnold inspiration" />
          <h4>Arnold Schwarzenegger</h4>
          <p>Former Mr Olympia bodybuilder</p>
        </div>

        <div class="trainer-slider-item">
          <img src="images/jeff-cavaliere.jpg" alt="jeff youtuber" />
          <h4>Jeff Cavaliere</h4>
          <p>Youtube professional trainer</p>
        </div>

        <div class="trainer-slider-item">
          <img src="images/david-goggins.jpg" alt="motivation david goggins" />
          <h4>David Goggins</h4>
          <p>Ultra marathon runner</p>
        </div>
      </div>
    </div>
  </section>
  

  <footer>
    <div class="footer-container">
      <div id="footer-logo" class="plan-fit-logo">
        <a href="welcome.php">Plan<br/>Fit</a>
      </div>

      <nav>
        <ul>
          <li><a href="welcome.php">Home</a></li>
          <li><a href="loseweight.php">Lose weight</a></li>
          <li><a href="gainweight.php">Gain weight</a></li>
          <li><a href="buildmuscle.php">Build muscle</a></li>
          <li><a href="equipment.php">Equipment</a></li>
        </ul>
      </nav>


      <ul class="social-icons">
        <li><a href="https://www.instagram.com/" target="blank"><span class="fab fa-instagram fa-2x"></span></a></li>
        <li><a href="https://twitter.com/" target="blank"><span class="fab fa-twitter fa-2x"></span></a></li>
        <li><a href="https://www.facebook.com/" target="blank"><span class="fab fa-facebook fa-2x"></span></a></li>
        <li><a href="https://www.youtube.com " target="blank"><span class="fab fa-youtube fa-2x"></span></a></li>
      </ul>

  

    </div>
  </footer>



  <div id="video-frame">
    <span id="video-frame-hide" class="fa fa-times"></span>
    <div class="video-frame-container">
      <div class="video-frame-scaler">
        <iframe style="border: 0px" src="https://www.youtube.com/embed/_C7bN_ikOwY" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <script>
    // document ready function
    $(function () {
      // store jquery references to elements in const variables
      const headerNav = $('header nav');
      const hamburgerMenu = $('#hamburger-menu');
      const youtubeButton = $('.youtube-button');
      const videoFrame = $('#video-frame');
      const videoFrameHide = $('#video-frame-hide');
      const embedVideo = $('#embed-video');

      // initialize hero slider
      $('#hero-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnFocus: false,
        pauseOnHover: false,
        fade: true,
        speed: 1000,
        cssEase: 'linear'
      });

      $('#trainers-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<a href="#" class="slick-arrow slick-prev">previous</a>',
        nextArrow: '<a href="#" class="slick-arrow slick-next">next</a>',
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              arrows: false
            }
          },
          {
            breakpoint: 530,
            settings: {
              slidesToShow: 1,
              arrows: false
            }
          }
        ]
      });

      // initialize event handling
      hamburgerMenu.on('click', () => {
        headerNav.toggle();
      });



      youtubeButton.on('click', () => {
        videoFrame.css({
          'opacity': '1',
          'visibility': 'visible',
          'z-index': '100'
        });
      });

      videoFrameHide.on('click', () => {
        videoFrame.css({
          'opacity': '0',
          'visibility': 'hidden',
          'z-index': '0'
        });
        
        embedVideo.prop('src', embedVideo.prop('src'));
      });
    });
  </script>
</body>
</html>