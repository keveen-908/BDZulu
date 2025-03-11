<?php 
include("acoes/config.php");


//leitura das paginas do sistema
    $pagina = "inicial.php";
    if(isset($_GET['p'])){

        $pagina = $_GET['p'] . '.php';

    }
    include_once('acoes/config.php');
    // Pega o ID da URL
    $id = @$_GET['id'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Colog</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .Usuario{
            pointer-events: none;
            cursor: default;
            color: #ccc;
        } 
        #rodape {
        background-color: #f0f0f0;
        padding: 20px;
        text-align: center;
        position: fixed;
        bottom: 0;
        width: 100%;
        }
        #atual {
        color: #f7b600;
        }
    
        .conteudo {
        display: none;
        }
        
        .conteudo.ativo {
        display: block;
        }
        table {
        width: 200%; /* ou o tamanho que desejar */
        border-collapse: collapse; /* bordas coladas */
        }

        td {
        word-wrap: break-word; /* Quebra palavras longas */
        word-break: break-word; /* Garante quebra mesmo sem espaço */
        white-space: normal; /* Permite quebra de linha */
        max-width: 200px; /* Limite opcional de largura para forçar a quebra */
        padding: 8px; /* Espaçamento interno */
        border: 1px solid #ccc; /* Borda opcional */
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
                                        <a href="auth-normal-sign-in.html">
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
                                            <a href="todasOp.php">
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
                                    <a href="index.php?p=pesquisa">
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
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
 
  <!-- id da query sendo pesquisado -->
  <div class="">
    <div class="relative overflow-x-auto  shadow-md sm:rounded-lg">
      <form action="/src/pdf/pdfCompleto.php" class="conteudo ativo" id="conteudo-1"  method="post">
        <input class="border-2 rounded-lg border-slate-800" name="id" value="<?php if(isset($id)) echo $id; ?>" placeholder="Digite os termos de pesquisa" type="text">
        <button type="submit" class="text-blue-700 hover:text-white border border-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 ">Gerar PDF</button>
      </form>
      <!-- construcao da tabela para a exibicao -->
      <div class=" col-xl-12">
      <div class="card widget-card-9 table-bordered">

      <table  class= "table  table-bordered">
        <tr class="text-X uppercase bg-gray-400 border-b border-gray-600">
          <th scope="col" class="px-6 py-3">Operação</th>
          <th scope="col" class="px-6 py-3">Estado</th>
          <th scope="col" class="px-6 py-3">Missão</th>
          <th scope="col" class="px-6 py-3">Comando Militar de Área</th>
          <th scope="col" class="px-6 py-3">Região Militar</th>
          
        </tr>
        <?php
          if (!isset($_GET['id'])) {
        ?>
        <tr>
          <td colspan="3">Digite algo para pesquisar...</td>
        </tr>
        <?php
          } 
          else {
            $pesquisa = $mysqli->real_escape_string($_GET['id']);
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

            if ($sql_query->num_rows == 0) {
        ?>
        <tr>
          <td colspan="3">Nenhum resultado encontrado...</td>
        </tr>
        <?php
          } 
          else {
            while($dados = $sql_query->fetch_assoc()) {
              while ($dados2 = $sql_query2->fetch_assoc()) {
                while ($dados3 = $sql_query3->fetch_assoc()) {
                  while ($dados4 = $sql_query4->fetch_assoc()) {
                    while ($dados5 = $sql_query5->fetch_assoc()) {
                      while ($dados6 = $sql_query6->fetch_assoc()) {
        ?>
        <tr class="bg-gray-900 border-b table-hover border-gray-700 ">
          <th scope="row" class="px-6 py-4 font-medium text-yellow-300 whitespace-nowrap border border-slate-600"><?php echo $dados['operacao']; ?></th>
          <td class="px-6 py-4 border border-slate-600"><?php echo $dados['estado']; ?></td>
          <td class="px-6 py-4 border border-slate-600"><?php echo $dados['missao']; ?></td>
          <td class="px-6 py-4 border border-slate-600"><?php echo $dados['cma']; ?></td>
          <td class="px-6 py-4 border border-slate-600"><?php echo $dados['rm']; ?></td>
          
        </tr>
        <tr class="text-xs text-yellow-400 uppercase bg-gray-800 border-b border-gray-600 ">
          <th scope="col" class="px-6 py-3">Comando da Operação</th>
          <th scope="col" class="px-6 py-3">Comando Apoiado</th>
          <th scope="col" class="px-6 py-3">Inicio da Operação</th>
          <th scope="col" class="px-6 py-3">Fim da Operação</th>   

          <th scope="col" class="px-6 py-3">Efetivo</th>
          <th scope="col" class="px-6 py-3">EF. do Exército</th>
          <th scope="col" class="px-6 py-3">EF. da Marinha</th>
          <th scope="col" class="px-6 py-3">EF. da Força Aérea</th>
          <th scope="col" class="px-6 py-3">EF. de OSP</th>
          <th scope="col" class="px-6 py-3">EF. de outras Âgencias Governamentais</th>
          <th scope="col" class="px-6 py-3">EF. de outras Âgencias Privadas</th>
          <th scope="col" class="px-6 py-3">EF. de Organizações Não-Governamentais</th>
          <th scope="col" class="px-6 py-3">Efetivo Total</th>
        </tr>
        <tr class="bg-gray-900 border-b border-gray-700">
        <td class="px-6 py-4 border border-slate-600"><?php echo $dados             ['comandoOp']; ?></td>
          <td class="px-6 py-4 border border-slate-600"><?php echo $dados['comandoApoio']; ?></td>
          <td class="px-6 py-4 border border-slate-600"><?php echo $dados['inicioOp']; ?></td>
          <td class="px-6 py-4 border border-slate-600"><?php echo $dados['fimOp']; ?></td>  
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantes']; ?></td>
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantesEb']; ?></td>
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantesMb']; ?></td>
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantesFab']; ?></td>
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantesOs']; ?></td>
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantesGov']; ?></td>
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantesPv']; ?></td>
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantesCv']; ?></td>
          <td class="px-6 py-4 border border-slate-600 "><?php echo $dados2['participantesCv'] + $dados2['participantesPv']+ $dados2['participantesEb'] + $dados2['participantesMb'] + $dados2['participantesFab'] + $dados2['participantesOs'] + $dados2['participantesGov']; ?></td>
        </tr>
        <tr class="text-xs text-yellow-400 uppercase bg-gray-800 border-gray-600">
          <th class="px-6 py-4 ">Operação</th>
          <th class="px-6 py-4 " colspan="2">Tipo de ação ou apoio</th>
        </tr>
        <tr class="bg-gray-900 border-b border-gray-700">
            <td class="px-6 py-4 border border-slate-600"><?php echo $dados3['tipoOp']; ?></td>
            <td class="px-6 py-4 border border-slate-600" colspan="2"><?php echo $dados3['acaoOuApoio']; ?></td>
        </tr>
        <tr class="text-xs text-yellow-400 uppercase bg-gray-800 border-gray-600 ">
          <th class="px-6 py-4 ">Transporte</th>
          <th class="px-6 py-4 ">Manutenção</th>
          <th class="px-6 py-4 ">Suprimento</th>
          <th class="px-6 py-4 ">Aviação</th>
        </tr>
        <tr class="bg-gray-900  border-gray-700">
            <td class="px-6 py-4 border border-slate-600 "><?php echo $dados3['transporte']; ?></td>
            <td class="px-6 py-4 border border-slate-600 "><?php echo $dados3['manutencao']; ?></td>
            <td class="px-6 py-4 border border-slate-600 "><?php echo $dados3['suprimento']; ?></td>
            <td class="px-6 py-4 border border-slate-600 "><?php echo $dados3['aviacao']; ?>   </td>
        </tr>
        <tr class="text-xs text-yellow-400 uppercase bg-gray-800 border-gray-600 ">
          <th class="px-6 py-4 ">Descrição das atividades de Transporte</th>
          <th class="px-6 py-4 ">Descrição das atividades de Manutenção</th>
          <th class="px-6 py-4 ">Descrição das atividades de Suprimento</th>
          <th class="px-6 py-4 ">Descrição das atividades de Aviação</th>
        </tr>
        <tr class="bg-gray-900 border-gray-700 text-xs text-yellow-400 uppercase bg-gray-800 border-gray-600 ">
            <td class="px-6 py-4 border border-slate-600"><?php echo $dados3['desTransporte']; ?></td>
            <td class="px-6 py-4 border border-slate-600"><?php echo $dados3['desManutencao']; ?></td>
            <td class="px-6 py-4 border border-slate-600"><?php echo $dados3['desSuprimento']; ?></td>
            <td class="px-6 py-4 border border-slate-600"><?php echo $dados3['desAviacao']; ?></td>
        </tr>
        <tr class="text-xs text-yellow-400 uppercase bg-gray-800 border-gray-600 ">
          <th class="px-6 py-4 ">Recebidos:</th>
          <th class="px-6 py-4 ">Descentralizados:</th>
          <th class="px-6 py-4 ">Liquidados:</th>
          <th class="px-6 py-4 ">Devolvidos:</th>
        </tr>
        <tr class="bg-gray-900  border-gray-700 text-xs text-yellow-400 uppercase bg-gray-800 border-gray-600 " >
            <td class="px-6 py-4 border border-slate-600 "><?php echo "R$:". $dados4['recebidos']; ?></td>
            <td class="px-6 py-4 border border-slate-600 "><?php echo "R$:". $dados4['descentralizados']; ?></td>
            <td class="px-6 py-4 border border-slate-600 "><?php echo "R$:". $dados4['liquidados']; ?></td>
            <td class="px-6 py-4 border border-slate-600 "><?php echo "R$:". $dados4['devolvidos']; ?></td>
        </tr>
        <tr class="text-xs text-yellow-400 uppercase bg-gray-800 border-gray-600 ">
          <th class="px-6 py-4">Relatório Final</th>
          <th class="px-6 py-4">Relatório do Comando Logístico</th>
          <th class="px-6 py-4">Fotos</th>
          <th class="px-6 py-4">Outros documentos</th>
        </tr>
        <tr>
          <td style="color:gray-700;" class="px-6 py-4 border border-slate-600 "><a href="../../uploads/<?php echo $dados6['relatorioFinal'] ?>" target="_blank"><?php echo $dados6['relatorioFinal'] ?></a></td>
          <td style="color:gray-700;" class="px-6 py-4 border border-slate-600 "><a href="../../uploads/<?php echo $dados6['relatorioComando'] ?>" target="_blank"><?php echo $dados6['relatorioComando'] ?></a></td>
          <td style="color:gray-700;" class="px-6 py-4 border border-slate-600 "><a href="../../uploads/<?php echo $dados6['fotos'] ?>" target="_blank"><?php echo $dados6['fotos'] ?></a></td>
          <td style="color:gray-700;" class="px-6 py-4 border border-slate-600 "><a href="../../uploads/<?php echo $dados6['outrosDocumentos'] ?>" target="_blank"><?php echo $dados6['outrosDocumentos'] ?></a></td>
        </tr>
        <tr >
          <th class="text-xs text-white-400 uppercase bg-gray-800 border-gray-600 dark:text-white-400" colspan="9">Outras informações</th>
        </tr>
        <tr>
          <td class="px-6 py-4 border border-slate-600 "  colspan="9" rowspan="1" ><?php echo $dados5['outrasInfos'];?></td>
        </tr>
        <?php
                  }
                }
              }
            }
          }
        }
      }
    }
        ?>
      </table>
    </div>
  </div>
  </div>
  </div>

  <!-- script da navbar --> 
  <script src="/src/navbar.js"></script>

</body>
</html>  
                                

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!--[endif]-->
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
