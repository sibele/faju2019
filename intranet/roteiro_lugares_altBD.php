<?php

//conectar ao banco
include("../conexao.php");

$roteiro = $_POST ['roteiro'];
$lugares_id = $_POST ['lugar_id'];
$parada_id = $_POST ['id_parada'];

$id = $_GET['id'];

    $sql = "Update roteiro_lugares set        
        roteiro_id = '$roteiro',
        lugares_id = '$lugares_id',
        parada_id = '$parada_id'  
         where id= $id;";


//echo $sql;

if ($mysqli->query($sql)) {
    header('location: index.php?url=rot_lug');
    exit;
} else {
    echo ("Erro: %s\n" . $mysqli->error);
}

