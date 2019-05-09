<?php
    include_once('sessao.php');
    
include("../conexao.php");
$id = $_GET['id']; //pega valor do banco
$sql = "Select * from usuario where cod_usuario= $id";
$query = $mysqli->query($sql);
$dados = $query->fetch_array();
$usuario_nome = $dados ['nome'];
$usuario_login = $dados ['login'];
$usuario_senha = $dados ['senha'];
?>
<form name="cadastro" action="usuario_altBD.php?id=<?= $id; ?>" method="POST" enctype="multipart/form-data">
    <table  align="center" width="70%">   
        <tbody>            
            <tr>
                <td align="right">Nome:</td>
                <td><input type="text" name="usuario_nome" value="<?= $usuario_nome; ?>" required/> </td>
            </tr><tr>
                <td align="right">Login:</td>
                <td><input type="text" name="usuario_login" value="<?= $usuario_login; ?>" required/> </td>
            </tr>
            <tr>
                <td align="right">Senha:</td>
                <td><input type="password" name="usuario_senha" value="<?= $usuario_senha; ?> " required/> </td>
            </tr>
            <tr>
                <td></td>
                <td align="right"><input type="submit" value="SALVAR"/></td>
            </tr>
        </tbody>
    </table>    
</form>

