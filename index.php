<?php
    require_once ('classe/DataBase.php');

    $cx = (new DataBase())->getCx();

    var_dump($cx);