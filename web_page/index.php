<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!--Own JS-->
  <script src="js/ajax.js"></script>
  <script src="js/settings.js"></script>
<!--<script src="js/map.js"></script>-->

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
      if(isset($_GET['UrlCode']){
              include 'location_scan.php' ;
      }else{
              include 'settings.php';
              include 'map_and_list.php';
      }

?>

<!--
    <div id="footer" class="grey lighten-3">
      <a id="map-button" class="btn-large waves-effect waves-light deep-orange lighten-2" href="index.php">Show map</a>
    </div>
  </div>-->





</body>
</html>
