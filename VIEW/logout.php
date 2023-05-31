<?php
    //abre a sessão
    session_start();
    
    //session_destroy(); 
    //destrói as variáveis de sessão
    unset($_SESSION['login']);

    //redireciona para index.php-login
    Header("location: /view/index.php"); 
?>