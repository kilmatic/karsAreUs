<?php require_once 'controller\filter_controller.php'; ?>
<div class="filter-container">
    <section class="filter-card">
        <h2>Search <em>My Car</em></h2>
        <div class="select-options">
            <div class="filter-make-model">
                <a>Manufacturer</a>
                <ul class="filter-dropdown">
                    <?php foreach($get_car_make as $carMake) : ?>
                        <li class="nav-submenu">
                            <input type="checkbox" name="make" id="make"><?php echo $carMake['make']; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="filter-make-model">
                <a>Model</a>    
                <ul class="filter-dropdown">
                    <?php foreach($get_car_model as $carModel) : ?>
                        <li>
                            <input type="checkbox" name="model" id="model"><?php echo $carModel['model']; ?>
                        </li>
                    <?php endforeach; ?>    
                </ul>    
            </div>
            <div class="filter-make-model">
                <a>Location</a>    
                <ul class="filter-dropdown">
                    <?php foreach($get_car_location as $carlocation) : ?>
                        <li>
                            <input type="checkbox" name="location" id="location"><?php echo $carlocation['location']; ?>
                        </li>
                    <?php endforeach; ?>    
                </ul>   
            </div>
            <div class="filter-make-model">
                <a>Mileage</a>    
                <ul class="filter-dropdown">
                    <?php foreach($get_car_mileage as $carMileage) : ?>
                        <li>
                            <input type="checkbox" name="mileage" id="mileage"><?php echo $carMileage['mileage'].'km'; ?>
                        </li>
                    <?php endforeach; ?>    
                </ul>    
            </div>
            <div class="filter-make-model">
                <a>Year</a>    
                <ul class="filter-dropdown">
                    <?php foreach($get_car_year as $carYear) : ?>
                        <li>
                            <input type="checkbox" name="year" id="year"><?php echo $carYear['man_year']; ?>
                        </li>
                    <?php endforeach; ?>    
                </ul>      
            </div>
        </div>
        <div class="range-sliders">
            <input type="text" class="range-slider" name="my_range" value="" />
        </div>
        <button type="submit" name="search" id="search" class="box-shadow" onclick="filter_data()">Search</button>
    </section>
</div>