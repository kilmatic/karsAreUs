<?php
    require_once 'util/main.php';
    require_once 'util/text_markup.php';    
    require_once 'model/db.php';
    require_once 'model/get_cars.php';
    require_once 'model/cars_db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KarsAreUs</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once 'view/nav.php'; ?>    
    <?php require_once 'view/carousel.php'; ?>     
    <div class="album py-5 bg-light">    
    <div class="container">
        <?php require_once 'view/filter.php'; ?>
        <div class="car-container">
            <?php if(count($get_cars) == 0) : ?>
                <p>Cannot find cars...</p>
            <?php else: ?>
                <?php foreach($get_cars as $car) : ?>
                    <div class="car">
                        <img src="images/cars/<?php echo $car['image_thumb'];?>.jpeg" alt="<?php echo $car['image_thumb'];?>" class="card-img-top">
                        <div class="car-options">
                            <h5 class="car-title"><?php echo $car['make'].' '.$car['model']; ?></h5>  
                            <div class="car-buttons">
                                <button type="button" class="filter-button">View</button>
                                <button type="button" class="filter-button">Enquire</button>
                            </div>
                            <small class="car-price"><?php echo 'R'.$car['price']; ?></small>                 
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>            
    </div>
<?php require_once 'view/footer.php'; ?>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="js/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<script src="node_modules/popper.js/dist/popper.min.js"></script>
<script src="js/script.js"></script>
<script src="js/carousel.js"></script>
</body>
</html>