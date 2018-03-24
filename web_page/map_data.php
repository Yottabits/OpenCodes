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

$sql = "SELECT * from dk_meet2eat.Locations";
$result = $conn->query($sql);

$return_arr = array();

while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        /*echo("<h3>ID: ".$row['ID']."</h3>");
        echo("<h3>Name: ".$row['Name']."</h3>");
        echo("<h3>State: ".$row['State']."</h3>");
        echo("<h3>FreeSeats: ".$row['FreeSeats']."</h3>");
        echo("<h3>WhoIsHere: ".$row['WhoIsHere']."</h3>");
        echo("<h3>Topic: ".$row['Topic']."</h3>");
        echo("<h3>Message: ".$row['Message']."</h3><hr />");
*/
        $row_array['Location_ID'] = $row['ID'];
        $row_array['Name'] = $row['name'];
        $row_array['State'] = $row['States_ID'];
        $row_array['URL_ID'] = $row['URL_ID'];
        $row_array['LastChange'] = $row['LastChange'];
        $row_array['FreeSeats'] = $row['FreeSeats'];
        $row_array['WhoIsHere'] = $row['WhoIsHere'];
        $row_array['Message'] = $row['Message'];
        $row_array['Topic'] = $row['Topic'];
        array_push($return_arr,$row_array);
        //var_dump($row_array);
}
//var_dump($return_arr);
echo json_encode($return_arr);
?>
