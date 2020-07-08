<?php 
require_once 'model\db_car.php'; 

$cardb = new Cars;

$car_make = filter_input(INPUT_POST, 'make');
$car_model = filter_input(INPUT_POST, 'model');
$car_year = filter_input(INPUT_POST, 'year');
$car_mileage = filter_input(INPUT_POST, 'mileage', FILTER_VALIDATE_INT);
$car_location = filter_input(INPUT_POST, 'location');
$car_price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_INT);
$car_color = filter_input(INPUT_POST, 'color');
$car_transmission = filter_input(INPUT_POST, 'transmission');
$car_details = filter_input(INPUT_POST, 'details');

$action_addcar = filter_input(INPUT_POST, 'addcar');

$car_thumb = $car_model;

if(isset($action_addcar)){ 
    $cardb->insertCar($car_make, $car_model, $car_year, $car_mileage, $car_location, $car_price, $car_color, $car_transmission, $car_thumb, $car_details);

    $tmp_name = $_FILES['thumb']['tmp_name'];
    $path = '..'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'cars';
    $image_thumb =  $path.DIRECTORY_SEPARATOR.$_FILES['thumb']['name'];
    move_uploaded_file($tmp_name, $image_thumb);
}
?>