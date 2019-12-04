<?php

class Connexion {
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $db;

    public function __construct() {
        $this->host = 'localhost';
        $this->dbname = 'mysql';
        $this->username = 'root';
        $this->password = 'tiger';
        
        $this->$db = mysqli_connect($this->dbname, $this->username, $this->password, null);
    }

    public function getDb() {
        return $this->$db;
    }

    public function getInfoDb() {
        return mysqli_connect($this->dbname, $this->username, $this->password, null);
    }
}
?>