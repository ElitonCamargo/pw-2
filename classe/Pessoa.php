<?php
require_once ('DataBase.php');
class Pessoa{
    public $id; 
    public $email; 
    public $nome; 
    public $telefone; 
    public $foto;

    public function cadastrar(){
        $cx = (new DataBase())->getCx();
    }
}