<?php


use BLL\bllArea;

include_once  'C:\xampp\htdocs\lpbcct2php2023\BLL\bllarea.php';

$bll = new \bll\bllArea();
$lstareas = $bll->Select();
 
//echo count ($lstareas);
          
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



    <title>Listar Areas</title>
</head>

<body>
    <?php include_once '../menu.php' ?>

    <h1>Listar Areas</h1>

    <table class="striped green lighten-2">
        <tr>
            <th>ID</th>
            <th>DESCRIÇÃO</th>
            <th>TIPO</th>
            <th>HECTARES</th>
            <th>FUNÇÃO
                <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='insarea.php'">
                    <i class="material-icons">add</i>
                </a>
            </th>
        </tr>
        <?php
        if ($lstareas != null)
            foreach ($lstareas as $area) {
        ?>
            <tr>
                <td><?php echo $area->getId(); ?></td>
                <td><?php echo $area->getNome(); ?></td>
                <td><?php echo $area->getTipo(); ?></td>
                <td><?php echo $area->getHectares(); ?></td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light blue" onclick="JavaScript:location.href='detarea.php?id=' + 
                           <?php echo $area->getId(); ?>">
                        <i class="material-icons">details</i>
                    </a>
                    <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='edtarea.php?id=' + 
                           <?php echo $area->getId(); ?>">
                        <i class="material-icons">edit</i>
                    </a>
                    <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:remover(<?php echo $area->getId(); ?>)">
                        <i class="material-icons">delete_forever</i>
                    </a>
                </td>
                </td>
            </tr>
        <?php
            }
        ?>


    </table>

</body>
<?php include_once '../footer.php' ?>

</html>


<script>
    function remover(id) {
        if (confirm('Excluir o Area ' + id + '?')) {
            location.href = 'remarea.php?id=' + id;
        }
    }
</script>