<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LPA - Main Page</title>
  <?php 
    require "header.php"; 
    require_once "includes/class_autoloader.php";

    // database initialization
    $dbinit = new InitDB();
    $dbinit->initDbExec();
  ?>
</head>
<head>
    <style>
        /* Disable horizontal scrollbar */
        body {
            overflow-x: hidden;
        }
    </style>
</head>
<body>
  <div class="slider" style="width: 60%; margin: auto;">
    <ul class="slides">
      <li>
        <img src="./static/images/carousel_1.gif"> 
        <div class="caption center-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3">Build your dream setup with us.</h5>
        </div>
      </li>
      <li>
        <img src="./static/images/category_3.jpg"> 
        <div class="caption center-align">
          <h3 class="bold page-title">At LPA</h3>
          <h5 class="bold page-title">We got you covered.</h5>
        </div>
      </li>
      <li>
        <img src="./static/images/carousel_3.jpg"> 
        <div class="caption center-align">
          <h3 class="bold green-text page-title">RTX ON</h3>
        </div>
      </li>
      <li>
        <img src="./static/images/carousel_4.gif"> 
        <div class="caption center-align">
        </div>
      </li>
    </ul>
  </div>
  <div class="container" style="margin-top: 100px">
    <div class="row">
      <div class="row" style="margin-bottom: -20px">
        <h4 class="underline white-text bold center">Categories</h4>
      </div>
      <div class="row hoverable">
        <div class="col hoverable">
          <a href="product_catalogue.php?category=0" class="hoverable">
            <div class="selectable-card hoverable" style="width: 300px; margin: 50px;">
                <img class="hoverable" src="static/images/category_1.gif"/>
              <h5 class="white-text center bold hoverable">PC PACKAGES</h5>
            </div>
          </a>
        </div>

        <div class="col">
          <a href="product_catalogue.php?category=1">
            <div class="selectable-card" style="width: 300px; margin: 50px;">
                <img src="./static/images/category_3.jpg"/>
              <h5 class="white-text center bold" style="margin-top : 120px">MONITOR & AUDIO</h5>
            </div>
          </a>
        </div>

        <div class="col">
          <a href="product_catalogue.php?category=2">
            <div class="selectable-card" style="width: 300px; margin: 50px;">
                <img src="./static/images/category_2.gif"/>
              <h5 class="white-text center bold">PERIPHERALS</h5>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section" style="margin-top: 100px;">
    <div class="wide-container">
      <h3 class="white-text center">BUILT BY ENTHUSIASTS FOR ENTHUSIASTS</h3>
      <h5 class="white-text center">
        At <b class="orange-text">LPA</b>, We are a team of serious gamers and overclockers with a passion towards customized and fast PCs.
      </h5>
    </div>
  </div>

  <div class="grid" style="margin-top: 20px; margin-bottom: 100px">
    <div class="grid">
      <h1 class="count red-text text-darken-4 bold center">4</h1>
      <h5 class="white-text center">Years Of History</h5>
    </div>
    <div class="grid">
      <h1 class="count red-text text-darken-4 bold center">100</h1>
      <h5 class="white-text center">PCs Built</h5>
    </div>
    <div class="grid">
      <h1 class="count red-text text-darken-4 bold center">14</h1>
      <h5 class="white-text center">States Covered</h5>
    </div>
  </div>

  <h3 class="white-text center">LPA - White PC Build</h3>
  <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'" style="margin-bottom: 100px">
    <img src="static/images/ice_pc.png" style="cursor:pointer; display:block; margin: 0 auto; " />
  </div>
  <div style="display:none">
    <video style="display:block; margin: 0 auto;" class="responsive-video" width="1280" height="720" autoplay="autoplay" controls muted>
      <source src="static/FROST Gaming PC.mp4" type="video/mp4">
    </video>
  </div>

  <h3 class="white-text center">OUR DIFFERENCE</h3>
  <h6 class="white-text center">Compared to other PC builder services</h6>

  <div class="grid" style="margin-bottom: 0px;">
    <div class="grid">
      <div class="rounded-card-parent">
        <div class="card rounded-card tint-glass-black" style="height: 300px; width: 250px;">
          <img src="static/images/values_images/P.svg" height="200px">
          <div class="row center">
            <h5 class="orange-text bold center" style="display: inline;">L</h5>
            <h5 class="white-text bold center" style="display: inline;">iked by customers</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="grid">
      <div class="rounded-card-parent">
        <div class="card rounded-card tint-glass-black" style="height: 300px; width: 250px;">
          <img src="static/images/values_images/T.svg" height="200px">
          <div class="row center">
            <h5 class="orange-text bold center" style="display: inline;">P</h5>
            <h5 class="white-text bold center" style="display: inline;">artnership</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="grid">
      <div class="rounded-card-parent">
        <div class="card rounded-card tint-glass-black" style="height: 300px; width: 250px;">
          <img src="static/images/values_images/E.svg" height="200px">
          <div class="row center">
            <h5 class="orange-text bold center" style="display: inline;">A</h5>
            <h5 class="white-text bold center" style="display: inline;">mazing Support</h5>
          </div>
        </div>
      </div>
    </div>

    

    <div class="grid">
      <div class="rounded-card-parent">
        <div class="card rounded-card tint-glass-black" style="height: 300px; width: 250px;">
          <img src="static/images/values_images/S.svg" height="200px">
          <div class="row center">
            <h5 class="white-text bold center" style="display: inline;">Trusted Company</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="grid">
      <div class="rounded-card-parent">
        <div class="card rounded-card tint-glass-black" style="height: 300px; width: 250px;">
          <img src="static/images/values_images/H.png" height="200px">
          <div class="row center">
            <h5 class="white-text bold center" style="display: inline;">Global Shipping Available</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
  <div class="elfsight-app-7970941b-7a32-4407-b13d-f340d3e73552" data-elfsight-app-lazy></div>
  <?php require "footer.php"; ?>
</body>
<script>
  $(document).ready(function(){
    // carousel autoswipe
    $('.slider').slider({full_width: true});

    // counter
    $('.count').each(function () 
    {
      $(this).prop('Counter',0).animate({
        Counter: $(this).text()
      }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) { $(this).text(Math.ceil(now)); }
      });
    });
  });
</script>
<html>
</html>