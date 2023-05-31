<?php

namespace DAL;

include_once 'C:\xampp\htdocs\lpbcct1php2023\DAL\conexao.php';
include_once 'C:\xampp\htdocs\lpbcct1php2023\MODEL\Usuario.php';


class dalUsuario
{

    public function SelectUser(string $usuario)
    {
        $sql = "select * from usuario where usuario LIKE ?;";
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->execute(array($usuario));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $usuario = new \MODEL\Usuario();

        $usuario->setId($linha['id']);
        $usuario->setUsuario($linha['usuario']);
        $usuario->setSenha($linha['senha']);
        $usuario->setEmail($linha['email']);


        return $usuario;
    }
}
