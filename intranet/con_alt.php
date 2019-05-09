<?php
include_once('sessao.php');
    
include("../conexao.php");
$sql = "Select * from contato ";
$query = $mysqli->query($sql);
$dados = $query->fetch_array();

$telefone = $dados ['telefone'];
$celular_1 = $dados['celular_1'];
$celular_2 = $dados['celular_2'];
$email = $dados ['email'];
$endereco = $dados ['endereco'];
?>
<form name="cadastro" action="con_altBD.php?id=<?= $id; ?>" method="POST" enctype="multipart/form-data">
    <table  align="center" width="70%">   
        <tbody>            
            <tr>
                <td align="right">Telefone Fixo:</td>
                <td><input type="text" name="telefone" value="<?= $telefone; ?>" required/> </td>
            </tr>
            <tr>
                <td align="right">Telefone Celular 1:</td>
                <td><input type="text" name="celular_1" value="<?= $celular_1; ?> " required/> </td>
            </tr>
            <tr>
                <td align="right">Telefone Celular 2:</td>
                <td><input type="text" name="celular_2" value="<?= $celular_2; ?> " required/> </td>
            </tr> 
            <tr>
                <td align="right">E-mail:</td>
                <td><input type="text" name="email" value="<?= $email; ?> " required/> </td>
            </tr> 
            <tr>
                <td align="right">Endereço:</td>
                <td><input type="text" name="endereco" value="<?= $endereco; ?> " required/> </td>
            </tr>
            <tr>
                <td></td>
                <td align="right"><input type="submit" value="SALVAR"/></td>
            </tr>
        </tbody>
    </table>    
</form>

