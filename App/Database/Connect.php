<?php

    //Enter your database connection details here.  dsn: 'mysql:host=127.0.0.1;dbname=a'
    $host = '127.0.0.1'; //HOST NAME.
    $db_name = 'a'; //Database Name
    $db_username = 'root'; //Database Username
    $db_password = ''; //Database Password

    try
    {
        $pdo = new PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password);
    }
    catch (PDOException $e)
    {
        exit('Error Connecting To DataBase');
    }



