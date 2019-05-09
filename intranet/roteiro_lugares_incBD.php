<?php

//conectar ao banco
include("../conexao.php");

//passar dados do form par variaveis
$roteiro = $_POST ['roteiro'];
$lugares_id = $_POST ['lugar_id'];
$parada_id = $_POST ['id_parada'];
$sql = "Insert into roteiro_lugares (roteiro_id, lugares_id, parada_id)"
        . "values('$roteiro', '$lugares_id', '$parada_id');";
//enviar dados

    echo $sql;
    if ($mysqli->query($sql)) {
        header('location: index.php?url=rot_lug');
        exit;
    } else {
        echo ("Erro: %s\n" . $mysqli->error);
    }
?>