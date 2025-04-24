<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números primos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-6">
            <form method="post">
                <div class="form-group row">
                    <div class="col-12 col-sm-6">
                <input class="form-control form-control-lg" type="number" id="numero" name="numero" placeholder="Digite o número...">
</div>
<div class="col-12 col-sm-6">
<button type="submit" class="btn btn-primary btn-lg btn-block">Ver</button>
</div>
</div>
</form>
</div>
</div>
<div class="row mt-5 justify-content-center">
    <div class="col-12 col-sm-8 col-md-6 alert alert-primary">
    <?php
if ($_POST) {
    $numero = $_POST['numero'];
    $primo = 1;

    for ($i = 2; $i <= $numero - 1; $i++) {
        if ($numero % $i == 0) {
            $primo = 0;
        }
    }

    if ($primo == 1 && $numero > 1) {
        echo "O número $numero é primo.";
    } else {
        echo "O número $numero não é primo.";
    }
}
?>
</body>
</html>