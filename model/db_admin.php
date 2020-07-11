<?php
require_once 'db.php';

class Admin extends Database {

    public function getAdmin(){
        $query = 'SELECT * FROM admins';
        try {
            $statement = $this->dbCon->prepare($query);
            $statement->execute();
            return $statement->fetchAll();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function createAdmin($admin_id, $admin_firstName, $admin_lastName, $admin_email, $admin_password, $remember_token){
        $query = 'INSERT INTO admins
                    (admin_id, admin_firstName, admin_lastName, admin_email, admin_password, remember_token)
                VALUES
                    (:admin_id, :admin_firstName, :admin_lastName, :admin_email, :admin_password, :remember_token)';
        try {
            $statement = $this->dbCon->prepare($query);
            $statement->bindValue(':admin_id', $admin_id);
            $statement->bindValue(':admin_firstName', $admin_firstName);
            $statement->bindValue(':admin_lastName', $admin_lastName);
            $statement->bindValue(':admin_email', $admin_email);
            $statement->bindValue(':admin_pasword', $admin_password);
            $statement->bindValue(':admin_remember', $remember_token);
            $statement->execute();
            $statement->closeCursor();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function updateAdmin($admin_id, $admin_firstName, $admin_lastName, $admin_email, $admin_password, $remember_token){
        $query = 'UPDATE admins SET admin_id = :admin_id, admin_firstName = :admin_firstName, admin_lastName = :admin_lastName, admin_email = :admin_email, admin_password = :admin_password, remember_token = :remember_token
                WHERE admin_id = :admin_id';
        try {
            $statement = $this->dbcon->prepare($query);
            $statement->bindValue(':admin_id', $admin_id);
            $statement->bindValue(':admin_firstName', $admin_firstName);
            $statement->bindValue(':admin_lastName', $admin_lastName);
            $statement->bindValue(':admin_email', $admin_email);
            $statement->bindValue(':admin_pasword', $admin_password);
            $statement->bindValue(':admin_remember', $remember_token);
            $statement->execute();
            $statement->closeCursor();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function deleteAdmin($admin_id){
        try {
            $statement = $this->dbCon->prepare('DELETE FROM admins WHERE admin_id = :admin_id');
            $statement->bindValue(':admin_id', $admin_id);
            $row_count = $statement->execute();
            $statement->clodeCursor();
            return $row_count;
        } catch (PDOexception $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }
}