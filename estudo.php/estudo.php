<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6">
                <form method="POST">
                    <div class="form-group">
                        <label for="">Digite seu nome</label>
                        <input type="text" name="nome" id="nome" class="form-control form-control-lg">
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-12 col-sm-6 col-md-4">
                            <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row mt-5 justify-content-center">
        <div class="col-12 col-sm-8 col-md-6">
            <div class="alert alert-info">
                <h1 class="display-4 text-center">
                   <?php
                   if(isset($_POST['nome'])) {
                        echo "Seja bem-vindo ".$_POST['nome'];
                   } else {
                        echo "Digite seu nome ...";
                   }
                    ?>
                </h1>
            </div>
        </div>
    </div>
</body>
</html>