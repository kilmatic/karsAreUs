<?php 
    // require_once 'controller\filter_controller.php';
?>
<div class="car-container">
    <?php if(count($get_cars) == 0) : ?>
        <p>Cannot find cars...</p>
    <?php else: ?>
        <?php foreach($get_cars as $car) : ?>
            <div class="car">
                <img src="images/cars/<?php echo $car['image_thumb'];?>.jpeg" alt="<?php echo $car['image_thumb'];?>">
                <div class="car-options">
                    <h5 class="car-title"><?php echo $car['make'].' '.$car['model']; ?></h5>  
                    <div class="car-buttons">
                        <button type="button" class="car-button">View | Enquire</button>
                    </div>
                    <small class="car-price"><?php echo 'R'.$car['price']; ?></small>    
                    <small class="mileage"><?php echo $car['mileage'].'km' ?></small>             
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>