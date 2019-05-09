<?php

//conectar ao banco
include("../conexao.php");

$diretorio_img = "../upload/galeria/";
$uploadfile = $diretorio_img . basename($_FILES['imagem']['name']);
$caminho = $_FILES['imagem']['name'];
move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile);

//passar dados do form par variaveis
$nome = $_POST ['nome'];
$descricao = $_POST ['descricao'];
$lugar_id = $_POST ['lugar_id'];
$sql = "Insert into galeria (nome, descricao, caminho, lugares_id)"
        . "values('$nome', '$descricao', '$caminho', '$lugar_id');";
//enviar dados

    echo $sql;
    if ($mysqli->query($sql)) {
        header('location: index.php?url=gal');
        exit;
    } else {
        echo ("Erro: %s\n" . $mysqli->error);
    }
?>