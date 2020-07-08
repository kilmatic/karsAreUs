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
}    