<?php
    require_once 'funcoes.php';
    require_once 'class/Usuario.php';
    require_once 'class/Upload.php';
    $usuario = new Usuario();
    
    if(isset($_POST['btnCadastrar'])){
        $usuario->email = $_POST['txtEmail'];
        $usuario->senha = $_POST['txtSenha'];
        $usuario->nome = $_POST['txtNome'];

        var_dump($_FILES['foto']);
        
        if($usuario->cadastrar()){
            $upload = new Upload($_FILES['foto'],'img/');
            echo $upload->salvarImagem();            
            alerta('Cadastro','Cadastro realizado com sucesso!!! <p>Nome: '.$usuario->nome.'</p>');                   
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