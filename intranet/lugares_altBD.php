<?php

//conectar ao banco
include("../conexao.php");

$nome = $_POST ['nome'];
$descricao = $_POST ['descricao'];
$localizacao = $_POST ['localizacao'];

$id = $_GET['id'];

if ($_FILES['foto_principal']['name'] != null) {
    // !empty($_FILES['imagem']['name'])
//passar dados do form par variaveis
    $diretorio_img = "../upload/lugar/";
    $uploadfile = $diretorio_img . basename($_FILES['foto_principal']['name']);
    $foto_principal = $_FILES['foto_principal']['name'];
    move_uploaded_file($_FILES['foto_principal']['tmp_name'], $uploadfile);

    //enviar dados
    $sql = "Update lugares set        
        nome = '$nome',
        descricao = '$descricao',
        localizacao = '$localizacao',
        foto_principal = '$foto_principal'  
        where id= $id;";
} else {

    //enviar dados
    $sql = "Update lugares set        
        nome = '$nome',
        descricao = '$descricao',
        localizacao = '$localizacao'
         where id= $id;";
}



//echo $sql;

if ($mysqli->query($sql)) {
    header('location: index.php?url=lug');
    exit;
} else {
    echo ("Erro: %s\n" . $mysqli->error);
}

