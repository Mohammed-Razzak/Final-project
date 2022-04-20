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
  

<h2 class="beginner-header">Gaining weight 7 day food plan</h2>




<p class="beginner-workout">
Gaining weight can be just as challenging as losing weight. While the main focus is to increase energy and protein intakes, it is also important to maintain a healthy balanced diet without eating too many foods that might have high amounts of calories but little in the way of good nutrition. 
This 7-day weight gain meal plan provides one example of how to achieve a higher protein and higher calorie intake from healthy energy-giving foods such as lean meat, dairy, eggs, seeds and nuts, which will assist you to enjoy your food while working your way toward achieving your weight gain goals.
<br></br>
<img class="beginner-images" src="images/day-one.jpg" alt="woman-warmup" style="float:center" height="500px" width="600px">
<br></br>
    <strong>Day one:</strong> 
<br></br>
<strong>Breakfast:</strong>
Peanut Butter on Wholegrain Toast: Toasted wholegrain bread+ 2 tbsp peanut butter. Drizzle with honey to taste. Serve with 1 hot chocolate, made with milk + 1 serve of fruit (eg. 1 medium pear or orange).
<br></br>
<strong>Lunch:</strong>
Chicken and Pasta Salad: Cooked chicken + pasta + 1 cup leafy green vegetables (eg. spinach, rocket) + tomato + avocado + crumbled feta cheese + olive oil/vinegar dressing.
<br></br>
<strong>Dinner:</strong>
Lamb Chops and Vegetables: Lamb chop, trimmed & shallow fried in olive oil. Serve with sweet potato mash made with milk and olive oil + 2 cups cooked vegetables.
<br></br>
<img class="beginner-images" src="images/day-two.jpg" alt="woman-warmup" style="float:center" height="500px" width="600px">
<br></br>
    <strong>Day two:</strong> 
<br></br>
<strong>Breakfast:</strong>
Chia Porridge with Fruit: 2 tbsp chia seeds + rolled oats + 1.5 cup full cream milk + 1 serve of fruit (eg. 1 medium banana or 6 dried prunes).
<br></br>
<strong>Lunch:</strong>
Egg, Cheese and Salad Wrap: 2 boiled & mashed eggs + 2 cheese slices + avocado + 1 cup salad vegetables (eg. lettuce, cucumber, carrot, capsicum) rolled up in tortilla bread (make 2 wraps) + 1 cup fruit juice.
<br></br>
<strong>Dinner:</strong>
Baked Salmon, Cous Cous and Vegetables: Oven baked salmon fillet, sprinkled with sesame oil and sesame seeds + wholemeal cous cous + 2 cups cooked vegetables. Serve with hommus.
<br></br>
<img class="beginner-images" src="images/day-three.jpg" alt="woman-warmup" style="float:center" height="500px" width="600px">
<br></br>
    <strong>Day three:</strong> 
<br></br>
<strong>Breakfast:</strong>
Sweet Potato Spanish Omelette (1 serve): Serve with 1 cafe latte or hot chocolate made with full cream milk.
<br></br>
<strong>Lunch:</strong>
Lentil, Vegetables and Barley Soup: Lentils with 1 cup chopped vegetables (eg. carrot, pumpkin, celery, onion), vegetable stock and barley. Serve with dollop of natural yoghurt. + 1 serve of fruit.
<br></br>
<strong>Dinner:</strong>
Spaghetti Bolognese: Lean mince with tomato, tomato puree, herbs & garlic served on spaghetti and sprinkled with cheese + 1 cup salad (eg. baby spinach, carrots, cucumber) with olive oil based dressing.
<br></br>
<img class="beginner-images" src="images/day-four.png" alt="woman-warmup" style="float:center" height="500px" width="600px">
<br></br>
    <strong>Day four:</strong> 
<br></br>
<strong>Breakfast:</strong>
Wholegrain Cereal with Milk and Fruit: Wholegrain flaky cereal + full cream milk + 2 tbsp linseeds + 1 serve of fruit (eg. 6 dried apricot halves or 4 small plums).
<br></br>
<strong>Lunch:</strong>
Chicken and Noodle Stir-fry: Sliced lean chicken + Hokkein noodles + 1 cup vegetables (eg. beans, capsicum, spinach, carrot) cooked in sesame oil + sweet soy sauce dressing. Sprinkle with sesame seeds.
<br></br>
<strong>Dinner:</strong>
Nasi Goreng Tray Bake (1 serve): Serve with 2 cup mixed salad vegetables.
<br></br>
<img class="beginner-images" src="images/day-five.jpg" alt="woman-warmup" style="float:center" height="500px" width="600px">
<br></br>
    <strong>Day five:</strong> 
<br></br>
<strong>Breakfast:</strong>
Poached Eggs with Sauteed Field Mushroom and Avocado (1 serve): Serve with 1 cafe latte or hot chocolate made with full cream milk.
<br></br>
<strong>Lunch:</strong>
Fish and Chips: Dip fish fillets in flour, egg then breadcrumbs and shallow fry in canola oil. Serve with homemade thick potato chunky chips, lemon wedges and 2 cups mixed salad vegetables with olive oil dressing. + 1 serve of fruit.
<br></br>
<strong>Dinner:</strong>
Mango Chicken and Corn: Grilled chicken thighs served with mango salsa, corn on the cob & 1.5 cups baked vegetables (eg. carrot, onion, beans) in olive oil.
<br></br>
<img class="beginner-images" src="images/day-six.jpg" alt="woman-warmup" style="float:center" height="500px" width="600px">
<br></br>
    <strong>Day six:</strong> 
<br></br>
<strong>Breakfast:</strong>
Fruit Toast with Berry Smoothie: Slices of fruit toast spread with butter and/or jam to taste. Serve with a smoothie made with 1 cup full cream milk + 1 cup berries + 2 tbsp linseed/sunflower/almond meal.
<br></br>
<strong>Lunch:</strong>
Tuna and Quinoa Salad: Tuna in oil mixed with 3 bean mix + 2 cups salad vegetables (eg. leafy greens, tomato, cucumber, carrot, capsicum) + cooked quinoa + olive oil/vinegar dressing.
<br></br>
<strong>Dinner:</strong>
Easy Fish Pie: Serve with 2 cup mixed salad vegetables.
<br></br>
<img class="beginner-images" src="images/day-seven.jpg" alt="woman-warmup" style="float:center" height="500px" width="600px">
<br></br>
    <strong>Day seven:</strong> 
<br></br>
<strong>Breakfast:</strong>
Bechamel Spinach Baked Egg (1 serve): Serve with 1 café latte.
<br></br>
<strong>Lunch:</strong>
Beef and Noodle Soup: Thinly sliced beef + fresh flat rice noodles + 1 cup vegetables (eg. bean sprouts, carrot, broccoli) cooked in vegetable stock. Sprinkle with diced green onion. + 1 serve of fruit (eg. 1 medium apple or banana)
<br></br>
<strong>Dinner:</strong>
Beef Roast and Vegetables: Lean beef roast + baked potato + 1.5 cups baked vegetables + olive oil (for cooking).

</p>
<br></br>

<h2 class="beginner-header">Healthy foods for gaining weight</h2>

<div class="iframe-container">
<iframe width="700" height="400" src="https://www.youtube.com/embed/ebTyACV5Lg8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<br></br>
<h1>Products for gaining weight</h1>
<br></br>

<h2 class="beginner-header">Weight gain protein</h2>
<img class="beginner-images" src="images/weight-gain-protein.jpg" alt="woman-warmup" style="float:left" height="350px" width="400px">
<p class="beginner-workout">
Put on size and gain mass - With 468 lean calories per serving, Serious Gainz protein powder is ideal when bulking. Use as part of a balanced diet to help add body mass and increase weight gain. Contains 81 g of carbohydrates which will help your body absorb the protein within, turning it into muscle mass to help towards improving your overall body composition
</p>
<br></br>
<button class="btn1" onclick="window.open('https:www.amazon.co.uk/Bulk-Protein-Company-Serious-Chocolate/dp/B07CGHS11Z/ref=sr_1_8?crid=2V7XXZLDDM1H9&keywords=weight%2Bgain&qid=1650379416&sprefix=weight%2Bgain%2B%2Caps%2C75&sr=8-8&th=1', '_blank')">Get it here</button>

<br></br>

<h2 class="beginner-header">Gaining weight sucessfully</h2>
<img class="beginner-images" src="images/gain-weight-book.jpg" alt="woman-warmup" style="float:right" height="450px" width="400px">
<p class="beginner-workout">
Just like being overweight, being underweight can put a lot of stress on the people affected and endanger their health. That's what this little guide is for because if you're healthy, you'll feel much better and more balanced. There are countless reasons why people weigh too little, whether genetic or physiological. Almost always, however, there is a desire to gain weight and thus feel good again. It is not difficult to gain weight if you do it properly and have a little patience with yourself.
</p>
<br></br>
<button class="btn1" onclick="window.open('https:www.amazon.co.uk/Gain-Weight-weight-successfully-healthily/dp/B08VR8QCY8/ref=tmm_pap_swatch_0?_encoding=UTF8&qid=1650380107&sr=8-1-spons', '_blank')">Get it here</button>
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