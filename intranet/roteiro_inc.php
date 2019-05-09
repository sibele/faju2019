<?php
    include_once('sessao.php');
?> 
<form name="cadastro" action="roteiro_incBD.php" method="POST" enctype="multipart/form-data">
    <table  align="center" width="70%">   
        <tbody>
            <tr>
                <td align="right">Título:</td>
                <td><input type="text" name="titulo" value="" required/></td>
            </tr>
            <tr>
                <td align="right">Descrição do Início:</td>
                 <td><textarea type="text" align="justify" name="descricao_inicio"  rows='8' cols = '60'></textarea></td>
            
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