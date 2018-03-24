<?php
//check for parameters
 if(!isset($_GET['UrlCode'])){
         echo("<h1>No GET UrlCode -> not scanned tag!!</h1> <br>");
		 echo "ID:  ".$_GET['ID']."<br>";
 }

//get Parameters to Vars
$UrlCode = $_GET['UrlCode'];

//connect to db
$servername = "localhost";
$username = "yottabytes";
$password = "fFb80*r1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection to Database failed: " . $conn->connect_error);
}else{
   echo "<br>Connected successfully to MYSQLbr>";
}

$sql = "SELECT * from dk_meet2eat.Locations";
$result = $conn->query($sql);

while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        echo("<h3>ID: ".$row['ID']."</h3>");
        echo("<h3>Name: ".$row['Name']."</h3>");
        echo("<h3>State: ".$row['State']."</h3>");
        echo("<h3>FreeSeats: ".$row['FreeSeats']."</h3>");
        echo("<h3>WhoIsHere: ".$row['WhoIsHere']."</h3>");
        echo("<h3>Topic: ".$row['Topics_ID']."</h3>");
        echo("<h3>Message: ".$row['Message']."</h3><hr />");
}


 ?>
