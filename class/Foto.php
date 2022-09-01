<?php
require_once 'Conexao.php';
class Foto{
    public $id;	
    public $fk_usuario;	
    public $link;	
    public $data_upload;

    public function cadastrar(){
        $cx = new Conexao();
        $cmdSql = 'INSERT INTO foto(fk_usuario, link) VALUES (:fk_usuario,:link)';
        $dados =[
            ':fk_usuario'=>$this->fk_usuario,
            ':link'=>$this->link
        ];
        if($cx->insert($cmdSql,$dados)){
            return true;
        }
        return false;
    }
}