<?php
include_once 'C:\xampp\htdocs\lpbcct2php2023\BLL\bllUsuario.php';
include_once 'C:\xampp\htdocs\lpbcct2php2023\MODEL\usuario.php';

$usuario = trim($_POST['usuario']);
$senha = trim($_POST['senha']);

echo "Usuario: " . $usuario . "</br>";
echo "Senha: " . md5($senha) . "</br>" . "</br>";

$bll = new  \BLL\bllUsuario();

$objUsuario = new \MODEL\Usuario();

$objUsuario = $bll->SelectUser($usuario);

if ($objUsuario != null) {
    //echo "UsuarioDB: " . $objUsuario->getUsuario() . "</br>";
    //echo "SenhaDB: " . $objUsuario->getSenha() . "</br>" . "</br>";
    if (md5($senha) == $objUsuario->getSenha()){
        session_start();
        $_SESSION['login'] =  $objUsuario->getUsuario() ;
        header("location:menu.php");
    }
    else header("location:index.php");
}
else echo "usuario não encontrado";

?>