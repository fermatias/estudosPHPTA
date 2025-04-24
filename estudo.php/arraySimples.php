<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 alert alert-info">
                <h2 class="text-center mt-3">
                    Declarando Array em PHP
                </h2>
                <h4 class="text-center mt-3">
                    Primeira Maneira
                </h4>

                <h5 class="mt-3">
                    $dados = array('Banana','Maçã','Goiaba');
                </h5>
                <h4 class="text-center mt-3">
                    Segunda Maneira (Simplificada)
                </h4>
                <h5 class="mt-3">
                    $dados = ['Banana','Maçã','Goiaba'];
                </h5>

                <h5 class="mt-3">
                    Verificando o conteúdo do array
                </h5>
                <p>
                    var_dump($dados);                
                </p>

                <?php
                $dados = ['Banana', 'Maçã', 'Goiaba'];
                var_dump($dados);
                ?>

                <h5 class="text-dark mt-3">
                    Adicionando um array:
                </h5>
                <p>
                    $dados[] = 'Melâo';                
                </p>
                <?php
                $dados[] = 'Melâo';
                var_dump($dados);
                ?>

                <h5 class="text-dark mt-3">
                    Imprimindo um índice em específico:
                </h5>
                <p>
                    echo $dados[2];
                </p>
                <?php
                echo $dados[2];
                ?>

                <h5 class="text-dark mt-3">
                    Imprimindo o array
                </h5>
                <p>
                    foreach($dados as $dado){
                    echo "$dado";
                }  
                </p>

                <p class="text-dark">
                <ul class="text-dark">
                <?php
                foreach($dados as $dado){
                    echo "<li>$dado</li>";
                }    
                ?>
                </ul>
                </p>
             

            </div>
        </div>
    </div>
    
</body>
</html>