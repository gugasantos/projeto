<?php
session_start();
require "config.php";

$usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_SPECIAL_CHARS) ;
$senha = filter_input(INPUT_POST, "senha");

$sql = $pdo->prepare("SELECT * FROM usuarios where nome = :usuario and senha = :senha" );
$sql->bindValue(":usuario" ,$usuario);
$sql->bindValue(":senha" ,$senha);
$sql->execute();

if($sql->rowCount() > 0){
    $_SESSION["usuario"] = $usuario;
    header("Location: pagina.php");
    exit;
}
else{
    header("Location: adicionar.php");
    exit;
}

