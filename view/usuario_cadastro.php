        <?php
            require_once 'class/Usuario.php';
            $usuario = new Usuario();
            if(isset($_POST['btnCadastrar'])){
                $usuario->nome = $_POST['nome'];
                if($usuario->cadastrar()){
                    echo'
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading">Cadastro realizado com sucesso!!!</h4>
                    <hr>
                    <p class="mb-0">Id:'.$usuario->id. '; Nome: '.$usuario->nome.'</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    ';
                }
            }

        ?>
        <fieldset>
            <legend>Cadastro de usuário</legend>
            <form method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" placeholder="Nome Completo">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Foto</label>
                        <input type="file" class="form-control-file">
                    </div>
                </div>
                <button type="submit" name="btnCadastrar" class="btn btn-primary">Entrar</button>
            </form>
        </fieldset>