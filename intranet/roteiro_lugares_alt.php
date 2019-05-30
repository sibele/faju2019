<?php
include_once('sessao.php');

include("../conexao.php");
$id = $_GET['id']; //pega valor do banco
$sql = "Select rl.id,roteiro_id,lugares_id,parada_id, rl.descricao, r.titulo as roteiro, l.nome as lugar, p.nome as parada"
        . " from roteiro_lugares as rl, roteiro as r, lugares as l, parada as p where rl.roteiro_id = r.id and rl.parada_id = p.id and rl.id= $id";
          
        //. " where rl.id= $id";

//$sql =  "Select rl.id,roteiro_id,lugares_id,parada_id, rl.descricao, r.titulo, l.nome, p.nome "
//        . "from roteiro_lugares as rl, roteiro as r, lugares as l, parada as p"
//        . "where rl.roteiro_id = r.id"
//        . "and rl.lugares_id = l.i"  //falta
//        . "and rl.parada_id = p.id"
//        . "and rl.id= $id";

$query = $mysqli->query($sql);
$dados = $query->fetch_array();
//print_r($dados);
$roteiro_id = $dados ['roteiro_id'];
$lugares_id = $dados ['lugares_id'];
$parada_id = $dados ['parada_id'];
$roteiro = $dados ['roteiro'];
$lugar = $dados ['lugar'];
$parada = $dados ['parada'];
$descricao_roteiro_lugar = $dados ['descricao'];
?>
<form name="cadastro" action="roteiro_lugares_altBD.php?id=<?= $id; ?>" method="POST" enctype="multipart/form-data">
    <table  align="center" width="70%">   
        <tbody>
            <tr>
                <td align="right">Roteiro:</td>
                <td>
                    <?php
                    include '../conexao.php';
                    $sql = "SELECT * FROM roteiro;";


                    $query = $mysqli->query($sql);
                    ?>

                    <select name="roteiro" id="roteiro" required="true" >
                        <option value=""><?php echo $roteiro ?></option>
                        <?php foreach ($query as $roteiro) {
                                                print_r($roteiro)?>
                            <option value="<?php echo $roteiro['id'] ?>"><?php echo $roteiro['titulo'] ?></option>
                        <?php } ?>
                    </select>

                </td>
            </tr>
            <tr>
                <td align="right">Lugar:</td>
                <td>
                    <?php
                    include '../conexao.php';
                    $sql = "SELECT * FROM lugares;";


                    $query = $mysqli->query($sql);
                    ?>

                    <select name="lugar_id" id="lugar_id" required>
                        <option value="">Selecione</option>
                        <?php foreach ($query as $lugar) { ?>
                            <option value="<?php echo $lugar['id'] ?>"><?php echo $lugar['nome'] ?></option>
                        <?php } ?>
                    </select>

                </td>
            </tr>
            <tr>
                <td align="right">Parada:</td>
                <td>
                    <?php
                    include '../conexao.php';
                    $sql = "SELECT * FROM parada;";


                    $query = $mysqli->query($sql);
                    ?>

                    <select name="id_parada" id="id_parada" required>
                        <option value="">Selecione</option>
                        <?php foreach ($query as $parada) { ?>
                            <option value="<?php echo $parada['id'] ?>"><?php echo $parada['nome'] ?></option>
                        <?php } ?>
                    </select>

                </td>
            </tr>
            <tr>
                <td align="right">Descrição:</td>
                <td><textarea type="text" align="justify" name="descricao"  rows='8' cols = '60'><?= $descricao_roteiro_lugar; ?> </textarea></td>
            </tr> 
            <tr>
                <td></td>
                <td align="right"><input type="submit" value="SALVAR"/></td>
            </tr>
        </tbody>
    </table>    
</form>

