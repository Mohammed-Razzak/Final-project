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
  

  <h1>Food plans and products for building muscle</h1>
  <br></br>
  <h2 class="beginner-header">7-Day Meal Plan for Muscle Gain</h2>

  
  <p class="beginner-workout">
  When you’re bulking, you’ll increase how much food you eat and when you’re cutting you will reduce it. You can enjoy the foods in this menu during either phase, just be sure to adjust your portions accordingly.
<br></br>
<img class="beginner-images" src="images/day-three.jpg" alt="woman-warmup" style="float:center" height="500px" width="600px">
<br></br>
    <strong>Day one:</strong> 
<br></br>
<strong>Breakfast:</strong>
2 bowls of corn flakes and 2 servings of whole wheat toast (100.5g carbs,11.2g fat, 27.3g protein and 585 calories)
<br></br>
<strong>Lunch:</strong>
2 servings of quick buffalo chicken salad alongside 1 ounce of almonds (23.1g carbs, 31.2g fat, 62.8g protein and 620 calories)
<br></br>
<strong>Dinner:</strong>
2 BBQ chicken sandwiches and 1 serving of easy hard-boiled eggs (80.9g carbs, 34.5g fat, 90.1g protein and 1011 calories)
<br></br>
<img class="beginner-images" src="images/day-five.jpg" alt="woman-warmup" style="float:center" height="500px" width="600px">
<br></br>
    <strong>Day two:</strong> 
<br></br>
<strong>Breakfast:</strong>
4 banana egg pancakes and 1 apple (80.3g carbs, 20.1g fat, 28.2g protein and 591 calories)
<br></br>
<strong>Lunch:</strong>
2 servings of turkey lettuce rollups and 2 cups of basic protein shake (34.7g carbs, 14.2g fat, 82.2g protein and 603 calories)
<br></br>
<strong>Dinner:</strong>
2 BBQ chicken sandwiches (80.5g carbs, 29.9g fat, 83.6g protein and 940 calories)
<br></br>
<img class="beginner-images" src="images/day-four.png" alt="woman-warmup" style="float:center" height="500px" width="600px">
<br></br>
    <strong>Day three:</strong> 
<br></br>
<strong>Breakfast:</strong>
2 egg and cheese breakfast sandwiches (75.1g carbs, 18.3g fat, 38.9g protein and 617 calories)
<br></br>
<strong>Lunch:</strong>
2 peach protein smoothies (93.6g carbs, 7.4g fat, 67.3g protein and 689.8 calories)
<br></br>
<strong>Dinner:</strong>
2 servings of mongolian beef (93g carbs, 39.7g fat, 54.6g protein and 940 calories)
<br></br>
<img class="beginner-images" src="images/day-six.jpg" alt="woman-warmup" style="float:center" height="500px" width="600px">
<br></br>
    <strong>Day four:</strong> 
<br></br>
<strong>Breakfast:</strong>
2 servings of blueberry protein pudding and 2 slices of buttered toast (50.1g carbs, 14.1g fat, 79.99g protein and 675 calories)
<br></br>
<strong>Lunch:</strong>
2 simple caprese sandwiches (104g carbs, 17.5g fat, 33.9g protein and 706.7 calories)
<br></br>
<strong>Dinner:</strong>
2 servings of fried eggs and ham sandwich (55.8g carbs, 36.6g fat, 62.3g protein and 940 calories)
<br></br>
<img class="beginner-images" src="images/day-seven.jpg" alt="woman-warmup" style="float:center" height="500px" width="600px">
<br></br>
    <strong>Day five:</strong> 
<br></br>
<strong>Breakfast:</strong>
2 servings of cottage cheese breakfast (31.9g carbs, 40.3g fat, 71.3g protein and 752 calories)
<br></br>
<strong>Lunch:</strong>
2 cups of basic protein shakes and 1 cup of grapes (56.7g carbs, 11.8g fat, 65.2g protein and 588 calories)
<br></br>
<strong>Dinner:</strong>
2 servings of easy grilled chicken teriyaki and 2 servings of easy steamed green beans (44.2g carbs, 17.3 fat, 118.6g protein and 807 calories)
<br></br>
<img class="beginner-images" src="images/day-one.jpg" alt="woman-warmup" style="float:center" height="500px" width="600px">
<br></br>
    <strong>Day six:</strong> 
<br></br>
<strong>Breakfast:</strong>
1 serving of butter and honey oatmeal (98.4g carbs, 27.5g fat, 29.6g protein and 709 calories)
<br></br>
<strong>Lunch:</strong>
2 peach protein smoothies (93.6g carbs, 7.4g fat, 67.3g protein and 689.8 calories)
<br></br>
<strong>Dinner:</strong>
2 servings of balsamic chicken salad (23.5g carbs, 35.9 fat, 114.5g protein and 869.1 calories)
<br></br>
<img class="beginner-images" src="images/day-two.jpg" alt="woman-warmup" style="float:center" height="500px" width="600px">
<br></br>
    <strong>Day seven:</strong> 
<br></br>
<strong>Breakfast:</strong>
2 servings of peanut butter protein oats (65.2g carbs, 27.7g fat, 71.4g protein and 779.8 calories)
<br></br>
<strong>Lunch:</strong>
2 cups of grapes and 2 servings of yogurt and banana (124.6g carbs, 3.1g fat, 50.9g protein and 686 calories)
<br></br>
<strong>Dinner:</strong>
2 BLT sandwiches (58.5g carbs, 33.5 fat, 37.8g protein and 686.6 calories)

</p>
<br></br>

<h2 class="beginner-header">Healthy foods for gaining weight</h2>

<div class="iframe-container">
<iframe width="700" height="400" src="https://www.youtube.com/embed/ebTyACV5Lg8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
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
  
  <h2 class="beginner-header">Muscle building food help</h2>
  
  <div class="iframe-container">
  <iframe width="700" height="400" src="https://www.youtube.com/embed/dinpkrcpKAk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <br></br>
  <h1>Muscle Building Cookbook</h1>
<br></br>

<h2 class="beginner-header">The Bodybuilding Cookbook</h2>
<img class="beginner-images" src="images/body-cook.jpg" alt="woman-warmup" style="float:left" height="450px" width="400px">
<p class="beginner-workout">
With The Bodybuilding Cookbook, you’ll never have to be frustrated with your diet again.
 You’ll learn how to cook healthy, tasty, quick and easy meals that will build quality lean muscle mass, burn fat fast and won’t cost you an arm and a leg!
 These recipes aren’t just a slight upgrade to familiar bodybuilding meals like you’d find in most health and fitness cookbooks e.g. coating your already bland chicken with some equally bland salsa sauce. These recipes are so delicious your taste buds will believe you’re in a 5 star restaurant.
 If you want to learn how to create healthy, delicious and nutritious meals that are specially designed to build muscle, burn fat and save time, then The Bodybuilding Cookbook is your answer!
  </p>
<button class="btn1" onclick="window.open('https:www.amazon.co.uk/Bodybuilding-Cookbook-Delicious-Recipes-Shredded/dp/150880723X/ref=sr_1_16?crid=33N91AZG5MKMY&keywords=muscle+gain+food+recipe&qid=1650468879&sprefix=muscle+gain+food+recipe%2Caps%2C61&sr=8-16', '_blank')">Get it here</button>
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