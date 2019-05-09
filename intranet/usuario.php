<?php
    include_once('sessao.php');
?> 
<table border="1" align="center" width="70%">
    <thead>
        <tr>
            <th><a href="?url=usu_inc"><img src="img/novo.png" width="30px" title="Novo"></a></th>
            <th>Código:</th>
            <th>Nome:</th>
            <th>Login:</th>   
        </tr>
    </thead>
    <tbody>
        <?php
        include ('../conexao.php');
        $sql = "Select cod_usuario, nome, login "
                . " from usuario";
        $query = $mysqli->query($sql);
        $num_reg = $query->num_rows; //retorna numero de registros, contador
        while ($dados = $query->fetch_array()) {  //while comando de repetição que repete todo o html tambem
            $cod = $dados ['cod_usuario'];
            $nome = $dados ['nome'];
            $login = $dados['login'];
            ?>  
            <tr>
                <td class="col1"> <a href="index.php?url=usu_alt&id=<?= $cod; ?>"><img src="img/editar.png" width="30px" title="Editar"></a><a href="usuario_exc.php?id=<?=$cod; ?>"onclick="return excluir('<?=$nome;?>');"><img src="img/excluir.png" width="35px" title="Exluir"></a></td>
                <td class="col2"><?= $cod; ?></td>
                <td class="col3"><?= $nome; ?></td>
                <td class="col4"><?= $login; ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>



