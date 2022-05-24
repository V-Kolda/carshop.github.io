<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="shortcut icon" type="image/png" href="LOGO.png">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
       <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>Car Shop</title>
</head>
<body>
    

<div class="jumbotron jumbotron-fluid mb-5">

  <video autoplay muted loop>
    <source src="video.mp4" type="video/mp4">
  </video>

  <div class="container text-light text-center">
    <h1 class="display-2" style="font-family: 'Permanent Marker', cursive;">Car Shop</h1>
    <div class="mx-auto"></div>
    <p class="lead pt-2">Nejlepší český prodejce sportovních aut</p>
    <hr class="my-4 jumbotron_line">
  </div>

</div>
  
<div class="container">
  <div class="row mb-5">
    <div class="col-sm-4">
      <div class="card">
        <img class="card-img-top img-fluid" src="auto1.png">
          <a style="color: black;" href="auto1.png">
          <h1>Acura NSX</h1>
          </a>
          <p>Type S Coupe 2022</p>
          <p style="color: white; -webkit-text-stroke: 1.2px black;">Maximum speed: 307 km/h</p>
          <p class="price">$: 169.500</p>
        <p><button onclick='window.location.href="form.php?name=acuransx"'>ZAKOUPIT</button></p>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">
        <img class="card-img-top img-fluid" src="auto2.png">
          <a style="color: black;" href="auto2.png">
          <h1>BMW M8</h1>
          </a>
          <p>Gran Coupe 2021</p>
          <p style="color: white; -webkit-text-stroke: 1.2px black;">Maximum speed: 305 km/h</p>
          <p class="price">$: 130.105</p>
        <p><button onclick='window.location.href="form.php?name=bmwm8"'>ZAKOUPIT</button></p>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">
        <img class="card-img-top img-fluid" src="auto3.png">
          <a style="color: black;" href="auto3.png">
          <h1>Lamborghini</h1>
          </a>
          <p>Aventador Ultimae Roadster 2022</p>
          <p style="color: white; -webkit-text-stroke: 1.2px black;">Maximum speed: 355 km/h</p>
          <p class="price">$: 546.840</p>
        <p><button onclick='window.location.href="form.php?name=lamborghini"'>ZAKOUPIT</button></p>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col-sm-4">
      <div class="card">
        <img class="card-img-top img-fluid" src="auto4.png">
          <a style="color: black;" href="auto4.png">
          <h1>Mclaren</h1>
          </a>
          <p>600LT Spider 2020</p>
          <p style="color: white; -webkit-text-stroke: 1.2px black;">Maximum speed: 328 km/h</p>
          <p class="price">$: 256.500</p>
        <p><button onclick='window.location.href="form.php?name=mclaren"'>ZAKOUPIT</button></p>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">
        <img class="card-img-top img-fluid" src="auto5.png">
          <a style="color: black;" href="auto5.png">
          <h1>Nissan GT-R</h1>
          </a>
          <p>Track Edition 2021</p>
          <p style="color: white; -webkit-text-stroke: 1.2px black;">Maximum speed: 330 km/h</p>
          <p class="price">$: 145.540</p>
        <p><button onclick='window.location.href="form.php?name=nissangtr"'>ZAKOUPIT</button></p>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">
        <img class="card-img-top img-fluid" src="auto6.png">
          <a style="color: black;" href="auto6.png">
          <h1>Škoda</h1>
          </a>
          <p>Superb L&K</p>
          <p style="color: white; -webkit-text-stroke: 1.2px black;">Maximum speed: 220 km/h</p>
          <p class="price">$: 33.630</p>
        <p><button onclick='window.location.href="form.php?name=skoda"'>ZAKOUPIT</button></p>
      </div>
    </div>
  </div>
</div>
</div>

<br><br><br><br>
<img src="shop.jpg" style="width: 60%; height: 50%; display: block; margin-left: auto; margin-right: auto; border: 5px solid black;">
<div class="container">
<a style="color: black;" href="https://map.search.ch/Britalian-Sports-Cars,Kehrsatz,Bernstr.4.en.html?pos=602467,195526&zoom=15">Click for the map</a>
</div>

<div style="display: block; margin-left: auto; margin-right: auto;" class="col-md-4">
  <div class="single-contact">
      <h5>Address</h5>
      <p>Bernstrasse 4, 3122 Kehrsatz BE, D</p>
  </div>
  <div class="single-contact">
      <h5>Phone</h5>
      <p>(+420) 654 123 987</p>
  </div>
  <div class="single-contact">
     <h5>Email</h5>
     <p>carshop@info.com</p>
  </div>
</div>

<br><br>
<button onclick="scrollToTop()">
  Click to scroll to top
</button>

<script src="https://code.jquery.com/jquery-3.3.1.min.js">
</script>
<script>
  function scrollToTop() {
  $(window).scrollTop(0);
  }
</script>
<br>

</body>
</html>