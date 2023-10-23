<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php     
        if(isset($_POST['btnCad'])){
            require_once 'classe/Pessoa.php';
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
        <input type="text" name="txt_email"     placeholder="E-mail"><br>
        <input type="text" name="txt_nome"      placeholder="Nome"><br>
        <input type="text" name="txt_telefone"  placeholder="Telefone"><br>
        <input type="text" name="txt_foto"      placeholder="Link foto"><br>
        <input type="submit" value="Cadastrar" name="btnCadP">
    </form>
</body>
</html>
