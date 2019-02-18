<?php
    function get_cars()
    {
        global $db;
        try
        {
            $statement = $db->prepare('SELECT * FROM cars ORDER BY make');
            $statement->execute();
            $result = $statement->fetchAll();
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
?>