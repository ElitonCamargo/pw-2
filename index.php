<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // require_once 'classe/Pessoa.php';
        // $pessoa = new Pessoa();
        // $pessoa->email = "jose@hotmail.com";
        // $pessoa->nome = "José Silva";
        // $pessoa->telefone = "23423432";
        // $pessoa->foto = "gdsfgdfg.png";
        // $pessoa->cadastrar();
        if(isset($_POST['btnCad'])){
            $pessoa = new Pessoa();
            $pessoa->email = $_POST['txt_email'];
            $pessoa->nome = $_POST['txt_nome'];
            $pessoa->telefone = $_POST['txt_telefone'];
            $pessoa->foto = $_POST['txt_foto'];
            if($pessoa->cadastrar()){
                echo '<script>alert("Pessoa cadastrada!!!")</script>';
            }
            else{
                echo '<script>alert("Erro ao cadastrar!!!")</script>';                
            }
        }
    ?>
    <form method="post">
        <input type="submit" value="Cadastrar" name="btnCad">
    </form>
</body>
</html>
