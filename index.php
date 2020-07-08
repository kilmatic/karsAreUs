<?php
    require_once 'util/main.php';
    require_once 'util/text_markup.php';  
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
        <?php require_once 'view/filter.php'; ?>
        <?php require_once 'view/showcars.php'; ?> 
    </main>
    <footer>
        <?php require_once 'view/footer.php'; ?>
    </footer>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
    <script src="node_modules\jquery\dist\jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="node_modules\ion-rangeslider\js\ion.rangeSlider.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script> -->
    <script src="js\nav.js"></script>
    <script src="js\carousel.js"></script>
    <script src="js\filter.js"></script>
</body>
</html>