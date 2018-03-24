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


$sql = "UPDATE dk_meet2eat.Locations SET Topic = '$Topic', WhoIsHere='$WhoIsHere', Message='$Message', FreeSeats='$FreeSeats' WHERE ID = '$Location_ID'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
 ?>
