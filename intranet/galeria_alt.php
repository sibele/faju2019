<?php
    include_once('sessao.php');
    
    include("../conexao.php");
    $id= $_GET['id']; //pega valor do banco
    $sql= "Select * from galeria "
            . " where id= $id";
    $query =$mysqli->query($sql);
    $dados = $query->fetch_array();
        $nome = $dados ['nome'];
        $caminho = $dados ['caminho'];
        $descricao = $dados ['descricao'];
?>
<form name="cadastro" action="galeria_altBD.php?id=<?=$id;?>" method="POST" enctype="multipart/form-data">
    <table  align="center" width="70%">   
        <tbody>
            <tr>
                <td align="right">Nome:</td>
                <td><input type="text" name="nome" value="<?=$nome;?>" required/></td>
            </tr>
            <tr>
                <td align="right">Descrição:</td>
                 <td><textarea type="text" align="justify" name="descricao"  rows='8' cols = '60'><?=$descricao;?> </textarea></td>
            
            </tr> 
            <tr>
                <td align="right">Imagem:</td>
                <td><input type="file" name="imagem"  /></td>
            </tr>
             <tr>
                <td align="right">Lugar:</td>
                <td>
                    <?php
                    include '../conexao.php';
                    $sql = "SELECT * FROM lugares;";


                    $query = $mysqli->query($sql);

                    ?>
                    
                    <select name="lugar" id="lugar" required>
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

