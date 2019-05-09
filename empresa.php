<?php
    include 'conexao.php';

    $sql = "Select * from empresa";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();
      $descricao_empresa = $dados['descricao_empresa'];
      $sobre = $dados['sobre'];
      $sobre_proprietaria = $dados['sobre_proprietaria'];
    ?> 
<br><br><br>
<div class="row col-md-11" >
    <div class="intro-text alinhar left-0 text-center bg-faded p-3 rounded col-md-3 col-sm-0" data-wow-delay="0.3s">
        <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Informações da</span>
            <span class="section-heading-uper">Empresa</span>
        </h2>
        <p class="mb-3"><?= $descricao_empresa; ?>
        </p>
    </div>
    <br><br><br>
    <div class="intro-text alinhar left-0 text-center bg-faded p-3 rounded col-md-3 col-sm-0" data-wow-delay="0.3s">
        <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Sobre a</span>
            <span class="section-heading-uper">Empresa</span>
        </h2>
        <p class="mb-3"><?= $sobre; ?></p>
    </div>
    <br><br><br>
    <div class="intro-text alinhar left-0 text-center bg-faded p-3 rounded col-md-3 col-sm-0" data-wow-delay="0.3s">
        <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Sobre a</span>
            <span class="section-heading-uper">Proprietária</span>
        </h2>
        <p class="mb-3"><?= $sobre_proprietaria; ?></p>
    </div>
</div>
<br><br><br><br>
