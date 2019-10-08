<?php

require_once 'model/db.php';

$db = new Database;

$get_cars = $db->getRows('SELECT * FROM cars');

// class Cars extends Database {
//     public function get_cars() {
//         $cars = $this->connect()->query('SELECT * FROM cars');
//     }
// }