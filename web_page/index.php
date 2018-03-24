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

<!--Own JS-->
<link rel="stylesheet" href="js/ajax.js">
<link rel="stylesheet" href="js/map.js">

</head>

<body>
  <nav>
    <div class="nav-wrapper grey lighten-3">
      <a href="#!" class="brand-logo left">Logo</a>
      <!--php: If GET detected -->
      <ul class="right">
        <!--javascript: Standby button -->
        <li><a class="waves-effect waves-light btn deep-orange lighten-2">Standby</a></li>
        <!--javascript: Active button -->
        <li><a class="waves-effect waves-light btn light-green lighten-2">Active</a></li>
      </ul>
    </div>
  </nav>


  <?php
      include 'location_scan.php' ;
?>



    <div id="settings", class="fill">

    </div>

    <div id="footer" class="grey lighten-3">
      <a id="map-button" class="btn-large waves-effect waves-light deep-orange lighten-2" href="index.php">Show map</a>
    </div>
  </div>




  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>
