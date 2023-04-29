<?php

use DAL\dalOperador;

  include_once '../../DAL/dalOperador.php'; 
  $dal = new \dal\dalOperador(); 
  $lstOperador = $dal->Select(); 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    
    <title>Listar Operadores</title>
</head>
<body>
    <h1>Listar Operadores</h1>

  

    <table class="striped red lighten-2" >
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>ANIVERSÁRIO</th>
            <th>SALÁRIO R$</th>
        </tr>
        <?php 
            foreach ($lstOperador as $operador){
        ?>
            <tr>
                <td><?php echo $operador['id']; ?></td>
                <td><?php echo $operador['nome'] ?></td>
                <td><?php echo $operador['aniversario']; ?></td>
                <td><?php echo "R$" . number_format($operador['salario'], 2, ",", "."); ?></td>

                
            </tr>
        <?php 
            }
        ?>


    </table>
    
</body>
</html>