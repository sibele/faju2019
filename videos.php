<?php
include './conexao.php';
$sql = "select * from videos";
$query = $mysqli->query($sql);
//$dados = $query->fetch_array(); 
?>        
<section class="page-section clearfix" id="portfolio">
    <div class="container">
        <div class="row">   
            <?php foreach ($query as $videos) { ?>      

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <img class="img-fluid" src="upload/roteiro/<?php echo $roteiro['foto_principal'] ?>" height="500"  alt=""> 
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $roteiro['titulo'] ?></h4> 
                        <p class="text-muted"><?php echo $roteiro['descricao_inicio'] ?><br><br></p> 
                        <div class="intro-button mx-auto">
                            <a class="botao btn btn-primary " href="index.php?url=rot<?php echo $roteiro['id'] ?>">VER ROTEIRO</a> 
                        </div>
                        <div class="intro-button mx-auto">
                            <a class="botao btn btn-primary" href="index.php?url=gal<?php echo $roteiro['id'] ?>">VER FOTOS</a>
                        </div>
                    </div>
                </div>              
            <?php } ?> 
        </div> 
    </div>
</section>
