<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas-Vindas!</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6">
            <form method="POST" action="">
                <div class="form-group">
                    <label>Digite seu nome:</label>
                    <input type="text" class="form-control form-control-lg" name="nome" id="nome">
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-12 col-sm-8 col-md-4">
                        <button class="btn btn-outline-primary btn-lg btn-block">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-5 justify-content-center">
        <div class="col-12 col-sm-8 col-md-6">
            <div class="alert alert-info">
                <h1 class="display-4 text-center">
                    <?php
                        if (isset($_POST['nome'])){
                            echo "Seja bem-vindo ".$_POST['nome'];
                        } else {
                            echo "Digite seu nome...";
                        }
                        
                    ?>
                </h1>
            </div>
        </div>
    </div>
</div>
</body>
</html>

</body>
</html>
