<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'class/Cliente.php';
        $cliente = new Cliente();
        $cliente->nome = 'Eliton';
        $cliente->email = 'camargoliveira';
        $cliente->senha = '#ER$%$#@#TGVgvsdffsd';
        $cliente->endereco = 'Rua Joaquim Antunes de Souza 66';
        $cliente->imagem = 'https://avatars.githubusercontent.com/u/18017848?v=4';

        var_dump($cliente->cadastrar());

    ?>
</body>
</html>