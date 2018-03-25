<?php
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



$sql = "SELECT * from dk_meet2eat.Locations WHERE States_ID = 0 ORDER BY LastChange DESC";
$result = $conn->query($sql);

while ($row = $result->fetch_array(MYSQLI_BOTH)) {

    echo("<div class='list-item'>
        <div class='card indigo darken-3'>
            <div class='card-content white-text'>
                <span class='card-title'><p id='userName'>".$row['Name']."</p> - <p id='topic'>".$row['Topic']."</p>
                </span>
                <p id='message'>".$row['Message']."</p><br />
                <p id='whoishere'>Awaiting you: ".$row['WhoIsHere']."</p>
            </div>
            <div class='card-action white-text'>
                <p>Free Seats: </p><p id='seats'>".$row['FreeSeats']."</p>
            </div>
        </div>
    </div>");
}
?>
