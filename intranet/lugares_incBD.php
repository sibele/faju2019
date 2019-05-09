<?php

//conectar ao banco
include("../conexao.php");

$diretorio_img = "../upload/lugar/";
$uploadfile = $diretorio_img . basename($_FILES['foto_principal']['name']);
$foto_principal = $_FILES['foto_principal']['name'];
move_uploaded_file($_FILES['foto_principal']['tmp_name'], $uploadfile);

//passar dados do form par variaveis
$nome = $_POST ['nome'];
$descricao = $_POST ['descricao'];
$localizacao = $_POST ['localizacao'];
$sql = "Insert into lugares (nome, descricao, localizacao, foto_principal)"
        . "values('$nome', '$descricao', '$localizacao', '$foto_principal');";
//enviar dados

    echo $sql;
    if ($mysqli->query($sql)) {
        header('location: index.php?url=lug');
        exit;
    } else {
        echo ("Erro: %s\n" . $mysqli->error);
    }
?>