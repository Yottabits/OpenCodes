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

var MaxIdCount = 0;
var IdCounter = 0;


function refreshTV(){
    getMapData();
    showID(IdCounter);
    glowPin(IdCounter);
    IdCounter++;
    if (IdCounter > MaxIdCount) {
      IdCounter = 0;
    }
}


function showID(id){
  var WhoIsHere = document.getElementById("WhoIsHere");
  var Topic = document.getElementById("Topic");
  var Message = document.getElementById("Message");
  var Seats = document.getElementById("Seats");

  $.ajax({
    type: 'POST',
    url: "map_data.php"
  }).done(function(data) {
    var obj = JSON.parse(data);
    MaxIdCount = obj.length;
      WhoIsHere.innerHTML = obj[id].WhoIsHere;
      Topic.innerHTML = obj[id].Topic;
      Message.innerHTML = obj[id].Message;
      Seats.innerHTML = obj[id].FreeSeats;
      console.log("idNumber" + id);
      //mark marker
  });
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
  refreshTV();
  setInterval(refreshTV, 5000);


  // Automatically get new data every 5 sec

})
