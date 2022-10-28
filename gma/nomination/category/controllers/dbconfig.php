<?php 

   $serverName = "";
    $databaseName = ""; 
    $databaseUser = "";
    $databasePassword = "";
    $conn = mysqli_connect($serverName, $databaseUser, $databasePassword, $databaseName);

    if (!$conn) {
        die("unable to connect to database");
   }
   // else{echo "CONNECTED";}

?>
