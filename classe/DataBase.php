<?php
class DataBase{
    public $host;
    public $dbname;
    public $port;
    public $user;
    public $password;

    function __construct()
    {
        $this->host = 'localhost';
        $this->dbname = 'pw2';
        $this->port = '3306';
        $this->user = 'root';
        $this->password = '';        
    }
    
    public function getCx(){
        return new PDO("mysql:host=$this->host;dbname=$this->dbname;port=$this->port", $this->user, $this->password);   
    }
}