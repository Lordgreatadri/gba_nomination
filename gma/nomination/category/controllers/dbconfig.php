<?php 

   $serverName = "127.0.0.1";
    $databaseName = "makeup_awards"; 
    $databaseUser = "root";
    $databasePassword = "#4kLxMzGurQ7Z~";//#4kLxMzGurQ7Z" ;//''; //Bim32!@b)o #4kLxMzGurQ7Z~

    $conn = mysqli_connect($serverName, $databaseUser, $databasePassword, $databaseName);

    if (!$conn) {
        die("unable to connect to database");
   }
   // else{echo "CONNECTED";}

?>