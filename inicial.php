<?php
    include 'conexao.php';

    $sql = "Select * from empresa";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();
      $missao = $dados['missao'];
      $visao = $dados['visao'];
      $valores = $dados['valor'];

      $sql1 = "Select imagem_inicio from imagens";
    $query = $mysqli->query($sql1);
    $dados = $query->fetch_array();
      $imagem_inicio = $dados['imagem_inicio'];

    ?> 

<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="upload/imagem/<?= $imagem_inicio; ?>" alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Informações da</span>
                    <span class="section-heading-lower">Empresa</span>
                </h2>
                <p class="mb-3">O intuito destes passeios turísticos é apresentar o desenvolvimento econômico, cultural e as belezas naturais que potencializam o município de Itapiranga - SC e região. Os roteiros foram criados ainda para uma maior divulgação dos atrativos turísticos disponíveis.
                </p><br>
                <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl" href="index.php?url=empresa">MAIS INFORMAÇÕES</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section cta">

    <div class="container">
       
            <div class="col-xl-12 col-xl-0">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-3">
                        <span class="section-heading-uper">MISSÃO</span>
                    </h2>
                    <p><?= $missao; ?></p>

                </div>

            </div>
        
    </div>
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-xl-0">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-3">

                        <span class="section-heading-uper">VISÃO</span>
                    </h2>
                    <p><?= $visao; ?></p>

                </div>

            </div>
        </div>
    </div>

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-1">
                <div class="cta-inner text-center">
                    <h2 class="section-heading mb-3">
                        <span class="section-heading-uper">VALORES</span>
                    </h2>
                    <p><?= $valores; ?></p>
                </div>

            </div>
        </div>
    </div>

</section>


<br><br><br><br><br>