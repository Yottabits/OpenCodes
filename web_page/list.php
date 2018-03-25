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
        <div class='card light-blue lighten-2'>
            <div class='card-content' >
                <span class='card-title'><p id='userName'>".$row['Name']."</p> - <p id='topic'>".$row['Topic']."</p>
                </span>
                <p id='message'>".$row['Message']."</p><br />
                <p id='whoishere'>Awaiting you:<br>".$row['WhoIsHere']."</p>
            </div>
            <div class='card-action'>
                <p>Seats: </p><p id='seats'>".$row['FreeSeats']."</p>
            </div>
        </div>
    </div>");
}
?>
