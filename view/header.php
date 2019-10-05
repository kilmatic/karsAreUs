<?php
    require_once 'util/main.php';
    require_once 'util/text_markup.php';    
    require_once 'model/db.php';
    require_once 'controller/get_cars.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KarsAreUs</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="css\style.css">
</head>
<body>
    <?php require_once 'view\nav.php' ?>    
    <?php require_once 'view\carousel.php'; ?>