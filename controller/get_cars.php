<?php
require_once 'model/db.php';
$db = new Database;

$get_cars = $db->getRows('SELECT * FROM cars');

$get_cars_by_make = $db->getRows(
    'SELECT * FROM car_make
     ');