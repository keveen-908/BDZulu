<?php
include("acoes/config.php");


?>

<!DOCTYPE html>
<html lang="en">
  

<head>
    <title>BD Op Log ZULU </title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .Usuario{
            pointer-events: none;
            cursor: default;
            color: #ccc;
        } 
        td, th {
        word-wrap: break-word; /* Permite que o texto quebre a linha automaticamente */
        overflow-wrap: break-word; /* Garante a quebra de palavras longas */
        max-width: 200px; /* Ajuste a largura máxima conforme necessário */
        white-space: normal; /* Permite a quebra de linha do conteúdo */
        }
        .col-pequena {
        width: 80px;
        white-space: nowrap; /* Impede quebra de linha */
        overflow: hidden;    /* Esconde conteúdo que passar do tamanho */
        text-overflow: ellipsis; /* Coloca "..." no fim se for grande */
        }
        .col-limitada {
        max-width: 100px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
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
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
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
<script src="assets/js_kev/evento.js"></script>
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
<script>
      function Expandir(id) {
        window.open('pages/relatorio.php?id=' + id, '_blank');
      }
      function Edicao(id) {
        window.open('pages/editar_Op.php?id=' + id, '_blank');
      }
      function Excluir(id) {
        window.open('acoes/acao.php?acao=excluir&id=' + id);
      }

    </script>
</body>
  <?php

      // Define os campos de pesquisa
      $campos = array('operacao', 'estado', 'missao', 'cma', 'rm', 'comandoOp', 'comandoApoio', 'tipoOp');

      $query = "SELECT * FROM operacao WHERE ";

      if (!empty($_POST['inicioOp']) && !empty($_POST['fimOp'])) {
        $data_inicial =  $_POST['inicioOp'];
        $data_final = $_POST['fimOp'];
        
        $query .= "inicioOp >= '".$data_inicial."' AND fimOp <= '".$data_final."'";
        
        if (!empty($_POST['operacao'])||!empty($_POST['estado'])||!empty($_POST['missao'])||!empty($_POST['cma'])||!empty($_POST['rm'])||!empty($_POST['comandoOp'])||!empty($_POST['comandoApoio'])) {
          foreach ($campos as $campo) {
          $query .= " AND $campo LIKE '%".$_POST[$campo]."%'";
          } 
        }
    } else {
        // Busca sem datas
        foreach ($campos as $campo) {
          if (isset($campo)){
            @$query .= "$campo LIKE '%".$_POST[$campo]."%' AND ";
          }
      }
      // Remove o último "OR"
      $query = substr($query, 0, -4);
    }

    //print_r($query);
    
      // Executa a consulta
      $result = $mysqli->query($query);
      // Exibe os resultados
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $ids[] = $row['opid'];
          }
      
      foreach ($ids as $id){
          $pesquisa = $mysqli->real_escape_string($id);
          $sql_code = "SELECT * 
            FROM operacao 
            WHERE opid LIKE '%$pesquisa%'";
          $sql_code2 = "SELECT * 
            FROM efetivo 
            WHERE eid LIKE '%$pesquisa%'";
          $sql_code3 = "SELECT * 
            FROM tipoOp 
            WHERE tid LIKE '%$pesquisa%'";
          $sql_code4 = "SELECT * 
            FROM recursos 
            WHERE rid LIKE '%$pesquisa%'";
          $sql_code5 = "SELECT * 
            FROM infos
            WHERE iid LIKE '%$pesquisa%'";
          $sql_code6 = "SELECT * 
            FROM anexos
            WHERE aid LIKE '%$pesquisa%'";
        
          $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
          $sql_query2 = $mysqli->query($sql_code2) or die("ERRO ao consultar! " . $mysqli->error); 
          $sql_query3 = $mysqli->query($sql_code3) or die("ERRO ao consultar! " . $mysqli->error); 
          $sql_query4 = $mysqli->query($sql_code4) or die("ERRO ao consultar! " . $mysqli->error); 
          $sql_query5 = $mysqli->query($sql_code5) or die("ERRO ao consultar! " . $mysqli->error); 
          $sql_query6 = $mysqli->query($sql_code6) or die("ERRO ao consultar! " . $mysqli->error); 
        
          while($dados = $sql_query->fetch_assoc()) {
            while ($dados2 = $sql_query2->fetch_assoc()) {
              while ($dados3 = $sql_query3->fetch_assoc()) {
                while ($dados4 = $sql_query4->fetch_assoc()) {
                  while ($dados5 = $sql_query5->fetch_assoc()) {
                    while ($dados6 = $sql_query6->fetch_assoc()) {
        
                    @$recursosLiquidados += $dados4['liquidados'];
                    @$recursosRecebidos += $dados4['recebidos'];
                    @$recursosDescentralizados += $dados4['descentralizados']; 
                    @$recursosDevolvidos += $dados4['devolvidos']; 
                    
        
                    @$efetivoEx += $dados2['participantesEb']; 
                    @$efetivoMb += $dados2['participantesMb']; 
                    @$efetivoFab += $dados2['participantesFab']; 
                    @$efetivoOutros += $dados2['participantesOs']; 
                    @$efetivoOutros += $dados2['participantesGov']; 
                    @$efetivoOutros += $dados2['participantesPv']; 
                    @$efetivoOutros += $dados2['participantesCv']; 

                    $efetivoTotal = $efetivoEx + $efetivoMb + $efetivoFab + $efetivoOutros;
                    $operacoes[] = $dados['operacao'];
                    $comandoArea[] = $dados['cma'];
                    $tipoOp[] = $dados3['tipoOp'];
                    $acao[] = $dados3['desTransporte']. " ". $dados3['desManutencao']. " ". $dados3['desSuprimento']. " ". $dados3['desAviacao'];
                    }
                  }
                }
              }
            }
          }
        }

        ?>

        <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body"> 
                <div class="page-body">
                        <div class="row"> 
                            <!--resumo pesquisa--> 
                            <div class="col-md-6 col-xl-4">
                                <div class="card widget-card-1">
                                    <div class="card-block-small">
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icofont icofont-pie-chart bg-c-blue card1-icon" width="16" height="16" fill="currentColor" class="bi bi-shield-shaded" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 14.933a1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
                                        </svg>

                                        <span class="text-c-blue f-w-600">Total de Operações</span>
                                            <h4>
                                                <?php 
                                                    echo count($ids);  
                                                ?>
                                            </h4>
                                        <div>
                                            <?php if($erro == "Admin"){ ?>
                                            <span class="f-left m-t-10 text-muted estilo">
                                                <i class="ti-layout-tab"></i>>
                                                <a href="index.php?p=opRegistradas">Operações Registradas</a>
                                            </span>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <!--resumo pesquisa--> 
                            <div class="col-md-6 col-xl-4">
                                <div class="card widget-card-1">
                                    <div class="card-block-small">
                
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icofont icofont-ui-home bg-c-pink card1-icon" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
                                        </svg>
                
                                        <span class="text-c-pink f-w-600">Efetivo Total</span>
                                            <h4>
                                                <?php 
                                                    echo $efetivoTotal;  
                                                ?> 
                                            </h4>
                                        <div>
                                            <span class="f-left">
                                                <i class="text-c-pink ti-user m-r-10"></i>Exécito: <?php echo $efetivoEx;?>
                                            </span>
                                            <br>
                                            <span class="f-left ">
                                                <i class="text-c-pink ti-user m-r-10"></i>Marinha: <?php echo $efetivoMb;?>
                                            </span>
                                            <br>
                                            <span class="f-left ">
                                                <i class="text-c-pink ti-user m-r-10"></i>Força Áerea: <?php echo $efetivoFab;?>
                                            </span>
                                            <br>
                                            <span class="f-left ">
                                                <i class="text-c-pink ti-user m-r-10"></i>Outras Forças: <?php echo $efetivoOutros  ;?>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--resumo pesquisa--> 
                            <div class="col-md-6 col-xl-4">
                                <div class="card widget-card-1">
                                    <div class="card-block-small">
            
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icofont icofont-ui-home bg-c-green card1-icon" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z"/>
                                        </svg>
                
                                            <h4 class="text-c-green f-w-600">
                                                Gestao Orçamentaria
                                            </h4>
                                        <div>
                                            
                                            <span class="f-right">
                                                <i class="text-c-green ti-money m-r-10"></i>Provisão Recebida: <strong> <?php echo number_format($recursosRecebidos, 0, ',', '.'); ?> </strong>
                                            </span>
                                            <br>
                                            <span class="f-right ">
                                                <i class="text-c-green ti-money m-r-10"></i>Recursos Devolvidos: <strong> <?php echo number_format($recursosDevolvidos, 0, ',', '.'); ?> </strong>
                                            </span>
                                            <br>
                                            <span class="f-right ">
                                                <i class="text-c-green ti-money m-r-10"></i>Despesas Liquidadas: <strong> <?php echo number_format($recursosLiquidados, 0, ',', '.'); ?> </strong>
                                            </span>
                                            <br>
                                            <span class="f-right ">
                                                <i class="text-c-green ti-money m-r-10"></i>Recursos Descentralizados: <strong> <?php echo number_format($recursosDescentralizados, 0, ',', '.'); ?> </strong>
                                            </span>
                                            <br>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

<div class="col-md- col-xl-12">
<div class="card widget-card-9 table-bordered">
  <input type="text" class="form-control" id="input-busca"  placeholder="Pesquisar Operação" >
  
  <table class="table table-hover table-bordered" >
      <thead>
          <tr>
          <th style="width: 100px" >Operação</th>
            <th style="width: 120px">Missão</th>
            <th style="width: 100px">Estado</th>
            <th style="width: 200px">Comando Militar de Área</th>
            <th style="width: 120px">Região Militar</th>
            <th style="width: 150px">Comando da Operação</th>
            <th style="width: 120px">Comando Apoiado</th>
            <th style="width: 100px">Inicio da Operação</th>
            <th style="width: 100px">Fim da Operação</th> 
            <th >Açoes</th>
          </tr>
      </thead>
      <tbody id="tabela-operacoes">
      <?php

    foreach ($ids as $id){
    $pesquisa = $mysqli->real_escape_string($id);
        $sql_code = "SELECT * 
          FROM operacao 
          WHERE opid LIKE '%$pesquisa%'";
        $sql_code2 = "SELECT * 
          FROM efetivo 
          WHERE eid LIKE '%$pesquisa%'";
        $sql_code3 = "SELECT * 
          FROM tipoOp 
          WHERE tid LIKE '%$pesquisa%'";
        $sql_code4 = "SELECT * 
          FROM recursos 
          WHERE rid LIKE '%$pesquisa%'";
        $sql_code5 = "SELECT * 
          FROM infos
          WHERE iid LIKE '%$pesquisa%'";
        $sql_code6 = "SELECT * 
          FROM anexos
          WHERE aid LIKE '%$pesquisa%'";
        $sql_code7 = "SELECT * 
          FROM usuario 
          WHERE email ='$email' and adm ='administrador'";

        $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
        $sql_query2 = $mysqli->query($sql_code2) or die("ERRO ao consultar! " . $mysqli->error); 
        $sql_query3 = $mysqli->query($sql_code3) or die("ERRO ao consultar! " . $mysqli->error); 
        $sql_query4 = $mysqli->query($sql_code4) or die("ERRO ao consultar! " . $mysqli->error); 
        $sql_query5 = $mysqli->query($sql_code5) or die("ERRO ao consultar! " . $mysqli->error); 
        $sql_query6 = $mysqli->query($sql_code6) or die("ERRO ao consultar! " . $mysqli->error); 
        while($dados = $sql_query->fetch_assoc()) {
          while ($dados2 = $sql_query2->fetch_assoc()) {
            while ($dados3 = $sql_query3->fetch_assoc()) {
              while ($dados4 = $sql_query4->fetch_assoc()) {
                while ($dados5 = $sql_query5->fetch_assoc()) {
                  while ($dados6 = $sql_query6->fetch_assoc()) {
                    $missao = $dados['missao'];
                        if(strlen($missao) > 10){
                            $missao = substr($missao, 0, 10)."...";
                        }
                        echo "<tr>";
                        echo "<td class='col-limitada'>".$dados['operacao']."</td>";
                        echo "<td class='col-limitada'>".$missao."</td>";
                        echo "<td class='col-limitada'>".$dados['estado']."</td>";
                        echo "<td class='col-limitada'>".$dados['cma']."</td>";
                        echo "<td class='col-limitada'>".$dados['rm']."</td>";
                        echo "<td class='col-limitada'>".$dados['comandoOp']."</td>";
                        echo "<td class='col-limitada'>".$dados['comandoApoio']."</td>";
                        echo "<td class='col-limitada'>".date_format(date_create_from_format('Y-m-d', $dados["inicioOp"]), 'd/m/Y')."</td>"; 
                        echo "<td class='col-limitada'>".date_format(date_create_from_format('Y-m-d', $dados["fimOp"]), 'd/m/Y')."</td>";
                    ?>    
                        <td class="btn-sm text-center">
                            <a href="#" onclick="Edicao(<?php echo $dados['opid']; ?>)" class='text-success mx-3 ' title="Editar">
                                <i class="bi bi-pencil-square fs-12"></i>
                            </a>
                            <a href="#" onclick="if(confirm('Tem certeza que deseja excluir?')) { Excluir(<?php echo $dados['opid']; ?>); } return false;" class='text-danger mx-3' title="Excluir">
                                <i class="bi bi-trash fs-12"></i>
                            </a>
                            <a href="#" onclick="Expandir(<?php echo $dados['opid']; ?>)" class='text-primary mx-3' title="Expandir">
                                <i class="bi bi-arrows-fullscreen fs-12"></i>
                            </a>
                        </td>
                    <?php
                    }
                    ?>
            <?php
              }
            }
          }
        }
      }
    }
          $mysqli->close();
          ?>
          
                                       
          </tbody>
                                                    </table>
                                                </div>
                                            </div>                                                         
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



          <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Gerar PDF</button>
          
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 inline-flex items-center focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-1 text-center me-1 mb-1 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800" type="button"> Selecione os campos <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center ps-3">
                    <input id="operacao" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="checkbox" name="teste[]" value="operacao">
                        <label for="operacao" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Operação</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center ps-3">
                    <input id="efetivo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="checkbox" name="teste[]" value="efetivo">
                        <label for="efetivo" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Efetivo</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center ps-3">
                    <input id="tipoop" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="checkbox" name="teste[]" value="tipoop">
                        <label for="tipoop" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tipos de Operações</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center ps-3">
                    <input id="recurso" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="checkbox" name="teste[]" value="recurso">
                        <label for="recurso" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Recursos</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center ps-3">
                    <input id="resumo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="checkbox" name="teste[]" value="resumo">
                        <label for="resumo" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Resumo</label>
                    </div>
                </li>
                </ul>
            </div>

          </form>
          <div class="col-md- col-xl-12">
          <div class="card widget-card-9 table-bordered">
          <?php
          }else {
          ?>
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
                                            
                                            <i class="ti-close bg-c-pink"></i>
                                            <div class="d-inline">
                                                <h4>Nenhuma Operação encontrada!</h4>
                                                <span>Não foi encontrada nenhuma pesquisa com os parametros pesquisados.</span>
                                                <a href="pesquisaOp.php">Clique aqui pra efetuar outra pesquisa. </a>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                            <!-- Page-header end -->
                        </div>
                    </div>
                </div>
            </div>
                        
          <?php 
          }
          ?>
</div>
</div>
          <script src="/src/pdf.js"></script>
        
        <!--FAZ BUSCA NAS PESQUISAS -->
          <script>
            const inputBusca = document.getElementById('input-busca');
            const tabelaOperacoes = document.getElementById('tabela-operacoes');

            inputBusca.addEventListener('keyup', () => {
                let valorBusca = inputBusca.value.toLowerCase();
                let linhas = tabelaOperacoes.getElementsByTagName('tr');

                for (let linha of linhas) {
                    let conteudoLinha = linha.innerText.toLowerCase();

                    if (conteudoLinha.includes(valorBusca)) {
                        linha.style.display = ''; // mostra
                    } else {
                        linha.style.display = 'none'; // esconde
                    }
                }
            });
         </script>


          
          <!-- script da pesquisa pelo id da query --> 

          <script>
        function abrirPesquisa(id) {
          window.open('/app/pesquisa/completo.php?id=' + id, '_blank');
        }
        function abrirEdicao(id) {
          window.open('/app/insercao/update.php?id=' + id, '_blank');
        }

      </script>
      </table>
</div>