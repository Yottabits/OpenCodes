

//Textarea Message Counter and select dropdown menu for seats
$(document).ready(function() {
   //$('input#input_text, textarea#Message').characterCounter();
   //$('select').formSelect();
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
                    'Location_ID'       :document.getElementById('LocationIDHiddenInput').value,
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
                    console.log(data);
                    M.toast({html: 'Changes Saved!<i class="material-icons right">done</i>'});
            });
        });
});
