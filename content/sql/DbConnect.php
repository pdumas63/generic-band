<?php
class DbConnect {
    private $host ='mariadb';
    private $dbName ='niwee';
    private $user ='nKqRbHRcUsUYkX9FapA4HLYQ';
    private $password ='a7Hxy865CBydz9kUBM2tXGkF';
    
    protected $_pdo;

    public function __construct() {
       
        try {
            //try to connect to the database
            $this->_pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->dbName.';',$this->user,$this->password);

        }catch(PDOException $error) {
            //return an error message if try doesn't work
            echo 'connexion database error : '. $error->getMessage();

        }

    }
}