<?php

//conectar ao banco
include("../conexao.php");

$diretorio_img = "../upload/roteiro/";
$uploadfile = $diretorio_img . basename($_FILES['foto_principal']['name']);
$foto_principal = $_FILES['foto_principal']['name'];
move_uploaded_file($_FILES['foto_principal']['tmp_name'], $uploadfile);

//passar dados do form par variaveis

$titulo = $_POST ['titulo'];
$descricao_inicio = $_POST ['descricao_inicio'];
$sql = "Insert into roteiro (titulo, descricao_inicio, foto_principal)"
        . "values('$titulo', '$descricao_inicio', '$foto_principal');";
//enviar dados

    echo $sql;
    if ($mysqli->query($sql)) {
        header('location: index.php?url=rot');
        exit;
    } else {
        echo ("Erro: %s\n" . $mysqli->error);
    }
?>