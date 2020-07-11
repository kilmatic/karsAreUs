<?php require_once 'controller\filter_controller.php'; ?>
<div class="filter-container">
    <h2>Search 
        <em>Cars</em>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/>
        </svg>
    </h2>
    <section class="filter-card">
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