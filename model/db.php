<?php
    $dsn = 'mysql:host=localhost;dbname=vrrrparr';
    $username = 'root';
    $pword = 'kilmatic';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    try 
    {
        $dbCon = new PDO($dsn, $username, $pword, $options);        
    } 
    catch(PDOexception $e) 
    {
        $error_msg = $e->getMessage();
        echo "<p> Not connected to database: $error_msg </p>";
        exit;
    }
    
?>