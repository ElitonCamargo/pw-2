<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Rede foto</title>
</head>

<body>

    <nav class="bg-light">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cadastro</a>
            </li>
        </ul>
    </nav>

    <div class="container">


        <fieldset>
            <legend>Cadastro de usuário</legend>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nome</label>
                        <input type="text" class="form-control" placeholder="Nome Completo">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Senha</label>
                        <input type="password" class="form-control" placeholder="Senha">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Foto</label>
                        <input type="file" class="form-control-file">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </fieldset>

        <fieldset>
            <legend class="mb-4">Usuários cadastrados</legend>
            <div class="card-columns">

                <div class="card">
                    <img class="card-img-top" src=".../100px160/" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Título do card</h5>
                        <p class="card-text">Um conteúdo adicional. Este conteúdo é um pouco maior.</p>
                    </div>
                </div> 

            </div>
        </fieldset>
    </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>