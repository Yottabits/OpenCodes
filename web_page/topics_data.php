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

            $sql = "SELECT * from dk_meet2eat.Topics";
            $result = $conn->query($sql);

            while ($row = $result->fetch_array(MYSQLI_BOTH)) {
                   //Example "Apple": null,
                    echo("\"".$row['Name']."\":null,");
            }

?>
