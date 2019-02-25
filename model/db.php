<?php

    $host = 'localhost';
    $username = 'root';
    $password = 'kilmatic';
    $db = 'vrrrparr';

    $dbCon = new mysqli($host, $username, $password, $db);

    $error_msg = $dbCon->connect_error;
    if($error_msg != null)
    {
        include 'error/db_error_connect.php';
        exit;
    }

    function display_db_error($error_message)
    {
        global $app_path;
        include 'error/db_error.php';
        exit;
    }



    /*
    $dsn = 'mysql:host=localhost;dbname=vrrrparr';
    $username = 'root';
    $pword = 'kilmatic';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    try 
    {
        $dbCon = new PDO($dsn, $username, $pword, $options); 
        echo "<script> console.log('Connection Successful...'); </script>";
    } 
    catch(PDOexception $e) 
    {
        $error_msg = $e->getMessage();
        echo "<p> Not connected to database: $error_msg </p>";
        exit;
    }
    */
?>