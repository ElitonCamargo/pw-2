<?php
    require_once 'funcoes.php';
    require_once 'class/Usuario.php';
    $usuario = new Usuario();
    if(isset($_POST['btnCadastrar'])){
        $usuario->nome = $_POST['nome'];
        if($usuario->cadastrar()){
            alerta('Cadastro realizado com sucesso!!!', $usuario->id. '; Nome: '.$usuario->nome);                    
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
                <input type="text" name="txtSenha" class="form-control" placeholder="Senha">
            </div>
            <div class="form-group col-md-6">
                <label>Nome</label>
                <input type="text" name="txtNome" class="form-control" placeholder="Nome Completo">
            </div>
            <div class="form-group col-md-6">
                <label>Foto</label>
                <input type="file" class="form-control-file">
            </div>
        </div>
        <button type="submit" name="btnCadastrar" class="btn btn-primary">Entrar</button>
    </form>
</fieldset>