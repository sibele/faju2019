<?php
    include_once('sessao.php');
?> 
<table border="1" align="center" width="70%">
    <thead>
        <tr>
            <th><a href="?url=rot_lug_inc"><img src="img/novo.png" width="30px" title="Novo"></a></th>
            <th>Código</th>
            <th>Roteiro</th>
            <th>Lugares</th>
            <th>Paradas</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include ('../conexao.php');
            $sql = "SELECT roteiro_lugares.id,  roteiro.titulo as roteiro, lugares.nome as lugares, parada.nome as parada FROM roteiro_lugares, roteiro, lugares, parada WHERE roteiro_lugares.roteiro_id = roteiro.id AND roteiro_lugares.lugares_id = lugares.id AND roteiro_lugares.parada_id = parada.id";
        

            $query = $mysqli->query($sql);
            $num_reg = $query-> num_rows;//retorna numero de registros, contador
            while($dados = $query->fetch_array()){  //while comando de repetição que repete todo o html tambem
                $cod= $dados ['id'];
                $roteiro_id = $dados ['roteiro'];
                $lugares_id = $dados ['lugares'];
                $parada_id = $dados ['parada'];
        ?>  
        <tr>
            <td class="col1"> <a href="index.php?url=rot_lug_alt&id=<?=$cod; ?>"><img src="img/editar.png" width="30px" title="Editar"></a> <a href="roteiro_lugares_exc.php?id=<?=$cod; ?>"onclick="return excluir('<?=$nome;?>');"><img src="img/excluir.png" width="35px" title="Exluir"></a></td>
            <td class="col2"><?= $cod; ?></td>
            <td class="col3"><?= $roteiro_id; ?></td>
            <td class="col4"><?= $lugares_id; ?></td>
            <td class="col4"><?= $parada_id; ?></td>
                   
            </td>
        </tr>
        <?php
            }
        ?>

        <tr>
            <td colspan="6" class="total">Total Registros:<?=$num_reg; ?></td>
        </tr>
    </tbody>
</table>