<?php 
include("acoes/config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BD Op Log ZULU </title>
    <style>
        .Usuario{
            pointer-events: none;
            cursor: default;
            color: #ccc;
        } 
       
         /* Área principal onde o form vai ficar */
       

        .form-box {
        background-color: white;
        padding: 20px 30px;
        border-radius: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 350%;
        max-width: 1400px; /* Limita o tamanho máximo */
        box-sizing: border-box;
        }
       
    
    </style>
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
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
  </head>

  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- CABEÇALHO -->
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo align-self-centerpho">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.php">
                            <img width="215" class="img-fluid" src="assets/images/logo2.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!">
                                    <i class="ti-angle-double-down"></i>                                     
                                </a>
                               
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <span><?php echo '<strong>'.$pg.'</strong>'." ".$nomeUsuario?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                              
                                    <li>
                                        <a href="#">
                                            <i class="ti-user"></i> Perfil
                                        </a>
                                    </li>                                                        
                                    <li>
                                        <a href="acoes/logout.php">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- BARRA LATERAL -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">                       
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Visualização</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="index.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Ínicio</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Operações</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="index.php?p=minhasOp">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Minhas Operações</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="pesquisado.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Todas Operações</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Operações</div>
                            <ul class="pcoded-item pcoded-left-item">
                            <?php if($erro != "Usuario"){
                            ?>
                                <li>
                                    <a href="index.php?p=inserção">
                                        <span class="pcoded-micon"><i class="ti-plus"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Inserção</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <?php } ?>
                                <li>
                                    <a href="pesquisaOp.php">
                                        <span class="pcoded-micon"><i class="ti-search"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Pesquisa</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>                          
                            </ul>
                            <?php if($erro == "Admin"){
                            ?>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Administrador</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-user"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Administrador</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="index.php?p=cadastro" class="<?php echo $erro ?>" >
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Cadastro de Usuários</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="index.php?p=admin">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Designação de Funções</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <?php } ?>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other">Outros</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-book"></i><b>M</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Diretrix</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>                                 
                                </li>
                            </ul>
                        </div>
                    </nav>
              
                    

            <!-- CONTEÚDO -->
            <div class="pcoded-content">
                <div class="pcoded-inner-content">

                    <!-- Main-body start -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- Page-header start -->
                            <div class="page-header card">
                                <div class="row align-items-end">
                                    <div class="col-lg-8">
                                        <div class="page-header-title">
                                            <i class="icofont icofont icofont icofont-file-document bg-c-pink"></i>
                                            <div class="d-inline">
                                                <h4>Pesquise sua operação</h4>
                                                <span>Use qualquer parâmetro para efetuar sua pesquisa</span>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                            <!-- Page-header end -->
                        </div>
                    </div>
                        

                    <!--formulario de pesquisa-->
                    <div class="card-block">
                        <form method="POST" class="form-box" action="pesquisado.php";>     
                            <h4 class="sub-title">Informações</h4>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nome:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="operacao" class="form-control"
                                    placeholder="Nome da operação">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Estado (UF):</label>
                                <div class="col-sm-10">
                                    <select name="estado" class="form-control">
                                        <option value="">Selecione o estado</option>
                                        <option value="Acre">Acre</option>
                                        <option value="Alagoas">Alagoas</option>
                                        <option value="Amapá">Amapá</option>
                                        <option value="Amazonas">Amazonas</option>
                                        <option value="Bahia">Bahia</option>
                                        <option value="Ceará">Ceará</option>
                                        <option value="Distrito Federal">Distrito Federal</option>
                                        <option value="Espírito Santo">Espírito Santo</option>
                                        <option value="Goiás">Goiás</option>
                                        <option value="Maranhão">Maranhão</option>
                                        <option value="Mato Grosso">Mato Grosso</option>
                                        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                        <option value="Minas Gerais">Minas Gerais</option>
                                        <option value="Pará">Pará</option>
                                        <option value="Paraíba">Paraíba</option>
                                        <option value="Paraná">Paraná</option>
                                        <option value="Pernambuco">Pernambuco</option>
                                        <option value="Piauí">Piauí</option>
                                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                                        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                        <option value="Rondônia">Rondônia</option>
                                        <option value="Roraima">Roraima</option>
                                        <option value="Santa Catarina">Santa Catarina</option>
                                        <option value="São Paulo">São Paulo</option>
                                        <option value="Sergipe">Sergipe</option>
                                        <option value="Tocantins">Tocantins</option>
                                        <option value="Internacional">Internacional</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Missão:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="missao" class="form-control"
                                    placeholder="Missão">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Comando Militar de Área:</label>
                                <div class="col-sm-10">
                                    <select name="cma" class="form-control">
                                    <option value="">Selecione o Comando Militar de Área</option>
                                    <option value="Comando Militar da Amazônia">Comando Militar da Amazônia</option>
                                    <option value="Comando Militar do Leste">Comando Militar do Leste</option>
                                    <option value="Comando Militar do Planalto">Comando Militar do Planalto</option>
                                    <option value="Comando Militar do Norte">Comando Militar do Norte</option>
                                    <option value="Comando Militar do Nordeste">Comando Militar do Nordeste</option>
                                    <option value="Comando Militar do Oeste">Comando Militar do Oeste</option>
                                    <option value="Comando Militar do Sudeste">Comando Militar do Sudeste</option>
                                    <option value="Comando Militar do Sul">Comando Militar do Sul</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Região Militar:</label>
                                <div class="col-sm-10">
                                    <select name="rm" class="form-control">
                                        <option value=""> Selecione a Região Militar</option>
                                        <option value="1ª região militar">1ª região militar</option>
                                        <option value="2ª região militar">2ª região militar</option>
                                        <option value="3ª região militar">3ª região militar</option>
                                        <option value="4ª região militar">4ª região militar</option>
                                        <option value="5ª região militar">5ª região militar</option>
                                        <option value="6ª região militar">6ª região militar</option>
                                        <option value="7ª região militar">7ª região militar</option>
                                        <option value="8ª região militar">8ª região militar</option>
                                        <option value="9ª região militar">9ª região militar</option>
                                        <option value="10ª região militar">10ª região militar</option>
                                        <option value="11ª região militar">11ª região militar</option>
                                        <option value="12ª região militar">12ª região militar</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Comando da Operação</label>
                                <div class="col-sm-10">
                                    <input type="text" name="comandoOp" class="form-control"
                                    placeholder="Comando da operação">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Organização Apoiada</label>
                                <div class="col-sm-10">
                                    <input type="text" name="comandoApoio" class="form-control"
                                    placeholder="Organização Apoiada">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ini" class="col-sm-2 col-form-label">Início da Operação:</label>
                                <input class="form-control" type="date" id="ini" name="inicioOp" placeholder="inicio da operação">
                            </div> 

                            <div class="form-group row">
                                <label for="ini" class="col-sm-2 col-form-label">Término da Operação:</label>
                                <input class="form-control" type="date" id="" name="fimOp" placeholder="Término da operação">
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tipo de Operação:</label>
                                <div class="col-sm-10">
                                    <select id="tipoOp" name="tipoOp" class="form-control">
                                        <option value="">Selecione o tipo de operação</option>
                                        <option value="Preparo">Preparo</option>
                                        <option value="Emprego">Emprego</option>
                                        <option value="Transporte">Transporte</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success btn-square btn-block">Pesquisar</button>                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
          
            
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
</body>

</html>
