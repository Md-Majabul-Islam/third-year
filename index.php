<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Majebul Tech PC Electronics Shop</title>
  <?php 
    require "header.php"; 
    require_once "includes/class_autoloader.php";

    // database initialization
    $dbinit = new InitDB();
    $dbinit->initDbExec();
  ?>
</head>
<body>
  <div class="slider" style="width: 60%; margin: auto;">
    <ul class="slides">
      <li>
        <img src="./static/images/carousel_1.gif"> 
        <div class="caption center-align">
          <h3 class="light grey-text text-lighten-3">Build your dream setup with Us.</h3>
        </div>
      </li>
      <li>
        <img src="./static/images/category_3.jpg"> 
        <div class="caption center-align">
          <h4 class="bold page-title">Majebul Tech PC Electronics Shop</h4>
          <h5 class="bold page-title">From pc to monitor & audio, we got your covered.</h5>
        </div>
      </li>
      <li>
        <img src="static/images/Banner-Rebate-1.jfif">
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
        <h4 class="underline white-text bold center">CATEGORIS</h4>
      </div>
      <div class="row hoverable">
        <div class="col hoverable">
          <a href="product_catalogue.php?category=0" class="hoverable">
            <div class="selectable-card hoverable" style="width: 400px; height: 50px; margin: 50px;">
                <img class="hoverable" src="static/images/category_1.gif"/>
              <h5 class="white-text center bold hoverable">PC Packages</h5>
            </div>
          </a>
        </div>

        <div class="col">
          <a href="product_catalogue.php?category=1">
            <div class="selectable-card" style="width: 400px; height: 50px; margin: 50px;">
                <img src="./static/images/category_3.jpg"/>
              <h5 class="white-text center bold" style="margin-top : 155px">Monitor & Audio</h5>
            </div>
          </a>
        </div>

        
      </div>
    </div>
  </div>

  <div class="section" style="margin-top: 100px;">
    <div class="wide-container">
      <h4 class="white-text center">BUILT BY MAJEBUL ISLAM</h4>
      <h5 class="white-text center">
        At <b class="orange-text">Majebul Tech PC Electronics Shop</b>,We are a team of serious with a passion towards customized and fast PCs.
      </h5>
    </div>
  </div>

  <div class="grid" style="margin-top: 20px; margin-bottom: 100px">
    <div class="grid">
      <h1 class="count red-text text-darken-4 bold center">5</h1>
      <h5 class="white-text center">Years Of History</h5>
    </div>
    <div class="grid">
      <h1 class="count red-text text-darken-4 bold center">700</h1>
      <h5 class="white-text center">PCs Built</h5>
    </div>
    <div class="grid">
      <h1 class="count red-text text-darken-4 bold center">10</h1>
      <h5 class="white-text center">States Covered</h5>
    </div>
    <div class="grid">
      <h1 class="count red-text text-darken-4 bold center">100</h1>
      <h5 class="white-text center">% Satisfaction guaranteed</h5>
    </div>
  </div>

  

  <h4 class="white-text center">OUR DIFFERENCE</h4>
  <h6 class="white-text center">Compared to other PC builder services</h6>

  <div class="grid" style="margin-bottom: 0px;">
  
  

    <div class="grid">
      <div class="rounded-card-parent">
        <div class="card rounded-card tint-glass-black" style="height: 300px; width: 250px;">
          <img src="static/images/values_images/T.svg" height="200px">
          <div class="row center">
            <h5 class="orange-text bold center" style="display: inline;">G</h5>
            <h5 class="white-text bold center" style="display: inline;">uaranteed Return/Warranty</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="grid">
      <div class="rounded-card-parent">
        <div class="card rounded-card tint-glass-black" style="height: 300px; width: 250px;">
          <img src="static/images/values_images/E.svg" height="200px">
          <div class="row center">
            <h5 class="orange-text bold center" style="display: inline;">T</h5>
            <h5 class="white-text bold center" style="display: inline;">echnical Support</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="grid">
      <div class="rounded-card-parent">
        <div class="card rounded-card tint-glass-black" style="height: 300px; width: 250px;">
          <img src="static/images/values_images/Rebate.png" height="200px">
          <div class="row center">
            <h5 class="orange-text bold center" style="display: inline;">E</h5>
            <h5 class="white-text bold center" style="display: inline;">XTRA Rebate For Upgrades</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="grid">
      <div class="rounded-card-parent">
        <div class="card rounded-card tint-glass-black" style="height: 300px; width: 250px;">
          <img src="static/images/values_images/S.svg" height="200px">
          <div class="row center">
            <h5 class="orange-text bold center" style="display: inline;">C</h5>
            <h5 class="white-text bold center" style="display: inline;">onfirm tested b4 shipping</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="grid">
      <div class="rounded-card-parent">
        <div class="card rounded-card tint-glass-black" style="height: 300px; width: 250px;">
          <img src="static/images/values_images/H.png" height="200px">
          <div class="row center">
            <h5 class="orange-text bold center" style="display: inline;">H</h5>
            <h5 class="white-text bold center" style="display: inline;">ighly Professional</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  

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
</html>