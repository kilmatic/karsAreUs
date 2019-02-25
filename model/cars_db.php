<?php
    
    function get_cars_by_ref($ref)
    {
        global $dbCon;
        $ref_esc = $dbCon->escape_string($ref);
        $result = $dbCon->query("SELECT * FROM cars WHERE ref = '$ref_esc'");
        if($result == false)
        {
            display_db_error($dbCon->error);
        }
        $cars = array();
        for($i = 0; $i < $result->num_rows; $i++)
        {
            $car = $result->fetch_assoc();
            $cars[] = $car;
        }
        $result->free();
        return $cars;
    }

    function get_cars($ref)
    {
        global $dbCon;
        $ref_esc = $dbCon->escape_string($ref);
        $result = $dbCon->query("SELECT * FROM cars WHERE ref = '$ref_esc'");
        if($result == false)
        {
            display_db_error($dbCon->error);
        }
        $car = $result->fetch_assoc();
        return $cars;
    }

    function add_cars($ref, $make, $model, $man_year, $mileage, $_location, $price, $colour, $transmission, $car_description)
    {
        global $dbCon;
        $query = 'INSERT INTO cars
                    (ref, make, model, man_year, mileage, _location, price, colour, transmission, car_description)
                  VALUES
                    (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $statement = $dbCon->prepare($query);
        if($statement == false)
        {
            display_db_error($dbCon->error);
        }
        $statement->bind_param($ref, $make, $model, $man_year, $mileage, $_location, $price, $colour, $transmission, $car_description);
        $success = $statement->execute();
        if($success)
        {
            $result = $dbCon->affected_rows;
            $statement->close();
            return $result;
        }
        else
        {
            display_db_error($dbCon->error);
        }
    }

    function update_cars($ref, $make, $model, $man_year, $mileage, $_location, $price, $colour, $transmission, $car_description)
    {
        global $dbCon;
        $query = 'UPDATE cars 
                  SET ref = :ref, make = :make, model = :model, man_year = :man_year, 
                  mileage = :mileage, _location = :_location, price = :price, colour = :colour, 
                  transmission = :transmission, car_description = :car_description
                  WHERE ref = :ref';
        $statement = $dbCon->prepare($query);
        if($statement == false)
        {
            display_db_error($dbCon->error);
        }
        $statement->bind_param($ref, $make, $model, $man_year, $mileage, $_location, $price, $colour, $transmission, $car_description);
        $success = $statement->execute();
        if($success)
        {
            $count = $dbCon->affected_rows;
            $statement->close();
            return $count();
        }
        else
        {
            display_db_error($dbCon->error);
        }
    } 

    function delete_cars($ref)
    {
        global $dbCon;
        $statement = $dbCon->prepare('DELETE FROM cars WHERE ref = ?');
        if($statement == false)
        {
            display_db_error($dbCon->error);
        }
        $statement->bind_param("i", $ref);
        $success = $statement->execute();
        if($success)
        {
            $count = $dbCon->affected_rows;
            $statement->close();
            return $count;
        }
        else
        {
            display_db_error($dbCon->error);
        }
    }

    ?>