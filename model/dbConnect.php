<?php
$dsn = 'mysql:host=localhost;dbname=vrrrparr';
$username = 'root';
$pword = 'kilmatic';
try {
    $dbCon = new PDO($dsn, $username, $pword);
    echo "<script> console.log('You are connected'); </script>";
} catch(PDOexception $e) {
    $error_msg = $e->getMessage();
    echo "<p> Not connected to: $error_msg </p>";
}
?>