<?php
    include_once('sessao.php');
    
    include("../conexao.php");
    $id= $_GET['id']; //pega valor do banco
    $sql= "Select * from imagens";
    $query =$mysqli->query($sql);
    $dados = $query->fetch_array();
        $id = $dados ['imagem_id'];
        $imagem_fundo = $dados ['imagem_fundo'];
        $imagem_inicio = $dados ['imagem_inicio'];
        $imagem_logo = $dados ['imagem_logo'];
        $imagem_contato = $dados ['imagem_contato'];
?>
<form name="cadastro" action="imagens_altBD.php?id=<?=$id;?>" method="POST" enctype="multipart/form-data">
    <table  align="center" width="70%">   
        <tbody>
            <tr>
                <td align="right">Imagem do fundo:</td>
                <td><img src="../upload/imagem/<?=$imagem_fundo;?>" width="250"/></td>
                <td><input type="file" name="imagem_fundo" value"<?=$imagem_fundo;?>" /></td>
            </tr>
            <tr>
                <td align="right">Imagem do Início:</td>
                <td><img src="../upload/imagem/<?=$imagem_inicio;?>" width="250"/></td>
                <td><input type="file" name="imagem_inicio" /></td>
            </tr>
            <tr>
                <td align="right">Logo:</td>
                <td><img src="../upload/imagem/<?=$imagem_logo;?>" width="250"/></td>
                <td><input type="file" name="imagem_logo" /></td>
            </tr>
            <tr>
                <td align="right">Imagem do Contato:</td>
                <td><img src="../upload/imagem/<?=$imagem_contato;?>" width="250"/></td>
                <td><input type="file" name="imagem_contato" /></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td align="right"><input type="submit" value="SALVAR"/></td>
            </tr>
        </tbody>
    </table>    
</form>

