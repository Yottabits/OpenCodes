<div id="LocationScan", class="fill", style="display:inline">
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
         //echo $sql;
         $result = $conn->query($sql);

         if ($row = $result->fetch_array(MYSQLI_BOTH)) {
                //echo("Location_ID: ".$row['ID']);
                //to use as selector what to show in other scripts
                $Location_ID = $row['ID'];
        }else {
                echo("Error wrong UrlCode");
        }



        ?>
        <!--php: show at first scan (if new session is started)-->
        <div>
          <div id="activation-field" class="container">
            <div class="valign-wrapper row">
              <div class="col s12">
                <h6 style="text-align: center; margin-top: 50px; ">
                  Activate to share your position<br /> If you want more information click
                  <a href="https://github.com/Yottabits/OpenCodes">here</a>
                </h6>
              </div>
            </div>
            <div class="valign-wrapper row">
              <div class="col s12 custom-center">
                <div class="switch" style="transform: rotate(270deg) scale(4);">
                  <label>
                    <div>
                      <input id="activate_button" type="checkbox" style="display: inline-block" onclick="activateLocation(<?php echo $Location_ID ?>)">
                      <span class="lever"></span>
                    </div>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php
 }else{
        //echo("<h1>No GET UrlCode -> not scanned tag!!</h1> <br>");
        //echo "UrlCode:  ".$_GET['UrlCode']."<br>";
}
 ?>
</div>
