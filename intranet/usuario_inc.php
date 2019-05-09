<?php
    include_once('sessao.php');
?> 
<form name="cadastro" action="usuario_incBD.php" method="POST" enctype="multipart/form-data">
    <table  align="center" width="70%">   
        <tbody>            
            <tr>
                <td align="right">Nome:</td>
                <td><input type="text" name="usuario_nome" value="" required/> </td>
            </tr>          
            <tr>
                <td align="right">Login:</td>
                <td><input type="text" name="usuario_login" value="" required/> </td>
            </tr>
            <tr>
                <td align="right">Senha:</td>
                <td><input type="password" name="usuario_senha" value="" required/> </td>
            </tr>
            <tr>
                <td></td>
                <td align="right"><input type="submit" value="SALVAR"/></td>
            </tr>
        </tbody>
    </table>    
</form>

