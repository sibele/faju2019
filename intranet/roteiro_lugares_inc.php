<?php
    include_once('sessao.php');
?> 
<form name="cadastro" action="roteiro_lugares_incBD.php" method="POST" enctype="multipart/form-data">
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