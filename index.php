<?php
    require_once ('classe/DataBase.php');
    $db = new DataBase();

    $cx = $db->getCx();

    $cx_preparada = $cx->prepare("SELECT * FROM pessoa");
    $cx_preparada->execute();

    if($cx_preparada->rowCount() > 0){
        $dados = $cx_preparada->fetchAll();
        var_dump($dados);
    }
