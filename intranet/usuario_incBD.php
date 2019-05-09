<?php

//conectar ao banco
include("../conexao.php");

$usuario_nome = $_POST ['usuario_nome'];
$usuario_login = $_POST ['usuario_login'];
$usuario_senha = $_POST ['usuario_senha'];
$usuario_senha = md5($usuario_senha);

$id =$_GET['id'];
//enviar dados

$sql= "Insert into usuario (nome, login, senha )
        values ('$usuario_nome','$usuario_login','$usuario_senha' );";
//echo $sql;

if($mysqli->query($sql)){
    header('location: index.php?url=usu');
    exit;
}else{
    echo ("Erro: %s\n".$mysqli->error);
}

