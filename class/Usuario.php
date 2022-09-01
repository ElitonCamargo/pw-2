<?php
require_once 'Conexao.php';
class Usuario{
    public $email;
    public $senha;
    public $nome;

    public function cadastrar(){
        $cx = new Conexao();
        $cmdSql = 'INSERT INTO usuario(email, senha, nome) VALUES (:email, :senha, :nome)';
        $dados =[
            ':email'=>$this->email,
            ':senha'=>$this->senha,
            ':nome' =>$this->nome,
        ];
        if($cx->insert($cmdSql,$dados)){
            return true;
        }
        return false;
    }

    
}