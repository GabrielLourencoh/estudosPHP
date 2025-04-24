<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6">
                
                <form  method="post">
                <div class="form-group">
                    <label>Escolha um animal de preferencia</label>
                    <select name="animal" id="animal" class="form-control form-control-lg">
                        <option value="" selected disable>Selecione um animal... </option>
                        <option value="1">Cachorro</option>
                        <option value="2">Gato</option>
                    </select>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-12 col-sm-6 col-md-4">
                        <button type="submit" class="btn btn-outline-info btn-lg btn-block">
                            Enviar
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-sm-8 col-md-6 border rounded">
            <!-- <img src="img/cachorro.png" class="img-fluid p-2 rounded"> -->
            <?php
                if (isset($_POST['animal'])){
                    if ($_POST['animal'] == '1'){
                        echo '<img src="img/cachorro.jpg" alt="cachorro" class="img-fluid p-2 rounded">';
                    } else if ($_POST['animal'] == '2'){
                        echo '<img src="img/gato.jpg" alt="gato" class="img-fluid p-2 rounded">';
                    } else {
                        echo "";
                    }
                } else {
                    echo "Selecione um animal...";
                }

            ?>
        </div>
    </div>
</body>
</html>

</body>
</html>
