<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Soluções Turisticas</title>
        <link rel = "icon" type = "imagem/x-icon" href = "img/iconefaju.png"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
        <link href="css/business-casual.min.css" rel="stylesheet">
        <!-- roteiro -->
        <link href="css/agency.min.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/business-casual.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <?php
        include 'conexao.php';

        $sql1 = "Select imagem_fundo from imagens";
        $query = $mysqli->query($sql1);
        $dados = $query->fetch_array();
        $imagem_fundo = $dados['imagem_fundo'];
        ?>   
        <style type="text/css">
            body {
                background-image: url(upload/imagem/<?= $imagem_fundo; ?>);
            }
        </style>

    </head>

    <body>
        <?php
        include 'cabecalho.php';

        $url = $_GET['url'];
        switch ($url) {
            case 'inicio': include('inicial.php');
                break;
            case 'empresa': include('empresa.php');
                break;
            case 'galeria': include('galeria.php');
                break;
            case 'gal1': include('gal.php');
                break;
            case 'gal2': include('gal.php');
                break;
            case 'gal3': include('gal.php');
                break;
            case 'gal4': include('gal.php');
                break;
            case 'gal5': include('gal.php');
                break;
            case 'gal6': include('gal.php');
                break;
            case 'gal7': include('gal.php');
                break;
            case 'roteiros': include('roteiros.php');
                break;
            case 'rot1': include('roteiro.php');
                break;
            case 'rot2': include('roteiro.php');
                break;
            case 'rot3': include('roteiro.php');
                break;
            case 'rot4': include('roteiro.php');
                break;
            case 'rot5': include('roteiro.php');
                break;
            case 'rot6': include('roteiro.php');
                break;
            case 'rot7': include('roteiro.php');
                break;
            case 'contato': include('contato.php');
                break;
            case 'videos': include('videos.php');
                break;
            default: include('inicial.php');
        }

        include 'rodape.php';
        ?>
        <div class="scrollup" >
            <a href="#top"><i class="fas fa-chevron-circle-up fa-2x" width="100%" ></i></a>
        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
