<?php
    require_once 'util/main.php';
    require_once 'util/text_markup.php';
    require_once 'model/cars_db.php';
    require_once 'model/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KarsAreUs</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color:rgba(61, 61, 61, 0.5)">
        <a class="navbar-brand" href="#">KarsAreUs</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-center mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $app_path; ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <?php
                    if(!isset($_SERVER['PHP_AUTH_USER']))
                    {
                        # Will require login and register pages in the views folder...
                        # Must put proper href's...
                        echo '<li class="nav-item"><a class="nav-link" href="#">Login</a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="#">Register</a></li>';
                    }
                    else
                    {
                        # Must create a user's dashboard...
                        # Must put proper href...
                        echo "<h3 class=\"nav-item\"><a class=\"nav-link\" href=\"#\">{$_SERVER['PHP_AUTH_USER']}</a></h3>";
                    }
                ?>
            </ul>
        </div>
    </nav>
    <div class="bd-example cover">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <!-- <li data-target="#carouselExampleCaptions" data-slide-to="2"></li> -->
            </ol>
            <div class="carousel-inner" style="background-color:rgba(61, 61, 61, 0.5)">
                <div class="carousel-item active" style="height:350.22px">
                    <!--<img src="https://ik.imagekit.io/83dhckxhugrjz/telescope_SkwXnisQN.jpg" class="d-block w-100" alt="...">-->
                    <img src="images\slide\C1GJmoc.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item" style="height:350.22px">
                    <!--<img src="https://ik.imagekit.io/83dhckxhugrjz/default-image.jpg" class="d-block w-100" alt="...">-->
                    <img src="images\slide\5HL2Nyn.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <!-- <div class="carousel-item" style="height:100%">
                    <img src="https://ik.imagekit.io/83dhckxhugrjz/hall_H13Q3ismV.jpg" class="d-block w-100" alt="...">
                    <img src="images\slide\download.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div> -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php
                    require_once 'model/cars_db.php';
                ?>
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
    <?php require_once 'view\footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="node_modules\bootstrap\js\src\jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="node_modules\bootstrap\js\src\popper.min.js"></script>
    <script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
    <script src="js\home.js"></script>
    <script>
        let vp_height = $(window).height();
        $(window).on('load resize',function(){
            $('.bd-example .cover .carousel-item').css({"height":vp_height.toString()});
        });
    </script>
</body>
</html>