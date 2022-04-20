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
  

<h1>Advanced workouts for gaining weight</h1>

<h2 class="beginner-header">Barbell Lunges</h2>


<img class="beginner-images" src="images/Barbell-Lunge.gif" alt="woman-warmup" style="float:left" height="400px" width="500px">

<p class="beginner-workout">
Place a barbell in a rack at approximately shoulder-height.
 Dip under the bar so that it rests behind the neck across the top of the back and shoulder blades, and grip the bar with the hands a little wider than shoulder-width apart. Lift the chest and squeeze the shoulder blades together to keep the back straight through the entire movement. Stand up to bring the bar off the rack and take 2 steps backwards. Place both feet so that they are about hip-width apart, and step forward with the right leg. Lower the left knee almost to the floor without touching the ground. From the bottom of the movement push the right foot into the floor and pull back with the left leg to stand up.
 Alternate the legs for the desired number of repetitions.

</p>
<br></br>
<h2 class="beginner-header">Bent-over Row</h2>

<img class="beginner-images" src="images/bent-row.gif" alt="woman-warmup" style="float:right" height="390px" width="530px">

<p class="beginner-workout">
Grip a barbell with palms down so that the wrists, elbows, and shoulders are in a straight line. Lift the bar from the rack, bend forward at the hips, and keep the back straight with a slight bend in the knees. Lower the bar towards the floor until the elbows are completely straight, and keep the back flat as the bar is pulled towards the belly button.
 Then slowly lower the bar to the starting position and repeat. 
</p>
<br></br>
<h2 class="beginner-header">Chest Press</h2>

<img class="beginner-images" src="images/chest-press.gif" alt="woman-warmup" style="float:left" height="350px" width="450px">

<p class="beginner-workout">
Grasp two dumbbells and lie supine (on your back) on a flat bench with your feet firmly placed on the floor or upon a raised platform to allow you to maintain a flat or neutral (flat) spine.
Depress and retract your scapulae (pull shoulders down and back) to make firm contact with the bench. Your head, shoulders, butt and feet should make contact with the bench and floor/riser throughout the exercise. 
Grasp each dumbbell with a closed, pronated grip (palms facing forward, thumbs wrapped around the handle), press the dumbbells to a position level with or just below your eyes with the elbows fully extended. Maintain a neutral wrist position (avoid flexion/extension at the wrist joint).
Inhale and slowly lower the dumbbells in unison and in a controlled movement towards your mid-chest, but moving slightly wider towards the armpits.
</p>
<br></br>

<h2 class="beginner-header">Video info for gaining weight</h2>

<div class="iframe-container">
<iframe width="700" height="400" src="https://www.youtube.com/embed/oOXn1RrZ0eU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<!-- <br></br>

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
<button class="btn1" onclick="window.open('https:www.amazon.co.uk/Intelligent-Fitness-Reboot-foreword-Daniel/dp/178929388X', '_blank')">Get it here</button> -->

<br></br>
<button class="btn1" onclick="window.location.href='gainweight.php'">Go back</button>




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