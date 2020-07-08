<?php
require_once 'db.php';

class Cars extends Database {

    public function getCars(){
        $query = 'SELECT * FROM cars';
        try {
            $statement = $this->dbCon->prepare($query);
            $statement->execute();
            return $statement->fetchAll();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getCarMake(){
        $query = 'SELECT DISTINCT(make) FROM cars ORDER BY price ASC';
        try {
            $statement = $this->dbCon->prepare($query);
            $statement->execute();
            return $statement->fetchAll();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getCarModel(){
        $query = 'SELECT DISTINCT(model) FROM cars ORDER BY model ASC';
        try {
            $statement = $this->dbCon->prepare($query);
            $statement->execute();
            return $statement->fetchAll();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getCarLocation(){
        $query = 'SELECT DISTINCT(location) FROM cars ORDER BY make DESC';
        try {
            $statement = $this->dbCon->prepare($query);
            $statement->execute();
            return $statement->fetchAll();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getCarMileage(){
        $query = 'SELECT DISTINCT(mileage) FROM cars ORDER BY mileage ASC';
        try {
            $statement = $this->dbCon->prepare($query);
            $statement->execute();
            return $statement->fetchAll();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getCarYear(){
        $query = 'SELECT DISTINCT(man_year) FROM cars ORDER BY man_year DESC';
        try {
            $statement = $this->dbCon->prepare($query);
            $statement->execute();
            return $statement->fetchAll();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function insertCar($make, $model, $man_year, $mileage, $location, $price, $colour, $transmission, $image_thumb, $details){
        $query = 'INSERT INTO cars
                    (make, model, man_year, mileage, location, price, colour, transmission, image_thumb, car_details)
                VALUES
                    (:make, :model, :man_year, :mileage, :location, :price, :colour, :transmission, :image_thumb, :car_details)';
        try {
            $statement = $this->dbCon->prepare($query);
            $statement->bindValue(':make', $make);
            $statement->bindValue(':model', $model);
            $statement->bindValue(':man_year', $man_year);
            $statement->bindValue(':mileage', $mileage);
            $statement->bindValue(':location', $location);
            $statement->bindValue(':price', $price);
            $statement->bindValue(':colour', $colour);
            $statement->bindValue(':transmission', $transmission);
            $statement->bindValue(':image_thumb', $image_thumb);
            $statement->bindValue(':car_details', $details);
            $statement->execute();            
            $statement->closeCursor();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function updateCar($make, $model, $man_year, $mileage, $location, $price, $colour, $transmission){
        $query = 'UPDATE cars SET make = :make, model = :model, man_year = :man_year, mileage = :mileage, location = :location, price = :price, colour = :colour, transmission = :transmission 
                WHERE ref = :ref';
        try {
            $statement = $this->dbCon->prepare($query);
            $statement->bindValue(':make', $make);
            $statement->bindValue(':model', $model);
            $statement->bindValue(':man_year', $man_year);
            $statement->bindValue(':mileage', $mileage);
            $statement->bindValue(':location', $location);
            $statement->bindValue(':price', $price);
            $statement->bindValue(':colour', $colour);
            $statement->bindValue(':transmission', $transmission);
            $statement->execute();
            $statement->closeCursor();
        } catch (PDOexception $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }        
    }

    public function deleteCar($ref){
        try {
            $statement = $this->dbCon->prepare('DELETE FROM cars WHERE ref = :ref');
            $statement->bindValue(':ref', $ref);
            $row_count = $statement->execute();
            $statement->clodeCursor();
            return $row_count;
        } catch (PDOexception $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    } 
}