<?php

//conectar ao banco
include("../conexao.php");

$diretorio_img = "../upload/imagem/";
if ($_FILES['imagem_fundo']['name'] != null) {
    $uploadfile = $diretorio_img . basename($_FILES['imagem_fundo']['name']);
    $imagem_fundo = $_FILES['imagem_fundo']['name'];
    move_uploaded_file($_FILES['imagem_fundo']['tmp_name'], $uploadfile);
     $sql = "Update imagens set        
        imagem_fundo = '$imagem_fundo'";

    if ($mysqli->query($sql)) {
        header('location: index.php?url=img');
        exit;
    } else {
        echo ("Erro: %s\n" . $mysqli->error);
    }
}elseif ($_FILES['imagem_inicio']['name'] != null) {
    $uploadfile1 = $diretorio_img . basename($_FILES['imagem_inicio']['name']);
    $imagem_inicio = $_FILES['imagem_inicio']['name'];
    move_uploaded_file($_FILES['imagem_inicio']['tmp_name'], $uploadfile1);
    $sql = "Update imagens set        
        imagem_inicio = '$imagem_inicio'";

    if ($mysqli->query($sql)) {
        header('location: index.php?url=img');
        exit;
    } else {
        echo ("Erro: %s\n" . $mysqli->error);
    }
}elseif ($_FILES['imagem_logo']['name'] != null) {
    $uploadfile2 = $diretorio_img . basename($_FILES['imagem_logo']['name']);
    $imagem_logo = $_FILES['imagem_logo']['name'];
    move_uploaded_file($_FILES['imagem_logo']['tmp_name'], $uploadfile2);
    $sql = "Update imagens set        
        imagem_logo = '$imagem_logo'";

    if ($mysqli->query($sql)) {
        header('location: index.php?url=img');
        exit;
    } else {
        echo ("Erro: %s\n" . $mysqli->error);
    }
}elseif ($_FILES['imagem_contato']['name'] != null) {
    $uploadfile3 = $diretorio_img . basename($_FILES['imagem_contato']['name']);
    $imagem_contato = $_FILES['imagem_contato']['name'];
    move_uploaded_file($_FILES['imagem_contato']['tmp_name'], $uploadfile3);
    $sql = "Update imagens set        
        imagem_contato = '$imagem_contato'";

    if ($mysqli->query($sql)) {
        header('location: index.php?url=img');
        exit;
    } else {
        echo ("Erro: %s\n" . $mysqli->error);
    }
}else{
    header('location: index.php?url=img');
}




