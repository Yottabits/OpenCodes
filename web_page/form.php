<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="custom.css" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

<!-- Compiled and minified jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

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
                           // "Apple": null,
                            echo("\"".$row['Name']."\":null,");
                    }
    ?>
    },
  });
});

//Textarea Message Counter
$(document).ready(function() {
   $('input#input_text, textarea#Message').characterCounter();
 });
</script>

<div class="row">
        <div class="col s12">
                <div class="row">
                        <div class="input-field col s12">
                                <i class="material-icons prefix">forum</i>
                                <input type="text" id="Topic" class="autocomplete">
                                <label for="Topic">topic of conversation</label>
                        </div>
                </div>
                <div class="row">
                        <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <textarea id="WhoIsHere" class="materialize-textarea" data-length="120"></textarea>
                                <label for="WhoIsHere">WhoIsHere</label>
                        </div>
                </div>
                <div class="row">
                        <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <textarea id="Message" class="materialize-textarea" data-length="120"></textarea>
                                <label for="Message">Message</label>
                        </div>
                </div>
                <div class="row">
                        <div class="input-field col s12">
                            <select>
                              <option value="" disabled selected>Choose how many seats are free</option>
                              <option value="0">No more Seats</option>
                              <option value="1">1 Seat</option>
                              <option value="2">2 Seats</option>
                              <option value="3">3 Seats</option>
                              <option value="3">4 Seats</option>
                              <option value="3">5 Seats</option>
                              <option value="3">6 Seats</option>
                            </select>
                            <label>Materialize Select</label>
                          </div>
                </div>
        </div>
 </div>
