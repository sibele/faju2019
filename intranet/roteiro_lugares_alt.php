<?php
    include_once('sessao.php');
    
    include("../conexao.php");
    $id= $_GET['id']; //pega valor do banco
    $sql= "Select id,roteiro_id,lugares_id,parada_id "
                    . " from roteiro_lugares "
            . " where id= $id";
    $query =$mysqli->query($sql);
    $dados = $query->fetch_array();
        $roteiro_id = $dados ['roteiro_id'];
        $lugares_id = $dados ['lugares_id'];
        $parada_id = $dados ['parada_id'];
?>
<form name="cadastro" action="roteiro_lugares_altBD.php?id=<?=$id;?>" method="POST" enctype="multipart/form-data">
    <table  align="center" width="70%">   
        <tbody>
            <tr>
                <td align="right">Roteiro:</td>
                <td>
                    <?php
                    include '../conexao.php';
                    $sql = "SELECT * FROM roteiro;";


                    $query = $mysqli->query($sql);
                    ?>
                    
                    <select name="roteiro" id="roteiro" required>
                        <option value="">Selecione</option>
                        <?php foreach ($query as $roteiro) { ?>
                            <option value="<?php echo $roteiro['id'] ?>"><?php echo $roteiro['titulo'] ?></option>
                        <?php } ?>
                    </select>

                </td>
            </tr>
            <tr>
                <td align="right">Lugar:</td>
                <td>
                    <?php
                    include '../conexao.php';
                    $sql = "SELECT * FROM lugares;";


                    $query = $mysqli->query($sql);

                    ?>
                    
                    <select name="lugar_id" id="lugar_id" required>
                        <option value="">Selecione</option>
                        <?php foreach ($query as $lugar) { ?>
                            <option value="<?php echo $lugar['id'] ?>"><?php echo $lugar['nome'] ?></option>
                        <?php } ?>
                    </select>

                </td>
            </tr>
            <tr>
                <td align="right">Parada:</td>
                <td>
                    <?php
                    include '../conexao.php';
                    $sql = "SELECT * FROM parada;";


                    $query = $mysqli->query($sql);

                    ?>
                    
                    <select name="id_parada" id="id_parada" required>
                        <option value="">Selecione</option>
                        <?php foreach ($query as $parada) { ?>
                            <option value="<?php echo $parada['id'] ?>"><?php echo $parada['nome'] ?></option>
                        <?php } ?>
                    </select>

                </td>
            </tr>
            <tr>
                <td></td>
                <td align="right"><input type="submit" value="SALVAR"/></td>
            </tr>
        </tbody>
    </table>    
</form>

