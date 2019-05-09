<?php
    include_once('sessao.php');
    
    include("../conexao.php");
    $id= $_GET['id']; //pega valor do banco
    $sql= "Select * from roteiro "
            . " where id= $id";
    $query =$mysqli->query($sql);
    $dados = $query->fetch_array();
        $titulo = $dados ['titulo'];
        $descricao_inicio = $dados ['descricao_inicio'];
        $foto_principal = $dados ['foto_principal'];
?>
<form name="cadastro" action="roteiro_altBD.php?id=<?=$id;?>" method="POST" enctype="multipart/form-data">
    <table  align="center" width="70%">   
        <tbody>
            <tr>
                <td align="right">Título:</td>
                <td><input type="text" name="titulo" value="<?=$titulo;?>" required/></td>
            </tr>
            <tr>
                <td align="right">Descrição do Início:</td>
                 <td><textarea type="text" align="justify" name="descricao_inicio"  rows='8' cols = '60'><?=$descricao_inicio;?> </textarea></td>
            
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

