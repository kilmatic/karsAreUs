<?php require_once 'controller\filterController.php'; ?>
<div class="filter-card">
    <!-- <label for="form-control">Make</label>         
    <select class="form-control">
        <?php foreach($get_cars as $car) : ?>                   
            <option><?php echo $car['make']; ?></option>
        <?php endforeach; ?>
    </select>  
    <label for="form-control">Model</label>         
    <select class="form-control">
        <?php foreach($get_cars as $car) : ?>
            <option><?php echo $car['model']; ?></option>
        <?php endforeach; ?>
    </select> -->

    <!-- <div class="filter-make-model">
        <ul class="">
            <li id="submenu">
                <a href="#">Make / Model</a>
                <ul>
                    <?php foreach($get_cars as $car) : ?>
                        <li class="nav-submenu">
                            <input type="checkbox" name="make" id="car-make"><?php echo $car['make']; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        </ul>
    </div> -->

    <label for="form-control">Location</label>
    <select class="form-control">
        <?php foreach($get_cars as $car) : ?>
            <option><?php echo $car['location']?></option>
        <?php endforeach; ?>
    </select>
    <label for="form-control">Colour</label>
    <select class="form-control">
        <?php foreach($get_cars as $car) : ?>
            <option><?php echo $car['colour']?></option>
        <?php endforeach; ?>
    </select><hr>
    <span class="form-control">
        <label>Price </label>
        <input type="range" name="price" id="price" min="<?php ?>" max="<?php $get_max_price; ?>" step="1000" onchange="showPrice.value=value">
        <output id="showPrice"></output>
    </span>
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