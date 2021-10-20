<?php
    $serverName       = "127.0.0.1";
    $databaseName     = "presby_ypg"; //
    $databaseUser     = "root";
    $databasePassword = '#4kLxMzGurQ7Z~'; #"#4kLxMzGurQ7Z~"; Mccg8(3P^tJVnBDsF

    $database = mysqli_connect($serverName, $databaseUser, $databasePassword, $databaseName);

    if (!$database) {
        die("unable to connect to database");
    }

    $db_host = '127.0.0.1';
    $db_name = 'presby_ypg';//
    $db_username = 'root';//Mccg8(3P^tJVnBDsF
    $pass_word = '#4kLxMzGurQ7Z~';//$databasePassword;//'Mccg8(3P^tJVnBDsF';//#4kLxMzGurQ7Z~
    $charset = 'utf8mb4';
    $server_path = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$charset;
    $connect = new PDO($server_path, $db_username, $pass_word);//"mysql:host=localhost;dbname=behind_voice;charset=utf8","root",""
    $connect->setAttribute(PDO::ATTR_AUTOCOMMIT,FALSE);