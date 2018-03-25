<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/css/swiper.min.css">
  <link href="/css/custom.css" rel="stylesheet">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <div class="row s12" style="width: 100%; height: 100%">
    <div class="col s8 fill">
      <div class="card" style="height: 100%">
        <div class="mapView card-content">
          <object id="svgContainer" type="image/svg+xml" data="/img/map_with_pins.svg" style="width: 100%; height: auto;"></object>
        </div>
      </div>
    </div>
    <div class="col s4">
      <div class="card white">
        <div class="card-content black-text">
          <span class="card-title">
            <h3>name: </h3><br /><h2 id="WhoIsHere">lonelyMensaEater69</h1><br /><hr />
              <h3>topic: </h3><br /><h2 id="Topic">Backgamon</h2><hr />
              <h3>message:</h3><br /><h2 id="Message">I like backgamon. What about you?</h2><hr />
              <h3>free seats:</h3><br /><h2 id="Seats">3</h2>
            </span>
          </div>
        </div>
        <div class="card horizontal">
          <div class="card-image">

          </div>
          <div class="card-stacked">
            <div class="card-content">
              <h3>More information at</h3>
            </div>
            <div class="card-action">
              <h2>www.unsereURL.de</h2>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/mapTv.js"></script>
    <script>
    var swiper = new Swiper('.swiper-container', {
      scrollbar: {
        el: '.swiper-scrollbar',
        hide: true,
      },
    });


    </script>
  </body>
  </html>
