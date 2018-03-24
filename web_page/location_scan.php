<?php
//check for parameters
 if(isset($_GET['UrlCode'])){
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
            //echo "<br>Connected successfully to MYSQL<br>"';
         }

        //escape strings after making connection
        $UrlCode = mysqli_real_escape_string($conn,$UrlCode);

         $sql = "SELECT * from dk_meet2eat.URL where UrlCode = '$UrlCode'";
         echo $sql;
         $result = $conn->query($sql);

         if ($row = $result->fetch_array(MYSQLI_BOTH)) {
                echo("<h3>Location_ID: ".$row['ID']."</h3>");
                //to use as selector what to show in other scripts
                $LocationID = $row['ID'];
        }
 }else{
        echo("<h1>No GET UrlCode -> not scanned tag!!</h1> <br>");
        echo "UrlCode:  ".$_GET['UrlCode']."<br>";
}
 ?>
