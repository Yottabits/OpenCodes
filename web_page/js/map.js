// Some variables we need
var svg;
var svgDoc;

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

//TODO: repair
function glowPin(pinID){
  var pin = svgDoc.getElementById("pin" + pinID);
  pin.style.height = "100px";
}

function refresh(){
  getMapData();
}

$( document ).ready(function(){
  svg = document.getElementById("svgContainer");
  svgDoc = svg.contentDocument;

  // Hide all pins by default
  for (i = 0; i < 4; i++){
    hidePin(i);
  }
  // Show the svg
  svg.style.display = "";

  ///////////////////////////////////////////////////////////////////////////

  getMapData();
  setInterval(refresh, 5000);


  // Automatically get new data every 5 sec

})
