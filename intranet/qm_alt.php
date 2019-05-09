<?php
    include_once('sessao.php');
    
    include("../conexao.php");
    $id= $_GET['id']; //pega valor do banco
    $sql= "Select * from empresa ";
    $query =$mysqli->query($sql);
    $dados = $query->fetch_array();
        $empresa_nome = $dados ['nome'];
        $missao = $dados ['missao'];
        $visao = $dados['visao'];
        $valor = $dados['valor'];
        $descricao_empresa = $dados['descricao_empresa'];
        $sobre = $dados['sobre'];
        $sobre_proprietaria = $dados['sobre_proprietaria'];
        $latitude = $dados['latitude'];
        $longitude = $dados['longitude'];
?>
<form name="cadastro" action="qm_altBD.php?id=<?=$id;?>" method="POST" enctype="multipart/form-data">
    <table  align="center" width="70%">   
        <tbody>            
            <tr>
                <td align="right">Nome:</td>
                <td><input type="text" name="nome" value="<?=$empresa_nome;?>" required/> </td>
            </tr>
            <tr>
                <td align="right">Missão:</td>
                <td>
                    <textarea type="text" align="justify" name="missao" rows='8' cols = '60'><?=$missao;?></textarea> 
                </td>
            </tr>
            <tr>
                <td align="right">Visão:</td>
                <td>
                    <textarea type="text" align="justify" name="visao" rows='8' cols = '60'><?=$visao;?></textarea> 
                </td>
            </tr>
            <tr>
                <td align="right">Valor:</td>
                <td>
                    <textarea type="text" align="justify" name="valor" rows='8' cols = '60'><?=$valor;?></textarea> 
                </td>
            </tr>
            <tr>
                <td align="right">Descrição da Empresa:</td>
                <td>
                    <textarea type="text" align="justify" name="descricao_empresa" rows='8' cols = '60'><?=$descricao_empresa;?></textarea> 
                </td>

            </tr>
            <tr>
                <td align="right">Sobre a Empresa:</td>
                <td>
                    <textarea type="text" align="justify" name="sobre" rows='8' cols = '60'><?=$sobre;?></textarea> 
                </td>
            </tr>
            <tr>
                <td align="right">Sobre a Proprietaria:</td>
                <td>
                    <textarea type="text" align="justify" name="sobre_proprietaria" rows='8' cols = '60'><?=$sobre_proprietaria;?></textarea> 
                </td>
            </tr>
            <tr>
                <td align="right">Latitude:</td>
                <td><input type="text" name="latitude" value="<?=$latitude;?>" required/> </td>
            </tr>
            <tr>
                <td align="right">Longitude:</td>
                <td><input type="text" name="longitude" value="<?=$longitude;?>" required/> </td>
            </tr>
            <tr>
                <td></td>
                <td align="right"><input type="submit" value="SALVAR"/></td>
            </tr>
        </tbody>
    </table>    
</form>

