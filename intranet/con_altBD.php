<?php

//conectar ao banco
include("../conexao.php");


$telefone = $_POST ['telefone'];
$celular_1 = $_POST['celular_1'];
$celular_2 = $_POST['celular_2'];
$email = $_POST ['email'];
$endereco = $_POST ['endereco'];


$id =$_GET['id'];
//enviar dados
$sql= "Update contato set        
        telefone = '$telefone',
        celular_1 = '$celular_1',
        celular_2 = '$celular_2' ,
        email = '$email' ,
        endereco = '$endereco'"; 

//echo $sql;

if($mysqli->query($sql)){
    header('location: index.php?url=con');
    exit;
}else{
    echo ("Erro: %s\n".$mysqli->error);
}

