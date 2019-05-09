<?php
//conexao ao BD
include ('../conexao.php');

//pegar variaveis
$cod = $_GET['id'];

//Instrucao sql

$sql = "Delete from lugares where id = $cod;";

//executa

if($mysqli->query($sql)){
    header('location: index.php?url=lug');
    exit;
}else{
    echo ("Erro: %s\n".$mysqli->error);
}