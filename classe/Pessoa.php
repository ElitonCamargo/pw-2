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
        $cmdSql = 'INSERT INTO pessoa(email, nome, telefone, foto) VALUES (:email, :nome, :telefone, :foto)';
        $cx_preparado = $cx->prepare($cmdSql);
        $cx_preparado->bindValue(':email',$this->email);
        $cx_preparado->bindValue(':nome',$this->nome);
        $cx_preparado->bindValue(':telefone',$this->telefone);
        $cx_preparado->bindValue(':foto',$this->foto);
        return $cx_preparado->execute();
    }
}