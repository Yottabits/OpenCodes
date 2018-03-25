<?php
        $Location_ID = $_POST["Location_ID"];
        $Topic = $_POST["Topic"];
        $WhoIsHere = $_POST["WhoIsHere"];
        $Message = $_POST["Message"];
        $FreeSeats = $_POST["FreeSeats"];

echo "$Topic";
echo "$WhoIsHere";
echo "$Message";
echo "$FreeSeats";

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

//escape strings after making connection
$Location_ID = mysqli_real_escape_string($conn,$Location_ID);
$Topic = mysqli_real_escape_string($conn,$Topic);
$WhoIsHere = mysqli_real_escape_string($conn,$WhoIsHere);
$Message = mysqli_real_escape_string($conn,$Message);
$FreeSeats = mysqli_real_escape_string($conn,$FreeSeats);

//from where?
$FromForm = isset($_POST["Location_ID"]) && isset($_POST["Topic"]) && isset( $_POST["WhoIsHere"])&& isset($_POST["Message"])&& isset($_POST["FreeSeats"]);
$FromActivateButton =  isset($_POST["Location_ID"]) && isset($_POST["FromActivateButton"]);
$FromReset =  isset($_POST["Location_ID"]) && isset($_POST["Reset"]);

if ($FromForm) {
        $sql = "UPDATE dk_meet2eat.Locations SET Topic = '$Topic', WhoIsHere='$WhoIsHere', Message='$Message', FreeSeats='$FreeSeats' WHERE ID = '$Location_ID'";
}elseif ($FromActivateButton) {
        $sql = "UPDATE dk_meet2eat.Locations SET States_ID = '0' WHERE ID = '$Location_ID'";
}elseif ($FromReset) {
        $sql = "UPDATE dk_meet2eat.Locations SET States_ID = '2', Topic = 'Not Selected', WhoIsHere='Unknown', Message='Nothing to say so far', FreeSeats='6' WHERE ID = '$Location_ID'";
        echo "FromReset";
}

if ($conn->query($sql) === TRUE) {
    echo "     Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

 ?>
