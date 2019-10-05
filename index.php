<?php require_once 'view\header.php'; ?>
<div class="album py-5 bg-light">
    <div class="container">
        <?php require_once 'view\filter.php'; ?>
    </div>
    <div class="container">
        <div class="row">
            <?php require_once 'model/cars_db.php'; ?>
            <?php if(count($get_cars) == 0) : ?>
                <p>Cannot find cars...</p>
            <?php else: ?>
                <?php foreach($get_cars as $car) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="images/cars/<?php echo $car['image_thumb'];?>.jpeg" alt="<?php echo $car['image_thumb'];?>" class="card-img-top" width="75%" height="225">
                            <div class="card-body">
                                <h5><?php echo $car['make'].' '.$car['model']; ?></h5>
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
        </div>
    </div>
</div>
<?php require_once 'view\footer.php'; ?>