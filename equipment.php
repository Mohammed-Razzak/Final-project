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
  <title>PlanFit - Ultimate guide to fitness</title>

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
      <div class="hero-slide-item" style="background-image:url(images/stretch.jpg);">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>PlanFit.Lose Weight</h2>
          <button>Useful Info Below</button>
        </div>
      </div>

      <div class="hero-slide-item" style="background-image:url(./images/man-dumbell.jfif);">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>PlanFit.Build Muscle</h2>
          <button>Useful Info Below</button>
        </div>
      </div>

      <div class="hero-slide-item" style="background-image:url(images/Weights.jpg);">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>PlanFit.Gain Weight</h2>
          <button>Useful Info Below</button>
        </div>
      </div>
    </div>
  </section>

  <section id="workouts-beginner">
  
  <h1>Essential Equipment and Products</h1>
  <br></br>
  
  <h2 class="beginner-header">Tower Dip Station Pull Up Bar for Home</h2>
  

  <img class="beginner-images" src="images/dip-station.jpg" alt="woman-warmup" style="float:left" height="450px" width="350px">
  <p class="beginner-workout">
  It is a multi-functional dip station that supports vertical knee raise, push-ups, dips as well as pull-ups, which help tone and target your arms, core, shoulders, chest, and back for a stronger upper body.
  The arm-support part of this pull-up station applied a tilt inward 10 degrees design, which prevents arm slipping out of the arm pads during sweating, more secure than the flat design.The hand-grip area foam wrapped offer comfortable exercise experience.
  The height of the pull-up bar can be adjusted to 165cm-210cm-215cm-225cm, which can fully meet the daily exercise of men, women, and children. The backrest can be adjusted forward or backward by the back support tube, which ensures users in different types of figures gain suitable support.
  </p>
  <button class="btn1" onclick="window.open('https:www.amazon.co.uk/Sportsroyals-Station-Strength-Training-Equipment/dp/B07SM8VJ6P/ref=sr_1_2_sspa?keywords=tower+dip+station&qid=1650553775&sprefix=tower+dip+s%2Caps%2C148&sr=8-2-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFNOTkyWUlWUkcwQTcmZW5jcnlwdGVkSWQ9QTAwMTg2NzFZWkRSQUxDSUVVU1MmZW5jcnlwdGVkQWRJZD1BMDY4NzEyMk05UTVZVEhLVzI0WSZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU=', '_blank')">Get it here</button>
  <br></br>
  <h2 class="beginner-header">Portable Push Up Board</h2>
  
  <img class="beginner-images" src="images/portable.jpg" alt="woman-warmup" style="float:right" height="390px" width="500px">
  
  <p class="beginner-workout">
  No need to ask for personal training and no need to go to the gym, 30 minutes a day with this muscle board to build the perfect muscle group.
  Push Up Board comes with different colour coded holes that provide different configurations to change the strength of the muscles during push ups.
  Muscle Board comes with Anti slip Pad and multi lock snap fit. In addition to this, comes with grip handles that is used to reduce pressure on your wrist and prevent to damage your joints.
  </p>
  <button class="btn1" onclick="window.open('https:www.amazon.co.uk/Sportsroyals-Station-Strength-Training-Equipment/dp/B07SM8VJ6P/ref=sr_1_2_sspa?keywords=tower+dip+station&qid=1650553775&sprefix=tower+dip+s%2Caps%2C148&sr=8-2-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFNOTkyWUlWUkcwQTcmZW5jcnlwdGVkSWQ9QTAwMTg2NzFZWkRSQUxDSUVVU1MmZW5jcnlwdGVkQWRJZD1BMDY4NzEyMk05UTVZVEhLVzI0WSZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU=', '_blank')">Get it here</button>
  <br></br>
  <h2 class="beginner-header">Massage Gun</h2>
  
  <img class="beginner-images" src="images/massage-gun.jpg" alt="woman-warmup" style="float:left" height="400px" width="450px">
  
  <p class="beginner-workout">
  Upgraded R3 Powerful Massage Gun is equipped with 16.8V brushless motor, which can reach 1800 to 3200rpm/min, available for different muscle groups, aiding in sore muscle relief, relax and shape different body muscle parts.
  The brushless noise reduction motor is equipped with a new generation of noise reduction technology to control the noise within 45dB, just like whispering in the ear, making the fatigue and soreness of the body all resolved in the silent vibration, you enjoy a quiet moment of relaxation!
  No need carry the charging cable anywhere when you travel or just go out! This Renpho deep tissue muscle massage gun designed with type C charging port can be charged with most popular type c cable by regular phone adapter or 5V/2A adapter such as a power bank.
</p>
<button class="btn1" onclick="window.open('https:www.amazon.co.uk/RENPHO-Portable-Handheld-Percussion-Post-Workout/dp/B085NTR26K/ref=sr_1_4_sspa?keywords=massage%2Bgun&qid=1650554244&sprefix=massa%2Caps%2C79&sr=8-4-spons&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEyUzdJRkhJTjBQMEY2JmVuY3J5cHRlZElkPUEwNDUyNTUwMUZJOTc4WTFDSTI1UCZlbmNyeXB0ZWRBZElkPUEwNTExMTY2NDAyMDNJVFRVN1hVJndpZGdldE5hbWU9c3BfYXRmJmFjdGlvbj1jbGlja1JlZGlyZWN0JmRvTm90TG9nQ2xpY2s9dHJ1ZQ&th=1', '_blank')">Get it here</button>
  
<br></br>
<button class="btn1" onclick="window.location.href='equipment.php'">Go back</button>

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
        <iframe style="border: 0px" src="https://www.youtube.com/embed/V2EfL1j4KYE?rel=0&modestbranding=1" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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