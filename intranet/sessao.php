<?php
    session_start();
    if($_SESSION['us_sessao']!=session_id()){
            header("location: login.php?msg=erro_sessao");	
    }
    $_SESSION['us_id'];
    $_SESSION['us_nome'];
    $_SESSION['us_sessao'];