<?php

//conectar ao banco
include("../conexao.php");

$titulo = $_POST ['titulo'];
$descricao_inicio = $_POST ['descricao_inicio'];

$id = $_GET['id'];

if ($_FILES['foto_principal']['name'] != null) {
    // !empty($_FILES['imagem']['name'])
//passar dados do form par variaveis
    $diretorio_img = "../upload/roteiro/";
    $uploadfile = $diretorio_img . basename($_FILES['foto_principal']['name']);
    $foto_principal = $_FILES['foto_principal']['name'];
    move_uploaded_file($_FILES['foto_principal']['tmp_name'], $uploadfile);

    //enviar dados
    $sql = "Update roteiro set        
        titulo = '$titulo',
        descricao_inicio = '$descricao_inicio',
        foto_principal = '$foto_principal'  
        where id= $id;";
} else {

    //enviar dados
    $sql = "Update roteiro set        
        titulo = '$titulo',
        descricao_inicio = '$descricao_inicio'
         where id= $id;";
}



//echo $sql;

if ($mysqli->query($sql)) {
    header('location: index.php?url=rot');
    exit;
} else {
    echo ("Erro: %s\n" . $mysqli->error);
}

