 <?php
session_start();
unset($_SESSION['us_nome']);
unset($_SESSION['us_id']);
if($_GET['acao']=='V'){
    $login = $_POST['login'];
    $senha_login = $_POST['senha'];
    $senha_login = md5($senha_login);
    
    include_once '../conexao.php';
    $sql = "Select cod_usuario, nome from usuario
           where login = '$login' and
           senha = '$senha_login';";

    $query = $mysqli->query($sql);
    $num_reg = $query->num_rows;

    if($num_reg > 0) {
        $dados = $query->fetch_array();
        $cod_us = $dados['cod_usuario'];
        $nome_us = $dados['nome'];
        $_SESSION['us_nome']=$nome_us;
        $_SESSION['us_id']=$cod_us;
        $_SESSION['us_sessao']=session_id();
        header("location: index.php");
	} else {
	   $msg = 'erro_login';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Login - FAJU</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="login/fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="login/css/util.css">
        <link rel="stylesheet" type="text/css" href="login/css/main.css">
        <!--===============================================================================================-->
    </head>
    <body>
       
        <div class="limiter">
            <div class="container-login100">
                <div class="container-login100-2">
                    <div class="wrap-login100">
                        <form class="login100-form validate-form" method="POST" action="login.php?acao=V">
                            <div class="login100-pic js-tilt" data-tilt>
                                <img src="../img/FAJU123.png" alt="IMG">
                            </div>

                            <div class="wrap-input100 validate-input" data-validate = "Login:">
                                <input class="input100" type="text" name="login">
                                <span class="focus-input100" data-placeholder="Login"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Digite a Senha">
                                <span class="btn-show-pass">
                                    <i class="zmdi zmdi-eye"></i>
                                </span>
                                <input class="input100" type="password" name="senha">
                                <span class="focus-input100" data-placeholder="Senha"></span>
                            </div>

                            <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                    
                                    <div class="login100-form-bgbtn"></div>
                                    <button class="login100-form-btn">
                                        Login
                                    </button>
                                </div>
                                <div class="erro">
                                    <br>
                                    <?php
                                    if(($_GET['msg'])|| ($msg)) {
                                        if($msg=='erro_login') 
                                            echo "Usuário/Senha Inválidos!!!";
                                        if($_GET['msg']=='erro_sessao')
                                      echo "Necessário estar logado para <br>acessar o sistema!!!";
                                    }	
                                    ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="dropDownSelect1"></div>

        <!--===============================================================================================-->
        <script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="login/vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="login/vendor/bootstrap/js/popper.js"></script>
        <script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="login/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="login/vendor/daterangepicker/moment.min.js"></script>
        <script src="login/vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="login/vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="login/js/main.js"></script>
        <script src="login/vendor/tilt/tilt.jquery.min.js"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            });
        </script>
    </body>
</html>
