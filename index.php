<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="txtNome" placeholder="nome">
        <br>
        <input type="text" name="txtEmail" placeholder="email">
        <br>
        <input type="text" name="txtTelefone" placeholder="telefone">
        <br>
        <input type="text" name="txtFoto" placeholder="foto">
        <br>
        <input type="submit" name="btnCadastrar">
    </form>
</body>
</html>
<?php
    if(isset($_POST['btnCadastrar'])){
        require_once ('classe/Pessoa.php');
        $pessoa = new Pessoa();
        $pessoa->nome       = $_POST['txtNome'];
        $pessoa->email      = $_POST['txtEmail'];
        $pessoa->telefone   = $_POST['txtTelefone'];
        $pessoa->foto       = $_POST['txtFoto'];
    
        var_dump($pessoa->cadastrar());
    }
