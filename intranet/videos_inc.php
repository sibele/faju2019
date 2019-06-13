<?php
include_once('sessao.php');
?> 

<!--<form name="cadastro" action="videos_incBD.php?id=" method="POST" enctype="multipart/form-data">-->
    <form name="cadastro" action="galeria_incBD.php" method="POST" enctype="multipart/form-data">  
        <table  align="center" width="70%">   
            <tbody>
                <tr>
                    <td align="right">Nome:</td>
                    <td><input type="text" name="nome" value=" " required/></td>
                </tr>
                <tr>
                    <td align="right">Descrição:</td>
                    <td><textarea type="text" align="justify" name="descricao" rows='8' cols = '60'> </textarea></td>

                </tr> 
                <tr>
                    <td align="right">Imagem:</td>
                    <td><input type="file" name="imagem" required/></td>
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
                    <td></td>
                    <td align="right"><input type="submit" value="SALVAR"/></td>
                </tr>
            </tbody>
        </table>    
    </form>  
<!--</form>-->