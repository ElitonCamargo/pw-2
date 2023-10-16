<?php
class DataBase{

    function __construct()
    {
        PDO("mysql:host=servidor;dbname=baseDeDados;port=porta", "usuario", "senha");
    }
}