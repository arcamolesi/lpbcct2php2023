<?php
include_once 'C:\xampp\htdocs\lpbcct2php2023\BLL\blloperador.php';
$id = $_GET['id'];

$bll = new  \BLL\bllOperador();
$operador = $bll->SelectID($id);

echo $operador->getNome();


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Operador</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php include_once '../menu.php';?>
    <div class="container teal lighten-5 black-text col s12">
        <div class="center orange">
            <h1>Editar Operador</h1>
        </div>

        <div class="row">
            <form action="recedtoperador.php" method="POST" id="frminsOperador" class="col s12">
                <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $operador->getId(); ?></label>
                    </br> </br>
                    <input type="hidden" name="txtID" value=<?php echo $id; ?>>
                </div>

                <div class="input-field col s8">
                    <input id="nome" type="text" name="txtNome" value="<?php echo $operador->getNome() ?>">
                    <label for="nome" class="black-text bold">Nome</label>
                </div>
                <div class="input-field col s8">
                    <input id="aniversario" type="date" name="txtAniversario" value="<?php echo $operador->getAniversario() ?>">
                    <label for="aniversario" class="black-text bold">Aniversário</label>
                </div>
                <div class="input-field col s8">
                    <input id="salario" type="text" name="txtSalario" value="<?php echo $operador->getSalario() ?>">
                    <label for="salario" class="black-text bold">Salário</label>
                </div>
                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstoperador2.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>


            </form>
        </div>



    </div>
    <?php include_once '../footer.php';?>
</body>

</html>