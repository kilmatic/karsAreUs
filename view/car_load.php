<?php

require_once 'model/cars_db.php';

?>
<?php if(count($get_cars) == 0) : ?>
    <p>Cannot find cars...</p>
<?php else: ?>
    <?php foreach($get_cars as $car) : ?>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="images\TT.jpeg" alt="TT" class="card-img-top" width="80%" height="225">
                <div class="card-body">
                    <h5><?php echo $car['make'].' '.$car['model']; ?></h5>
                    <p class="card-text"><?php echo $car['car_description']; ?></p>                    
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Enquire</button>
                        </div>
                        <small class="text-muted"><?php echo 'R'.$car['price']; ?></small>                    
                    </div>                  
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>