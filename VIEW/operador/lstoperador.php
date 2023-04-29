<?php
    echo __DIR__; 
     
    include 'C:\xampp\htdocs\lpadst1php2023\DAL\conexao.php';
    use DAL\Conexao;
    $sql = "select * from operador;";
    $con = Conexao::conectar(); 
    $lstOperador = $con->query($sql); 
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
    <table class="striped blue lighten-2" >
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>ANIVERSÁRIO</th>
            <th>SALÁRIO</th>
        </tr>
        <?php 
            foreach ($lstOperador as $operador){
        ?>
            <tr>
                <td><?php echo $operador['id']; ?></td>
                <td><?php echo $operador['nome']; ?></td>
                <td><?php echo $operador['aniversario']; ?></td>
                <td><?php echo $operador['salario']; ?></td>
            </tr>
        <?php 
            }
        ?>


    </table>
    
</body>
</html>