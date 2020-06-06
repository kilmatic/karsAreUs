<?php
    require_once 'util/main.php';
    require_once 'util/text_markup.php';  
    require_once 'model/db.php';  
    require_once 'model/db_car.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KarsAreUs</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/ion-rangeslider/css/ion.rangeSlider.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/> -->
</head>
<body>
    <header>
        <?php require_once 'view/nav.php'; ?>
        <?php require_once 'view/carousel.php'; ?> 
    </header>            
    <main>         
        <?php foreach($get_cars as $car); ?>
        <?php require_once 'view/filter.php'; ?>
        <div class="car-container">
            <?php if(count($get_cars) == 0) : ?>
                <p>Cannot find cars...</p>
            <?php else: ?>
                <?php foreach($get_cars as $car) : ?>
                    <div class="car">
                        <img src="images/cars/<?php echo $car['image_thumb'];?>.jpeg" alt="<?php echo $car['image_thumb'];?>">
                        <div class="car-options">
                            <h5 class="car-title"><?php echo $car['make'].' '.$car['model']; ?></h5>  
                            <div class="car-buttons">
                                <button type="button" class="car-button">View</button>
                                <button type="button" class="car-button">Enquire</button>
                            </div>
                            <small class="car-price"><?php echo 'R'.$car['price']; ?></small>    
                            <small><?php echo $car['mileage'].'km' ?></small>             
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div> 
    </main>
    <footer>
        <?php require_once 'view/footer.php'; ?>
    </footer>
    <!-- <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
    <script src="node_modules\jquery\dist\jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <!-- <script src="node_modules\popper.js\dist\popper.min.js"></script> -->
    <script src="node_modules\ion-rangeslider\js\ion.rangeSlider.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script> -->
    <script src="js\nav.js"></script>
    <script src="js\carousel.js"></script>
    <script src="js\filter.js"></script>
</body>
</html>