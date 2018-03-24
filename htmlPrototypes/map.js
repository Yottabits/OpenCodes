var svg = document.getElementById("svgContainer");
var svgDoc = svg.contentDocument;
var pin0 = svgDoc.getElementById("pin0");
pin0.setAttribute("visibility", "hidden");

svg.style.display = "";