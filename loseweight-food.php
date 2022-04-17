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
  <title>PlanFit - Lose Weight Food Plans</title>

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
      <div class="hero-slide-item" style="background-image:url(images/woman-back-muscle.jpg);">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>PlanFit.Lose Weight</h2>
          <button>Useful Info Below</button>
        </div>
      </div>

      <div class="hero-slide-item" style="background-image:url(images/apples.jpg);">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>PlanFit.Build Muscle</h2>
          <button>Useful Info Below</button>
        </div>
      </div>

      <div class="hero-slide-item" style="background-image:url(images/treadmill-gym.jpeg);">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>PlanFit.Gain Weight</h2>
          <button>Useful Info Below</button>
        </div>
      </div>
    </div>
  </section>

  <section id="workouts-beginner">
  

<h1>Diet Plans for Losing Weight</h1>

<br></br>

<h2 class="beginner-header">Vegan Diet Plan 7 days</h2>


<img class="beginner-images" src="images/vegan.jpg" alt="woman-warmup" style="float:left" height="400px" width="500px">

<p class="beginner-workout">
<strong>Monday
Breakfast:</strong> Oatmeal with fresh fruit
</p>
<p class="beginner-workout">
<strong>Lunch:</strong> Baked sweet potato with hummus and fresh vegetables
</p>
<p class="beginner-workout">
<strong>Dinner:</strong> Bean burger with salad
</p>
<p class="beginner-workout">
<strong>Tuesday
Breakfast:</strong> Half an avocado on wholegrain toast with tomatoes
<p class="beginner-workout">
<strong>Lunch:</strong> Garbanzo bean salad, loaded with green leaves, salad vegetables and zinged with lemon zest
</p>
<p class="beginner-workout">
<strong>Dinner:</strong> Roasted cauliflower with garlic and pine nuts, and drizzled in tahini, served with a grain
</p>
<p class="beginner-workout">
<strong> Wednesday Breakfast:</strong> Vegan apple pancakes with berries
</p>
<img class="beginner-images" src="images/vegan-plan.jpg" alt="woman-warmup" style="float:right" height="400px" width="500px">
<p class="beginner-workout">
<strong>Lunch:</strong> Mexican quinoa salad
</p>
<p class="beginner-workout">
<strong>Dinner :</strong> Shepherd’s pie, made with brown lentils and topped with sweet potato mash
</p>
<p class="beginner-workout">
<strong>Thursday
Breakfast:</strong> Oatmeal with fresh fruit
<p class="beginner-workout">
<strong>Lunch:</strong> Three bean soup with wholegrain bread
</p>
<p class="beginner-workout">
<strong>Dinner:</strong> Falafel with tahini-lime sauce and fresh mixed salad
</p>
<p class="beginner-workout">
<strong>Friday
Breakfast:</strong> Smoothie, using up any fruits and vegetables you have, and a tablespoon of nut butter
</p>
<p class="beginner-workout">
<strong>Lunch:</strong> Wholewheat tortilla packed with mashed black beans (seasoned with cumin, salt and lime) and arugula
</p>
<p class="beginner-workout">
<strong>Dinner:</strong> Lentil chilli with wholegrain rice
</p>
<p class="beginner-workout">
<strong>Saturday
Breakfast:</strong> Peanut butter and banana on toast
</p>
<p class="beginner-workout">
<strong>Lunch:</strong> Miso soup with tofu and scallions
</p>
<p class="beginner-workout">
<strong>Dinner:</strong> Buddha Bowl – your choice of cooked and raw vegetables, tofu, and grains, with a peanut sauce
</p>
<p class="beginner-workout">
<strong>Sunday
Breakfast:</strong> Tofu scramble made with bell peppers, green onions, tomatoes and herbs
</p>
<p class="beginner-workout">
<strong>Lunch:</strong> Tomato and red lentil soup
</p>
<p class="beginner-workout">
<strong>Dinner:</strong> Thai green curry with tofu and Asian vegetables
</p>

<br></br>

<h2 class="beginner-header">Weight loss nutrition help</h2>

<div class="iframe-container">
<iframe width="700" height="400" src="https://www.youtube.com/embed/LCyECbA3pUw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<br></br>

<h1>Food recipe books for losing weight</h1>
<br></br>

<h2 class="beginner-header">Deliciously Ella Quick & Easy: Plant-based Deliciousness</h2>
<img class="beginner-images" src="images/deliciously-ella.jpg" alt="woman-warmup" style="float:left" height="450px" width="400px">
<p class="beginner-workout">
Ella's latest book features the most popular, tried-and-tested recipes from her supper clubs, pop-ups, and deli to show how delicious and abundant plant-based cooking can be. These simple vegan recipes cover everything from colorful salads to veggie burgers, falafel, creamy dips and sides, hearty one-pot curries and stews, speedy breakfasts, weekend brunches, muffins, cakes, and brownies. They're the recipes that Ella's thousands of customers have been asking for since the deli first launched in 2015, and each recipe has a beautiful photograph to show you how it should look.
In addition to the more than 100 brand-new plant-based recipes, for the first time we are treated to a personal insight into Ella's journey--how she grew her blog, which she began writing to help get herself well while suffering from illness, into a wellness brand--and all that she has learned along the way, as well as what drives the Deliciously Ella philosophy and her team's passion for creating delicious, healthy food.
</p>
<button class="btn1" onclick="window.open('https:www.amazon.co.uk/Deliciously-Ella-Plant-Based-Cookbook-cookbook/dp/1473639212', '_blank')">Get it here</button>

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
        <iframe style="border: 0px" src="https://www.youtube.com/embed/wnHW6o8WMas" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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