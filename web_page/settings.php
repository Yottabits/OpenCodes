<div id="Settings", class="fill", style="display:none">

<script>
//autocomplete
$(document).ready(function(){
  $('input.autocomplete').autocomplete({
    data: {
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

                        $sql = "SELECT * from dk_meet2eat.Topics";
                        $result = $conn->query($sql);

                        while ($row = $result->fetch_array(MYSQLI_BOTH)) {
                               //Example "Apple": null,
                                echo("\"".$row['Name']."\":null,");
                        }

            ?>
      },
  });
});
</script>


<div class="row" width="100%">
        <div class="col s12">
                <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                                <span class="card-title">Location Settings</span>
                                <input type="text" id="LocationIDHiddenInput" value="<?php echo $Location_ID ?>" style="display:none">
                                <form id="AjaxLocationSettingsForm" method="post" action="update_location.php">
                                <div class="row">
                                        <div class="col s12">
                                                <div class="row">
                                                        <div class="input-field col s12">
                                                                <i class="material-icons prefix">forum</i>
                                                                <input type="text" id="Topic" class="autocomplete" autocomplete="off">
                                                                <label for="Topic">topic of conversation</label>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="input-field col s12">
                                                                <i class="material-icons prefix">supervisor_account</i>
                                                                <textarea id="WhoIsHere" class="materialize-textarea" data-length="120" autocomplete="off"></textarea>
                                                                <label for="WhoIsHere">WhoIsHere</label>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="input-field col s12">
                                                                <i class="material-icons prefix">subject</i>
                                                                <textarea id="Message" class="materialize-textarea" data-length="120" autocomplete="off"></textarea>
                                                                <label for="Message">Message</label>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="input-field col s12">
                                                            <select id="FreeSeats">
                                                              <option value="" disabled selected>How many seats are free?</option>
                                                              <option value="0">No more Seats</option>
                                                              <option value="1">1 Seat</option>
                                                              <option value="2">2 Seats</option>
                                                              <option value="3">3 Seats</option>
                                                              <option value="4">4 Seats</option>
                                                              <option value="5">5 Seats</option>
                                                              <option value="6">6 Seats</option>
                                                            </select>
                                                            <label>Free Seats</label>
                                                          </div>
                                                </div>
                                                <div class="row">
                                                        <div class="input-field col s6">
                                                                <a class="waves-effect waves-light btn" onclick="resetLocation(<?php echo $Location_ID ?>)"><i class="material-icons right">clear</i>
                                                                        Reset Location
                                                                        </a>
                                                        </div>
                                                        <div class="input-field col s6">
                                                                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                                                        <i class="material-icons right">send</i>
                                                                </button>
                                                        </div>
                                                </div>

                                        </div>
                                 </div>
                                 </form>

                                 <div id="form-messages"></div>
                                </div>
                        </div>
                </div>
        </div>
  </div>
