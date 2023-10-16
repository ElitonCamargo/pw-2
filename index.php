<?php
    require_once ('classe/DataBase.php');
    $db = new DataBase();
    var_dump($db);
    var_dump($db->getCx());
