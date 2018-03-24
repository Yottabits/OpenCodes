<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="custom.css" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <nav>
    <div class="nav-wrapper grey lighten-3">
      <a href="#!" class="brand-logo left">Logo</a>
      <!--php: If GET detected --
      <?php
              include 'location_scan.php' ;
      ?>
      <ul class="right">
        <!--javascript: Standby button -->
        <li><a class="waves-effect waves-light btn deep-orange lighten-2">Standby</a></li>
        <!--javascript: Active button -->
        <li><a class="waves-effect waves-light btn light-green lighten-2">Active</a></li>
      </ul>
    </div>
  </nav>

  <!--php: show at first scan (if new session is started)-->
  <div>
    <div id="activation-field" class="container">
      <div class="valign-wrapper row">
        <div class="col s12 custom-center">
          <!--TODO: animated activate button-->
          <a id="activation-button" class="btn-large waves-effect waves-light deep-orange lighten-2"><i class="material-icons">power_settings_new</i></a>
        </div>
      </div>
    </div>
    <div id="footer" class="grey lighten-3">
      <a id="map-button" class="btn-large waves-effect waves-light deep-orange lighten-2" href="index.php">Show map</a>
    </div>
  </div>




  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>
