<?php
    $serverName       = "127.0.0.1";
    $databaseName     = "presby_ypg"; //
    $databaseUser     = "root";
    $databasePassword = '#v~'; #"#v~"; v

    $database = mysqli_connect($serverName, $databaseUser, $databasePassword, $databaseName);

    if (!$database) {
        die("unable to connect to database");
    }

    $db_host = '127.0.0.1';
    $db_name = 'presby_ypg';//
    $db_username = 'root';//v(3P^v
    $pass_word = '#v~';//$databasePassword;//'v(3P^v';//#4kLxMzGurQ7Z~
    $charset = 'utf8mb4';
    $server_path = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$charset;
    $connect = new PDO($server_path, $db_username, $pass_word);//"mysql:host=localhost;dbname=behind_voice;charset=utf8","root",""
    $connect->setAttribute(PDO::ATTR_AUTOCOMMIT,FALSE);
