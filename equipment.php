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
      <div class="hero-slide-item" style="background-image:url(images/cardio.jpg);">
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

      <div class="hero-slide-item" style="background-image:url(images/dwayne-johnson.jpg);">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>PlanFit.Gain Weight</h2>
          <button>Useful Info Below</button>
        </div>
      </div>
    </div>
  </section>

  <section id="workouts-beginner">
  

  <h1>Advanced workouts for building muscle</h1>
  
  <h2 class="beginner-header">Deadlift</h2>
  
  
  <img class="beginner-images" src="images/deadlift.gif" alt="woman-warmup" style="float:left" height="400px" width="500px">
  
  <p class="beginner-workout">
  Stand with your mid-foot under the barbell.
Bend over and grab the bar with a shoulder-width grip.
Bend your knees until your shins touch the bar.
Lift your chest up and straighten your lower back.
Take a big breath, hold it, and stand up with the weight.
Hold the weight for a second at the top, with locked hips and knees.
Your lower back must stay neutral to avoid injury.
 Rounding it during heavy Deadlifts is dangerous for your spine. Then return the weight to the floor by moving your hips back while bending your legs.
 Rest a second at the bottom and repeat.
  
  </p>
  <br></br>
  <h2 class="beginner-header">Leg Curl</h2>
  
  <img class="beginner-images" src="images/leg-curl.gif" alt="woman-warmup" style="float:right" height="390px" width="500px">
  
  <p class="beginner-workout">
  Curl your lower legs up as far as possible without lifting your thighs off the pad.
   Hold for a second at the top of the movement, then lower slowly back to the start.
    Keep your movements smooth throughout – if you’re having to resort to jerky movements to shift the weight, you’re using too much.
    Set up the machine so that the pads sit comfortably against your lower back when you sit on it. Put your legs on the padded lever so it sits just below your calf muscles, and set up the lap pad so it sits on your thighs just above the knees. Lift your legs so they are straight out in front of you and grasp the side handles on the machine.
     Pull the padded lever down and back towards you as far as you can with your legs, hold for a second, then slowly bring it back to the starting position.
  </p>
  <br></br>
  <h2 class="beginner-header">Chest Dips</h2>
  
  <img class="beginner-images" src="images/dips-chest.gif" alt="woman-warmup" style="float:left" height="350px" width="450px">
  
  <p class="beginner-workout">
  The chest dip is a great exercise to use to target the muscles of the chest.
   It will also indirectly work the muscles of the triceps and shoulders as well.
   Step up on the dip station (if possible) and position your hands with a neutral grip.
Initiate the dip by unlocking the elbows and slowly lowering the body until the forearms are almost parallel with the floor.
Control the descent to parallel and then drive back to the starting position by pushing through the palms.
Repeat for the desired number of repetitions.
</p>
  <br></br>
  
  <h2 class="beginner-header">Advanced building muscle video help</h2>
  
  <div class="iframe-container">
  <iframe width="700" height="400" src="https://www.youtube.com/embed/RuXmYDGcoa8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <br></br>
  <h1>Advanced performance book</h1>
<br></br>

<h2 class="beginner-header">The Athletic Performance Blueprint</h2>
<img class="beginner-images" src="images/athletic.jpg" alt="woman-warmup" style="float:left" height="450px" width="400px">
<p class="beginner-workout">
Schneider and Roethlingshoefer,
 a surgeon and NHL coach, explore the real science behind building the modern athlete.
  Told in a language that we can all understand, they explain the keys to building athletic muscular performance, sport and position specific development, forging mental toughness, and conditioning like a pro. Whether you are training a youth competitor or hoping to get 3% more improvement from a professional, the The Athletic Performance Blueprint lays the foundation.
  </p>
<button class="btn1" onclick="window.open('https:www.amazon.co.uk/Athletic-Performance-Blueprint-Conditioning-Toughness-ebook/dp/B07ZC6RP78/ref=tmm_kin_swatch_0?_encoding=UTF8&qid=1650463376&sr=8-7', '_blank')">Get it here</button>
<br></br>
<button class="btn1" onclick="window.location.href='buildmuscle.php'">Go back</button>

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