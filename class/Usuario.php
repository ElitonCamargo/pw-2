<?php
require_once 'Conexao.php';
class Usuario{
    public $id;
    public $nome;

    public function cadastrar(){
        $cx = new Conexao();
        $cmdSql = 'INSERT INTO usuario(nome) VALUES (:nome)';        
        if($cx->insert($cmdSql,[':nome'=>$this->nome])){
            $this->id = $cx->getLastInsertId();
            return true;
        }
        return false;
    }

    
}