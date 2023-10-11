<?php
    include_once("conexao.php"); //inclui o arquivo de conexão com o banco de dados

    //TRATAMENTO DE ERROS
if(!isset($_GET["id"])) //verifica se existe a chave "id" no array $_GET
    header("location: index.php"); //caso não extista, redireciona para index.php

if($_GET["id"]=="") //verifica se "id" é vazio
    header("location: index.php"); //caso seja vazio, redireciona para index.php
    // FIM TRATAMENTO DE ERROS

    $id = $_GET["id"]; // chave primária do registro procurado, neste caso 'pessoa'
    $sql = "SELECT pk_carro, modelo, marca, km, ano, cor, quantos_lugares, combustivel, cambio,  motor FROM carro WHERE pk_carro=".$id;
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);


    // echo "<prev>";
    // var_dump($row);
    // echo "</prev>";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CRUD - UPDATE</title>
</head>
<body>
    <div class="container">
        <h1>Veja os dados abaixo e, altere o que desejar!</h1>

        <form action="alterar.php" method="post">
     
            <div class="mb-3">
                <label for="modelo" class="form-label">modelo</label>
                <input type="text" class="form-control" id="modelo" aria-describedby="modelo" name="modelo" value="<?php echo $row["modelo"]; ?>">
                <input type="hidden" name="id" value="<?php echo $row["pk_carro"] ?>">
            </div>

            <div class="mb-3">
                <label for="marca" class="form-label">marca</label>
                <input type="text" class="form-control" id="modelo" aria-describedby="marca" name="marca" value="<?php echo $row["marca"]; ?>">
                <input type="hidden" name="id" value="<?php echo $row["pk_carro"] ?>">
            </div>

            <div class="mb-3">
                <label for="km" class="form-label">km</label>
                <input type="text" class="form-control" id="km" aria-describedby="km" name="km" value="<?php echo $row["km"]; ?>">
            </div>

            <div class="mb-3">
                <label for="ano" class="form-label">ano</label>
                <input type="int" class="form-control" id="ano" name="ano" value="<?php echo $row["ano"];  ?>">
            </div>

            <div class="mb-3">
                <label for="cor" class="form-label">cor</label>
                <input type="text" class="form-control" id="cor" name="cor" value="<?php echo $row["cor"];  ?>">
            </div>

            <div class="mb-3">
                <label for="quantos_lugares" class="form-label">Quantos lugares</label>
                <select name="quantos_lugares" id="quantos_lugares" class="form-select">
                    <option value="M" <?php echo $row["quantos_lugares"]=="2" ? "selected" : ""; ?> >2</option>
                    <option value="F" <?php echo $row["quantos_lugares"]=="5" ? "selected" : ""; ?>>5</option>
                    <option value="T" <?php echo $row["quantos_lugares"]=="7" ? "selected" : ""; ?>>7</option>
                </select>

            <div class="mb-3">
                <label for="combustivel" class="form-label">Combustivel </label>
                <select name="combustivel" id="combustivel" class="form-select">
                    <option value="M" <?php echo $row["combustivel"]=="2" ? "selected" : ""; ?> >Etanol</option>
                    <option value="F" <?php echo $row["combustivel"]=="5" ? "selected" : ""; ?>>Gasolina</option>
                    <option value="T" <?php echo $row["combustivel"]=="7" ? "selected" : ""; ?>>Diesel</option>
                </select>

            <div class="mb-3">
                <label for="cambio" class="form-label">cambio </label>
                <select name="cambio" id="cambio" class="form-select">
                    <option value="M" <?php echo $row["cambio"]=="2" ? "selected" : ""; ?> >Automatico</option>
                    <option value="F" <?php echo $row["cambio"]=="5" ? "selected" : ""; ?>>Manual</option>
                </select>

            <div class="mb-3">
                <label for="motor" class="form-label">motor</label>
                <input type="text" class="form-control" id="motor" name="motor" value="<?php echo $row["motor"];  ?>">
            </div>
            
            <button type="submit" class="btn btn-primary">ENVIAR</button>

        </form>
        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>