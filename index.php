<!DOCTYPE html>
<html>
<head>
  <title>Xaviers College</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/blueimp-gallery.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9CIiUxwau0dS8VzAc1X_bTv7kLRDP0mk&callback=myMap"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<?php require_once 'header.php'; ?>

<div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img class="carousel-image" src="images/xaviers1.jpg" alt="Xaviers" >
        <div class="carousel-caption">
          <button class="btn admission_button">ADMISSIONS OPEN</button>
          <p class="admission_quote">Start where you are. Use what you have. Do what you can. – Arthur Ashe</p>
        </div>
      </div>
      <div class="item">
        <img class="carousel-image" src="images/xaviers2.jpg" alt="Xaviers" >
        <div class="carousel-caption">
          <button class="btn admission_button">ADMISSIONS OPEN</button>
          <p class="admission_quote">The secret of success is to do the common things uncommonly well. – John D. Rockefeller</p>
        </div>
      </div>
      <div class="item">
        <img class="carousel-image" src="images/xaviers3.jpg" alt="Xaviers" >
        <div class="carousel-caption">
          <button class="btn admission_button">ADMISSIONS OPEN</button>
          <p class="admission_quote">Strive for progress, not perfection.</p>
        </div>
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container-fluid svg_images">
  <div class="row">
    <div class="col-sm-3">
      <img class="img" src="images/1.svg">
    </div>
    <div class="col-sm-3">
      <img class="img" src="images/2.png">
    </div>
    <div class="col-sm-3">
      <img class="img" src="images/3.svg">
    </div>
    <div class="col-sm-3">
      <img class="img" src="images/4.svg">
    </div>
  </div>
</div>

<div class="container-fluid" id="gallery">
  <h2 class="text-center">GALLERY</h2>

  <div id="blueimp-gallery-carousel" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
  </div>
</div>


<div class="container-fluid" id="contact_us">
  <h1 class="text-center">Contact Us!</h1>
  <form>
    <div class="row">
      <div class="col-sm-4" style="padding-left:150px;">
        <img src="images/contact-us.svg" alt="not found" style="width:280px;height:200px;margin-top:50px;color:1E88E5 !important;"></img>
      </div>
      <div class="col-sm-2">
      </div>
      <div class="col-sm-6" style="padding-right:50px;">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name"></input>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="email"></input>
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea type="text" class="form-control" col="18" rows="5" id="message"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </div>
  </form>
</div>

<?php require_once 'modal.php'; ?>

<?php require_once 'footer.php'; ?>

<!--<div id="links">
  <a href="images/xaviers1.jpg" title="Banana">
    <img src="images/xaviers1.jpg" alt="Banana">
  </a>
  <a href="images/xaviers2.jpg" title="Apple">
    <img src="images/xaviers2.jpg" alt="Apple">
  </a>
  <a href="images/xaviers1.jpg" title="Orange">
    <img src="images/xaviers3.jpg" alt="Orange">
  </a>
</div> -->

<script src="js/blueimp-gallery.min.js"></script>
<script>
var line=document.getElementById("line");
$("#line").css("padding-left", 20).animate({width: "90%"}, 2300);

blueimp.Gallery(
    document.getElementById('links').getElementsByTagName('a'),
    {
        container: '#blueimp-gallery-carousel',
        carousel: true
    }
);
</script>
</body>
</html>
