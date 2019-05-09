<?php
    include_once('sessao.php');
?> 
<h1> Bem-Vindo </h1>
<h2> Usuário: <?= $_SESSION['us_nome']; ?> </h2>
<h3> Endereço de IP: <?php echo $_SERVER["REMOTE_ADDR"]; ?> </h3>