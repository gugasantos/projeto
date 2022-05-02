<?php
session_start();
require "config.php";
session_start();
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST,"senha");
$email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);

if($nome && $email){

    #é para e-mails duplicados não serem inseridos
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email',$email);
    $sql->execute();

    if($sql->rowCount() === 0){
    $sql = $pdo->prepare("INSERT INTO usuarios (nome,senha,email) VALUES (:nome,:senha,:email)");
    $sql->bindValue("nome",$nome);
    $sql->bindValue("senha",$senha);
    $sql->bindValue("email",$email);
    $sql->execute();
    }
    
    header("Location: login.php");
    exit;
}
else{
    header("Location: adicionar.php");
    exit;
}
