function activateLocation(Location_ID){
        $.ajax({
            type: 'POST',
            url: "update_location.php",
            data: {
                    'Location_ID':Location_ID,
                    'FromActivateButton' :1
        }
        }).done(function(data) {
                console.log(data)
                console.log("Activated Location:"+Location_ID)
                showID("Settings");
                hideID("LocationScan");
        });
}

function showID(ID){
        document.getElementById(ID).style.display = "inline";
        console.log("display "+ID);
}

function hideID(ID){
        document.getElementById(ID).style.display = "none";
        console.log("hide "+ID);
}

function hideLocationScan() {

}

function resetLocation(Location_ID){
        $.ajax({
            type: 'POST',
            url: "update_location.php",
            data: {
                    'Location_ID':Location_ID,
                    'Reset' :1
        }
        }).done(function(data) {
                console.log(data)
        });
}
