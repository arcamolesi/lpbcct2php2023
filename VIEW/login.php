<?php
    include_once 'C:\xampp\htdocs\lpbcct1php2023\BLL\bllUsuario.php';

    $usuario = trim($_POST['usuario']); 
    $senha = trim($_POST['senha']); 

    echo "Usuario: " . $usuario . "</br>"; 
    echo "Senha: " . md5($senha) . "</br>" . "</br>";

    $bll = new  \BLL\bllUsuario();
    $objUsuario = $bll->SelectUser($usuario);


?>