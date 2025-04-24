<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array aaaaaaa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 alert alert-info">
                <h1 class="text-center">Trabalhando com array</h1>
                <h1 class="">Declarando um array</h1>
                <h4 class="text-dark">
                    Primeira maneira
                </h4>
                <h5 class="text-dark">$dados = array("Banana", "Maçã");</h5>
                <h4 class="text-dark">
                    Segunda maneira
                </h4>
                <h5 class="text-dark">
                    $dados = ["Banana", "Maçã", "Pera"];
                </h5>
                <h4 class="text-dark">
                    Verificar o conteudo de um array
                </h4>
                <h5 class="text-dark">
                    var_dump($dados);
                </h5>
                <h5 class="text-dark">
                    <?php
                        $dados = array("Banana", "Maçã", "Goiaba", "Coração");
                        var_dump($dados);
                    ?>
                </h5>
                <h4 class="text-dark">
                    Adicionando elemento ao Array
                </h4>
                <h5 class="text-dark">
                    $dados[] = 'Melão';
                </h5>
                <h5 class="text-dark">
                    <?php
                        $dados = array("Banana", "Maçã", "Goiaba", "Coração");
                        $dados[] = "Melão";
                        var_dump($dados);
                    ?>
                </h5>
                <h4 class="text-dark">
                    Imprimindo um indice especifico
                </h4>
                <h5 class="text-dark">
                    echo = $dados[2];
                </h5>
                <h5 class="text-dark">
                    <?php
                        echo $dados[2];
                    ?>
                </h5>
                <h4 class="text-dark">
                    Imprimindo todos os elementos do array
                </h4>
                <h5 class="text-dark">
                        foreach ($dados as $dado){
                            echo $dado."<br>";
                        }
                </h5>
                <h5 class="text-dark">
                    <p class="text-dark">
                        <ul class="text-dark">
                        <?php
                        foreach ($dados as $dado){
                            echo "<li>$dado</li>";
                        }
                        ?>
                        </ul>
                    </p>
                </h5>
            </div>
        </div>
    </div>
</body>
</html>
