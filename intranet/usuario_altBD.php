<?php

//conectar ao banco
include("../conexao.php");

$usuario_nome = $_POST ['usuario_nome'];
$usuario_login = $_POST ['usuario_login'];
$usuario_email = $_POST['usuario_email'];
$usuario_senha =$_POST ['usuario_senha'];
$usuario_senha =md5($usuario_senha);

$id =$_GET['id'];
//enviar dados
$sql= "Update usuario set        
        nome = '$usuario_nome',
        login = '$usuario_login',
        senha = '$usuario_senha'
        where cod_usuario= $id;"; 

//echo $sql;

if($mysqli->query($sql)){
    header('location: index.php?url=usu');
    exit;
}else{
    echo ("Erro: %s\n".$mysqli->error);
}

