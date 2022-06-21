<?php
    $cx = new PDO('mysql:host=localhost;dbname=aulapw-2;port=3306', 'root', '');
    if(isset($_POST['btnCadF'])){
        $fabric = $_POST['txtFabricante'];
        if(strlen($fabric)>2){
            $cmdSql = "INSERT INTO fabricante(nome) VALUES('$fabric')";
            $insertPronto = $cx->prepare($cmdSql);
            if($insertPronto->execute()){
                echo "<script>alert('Cadastrado com sucesso!!!')</script>";
            }
        }else{
            echo "<script>alert('Erro: fabricante não informado!!!')</script>";
        }
    }

    $cmdSql = "SELECT * FROM fabricante";
    $selectPreparado = $cx->prepare($cmdSql);
    $dados = false;
    if($selectPreparado->execute()){
        if($selectPreparado->rowCount() > 0){
            $dados = $selectPreparado->fetchAll(PDO::FETCH_CLASS);
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        .centro {
            text-align: center;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Fabricante</legend>
        <form method="post">
            <input type="text" name="txtFabricante">
            <input type="submit" value="Cadastrar" name="btnCadF">
        </form>  
        <table>
            <tr>
                <th class="centro" colspan="2">Fabricante</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Fabricante</th>
            </tr>
            <?php
            if($dados){
                foreach ($dados as  $objFabric) {
                    echo '
                    <tr>
                        <td>'.$objFabric->id.'</td>
                        <td>'.$objFabric->nome.'</td>
                    </tr>';
                }
            }
            ?>
        </table>
    </fieldset>
   
    <fieldset>
        <legend>Cadastro de veículos</legend>
        <form action="" method="post">
                
            <select name="cbxFabricante">
                <option value="0">Fabricante</option>
                <?php
                if($dados){
                    foreach ($dados as  $objFabric) {
                        echo '
                        <option value="'.$objFabric->id.'">'.$objFabric->nome.'</option>
                        ';
                    }
                }
                ?>
            </select>
            <input type="text" name="txtModelo" placeholder="Modelo">
            <input type="number" name="" placeholder="Ano">
            <input type="submit" value="Cadastrar" name="btnCadV">
        </form>
            
        <table>
            <tr>
                <th class="centro" colspan="4">Veículos</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Fabricante</th>
                <th>Modelo</th>
                <th>Ano</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Exemplo</td>
                <td>Exemplo</td>
                <td>Exemplo</td>
            </tr>
        </table>
    </fieldset>

</body>
</html>