<div class="jumbotron" style="margin-top:.5rem;padding:.5rem .2rem;border:1px solid green;background-color:#fff;">    
    <div class="row col-md-6 clearfix float-left" style="height:300px;border:1px solid red;margin-left:5px;">
        <div class="col-md-12" style="height:32px;">
            <div class="d-flex justify-content-center" style="border:1px solid blue;">
                <span class="font-weight-bold mr-2 mt-1">R80000.00</span>
                <form action="#" method="post" class="range-field w-75">                            
                    <input type="range" min="0" max="100" id="customRange" class="custom-range">
                </form>
                <span class="font-weight-bold ml-2 mt-1">R2000000.00</span>
            </div>
        </div>
        <fieldset class="form-group">
            <select class="form-control">
                <option>Select Car Brand</option>                
                <?php foreach($get_cars_by_model as $car) : ?>
                    <option><?php echo $car['make']; ?></option>
                <?php endforeach ?>
            </select>
        </fieldset>
        <fieldset class="form-group">
            <select class="form-control">
                <option>Select Model</option>
                <?php foreach($get_cars as $car) : ?>
                    <option><?php echo $car['model'] ?></option>
                <?php endforeach ?>
            </select>
        </fieldset>
    </div>
    <div class="row col-md-5 clearfix float-right" style="height:300px;border:1px solid green;margin-right:35px;">
        <div class="container">
            <div class="media">
                <div class="card">
                    <div class="card-block">
                        <img src="<?php echo $car['image_thumb'];?>.jpeg" alt="" class="media-object">                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
