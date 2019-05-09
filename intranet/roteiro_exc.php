<?php
//conexao ao BD
include ('../conexao.php');

//pegar variaveis
$cod = $_GET['id'];

//Instrucao sql

$sql = "Delete from roteiro where id = $cod;";

//executa

if($mysqli->query($sql)){
    header('location: index.php?url=rot');
    exit;
}else{
    echo ("Erro: %s\n".$mysqli->error);
}