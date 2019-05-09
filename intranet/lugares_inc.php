<?php
include_once('sessao.php');
?> 

<form name="cadastro" action="lugares_incBD.php" method="POST" enctype="multipart/form-data">
    <table  align="center" width="70%">   

        <tbody>
            <tr>
                <td align="right">Nome:</td>
                <td><input type="text" name="nome" value="" required/></td>
            </tr>
            <tr>
                <td align="right">Descrição:</td>
                <td><textarea type="text" align="justify" name="descricao"  rows='8' cols = '60'> </textarea></td>

            </tr>
            <tr>
                <td align="right">Localização:</td>
                <td><input type="text" name="localizacao" value="" required/></td>
            </tr> 
            <tr>
                <td align="right">Foto Principal (200px X 200px):</td>
                <td><input type="file" name="foto_principal"  /></td>
            </tr>


            <tr>
                <td></td>
                <td align="right"><input type="submit" value="SALVAR"/></td>
            </tr>
        </tbody>
    </table>    
</form>