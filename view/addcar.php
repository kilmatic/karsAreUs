<link rel="stylesheet" href="../css/style.css">
<div class="car-form">
    <form action="..\controller\car_controller.php" method="post" enctype="multipart/form-data">
        <label for="make">Make</label><br>
        <input type="text" name="make" id="make"><br>
        <label for="model">Model</label><br>
        <input type="text" name="model" id="model"><br>
        <label for="year">Year</label><br>
        <input type="month" name="year" id="year"><br>
        <label for="mileage">Mileage</label><br>
        <input type="number" name="mileage" id="mileage"><br>
        <label for="location">Location</label><br>
        <input type="text" name="location" id="location"><br>
        <label for="price">Price</label><br>
        <input type="number" name="price" id="price"><br>
        <label for="color">Colour</label><br>
        <input type="text" name="color" id="color"><br>
        <label for="transmission">Transmission</label><br>
        <input type="text" name="transmission" id="transmission"><br>
        <label for="details">Car details</label><br>
        <textarea name="details" id="details" cols="0" rows="10"></textarea><br><br>
        <input type="file" name="thumb" id="thumb"><br><br>
        <input type="submit" value="Submit" name="addcar" class="car-button">
    </form>
</div>