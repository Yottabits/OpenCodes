<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="custom.css" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

<!-- Compiled and minified jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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

//Textarea Message Counter and select dropdown menu for seats
$(document).ready(function() {
   $('input#input_text, textarea#Message').characterCounter();
   $('select').formSelect();
 });


 //AJAX Stuff
 $(function() {
        // Get the form.
        var form = $('#AjaxLocationSettingsForm');

        // Set up an event listener for the contact form.
        $(form).submit(function(event) {
            // Stop the browser from submitting the form.
            event.preventDefault();
            console.log("triggered event listener")

//Tode hier muss die Location_ID noch rein kommen

            var formData = {
                    'Location_ID'       :0,
                    'Topic'                      : document.getElementById('Topic').value,
                    'WhoIsHere'             :  document.getElementById('WhoIsHere').value,
                    'Message'                  : document.getElementById('Message').value,
                    'FreeSeats'                 :document.getElementById('FreeSeats').value
        };

        console.log(formData);
            // Submit the form using AJAX.
            $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
        }).done(function(data) {
                    console.log(data)
            });
        });
});



</script>

<form id="AjaxLocationSettingsForm" method="post" action="update_location.php">
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
                                <i class="material-icons prefix">supervisor_account</i>
                                <textarea id="WhoIsHere" class="materialize-textarea" data-length="120"></textarea>
                                <label for="WhoIsHere">WhoIsHere</label>
                        </div>
                </div>
                <div class="row">
                        <div class="input-field col s12">
                                <i class="material-icons prefix">subject</i>
                                <textarea id="Message" class="materialize-textarea" data-length="120"></textarea>
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
                                <a class="waves-effect waves-light btn"><i class="material-icons right">clear</i>
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
