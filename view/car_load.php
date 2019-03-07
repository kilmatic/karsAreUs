<?php 
    $ref = $result['ref'];
    $make = $result['make'];
    $model = $result['model'];
    $man_year = $result['man_year'];
    $mileage = $result['mileage'];
    $location = $result['_location'];
    $price = $result['price'];
    $colour = $result['colour'];
    $transmission = $result['transmission'];
    $description = $result['car_description'];
    $description_tags = add_tags($description);    
?>
<?php if(count($results) == 0) : ?>
    <p>Cannot find cars...</p>
<?php else: ?>
    <ul>
        <?php foreach($results as $result) : ?>
            <li>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                    <h5><?php echo $result['make'].' '.$result['model']; ?></h5>
                    <img src="images\TT.jpeg" alt="TT" class="card-img-top" width="80%" height="225">
                    <div class="card-body">
                        <p class="card-text"><?php echo $result['description']; ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Enquire</button>
                        </div>
                        <small class="text-muted"><script>console.log(<?php echo $result['price']; ?>);</script></small>
                        </div>
                    </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>