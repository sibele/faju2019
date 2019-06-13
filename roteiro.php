<?php
$roteiro_id = $_GET["url"];
//echo $roteiro_id;
$id = str_replace("rot", "", $roteiro_id);

include './conexao.php';
$sqli = "select parada.id, parada.nome, lugares.id, lugares.nome, lugares.descricao as descricao_lugares, lugares.localizacao, lugares.foto_principal, roteiro_lugares.id, roteiro_lugares.roteiro_id, roteiro_lugares.lugares_id, roteiro_lugares.parada_id, roteiro_lugares.descricao as rot_lug_descricao "
        . "from roteiro_lugares, parada, lugares where roteiro_lugares.lugares_id = lugares.id and roteiro_lugares.parada_id = parada.id and roteiro_lugares.roteiro_id = $id
            order by parada.nome ASC;";
$query = $mysqli->query($sqli);

$sql = "Select * from roteiro where id = $id;";
$query1 = $mysqli->query($sql);
$dados = $query1->fetch_array();
$sobre = $dados['titulo'];
?>

<sectionrot id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h4 class="site-heading text-center text-white d-none d-lg-block">
                    <span><?php echo $sobre ?></span>
                </h4>
            </div>

            <?php
            $count = 0;
            foreach ($query as $q):
                $count = $count + 1;
            endforeach;
            ?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">

                    <?php
                    $count2 = 0;
                    foreach ($query as $q):
                        $count2 = $count2 + 1;
                        if ($count2 % 2 != 0) {
                            //Par
                            ?>
                            <li class="timeline-image">
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="upload/lugar/<?php echo $q['foto_principal'] ?>" alt="">
                                </div>
                                <div class="timeline-panel">                           
                                    <div class="intro-text left-0 bg-faded p-3 rounded">    

                                        <div class="timeline-heading">

                                            <h4 class="subheading"><?php echo $q['nome'] ?></h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p class="text-muted">
                                                <?php
                                                if ($q['rot_lug_descricao'] != null) {
                                                    echo $q['rot_lug_descricao'];
                                                } else {
                                                    echo $q['descricao_lugares'];
                                                }
                                                ?>  
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                <!--                                     <li class="timeline-inverted"> 
                                                                <div class="timeline-image"> 
                                                                    <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt=""> 
                                                                </div> 
                                                                <div class="timeline-panel"> 
                                                                    <div class="intro-text left-0 bg-faded p-3 rounded">     
                                                                        <div class="timeline-heading"> 
                                                                            <h4></h4> 
                                                                            <h4 class="subheading"> Igreja e Santuário em Linha Popi</h4> 
                                                                        </div> 
                                                                        <div class="timeline-body"> 
                                                                            <p class="text-muted">Esta é a única Igreja em madeira, com duas torres, edificada em enxaimel, revestida com tábuas, da América Latina.</p> 
                                                                        </div> 
                                                                    </div>     
                                                                </div> 
                                                            </li> -->



                            </li>




                            <?php
                        } else {
                            //Impar;
                            ?>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="upload/lugar/<?php echo $q['foto_principal'] ?>" width="200px" height="200px" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="intro-text left-0 bg-faded p-3 rounded">    
                                        <div class="timeline-heading">

                                            <h4 class="subheading"><?php echo $q['nome'] ?></h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p class="text-muted">
                                                <?php
                                                if ($q['rot_lug_descricao'] != null) {
                                                    echo $q['rot_lug_descricao'];
                                                } else {
                                                    echo $q['descricao_lugares'];
                                                }
                                                ?>  
                                            </p>
                                        </div>
                                    </div>    
                                </div>
                            </li>

                        <?php } ?>

                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</sectionrot> 
