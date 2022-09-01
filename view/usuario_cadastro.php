<?php
    require_once 'funcoes.php';
    require_once 'class/Usuario.php';
    require_once 'class/Upload.php';
    $usuario = new Usuario();
    $foto = new Foto();
    
    if(isset($_POST['btnCadastrar'])){
        $usuario->email = $_POST['txtEmail'];
        $usuario->senha = $_POST['txtSenha'];
        $usuario->nome = $_POST['txtNome'];

        var_dump($_FILES['foto']);
        
        if($usuario->cadastrar()){
            $upload = new Upload($_FILES['foto'],'img/');
            $foto->link = $upload->salvarImagem(); 
            $foto->fk_usuario = $usuario->email;
            $msg = 'Usuário cadastrado com sucesso!!!';
            if($foto->cadastrar()){
                $msg = "Usuário e foto cadastrado com sucesso!!!";
            }
            $msg+= "<p>Nome: $usuario->nome</p>";
            alerta('Cadastro',$msg);                   
        }
    }

?>
<fieldset>
    <legend>Cadastro de usuário</legend>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-row">                    
            <div class="form-group col-md-6">
                <label>E-mail</label>
                <input type="text" name="txtEmail" class="form-control" placeholder="E-mail">
            </div>
            <div class="form-group col-md-6">
                <label>Senha</label>
                <input type="password" name="txtSenha" class="form-control" placeholder="Senha">
            </div>
            <div class="form-group col-md-6">
                <label>Nome</label>
                <input type="text" name="txtNome" class="form-control" placeholder="Nome Completo">
            </div>
            <div class="form-group col-md-6">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control-file">
            </div>
        </div>
        <button type="submit" name="btnCadastrar" class="btn btn-primary">Entrar</button>
    </form>
</fieldset>