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
  <title>PlanFit - Build muscle</title>

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
      <div class="hero-slide-item" style="background-image:url(images/Weights.jpg);">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>PlanFit.Lose Weight</h2>
          <button>Useful Info Below</button>
        </div>
      </div>

      <div class="hero-slide-item" style="background-image:url(images/woman-lifting.jpg);">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>PlanFit.Build Muscle</h2>
          <button>Useful Info Below</button>
        </div>
      </div>

      <div class="hero-slide-item" style="background-image:url(images/angry.jpg);">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>PlanFit.Gain Weight</h2>
          <button>Useful Info Below</button>
        </div>
      </div>
    </div>
  </section>

  <section id="workouts-beginner">
  

  <h1>Beginner workouts for building muscle</h1>
  
  <h2 class="beginner-header">Bench Press</h2>
  
  
  <img class="beginner-images" src="images/bench-press.gif" alt="woman-warmup" style="float:left" height="400px" width="500px">
  
  <p class="beginner-workout">
Lie flat on a bench and set your hands just outside of shoulder width.
Set your shoulder blades by pinching them together and driving them into the bench.
Take a deep breath and allow your spotter to help you with the lift off in order to maintain tightness through your upper back.
Let the weight settle and ensure your upper back remains tight after lift off.
Inhale and allow the bar to descend slowly by unlocking the elbows.
Lower the bar in a straight line to the base of the sternum (breastbone) and touch the chest.
Push the bar back up in a straight line by pressing yourself into the bench, driving your feet into the floor for leg drive, and extending the elbows.
Repeat for the desired number of repetitions.
  
  </p>
  <br></br>
  <h2 class="beginner-header">Dumbbell Crunches</h2>
  
  <img class="beginner-images" src="images/dumbbell-crunches.gif" alt="woman-warmup" style="float:right" height="390px" width="500px">
  
  <p class="beginner-workout">
  Lie on the floor or a mat on your back, with knees bent.
   Grasp a lightweight dumbbell in two hands, palms facing out, arms extended straight into the air above your shoulders .
    Feet should be flat on the ground. Keep a space between your chin and chest (looking diagonal towards the ceiling).
    Slowly curl head, shoulders, and upper body off the ground, reaching the dumbbell towards the ceiling. Try to reach higher than your feet.
    Slowly return to start to complete one rep.
  </p>
  <br></br>
  <h2 class="beginner-header">Single Arm Bicep Curl</h2>
  
  <img class="beginner-images" src="images/single-arm.gif" alt="woman-warmup" style="float:left" height="350px" width="450px">
  
  <p class="beginner-workout">
  Stand with feet slightly apart, knees slightly bent, abs tight. Grasp a dumbbell in each hand with an underhand grip.
   Lock elbows into the side of your torso and rest weights in your hand, on the front (or just outside) of the thighs.
   Curl one dumbbell to your shoulder.
   Lower dumbbell to starting position, then curl the dumbbell in your opposite hand.
One curl on each side equals one rep. Keeping abs tight will help protect your lower back. 
</p>
  <br></br>
  
  <h2 class="beginner-header">Video help for building muscle</h2>
  
  <div class="iframe-container">
  <iframe width="700" height="400" src="https://www.youtube.com/embed/lu_BObG6dj8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <br></br>
  <h1>Building muscle for beginners book</h1>
<br></br>

<h2 class="beginner-header">Building muscle blueprint by Baz Thompson</h2>
<img class="beginner-images" src="images/building-beginner.jpg" alt="woman-warmup" style="float:left" height="450px" width="400px">
<p class="beginner-workout">
Building Muscle for Beginners is packed with all the essential content you need to build muscle, and it's all broken down into a simple and easy-to-follow manner that anyone can digest, no matter how much experience you have had in the past!
The content covered in this book will provide you with all of the tools you need to start your own muscle-building journey, and make gains in a quick yet healthy manner. You'll impress your friends and family with your transformation, without putting your body at unnecessary risk.
There are plenty of books out there that promise to help you build muscle and then suggest unrealistic training programs or questionable ways of getting results, but not here! Building Muscle for Beginners is packed with real advice that is easy to implement into your everyday routine, from weight-lifting, recovery, to eating right.
  </p>
<button class="btn1" onclick="window.open('https:www.amazon.co.uk/Building-Muscle-Beginners-Complete-Blueprint/dp/1777324386/ref=tmm_pap_swatch_0?_encoding=UTF8&qid=1650385940&sr=8-11', '_blank')">Get it here</button>
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
        <iframe style="border: 0px" src="https://www.youtube.com/embed/5aPntFAyRts" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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