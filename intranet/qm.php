<?php
    include_once('sessao.php');
?> 
<table border="1" align="center" width="70%">
    <thead>
        <tr>
            <th></a></th>
            <th>Nome:</th>
            <th>Missão</th>
            <th>Visão</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Sobre a Empresa</th>
            <th>Sobre a Proprietária</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include ('../conexao.php');
             $sql = "Select * "
                    . " from empresa"
                     ;
            $query = $mysqli->query($sql);
            while($dados = $query->fetch_array()){  //while comando de repetição que repete todo o html tambem
                $cod = $dados ['id'];
                $empresa_nome = $dados ['nome'];
                $missao = $dados ['missao'];
                $visao = $dados['visao'];
                $valor = $dados['valor'];
                $descricao_empresa = $dados['descricao_empresa'];
                $sobre = $dados['sobre'];
                $sobre_proprietaria = $dados['sobre_proprietaria'];
        ?>  
        <tr>
            <td class="col1"> <a href="index.php?url=qm_alt&id=<?=$cod; ?>"><img src="img/editar.png" width="30px" title="Editar"></a></td>
            <td class="col3"><?= $empresa_nome; ?></td>
            <td class="col6"><?= $missao; ?></td>
            <td class="col7"><?= $visao; ?></td>
            <td class="col8"><?= $valor; ?></td>
            <td class="col6"><?= $descricao_empresa; ?></td>
            <td class="col7"><?= $sobre; ?></td>
            <td class="col8"><?= $sobre_proprietaria; ?></td>
        </tr>
        <?php
            }
        ?>

    </tbody>
</table>