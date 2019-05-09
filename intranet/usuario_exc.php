<?php
//conexao ao BD
include ('../conexao.php');

//pegar variaveis
$cod = $_GET['id'];

//Instrucao sql

$sql = "Delete from usuario where cod_usuario = $cod;";

//executa

if($mysqli->query($sql)){
    header('location: index.php?url=usu');
    exit;
}else{
    echo ("Erro: %s\n".$mysqli->error);
}