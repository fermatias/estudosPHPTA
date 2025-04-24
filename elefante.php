<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
    <div class="row justfy-container-center">
        <div class="coll-12 col-sm-8 col-md-6">
            <form method="post">
                <div class="form-group row">
                    <div class="col-12 col-sm-6">
                        <input type="number" name="elefante" id="elefante" class="form-control-lg" placeholder="Qtde de elefantes">
                        <div class="col-12 col-sm-6">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">cante...<button>
                        </div>
                    </div>
                </div>
</form>
        </div>
    </div>
</div>
<div class="row mot-5 justify-container-center">
    <div class="col-12 col-sm-10 alert alert-info">
        <?php
        if(isset($_POST['elefante'])){
            if($_POST['elefante'] %2 == '0') {

                echo '<p class="text-dark">'.$_POST['elefante'].'elefantes';
                for($i=0; $i<$_POST['elefante']; $i++){
                    echo 'incomodam';
                }

                echo ' muito mais...</p>';
            }
        }else{
            echo '<p class="text-dark"> </p>'.$_POST['elefante'];
        }
        ?>
    </div>
</div>

    
</body>
</html>