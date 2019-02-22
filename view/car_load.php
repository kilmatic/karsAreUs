<?php
    $car_ref = $car['car_ref'];
    $car_make = $car['car_make'];
    $car_model = $car['car_model'];
    $car_man_year = $car['car_man_year'];
    $car_mileage = $car['car_mileage'];
    $car_location = $car['car_location'];
    $car_price = $car['car_price']; 
    $car_colour = $car['car_colour'];
    $car_image = $car['image_thumb'];
    $car_transmission = $car['car_transmission']; 
    $car_description = $car['car_description'];
    
    $car_description_tags = add_tags($car_description);    
    $price_tag = number_format($car_price, 2);

    $filename_with_ext = file($app_path.'images')->getClientOriginalName();
    $filename = pathinfo($filename_with_ext, PATHINFO_FILENAME);
    $extension = file($app_path.'images')->getClientOriginalExtension();
    $stored_filename = $filename.'_'.time().'.'.$extension;
    $storage = file($app_path.'images')->storeAs($app_path.'images', $stored_filename);

?>
