  <!-- Slider main container -->
  <div class="swiper-container" style="flex: 1; width: 100%">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide" style="overflow-y: scroll;">
          <!-- Card -->
        <?php
            include 'list.php';
        ?>
        <!-- End Card -->
      </div>
      <div class="swiper-slide">
          <div class="list-item">
                <div class="card">
                    <div class="mapView">
                        <object id="svgContainer" type="image/svg+xml" data="/img/map_with_pins.svg" style="display: none;"></object>
                        <?php
                        $servername = "localhost";
                        $username = "yottabytes";
                        $password = "fFb80*r1";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password);

                        // Check connection
                        if ($conn->connect_error) {
                                die("DK hats verkackt: " . $conn->connect_error);
                        }else{
                                //echo "Connected successfully";
                        }

                        $sql = "SELECT * from dk_meet2eat.Locations";
                        $result = $conn->query($sql);
                        $i=0;
                        while ($row = $result->fetch_array(MYSQLI_BOTH)) {
                            echo("<div id='modal".$i."' class='modal'>
                                <div class='modal-content'>
                                  <h4>Modal Header</h4>
                                  <p>A bunch of text</p>
                                </div>
                                <div class='modal-footer'>
                                  <a href='#!' class='modal-action modal-close waves-effect waves-green btn-flat'>Agree</a>
                                </div>
                              </div>");
                              $i++;
                        }
                        ?>
                    </div>
                </div>
            </div>
      </div>
    </div>
    <div class="swiper-scrollbar"></div>
  </div>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
  var swiper = new Swiper('.swiper-container', {
    scrollbar: {
      el: '.swiper-scrollbar',
      hide: true,
    },
  });
  </script>
