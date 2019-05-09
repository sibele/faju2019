<?php
    include_once('sessao.php');
    
    include("../conexao.php");
    $id= $_GET['id']; //pega valor do banco
    $sql= "Select * from lugares "
            . " where id= $id";
    $query =$mysqli->query($sql);
    $dados = $query->fetch_array();
        $cod= $dados ['id'];
        $nome = $dados ['nome'];
        $descricao = $dados ['descricao'];
        $localizacao = $dados ['localizacao'];
        $foto_principal = $dados ['foto_principal'];
?>
<form name="cadastro" action="lugares_altBD.php?id=<?=$id;?>" method="POST" enctype="multipart/form-data">
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
                <td align="right">Localização:</td>
                <td><input type="text" name="localizacao" value="<?=$localizacao;?>" required/></td>
            </tr> 
            <tr>
                <td align="right">Foto Principal:</td>
                <td><input type="file" name="foto_principal"  /></td>
            </tr>
            <tr>
                <td></td>
                <td align="right"><input type="submit" value="SALVAR"/></td>
            </tr>
        </tbody>
    </table>    
</form>

