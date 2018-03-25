$(document).ready(function() {
    $('#modal1').modal();
});

$( document ).ready(function(){
    // Some variables we need
    var svg = document.getElementById("svgContainer");
    var svgDoc = svg.contentDocument;


    var pinNull = svgDoc.getElementById("pin0");
        pinNull.onclick = function (e) {
                console.log("fht pin null");
                $('#modal0').modal('open')
            //var instance = M.Modal.getInstance(elem);
            //instance.open();
        };

    function hidePin(pinID){
        var pin = svgDoc.getElementById("pin" + pinID);
        pin.style.display = "none";
    }

    function showGreenPin(pinID){
        var pin = svgDoc.getElementById("pin" + pinID);
        pin.style.display = "";
        pin.style.fill = "green";
    }

    function showRedPin(pinID){
        var pin = svgDoc.getElementById("pin" + pinID);
        pin.style.display = "";
        pin.style.fill = "red";
    }

    function setPinStatus(pinID, statusID){
        if (statusID == 0) {
            showGreenPin(pinID);
        }
        else if (statusID == 1) {
            showRedPin(pinID);
        }
        else {
            hidePin(pinID);
        }
    }

    // Hide all pins by default
    for (i = 0; i < 4; i++){
        hidePin(i);
    }

    // Show the svg
    svg.style.display = "";

    ///////////////////////////////////////////////////////////////////////////

    //Get the map data from server and update the pins on the map
    function getMapData(){
        $.ajax({
            type: 'POST',
            url: "map_data.php"
        }).done(function(data) {
                var obj = JSON.parse(data);
            for(i = 0; i < obj.length; i++) {
                setPinStatus(i, obj[i].State);
            }
        });
    }

    // Automatically get new data every 5 sec
    function refresh(){
        getMapData();
    }

    getMapData();
    setInterval(refresh, 5000);
})

function modal(ID){
        console.log("modal, id = " + ID);
        svgDoc.getElementById("pin0");
}
