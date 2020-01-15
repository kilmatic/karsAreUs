<?php
    require_once 'model\db.php';
    $db = new Database;
    $get_price = $db->getRows('SELECT price FROM cars GROUP BY make');
    $get_the_price = min($get_price);
    // foreach($get_price as $price){
    //     echo $price . "<br>";
    // }
    // $get_the_price;
    // $get_min_price = min($get_price);

    // $get_max_price = max($get_price);

    // foreach($get_price as $price){
    //     echo $price;
    // }
    // echo " ";
    // echo $get_min_price;
    // echo " ";
    // echo $get_max_price;
?>