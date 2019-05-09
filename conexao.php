<?php
//paramentros de configuração
$host = 'mysql07-farm76.kinghost.net';//Ip do servidor MySQL  http://mysql.fajuturismo.com.br/
$base = 'fajuturismo01'; // fajuturismo
$usuario = 'fajuturi01_add1';// fajuturism_add1
$senha = 'FAJUturismo2018'; //FAJUturismo2018

//paramentros de configuração
//$host = 'localhost';//Ip do servidor MySQL  http://mysql.fajuturismo.com.br/
//$base = 'faju'; // fajuturismo
//$usuario = 'root';// fajuturism_add1
//$senha = ''; //FAJUturismo2018

//Conexao ao BD

$mysqli = new mysqli($host,$usuario,$senha,$base);
//caso algo tenha dado erro, exibe uma mensagem de erro
if(mysqli_connect_error())
    trigger_error(mysql_connect_error());
//alterar caracteres para utf8 (termos acentuados)
$mysqli->set_charset("utf8");
//modifica a zona de horario para o horario de sp
date_default_timezone_set('America/Sao_paulo');
