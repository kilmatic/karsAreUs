<?php   
class Database{
    public $connected;
    protected $dbCon;

    public function __construct($username = 'root', $pword = 'kilmatic', $dsn = 'mysql:host=localhost;dbname=vrrrparr;', $options = []){
        $this->connected = true;
        try 
        {
            $this->dbCon = new PDO($dsn, $username, $pword, $options); 
            $this->dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dbCon->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            echo "<script> console.log('Connection Successful...'); </script>";
        } 
        catch(PDOexception $e) 
        {
            throw new Exception($e->getMessage());
            
        }
    }

    public function Disconnect(){
        $this->dbCon = null;
        $this->connected = false;
    }

    public function getRow($query, $params = []){
        try {
            $statement = $this->dbCon->prepare($query);
            $statement->execute($params);
            return $statement->fetch();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getRows($query, $params = []){
        try {
            $statement = $this->dbCon->prepare($query);
            $statement->execute($params);
            return $statement->fetchAll();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function insertRow($query, $params = []){
        try {
            $statement = $this->dbCon->prepare($query);
            $statement->execute($params);
            return true;
        } catch (\Throwable $th) {
            throw new Exception($e->getMessage());
        }
    }

    public function updateRow($query, $params = []){
        $this->insertRow($query, $params);        
    }

    public function deleteRows($query, $params = []){
        $this->insertRow($query, $params);        
    }
   
    /*
    $dsn = 'mysql:host=localhost;dbname=vrrrparr';
    $username = 'root';
    $pword = 'kilmatic';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    try 
    {
        $dbConCon = new PDO($dsn, $username, $pword, $options); 
        echo "<script> console.log('Connection Successful...'); </script>";
    } 
    catch(PDOexception $e) 
    {
        $error_msg = $e->getMessage();
        echo "<p> Not connected to database: $error_msg </p>";
        exit;
    }
    */
}    
?>