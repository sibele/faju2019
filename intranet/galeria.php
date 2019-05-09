<?php
    include_once('sessao.php');
?> 
<table border="1" align="center" width="70%">
    <thead>
        <tr>
            <th><a href="?url=gal_inc"><img src="img/novo.png" width="30px" title="Novo"></a></th>
            <th>Código</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Lugar</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include ('../conexao.php');
             $sql = "Select id,nome,descricao,caminho,lugares_id "
                    . " from galeria";
            $query = $mysqli->query($sql);
            $num_reg = $query-> num_rows;//retorna numero de registros, contador
            while($dados = $query->fetch_array()){  //while comando de repetição que repete todo o html tambem
                $cod= $dados ['id'];
                $nome = $dados ['nome'];
                $descricao = $dados ['descricao'];
                $caminho = $dados ['caminho'];
                $lugar = $dados ['lugares_id'];
        ?>  
        <tr>
            <td class="col1"> <a href="index.php?url=gal_alt&id=<?=$cod; ?>"><img src="img/editar.png" width="30px" title="Editar"></a> <a href="galeria_exc.php?id=<?=$cod; ?>"onclick="return excluir('<?=$nome;?>');"><img src="img/excluir.png" width="35px" title="Exluir"></a></td>
            <td class="col2"><?= $cod; ?></td>
            <td class="col3"><?= $nome; ?></td>
            <td class="col4"><?= $descricao; ?></td>
            <td class="col5"><img src="../upload/galeria/<?= $caminho; ?>" width="250"/>
            <td class="col4"><?= $lugar; ?></td>
                   
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