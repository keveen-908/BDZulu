<?php
include 'config.php';

$pg = @$_POST['pg'];
$nome = @$_POST['nome'];
$email = @$_POST['email'];
$senha = @$_POST['senha'];
$funcao = @$_POST['funcao'];
$tipoUsuario = @$_POST['tipoUsuario'];
$submit = @$_POST['submit'];

if($submit){
    $insercao = "INSERT INTO usuarios (pg, nome, email, senha, funcao, adm) VALUES ('$pg', '$nome', '$email', '$senha', '$funcao', '$tipoUsuario')";
    $resultado = $mysqli->query($insercao);
    if($resultado){
        header('Location: /index.php?p=cadastro'); 
}
}


?>