<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Contact Us!</title>
  </head>
  <body>
    <div class="container-fluid">
    <?php 
      include("../menu.php");
  ?>
      <div class="row main-header">
        <div class="col-md-2 main-header-img">
          <img src="email.png" height="16%;">
        </div>
        <div class="col-md-10 main-header-txt">
          <h2>Contact Us</h2>
          <p>Feel free to visit or send us a message anytime.
          </p>
        </div>
      </div>

      <div class="row">
        <div id="googleMap" style="width:100%;height:400px;"></div>
          <script>
            function myMap() {
            var mapProp= {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
            }
          </script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
    </div>

    <div class="row box">
      <div class="container a">  
        <form id="contact" action="" method="post">
          <h3>Send Us a message</h3>
          <fieldset>
            <input placeholder="Your name" type="text" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Your Last Name" type="email" tabindex="2" required>
          </fieldset>
          <fieldset>
            <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
          </fieldset>
    
   
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
          </fieldset>
        </form>
      </div>
    </div>

    <div class="row">
      <!-- Site footer -->
      <?php 
      include("../footer.php");
  ?>
  </div>
  </div>
  </body>
</html>
