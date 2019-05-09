<?php

//conectar ao banco
include("../conexao.php");

//passar dados do form par variaveis
$empresa_nome = $_POST ['nome'];
$empresa_missao = $_POST ['empresa_missao'];
$empresa_visao = $_POST ['empresa_visao'];
$empresa_endereco = $_POST ['empresa_endereco'];
$empresa_cidade = $_POST['empresa_cidade'];
$empresa_estado = $_POST['empresa_estado'];

        $empresa_nome = $_POST ['nome'];
        $missao = $_POST ['missao'];
        $visao = $_POST['visao'];
        $valor = $_POST['valor'];
        $descricao_empresa = $_POST['descricao_empresa'];
        $sobre = $_POST['sobre'];
        $sobre_proprietaria = $_POST['sobre_proprietaria'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];

//enviar dados
$sql= "Update empresa set        
        nome = '$empresa_nome',
        missao = '$missao',
        visao = '$visao',
        valor = '$valor',
        descricao_empresa = '$descricao_empresa',
        sobre ='$sobre'  ,
        sobre_proprietaria ='$sobre_proprietaria',
        latitude ='$latitude',
        longitude ='$longitude';";

//echo $sql;

if($mysqli->query($sql)){
    header('location: index.php?url=qm_alt');
    exit;
}else{
    echo ("Erro: %s\n".$mysqli->error);
}

