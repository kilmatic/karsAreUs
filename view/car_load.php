<?php
    global $cars;
    $ref = $cars['ref'];
    $make = $cars['make'];
    $model = $cars['model'];
    $man_year = $cars['man_year'];
    $mileage = $cars['mileage'];
    $location = $cars['_location'];
    $price = $cars['price'];
    $colour = $cars['colour'];
    $transmission = $cars['transmission'];
    $description = $cars['car_description'];
    $description_tags = add_tags($description);
?>

<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
    <h5><?php echo $make.' '.$model; ?></h5>
    <img src="images\TT.jpeg" alt="TT" class="card-img-top" width="80%" height="225">
    <div class="card-body">
        <p class="card-text"><?php echo $description; ?></p>
        <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Enquire</button>
        </div>
        <small class="text-muted"><script>console.log(<?php echo $price; ?>);</script></small>
        </div>
    </div>
    </div>
</div>