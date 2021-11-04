<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <a href="logout.php">Logout</a>
</body>
</html> -->

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
<!-- <a href="logout.php">Logout</a> -->

        <nav>
          <ul class="flex">
            <li><a href="welcome.php">Home</a></li>
            <li><a href="#">Lose weight</a></li>
            <li><a href="#">Gain weight</a></li>
            <li id="header-logo" class="plan-fit-logo"><a href="welcome.php">Plan<br/>Fit</a></li>
            <li><a href="#">Build muscle</a></li>
            <li><a href="#">Equipment</a></li>
            <!-- <li><a href="#">Gyms for you</a></li> -->
            <li><a href="logout.php">Logout</a></li>
            <!-- <li>
              <button id="search"><span class="fa fa-search"></span></button>
            </li> -->
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

  <section id="features">
    <div class="flex container">
      <div class="box">
        <img src="images/fitness-class.jpg" alt="Exercise Class" />
        <div class="feature-info-container">
          <div class="icon">
            <i class="fas fa-award fa-3x"></i>
          </div>
          <h4>Workout plans</h4>
          <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium, vitae ornare leo.</p>
        </div>
      </div>

      <div class="box">
        <img src="images/equipment-gym.jpg" alt="Gym equipment" />
        <div class="feature-info-container">
          <div class="icon">
            <i class="fas fa-dumbbell fa-3x" ></i>
          </div>
          <h4>Essential equipment recommendations</h4>
          <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium, vitae ornare leo.</p>
        </div>
      </div>

      <div class="box">
        <img src="images/dietplan.jpg" alt="Woman doing leg press" />
        <div class="feature-info-container">
          <div class="icon">
            <i class="fas fa-apple-alt fa-3x"></i>
          </div>
          <h4>Diet plans</h4>
          <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium, vitae ornare leo.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="services">
    <h3>Services</h3>
    <div class="flex container">
      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/services-icon-1.png" alt="Basketball Icon" />
        <h4>Pilates</h4>
        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.</p>
      </div>

      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/services-icon-2.png" alt="Bench Press Icon" />
        <h4>Free Lifting</h4>
        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.</p>
      </div>

      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/services-icon-3.png" alt="Stopwatch Icon" />
        <h4>Yoga</h4>
        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.</p>
      </div>

      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/services-icon-4.png" alt="Mp3 Player Icon" />
        <h4>Spinning</h4>
        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.</p>
      </div>
    </div>

    <button>See All Services</button>
  </section>

  <section id="trainers">
    <h5>Get tips from</h5>
    <h3>performance athletes</h3>
    <div class="container">
      <div id="trainers-slider">
        <div class="trainer-slider-item">
          <img src="https://onclickwebdesign.com/wp-content/uploads/trainer-1.jpg" alt="Rachel Smith Personal Trainer" />
          <h4>Rachel Smith</h4>
          <p>Aerobics Instructor</p>
        </div>

        <div class="trainer-slider-item">
          <img src="https://onclickwebdesign.com/wp-content/uploads/trainer-2.jpg" alt="Nick Andros Personal Trainer" />
          <h4>Nick Andros</h4>
          <p>Pilates Instructor</p>
        </div>

        <div class="trainer-slider-item">
          <img src="https://onclickwebdesign.com/wp-content/uploads/trainer-3.jpg" alt="Larry Underwood Personal Trainer" />
          <h4>Larry Underwood</h4>
          <p>Strength Training Coach</p>
        </div>

        <div class="trainer-slider-item">
          <img src="https://onclickwebdesign.com/wp-content/uploads/trainer-1.jpg" alt="Rachel Smith Personal Trainer" />
          <h4>Rachel Smith</h4>
          <p>Aerobics Instructor</p>
        </div>

        <div class="trainer-slider-item">
          <img src="https://onclickwebdesign.com/wp-content/uploads/trainer-2.jpg" alt="Nick Andros Personal Trainer" />
          <h4>Nick Andros</h4>
          <p>Pilates Instructor</p>
        </div>

        <div class="trainer-slider-item">
          <img src="https://onclickwebdesign.com/wp-content/uploads/trainer-3.jpg" alt="Larry Underwood Personal Trainer" />
          <h4>Larry Underwood</h4>
          <p>Strength Training Coach</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- <section id="schedule-services">
    <div class="flex container">
      <div class="upcoming-classes-box">
        <strong>NEXT</strong>
        <h4>Upcoming Classes</h4>
        <table>
          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Gym Fitness</td>
            <td>11:00 - 12:00</td>
          </tr>

          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Pilates</td>
            <td>12:00 - 1:00</td>
          </tr>

          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Spinning</td>
            <td>1:00 - 2:00</td>
          </tr>

          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Yoga</td>
            <td>2:00 - 3:00</td>
          </tr>

          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Zumba</td>
            <td>3:00 - 4:00</td>
          </tr>

          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Cardio Kickbox</td>
            <td>4:00 - 5:00</td>
          </tr>
        </table>
      </div>

      <div class="membership-cards-box">
        <div class="inner-container">
          <strong>NEXT</strong>
          <h4>Membership Deals</h4>
          <h2>25% <span>Discount</span></h2>
        </div>
      </div>

      <div class="personal-trainer-box">
        <strong>BECOME A</strong>
        <h4>Personal Trainer</h4>
        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.</p>
        <button>Sign Up Now</button>
      </div>
    </div>
  </section> -->

  <footer>
    <div class="footer-container">
      <div id="footer-logo" class="plan-fit-logo">
        <a href="welcome.php">Plan<br/>Fit</a>
      </div>

      <nav>
        <ul>
          <li><a href="welcome.php">Home</a></li>
          <li><a href="#">Lose weight</a></li>
          <li><a href="#">Gain weight</a></li>
          <li><a href="#">Build muscle</a></li>
          <li><a href="#">Equipment</a></li>
          <li><a href="#">Gyms for you</a></li>
        </ul>
      </nav>

      <!-- <div class="mailing-list">
        <input type="text" placeholder="YOUR EMAIL" />
        <button>SIGN UP</button>
      </div> -->

      <ul class="social-icons">
        <li><a href="https://www.instagram.com/" target="blank"><span class="fab fa-instagram fa-2x"></span></a></li>
        <li><a href="https://twitter.com/" target="blank"><span class="fab fa-twitter fa-2x"></span></a></li>
        <li><a href="https://www.facebook.com/" target="blank"><span class="fab fa-facebook fa-2x"></span></a></li>
        <li><a href="https://www.youtube.com " target="blank"><span class="fab fa-youtube fa-2x"></span></a></li>
      </ul>

  

    </div>
  </footer>

  <!-- <div id="search-container">
    <span id="search-container-hide" class="fa fa-times"></span>
    <h3>Search</h3>
    <div class="search-container-input">
      <input type="text" name="search" placeholder="Search this site" />
      <button>Search</button>
    </div>
  </div> -->

  <div id="video-frame">
    <span id="video-frame-hide" class="fa fa-times"></span>
    <div class="video-frame-container">
      <div class="video-frame-scaler">
        <iframe style="border: 0px" src="https://www.youtube.com/embed/V2EfL1j4KYE" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <script>
    // document ready function
    $(function () {
      // store jquery references to elements in const variables
      const headerNav = $('header nav');
      const hamburgerMenu = $('#hamburger-menu');
      const search = $('#search');
      const searchContainerHide = $('#search-container-hide');
      // const searchContainer = $('#search-container');
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
        autoplaySpeed: 4000,
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

      // search.on('click', () => {
      //   searchContainer.css({
      //     'opacity': '1',
      //     'visibility': 'visible',
      //     'z-index': '100'
      //   });
      // });

      // searchContainerHide.on('click', () => {
      //   searchContainer.css({
      //     'opacity': '0',
      //     'visibility': 'hidden',
      //     'z-index': '0'
      //   });
      // });

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