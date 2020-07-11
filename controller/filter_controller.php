<?php
require_once 'C:\xampp\htdocs\karsAreUs\model\db_car.php';

$cars = new Cars;

$get_cars = $cars->getCars();
$get_car_make = $cars->getCarMake();
$get_car_model = $cars->getCarModel();
$get_car_location = $cars->getCarLocation();
$get_car_mileage = $cars->getCarMileage();
$get_car_year = $cars->getCarYear();

$make = filter_input(INPUT_POST, 'make');
$model = filter_input(INPUT_POST, 'model');
$location = filter_input(INPUT_POST, 'location');
$mileage = filter_input(INPUT_POST, 'mileage');
$year = filter_input(INPUT_POST, 'year');

if(isset($_POST['action'])) {
    
}

?>