<?php

use BLL\bllOperador;

include_once '../../BLL/blloperador.php';
$bll = new \BLL\bllOperador;
$lstOperador = $bll->Select();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title>Listar Operadores</title>
</head>

<body>
    <?php include_once '../menu.php';?>
    <h1>Listar Operadores</h1>
    <table class="striped indigo lighten-3">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>ANIVERSÁRIO</th>
            <th>SALÁRIO R$</th>
            <th>FUNÇÕES -
                <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='insoperador.php'">
                    <i class="material-icons">add</i>
                </a>
            </th>
        </tr>
        <?php
        foreach ($lstOperador as $operador) {
        ?>
            <tr>
                <td><?php echo $operador->getId(); ?></td>
                <td><?php echo $operador->getNome(); ?></td>
                <td><?php echo $operador->getAniversario(); ?></td>
                <td><?php echo "R$" . number_format($operador->getSalario(), 2, ",", "."); ?></td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light blue" onclick="JavaScript:location.href='detoperador.php?id=' +
                                     <?php echo $operador->getId(); ?>">
                        <i class="material-icons">description</i>
                    </a>

                    <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='edtoperador.php?id=' +
                                     <?php echo $operador->getId(); ?>">
                        <i class="material-icons">edit</i>
                    </a>

                    <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:
                        remover( <?php echo $operador->getId(); ?>);">
                        <i class="material-icons">delete_forever</i>
                    </a>
                </td>

            </tr>
        <?php
        }
        ?>
    </table>
    <?php include_once '../footer.php';?>
</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Operador ' + id + '?')) {
            location.href = 'remoperador.php?id=' + id;
        }
    }
</script>