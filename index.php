<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <title>Buscar Cep</title>
</head>
<body>
</div>
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-10">
            <img class="img-logo" src="./img/logo.png" width="150px" alt="">
            <h2 class="text-center mb-4">Buscar Endereço pelo CEP</h2>

            <form id="cepForm" action="./insert.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" id="cep" placeholder="Digite o CEP" name="cep">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco"  readonly>
                    </div>
                    <div class="form-group">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" id="estado" placeholder="Estado" name="estado" readonly>
                    </div>
                </div>
                <div class="alert alert-danger" role="alert" id="alert"></div>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>
    <script src="./app.js"></script>
</body>
</html>