<?php require_once 'controller\filterController.php'; ?>
<div class="filter-card">
    <div class="filter-make-model">
        <ul>
            <li>
                <a href="#">Make / Model</a>
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

    <div class="filter-make-model">
        <ul>        
            <li>
                <a href="#">Colour</a>    
                <ul class="filter-dropdown">
                    <?php foreach($get_cars as $car) : ?>
                        <li>
                            <input type="checkbox" name="make" id="car-make"><?php echo $car['colour']; ?>
                        </li>
                    <?php endforeach; ?>    
                </ul>                    
            </li>
        </ul>
    </div>

    <input type="text" class="js-range-slider" name="my_range" value="" /><br>

    <span class="form-control">
        <label>Mileage </label>            
        <input type="range" name="price" id="mileage" min="<?php ?>" max="<?php ?>" step="100" onchange="showMiles.value=value">
        <output id="showMiles"></output>
    </span>

    <span class="form-control">
        <label>Year </label>            
        <input type="range" name="price" id="mileage" min="<?php ?>" max="<?php ?>" step="100" onchange="showYear.value=value">
        <output id="showYear"></output>
    </span>
</div>