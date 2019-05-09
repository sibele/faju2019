<?php

//conectar ao banco
include("../conexao.php");

$nome = $_POST ['nome'];
$descricao = $_POST ['descricao'];
$lugar = $_POST ['lugar'];

$id = $_GET['id'];

if ($_FILES['imagem']['name'] != null) {
    // !empty($_FILES['imagem']['name'])
//passar dados do form par variaveis
    $diretorio_img = "../upload/galeria/";
    $uploadfile = $diretorio_img . basename($_FILES['imagem']['name']);
    $caminho = $_FILES['imagem']['name'];
    move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile);

    //enviar dados
    $sql = "Update galeria set        
        nome = '$nome',
        descricao = '$descricao',
        caminho = '$caminho',
        lugares_id = '$lugar'    
        where id= $id;";
} else {

    //enviar dados
    $sql = "Update galeria set        
        nome = '$nome',
        descricao = '$descricao',
        lugares_id = '$lugar'  
         where id= $id;";
}



//echo $sql;

if ($mysqli->query($sql)) {
    header('location: index.php?url=gal');
    exit;
} else {
    echo ("Erro: %s\n" . $mysqli->error);
}

