function activateLocation(Location_ID){
        $.ajax({
            type: 'POST',
            url: update_location.php,
            data: {
                    'Location_ID':Location_ID,
                    'FromActivateButton' :1
        };
        }).done(function(data) {
                console.log(data)
        });
}

function resetLocation(Location_ID){
        $.ajax({
            type: 'POST',
            url: update_location.php,
            data: {
                    'Location_ID':Location_ID,
                    'Reset' :1
        };
        }).done(function(data) {
                console.log(data)
        });
}


function getMapData(){
        $.ajax({
            type: 'POST',
            url: map_data.php
        }).done(function(data) {
                console.log(data[0].State);
                console.log(data);
        });
}
