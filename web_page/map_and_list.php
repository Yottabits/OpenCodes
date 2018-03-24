  <!-- Slider main container -->
  <div class="swiper-container" style="flex: 1; width: 100%">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide" style="overflow-y: scroll;">
        <div class="list-item">
          <div class="card indigo darken-3">
            <div class="card-content white-text">
              <span class="card-title"><p id="userName">lonelyMensaEater69</p> - <p id="topic">Backgamon</p>
              </span>
              <p id="message">I like backgamon. What about you?</p>
            </div>
            <div class="card-action white-text">
              <p>Seats: </p><p id="seats">3</p>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
          <div class="list-item">
                <div class="card">
                    <div class="mapView">
                        <object id="svgContainer" type="image/svg+xml" data="/img/map_with_pins.svg" style="display: none;"></object>
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
  <script src="/js/map.js"></script>
  <script>
  var swiper = new Swiper('.swiper-container', {
    scrollbar: {
      el: '.swiper-scrollbar',
      hide: true,
    },
  });
  </script>
