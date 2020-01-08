<?php
    require_once '..\model\db.php';
    $db = new Database;
    $get_price = $db->getRows('SELECT price FROM cars');
    $get_the_price = min($get_price);
    // foreach($get_the_price as $price){
    //     echo $price . "<br>";
    // }
    var_dump($get_the_price[0]);
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