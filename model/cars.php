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


?>