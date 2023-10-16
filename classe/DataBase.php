<?php
class DataBase{

    function __construct()
    {
        $host = 'localhost';
        $dbname = '';
        $port = '3306';
        $user = 'root';
        $password = '';
        return new PDO("mysql:host=$host;dbname=$dbname;port=$port", $user, $password);
        
    }
}