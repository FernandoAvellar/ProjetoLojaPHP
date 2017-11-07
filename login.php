<?php 
include("conecta.php");
include("banco-usuario.php");

$usuario = buscaUsuario($_POST["email"], $_POST["senha"], $conexao);

if($usuario == null) {
    header("Location: index.php?login=0");
} else {
    setcookie("usuario-logado", $usuario["email"], time() + 60);
    header("Location: index.php?login=1");
}
die();