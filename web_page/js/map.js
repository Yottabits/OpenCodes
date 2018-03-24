var svg = document.getElementById("svgContainer");
var svgDoc = svg.contentDocument;
var pin0 = svgDoc.getElementById("pin0");

//Get the map data from server and update the pins on the map
function getMapData(){
    $.ajax({
        type: 'POST',
        url: map_data.php
    }).done(function(data) {
            console.log(data[0].State);
            console.log(data);
    });
}

//update the pins on the map
function updatePin(pin){

}

for (i = 0; i < 4; i++){
    var pin = svgDoc.getElementById("pin" + i);
    pin.style.display = "none";
}

svg.style.display = "";