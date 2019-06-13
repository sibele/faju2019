<?php
include './conexao.php';
$sql = "select * from roteiro";
$query = $mysqli->query($sql);
//$dados = $query->fetch_array(); 
?>     

<section class="page-section clearfix" id="portfolio">
    <div class="container" style=" margin: 0 auto; padding: 0px; text-align: center;">

        <div class="intro-text left-0 text-center bg-faded rounded" style=" height: 110px; padding: 0px; margin: 0px 15px 20px 15px;">
            <br>                                                                                            
            <h2>Roteiros sugestivos</h2>
            <p>Os roteiros abaixo são apenas sugestões, para a personalização 
                do seu tur entre em contato.</p>
        </div>

        <div class="row">   
            <?php foreach ($query as $roteiro) { ?>      

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
