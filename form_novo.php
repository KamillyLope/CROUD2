<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CRUD - Create</title>
</head>
<body>
    <div class="container">
        <h1>Informe o dados a serem inseridos</h1>

        <form action="novo.php" method="post">
     
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="modelo" aria-describedby="modelo" name="modelo">
            </div>

            <div class="mb-3">
                <label for="ano" class="form-label">Ano</label>
                <input type="year" class="form-control" id="ano" name="ano">
            </div>

            <div class="mb-3">
                <label for="km" class="form-label">km</label>
                <input type="text" class="form-control" id="km" name="km">
            </div>

            <div class="mb-3">
                <label for="cor" class="form-label">Cor</label>
                <input type="text" class="form-control" id="cor" name="cor">
            </div>

            <div class="mb-3">
                <label for="quantos_lugares" class="form-label">quantos_lugares</label>
                <select name="quantos_lugares" id="quantos_lugares" class="form-select">
                    <option value="2">2</option>
                    <option value="5">5</option>
                    <option value="7">7</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="combustivel" class="form-label">combustivel</label>
                <select name="combustivel" id="combustivel" class="form-select">
                    <option value="2">Etanol</option>
                    <option value="5">Gasolina</option>
                    <option value="7">Diesel7</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="cambio" class="form-label">cambio</label>
                <select name="cambio" id="cambio" class="form-select">
                    <option value="M">Automatico</option>
                    <option value="A">Diesel7</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="motor" class="form-label">motor</label>
                <input type="decimal" class="form-control" id="motor" name="motor">
            </div>
            
            <button type="submit" class="btn btn-primary">ENVIAR</button>

        </form>
        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>