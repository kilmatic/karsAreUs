<?php require_once 'controller\filterController.php'; ?>
<section class="filter-card">
    <div class="filter-make-model">
        <ul>
            <li>
                <a href="#">Manufacturer</a>
                <ul class="filter-dropdown">
                    <?php foreach($get_cars as $car) : ?>
                        <li class="nav-submenu">
                            <input type="checkbox" name="make" id="car-make"><?php echo $car['make']; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        </ul>
    </div>

    <div class="filter-make-model">
        <ul>        
            <li>
                <a href="#">Model</a>    
                <ul class="filter-dropdown">
                    <?php foreach($get_cars as $car) : ?>
                        <li>
                            <input type="checkbox" name="make" id="car-make"><?php echo $car['model']; ?>
                        </li>
                    <?php endforeach; ?>    
                </ul>                    
            </li>
        </ul>
    </div>

    <div class="filter-make-model">
        <ul>        
            <li>
                <a href="#">Location</a>    
                <ul class="filter-dropdown">
                    <?php foreach($get_cars as $car) : ?>
                        <li>
                            <input type="checkbox" name="make" id="car-make"><?php echo $car['location']; ?>
                        </li>
                    <?php endforeach; ?>    
                </ul>                    
            </li>
        </ul>
    </div>

    <input type="text" class="js-range-slider-price" name="my_range" value="" /><br>

    <input type="text" class="js-range-slider-mileage" name="my_range_2" value=""/><br>
        
    <input type="text" class="js-range-slider-year" name="my_range_3" value="">
    
</section>