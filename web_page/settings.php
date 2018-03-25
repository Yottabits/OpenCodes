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

            $sql = "SELECT * from dk_meet2eat.Locations where ID = '$Location_ID' and States_ID = '2'";
            $result = $conn->query($sql);
            if ($row = $result->fetch_array(MYSQLI_BOTH)) {
                   //location is free
                   //echo "location is free";
                   echo "<div id='Settings', class='fill', style='display:none'>";
           }else{
                   //echo "location is occupied";
                   echo "<div id='Settings', class='fill', style='display:inline'>";
           }
?>

<script>
//autocomplete
$(document).ready(function(){
  $('input.autocomplete').autocomplete({
    data: {
        <?php
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
                <div class="card  light-blue lighten-5">
                        <div class="card-content">
                                <span class="card-title">Location Settings</span>
                                <input type="text" id="LocationIDHiddenInput" value="<?php echo $Location_ID ?>" style="display:none">
                                <form id="AjaxLocationSettingsForm" method="post" action="update_location.php">
                                <div class="row">
                                        <div class="col s12">
                                                <div class="row">
                                                        <div class="input-field col s12">
                                                                <i class="material-icons prefix deep-orange-text text-darken-4">forum</i>
                                                                <input type="text" id="Topic" class="autocomplete black-text" autocomplete="off">
                                                                <label style="color:black" for="Topic">topic of conversation</label>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="input-field col s12">
                                                                <i class="material-icons prefix deep-orange-text text-darken-4">supervisor_account</i>
                                                                <textarea id="WhoIsHere" class="materialize-textarea" data-length="120" autocomplete="off"></textarea>
                                                                <label style="color:black" for="WhoIsHere">WhoIsHere</label>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="input-field col s12">
                                                                <i class="material-icons prefix deep-orange-text text-darken-4">subject</i>
                                                                <textarea id="Message" class="materialize-textarea" data-length="120" autocomplete="off"></textarea>
                                                                <label style="color:black" for="Message">Message</label>
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
                                                            <label style="color:black">Free Seats</label>
                                                          </div>
                                                </div>
                                                <div class="row">
                                                        <div class="input-field col s6">
                                                                <a class="waves-effect deep-orange waves-light btn" onclick="resetLocation(<?php echo $Location_ID ?>)"><i class="material-icons right">clear</i>
                                                                        Reset Location
                                                                        </a>
                                                        </div>
                                                        <div class="input-field col s6">
                                                                <button class="btn waves-effect deep-orange  waves-light" type="submit" name="action">Submit
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
