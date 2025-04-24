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
                <h2 class="mt-3">
                    Primeira Maneira
                </h2>

                <h5 class="mt-3">
                    $dados = array('Professor' => 'Adriano', 'Disciplina' => 'Programação Web II', 'Dia da aula' => 'Quinta-feira');
                </h5>

                <h2 class="mt-3">
                    Segunda Maneira (Simplificada)
                </h2>

                <h5 class="mt-3">
                    $dados = ['Professor' => 'Adriano', 'Disciplina' => 'Programação Web II', 'Dia da aula' => 'Quinta-feira'];
                </h5>

                <h2 class="mt-3">
                    Verificando o conteúdo do array
                </h2>               
                <p>
                    var_dump($dados);                
                </p>

                <?php
                $dados = ['Professor' => 'Adriano', 'Disciplina' => 'Programação Web II', 'Dia da aula' => 'Quinta-feira'];
                var_dump($dados);
                ?>

                <h2 class="mt-3">
                    Adicionando um array:
                </h2>
                <p>
                    $dados[] = 'Melâo';                
                </p>
                <?php
                $dados[] = 'Melâo';
                var_dump($dados);
                ?>

                <h2 class="mt-3">
                    Imprimindo um índice em específico:
                </h2>
                <p>
                    echo $dados[2];
                </p>
                <?php
                $dados = ['Banana', 'Maça', 'Goiaba'];
                echo $dados[2];
                ?>


            </div>
        </div>
    </div>
    
</body>
</html>