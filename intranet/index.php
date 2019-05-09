<?php
include_once('sessao.php');
?> 
<!DOCTYPE HTML>
<html>
    <?php
    // header('location: login.php');       
    include ('../conexao.php');
    $sql = "Select * "
            . " from empresa"
    ;
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();
    //$cod = $dados ['empresa_id'];
    $empresa_nome = $dados ['nome'];
    ?> 
    <head>
        <title>Admin-<?= $empresa_nome; ?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel = "icon" type = "imagem/x-icon" href = "img/favicon.ico"/>
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <script>
            function excluir(valor) {
                return confirm('Deseja realmente excluir o registro:\n' + valor + '?')
            }
        </script>

    </head>
    <body>
        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Main -->
            <div id="main">
                <div class="inner">

                    <!-- Header -->
                    <header id="header">
                        <h2><strong>
                                <?php
                                $url = $_GET['url'];
                                switch ($url) {
                                    case 'ini': echo 'Home';
                                        break;
                                    case 'emp': echo 'Empresa';
                                        break;
                                    case 'rot': echo 'Roteiros';
                                        break;
                                    case 'con': echo 'Contato';
                                        break;
                                    case 'usu': echo 'Usuarios';
                                        break;
                                    case 'gal': echo 'Fotos';
                                        break;
                                    case 'lug': echo 'Lugares';
                                        break;
                                    case 'rot_lug': echo 'Definir Roteiros';
                                        break;
                                    case 'qm_alt': echo 'Alterar dados da Empresa';
                                        break;
                                    case 'gal_inc': echo 'Incluir dados das Fotos';
                                        break;
                                    case 'gal_alt': echo 'Alterar dados das Fotos';
                                        break;
                                    case 'lug_inc': echo 'Incluir dados dos Lugares';
                                        break;
                                    case 'lug_alt': echo 'Alterar dados dos Lugares';
                                        break;
                                    case 'rot_inc': echo 'Incluir dados dos Roteiros';
                                        break;
                                    case 'rot_alt': echo 'Alterar dados dos Roteiros';
                                        break;
                                    case 'rot_lug_inc': echo 'Incluir dados das Definir Roteiros';
                                        break;
                                    case 'rot_lug_alt': echo 'Alterar dados das Definir Roteiros';
                                        break;                                          
                                    case 'con_alt': echo 'Alterar dados dos Contato';
                                        break;
                                    case 'usu_inc': echo 'Incluir dados dos Usuarios';
                                        break;
                                    case 'usu_alt': echo 'Alterar dados dos Usuarios';
                                        break;
                                    default: echo 'Home';
                                        break;
                                }
                                ?>

                            </strong></h2>

                    </header>

                    <!-- Banner -->
                    <section id="banner">
                        <div class="content">
                            <?php
                            $url = $_GET['url'];
                            switch ($url) {

                                case 'ini': include('inicial.php');
                                    break;
                                case 'qm_alt': include('qm_alt.php');
                                    break;
                                case 'gal': include('galeria.php');
                                    break;
                                case 'gal_inc': include('galeria_inc.php');
                                    break;
                                case 'gal_alt': include('galeria_alt.php');
                                    break;
                                case 'img': include('imagens_alt.php');
                                    break;
                                case 'rot': include('roteiro.php');
                                    break;
                                case 'rot_inc': include('roteiro_inc.php');
                                    break;
                                case 'rot_alt': include('roteiro_alt.php');
                                    break;
                                case 'lug': include('lugares.php');
                                    break;
                                case 'lug_inc': include('lugares_inc.php');
                                    break;
                                case 'lug_alt': include('lugares_alt.php');
                                    break;
                                case 'rot_lug': include('roteiro_lugares.php');
                                    break;
                                case 'rot_lug_inc': include('roteiro_lugares_inc.php');
                                    break;
                                case 'rot_lug_alt': include('roteiro_lugares_alt.php');
                                    break;
                                case 'rot_lug': include('roteiro_lugares.php');
                                    break;
                                case 'rot_lug_inc': include('roteiro_lugares_inc.php');
                                    break;
                                case 'rot_lug_alt': include('roteiro_lugares_alt.php');
                                    break;
                                case 'con': include('con_alt.php');
                                    break;

                                case 'usu': include('usuario.php');
                                    break;
                                case 'usu_inc': include('usuario_inc.php');
                                    break;
                                case 'usu_alt': include('usuario_alt.php');
                                    break;
                                default: include('inicial.php');
                            }
                            ?>
                        </div>
                    </section>

                </div>
            </div>

            <!-- Sidebar -->
            <div id="sidebar">
                <div class="inner">

                    <!-- Menu -->
                    <nav id="menu">
                        <header class="major">
                            <h2><?= $empresa_nome; ?></h2>
                        </header>
                        <ul class="contact">
                            <li><a href="?url=ini"> <i class="fas fa-home"></i> Home</a></li>
                            <li><a href="?url=qm_alt"> <i class="fas fa-archway"></i> Empresa</a></li> 
                            <li><a href="?url=gal"> <i class="fas fa-images"></i> Fotos</a></li>
                            <li><a href="?url=lug"> <i class="fas fa-bus"></i> Lugares</a></li>
                            <li> <a href="?url=rot"> <i class="fas fa-clipboard-list"></i> Roteiros</a></li>
                            <li><a href="?url=rot_lug"> <i class="fas fa-map-marked-alt"></i> Definir roteiros</a></li>
                            <li><a href="?url=con"> <i class="fas fa-phone"></i> Contatos</a></li>
                            <li><a href="?url=img"> <i class="fas fa-images"></i> Imagens do Site</a></li>
                            <li><a href="?url=usu"> <i class="fas fa-user-tie"></i> Usuários</a></li>
                        </ul>
                    </nav>
                    
                    <!-- Footer -->
                    <footer id="footer">
                        <p class="alinke"><a href="../index.php" ><input class="alink" type="submit" value="VOLTAR AO SITE"/></a></p>
                        <p class="alinkd"><a href="logoff.php"><input type="submit" value=" SAIR DO ADMIN"/></a></p>
                        <hr>
                        <p class="copyright">&copy; UCEFF Premium Consultoria - 2018.</p>
                    </footer>
                </div>
            </div>

        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>

    </body>
</html>