<?php
require_once "Conexao.php";
class Cliente{
    
    public $id;
    public $nome;
    public $email;
    public $senha;
    public $endereco;
    public $imagem;


    public function cadastrar(){
        $cx = new Conexao();
        $cmdSql = 'INSERT INTO cliente(nome, email, senha, endereco, imagem) VALUES (:nome, :email, :senha, :endereco, :imagem)';
        $arrayDados = [            
            ':nome' => $this->nome, 
            ':email' => $this->email, 
            ':senha' => $this->senha, 
            ':endereco' => $this->endereco, 
            ':imagem' => $this->imagem
        ];
        return $cx->insert($cmdSql,$arrayDados);
    }
}