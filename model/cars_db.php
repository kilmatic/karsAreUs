<?php
require_once 'model/db.php';

function get_cars($result)
{
    global $dbCon;
    try
    {
        $query = 'SELECT * FROM cars WHERE ref = :ref';
        $statement = $dbCon->prepare($query);
        $statement->bindValue(':ref', $ref);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        $statement->closeCursor();
        return $result;
    }
    catch(PDOexception $e)
    {
        display_db_error($e->getMessage());
    }
}

function add_cars($ref, $make, $model, $man_year, $mileage, $_location, $price, $colour, $transmission)
{
    global $db;
    $query = 'INSERT INTO cars
                (ref, make, model, man_year, mileage, _location, price, colour, transmission)
              VALUES
                (:ref, :make, :model, :man_year, :mileage, :_location, :price, :colour, :transmission)';
    try
    {
        $statement = $db->prepare($query);
        $statement->bindValue(':ref', $ref);
        $statement->bindValue(':make', $make);
        $statement->bindValue(':model', $model);
        $statement->bindValue(':man_year', $man_year);
        $statement->bindValue(':mileage', $mileage);
        $statement->bindValue(':_location', $_location);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':colour', $colour);
        $statement->bindValue(':transmission', $transmission);
        $statement->execute();
        $statement->closeCursor();
        $car_ref = $db->lastInsertedId();
        return $car_ref;
    }
    catch(PDOexception $e)
    {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function update_cars($ref, $make, $model, $man_year, $mileage, $_location, $price, $colour, $transmission)
{
    global $db;
    $query = 'UPDATE cars SET ref = :ref, make = :make, model = :model, man_year = :man_year, mileage = :mileage, _location = :_location, price = :price, colour = :colour, transmission = :transmission 
              WHERE ref = :ref';
    try
    {
        $statement = $db->prepare($query);
        $statement->bindValue(':ref', $ref);
        $statement->bindValue(':make', $make);
        $statement->bindValue(':model', $model);
        $statement->bindValue(':man_year', $man_year);
        $statement->bindValue(':mileage', $mileage);
        $statement->bindValue(':_location', $_location);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':colour', $colour);
        $statement->bindValue(':transmission', $transmission);
        $statement->execute();
        $statement->closeCursor();
        $car_ref = $db->lastInsertedId();
        return $car_ref;
    }   
    catch(PDOexception $e)
    {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }        
}

function delete_cars($ref)
{
    global $db;
    try
    {
        $statement = $db->prepare('DELETE FROM cars WHERE ref = :ref');
        $statement->bindValue(':ref', $ref);
        $row_count = $statement->execute();
        $statement->clodeCursor();
        return $row_count;
    }
    catch(PDOexception $e)
    {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

    /*
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
    */
?>