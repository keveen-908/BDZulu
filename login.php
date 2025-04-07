<?php 

    session_start();
    $host = "localhost";
    $user = "root";
    $pass = "@160l0nc3t";
    $db = "bdcolog";

    $mysqli = mysqli_connect($host,$user, $pass,$db);

    if(isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['input'])){
                
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
        $pesquisaLogin = "SELECT * FROM usuarios WHERE email='$email' ";
        $resultado = $mysqli->query($pesquisaLogin);
        $linha = $resultado->fetch_array();  
        $nomeUsuario = $linha['nome'];     
        $hash = $linha['senha'];
        

        if(password_verify($senha, $linha['senha'])){
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            $insert="INSERT INTO loglogin (usuario, data) VALUES ('$nomeUsuario', NOW())";
            $mysqli->query($insert);
            
            header("Location: index.php");
            	  
        }else{
            $_SESSION['erro'] = "Usuário e/ou senha inválido(s), Tente novamente!";
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zulu-BDOp</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <style>
   
    </style>
</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
        </div>
    </div>
</div>
    <!-- Pre-loader end -->

    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form method="POST" class="md-float-material">
                            <div class="text-center">
                                
                            </div><img src="assets/images/logo.png" alt="logo.png">
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Banco de Dados - Zulu</h3>
                                    </div>
                                </div>
                              
                                <?php if($_SESSION['erro'] != false) {
                                    ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $_SESSION['erro']; $_SESSION['erro'] = null;?>
                                    </div>
                                    <?php
                                }
                                ?>
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control" placeholder="Digite seu email:">
                                    <span class="md-line"></span>
                                </div>

                                <<div class="input-group">
                                    <input type="password" id="senha" name="senha" class="form-control" placeholder="*********">
                                    <span class="md-line"></span>
                                    <button type="button" id="toggleSenha" class="btn btn-link">
                                        <i class="icofont icofont-eye-alt"></i> <!-- Ícone de olho -->
                                    </button>
                                </div>
                                <div class="row m-t-25 text-right">                  
                                    <div class="col-sm-12 col-xs-12 forgot-phone text-right">
                                        <a href="resetar_senha.php" class="text-right f-w-600 text-inverse"> Esqueceu sua senha?</a>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" name="input" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Acessar</button>
                                    </div>
                                </div>
                            
                            </div>

                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>

<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>
    <script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>
<script type="text/javascript">
    document.getElementById('toggleSenha').addEventListener('click', function() {
        var senhaField = document.getElementById('senha');
        var icon = this.querySelector('i');
        
        // Verifica o tipo do campo de senha
        if (senhaField.type === 'password') {
            senhaField.type = 'text'; // Exibe a senha
            icon.classList.remove('icofont-eye-alt'); // Troca o ícone
            icon.classList.add('icofont-eye'); // Ícone de "olho aberto"
        } else {
            senhaField.type = 'password'; // Esconde a senha
            icon.classList.remove('icofont-eye'); // Troca o ícone
            icon.classList.add('icofont-eye-alt'); // Ícone de "olho fechado"
        }
    });
</script>
</html>
